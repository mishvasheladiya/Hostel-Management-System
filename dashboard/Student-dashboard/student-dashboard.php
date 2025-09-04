<?php
require __DIR__ . "/../../componments/Login/vendor/autoload.php";

$client = new Google\Client();

$client->setClientId("#");
$client->setClientSecret("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");
$client->setRedirectUri("http://localhost/Hostel/dashboard/Student-dashboard/student-dashboard.php");

$client->addScope("email");
$client->addScope("profile");

// 🔑 Important: enable offline access for refresh tokens
$client->setAccessType("offline");
$client->setPrompt("consent");

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 1️⃣ Handle OAuth callback (first login)
if (isset($_GET["code"])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET["code"]);

    if (isset($token['error'])) {
        die("Google login failed: " . htmlspecialchars($token['error']));
    }

    // ✅ Store access + refresh tokens
    $client->setAccessToken($token);
    $_SESSION['access_token'] = $token;

    if (isset($token['refresh_token'])) {
        $_SESSION['refresh_token'] = $token['refresh_token'];
    }

    $oauth = new Google\Service\Oauth2($client);
    $userinfo = $oauth->userinfo->get();

    // ✅ Store in session
    $_SESSION['email'] = $userinfo->email;
    $_SESSION['name']  = $userinfo->name;

    // Optional: Insert into DB if not exists
    $conn = mysqli_connect("localhost", "root", "", "hostel");
    $email = $userinfo->email;
    $name  = $userinfo->name;

    $checkSql = "SELECT * FROM student WHERE email='$email' LIMIT 1";
    $checkResult = mysqli_query($conn, $checkSql);

    if (mysqli_num_rows($checkResult) === 0) {
        // if not exists, insert minimal record
        $insertSql = "INSERT INTO student (firstName, email) VALUES ('$name', '$email')";
        mysqli_query($conn, $insertSql);
    }
}

// 2️⃣ Restore session token
if (isset($_SESSION['access_token'])) {
    $client->setAccessToken($_SESSION['access_token']);

    // Refresh token if expired
    if ($client->isAccessTokenExpired() && isset($_SESSION['refresh_token'])) {
        $newToken = $client->fetchAccessTokenWithRefreshToken($_SESSION['refresh_token']);
        if (!isset($newToken['error'])) {
            $_SESSION['access_token'] = $newToken;
            $client->setAccessToken($newToken);
        } else {
            // If refresh fails → force re-login
            unset($_SESSION['access_token']);
            unset($_SESSION['refresh_token']);
            header("Location: /Hostel/componments/Login/login.php");
            exit();
        }
    }
}

if (!isset($_SESSION['email'])) {
    die("You are not logged in. <a href='/Hostel/componments/Login/login.php'>Login</a>");
}

$conn = mysqli_connect("localhost", "root", "", "hostel");
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

$email = $_SESSION['email'];

$studentSql = "SELECT * FROM student WHERE email = ?";
$stmt = $conn->prepare($studentSql);
$stmt->bind_param("s", $email);
$stmt->execute();
$studentResult = $stmt->get_result();

if (!$studentResult || $studentResult->num_rows == 0) {
    die("Student not found.");
}
$student = $studentResult->fetch_assoc();

// 3️⃣ Get fee status (use student email instead of firstName)
$feeSql = "SELECT * FROM fees_payments WHERE email = ? AND is_active = 1 ORDER BY date DESC LIMIT 1";
$stmt = $conn->prepare($feeSql);
$stmt->bind_param("s", $student['email']); 
$stmt->execute();
$feeResult = $stmt->get_result();

$feeStatus = "Unpaid";
if ($feeResult && $feeResult->num_rows > 0) {
    $fee = $feeResult->fetch_assoc();
    $feeStatus = "Paid (₹" . htmlspecialchars($fee['amount']) . " )";
}

// 4️⃣ Get complaints count for this student
$complaintsSql = "SELECT COUNT(*) AS totalComplaints 
                  FROM complaints 
                  WHERE email = ? AND status = 'Pending'";
$stmt = $conn->prepare($complaintsSql);
$stmt->bind_param("s", $student['email']);
$stmt->execute();
$complaintsResult = $stmt->get_result();
$complaintsData = $complaintsResult->fetch_assoc();

$complaintsCount = $complaintsData['totalComplaints'] ?? 0;

$base_url = '/Hostel/';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Dashboard - ROSELLE Hostel</title>

  <!-- Styles -->
  <link rel="stylesheet" href="<?= $base_url; ?>assets/css/dashboard.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>

<body>

  <!-- Top Bar + Navbar -->
  <?php include('student-header.php'); ?><br>

  <!-- Sidebar + Main Content Container -->
  <div class="dashboard-container">
    
    <!-- Sidebar -->
    <?php include('student-sidebar.php'); ?>

    <!-- Main Content -->
    <main class="main-content">

      <section class="status-section">
        <div class="status-box">
          <h3>Room Type</h3>
          <p><?= htmlspecialchars($student['roomType'] ?? 'N/A'); ?></p>
        </div>
        <div class="status-box">
          <h3>Fees Status</h3>
          <p><?= $feeStatus; ?></p>
        </div>
        <div class="status-box">
          <h3>Complaints</h3>
          <p>Active</p>
        </div>
      </section>

<section class="info-section">
        <h2>Personal Information
          <a href="<?= $base_url; ?>dashboard/Student-dashboard/my-profile.php" class="edit-profile-btn">
            <i class="fas fa-edit"></i> Edit
          </a>
        </h2>
        <div class="info-grid">
          <div>
            <strong>Full Name</strong>
            <?= $student['firstName'] . ' ' . $student['lastName']; ?>
          </div>
          <div>
            <strong>Username</strong>
            <?= $student['firstName'] . ' ' . $student['lastName']; ?>
          </div>
          <div>
            <strong>Email</strong>
            <?= $student['email']; ?>
          </div>
          <div>
            <strong>Phone</strong>
            <?= $student['phone']; ?>
          </div>
          <div>
            <strong>Date of Birth</strong>
            <?= $student['dob']; ?>
          </div>
          <div>
            <strong>Address</strong>
            <?= $student['city'] . ', ' . $student['state']; ?>
          </div>
        </div>
      </section>

      <section class="info-section">
        <h2>University Information
          <a href="<?= $base_url; ?>dashboard/Student-dashboard/my-profile.php" class="edit-profile-btn">
            <i class="fas fa-edit"></i> Edit
          </a>
        </h2>
        <div class="info-grid">
          <div>
            <strong>University Name</strong>
            <?= $student['university']; ?>
          </div>
          <div>
            <strong>Course</strong>
            <?= $student['course']; ?>
          </div>
        </div>
      </section>
    </main>
  </div>

  <!-- Chatbot (relative path instead of hardcoded) -->
  <?php include($_SERVER['DOCUMENT_ROOT'].'/Hostel/student_chatbot/chat.html'); ?>

</body>
</html>
