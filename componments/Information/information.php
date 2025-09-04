<?php
if (!isset($base_url)) {
    $base_url = '/Hostel/';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact ROSELLE Hostel - a vibrant and modern student home with heritage, community, and sustainability.">
    <title>Roselle Hostel - Information</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/main.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/informtion-style.css">

    <style>
        html, body {
            min-height: 100vh;
            height: auto;
            overflow-y: auto !important;
        }
    </style>
</head>

<body>
    <?php
    include('../../templates/Header/header.php');
    ?>

    <section class="menu-header">
        <h1>Facilities & Rules</h1>
    </section>

    <div class="tabs-container">
        <ul class="tab-buttons">
            <?php
            $tabs = ["Facilities", "Rules"];
            foreach ($tabs as $index => $tab) {
                $active = $index === 0 ? "active" : "";
                echo "<li class='tab-btn $active' onclick='showTab($index)'>$tab</li>";
            }
            ?>
        </ul>

        <div class="tab-content">
            <!-- Facilities Panel -->
            <div class="tab-panel show">
                <div class="grid-container">
                    <?php
                    $facilities = [
                        ["image" => "wifi.png", "text" => "High-Speed Wi-Fi", "desc" => "Unlimited access in all rooms and common areas."],
                        ["image" => "laundry.png", "text" => "Laundry Services", "desc" => "Weekly laundry pickup and delivery."],
                        ["image" => "mess.png", "text" => "Nutritious Meals", "desc" => "4 times daily freshly cooked vegetarian meals."],
                        ["image" => "study.png", "text" => "Study Hall", "desc" => "Quiet area with comfortable seating & lighting."],
                        ["image" => "room.png", "text" => "Spacious Rooms", "desc" => "Fully furnished rooms with attached bathrooms."],
                        ["image" => "cleaning.png", "text" => "Housekeeping", "desc" => "Rooms cleaned twice a week, dusting and mopping included."],
                    ];

                    foreach ($facilities as $item) {
                        echo "
  <div class='facility-box'>
    <img src='{$base_url}assets/img/infomation/{$item['image']}' alt='{$item['text']}' />
    <h3>{$item['text']}</h3>
    <p class='desc'>{$item['desc']}</p>
  </div>
";
                    }
                    ?>
                </div>
            </div>

            <!-- Rules Panel -->
            <div class="tab-panel">
                <div class="rules-grid">
                    <?php
                    $rules = [
                        ["icon" => "fa-hand-sparkles", "title" => "Keep Clean", "desc" => "Maintain hygiene in your room and common areas.", "type" => "do"],
                        ["icon" => "fa-clock", "title" => "Be Punctual", "desc" => "Adhere to curfew and meal timings.", "type" => "do"],
                        ["icon" => "fa-user-friends", "title" => "Respect Others", "desc" => "Behave respectfully with staff and peers.", "type" => "do"],
                        ["icon" => "fa-user-shield", "title" => "No Ragging", "desc" => "Ragging is strictly prohibited and punishable.", "type" => "dont"],
                        ["icon" => "fa-volume-mute", "title" => "Avoid Noise", "desc" => "Silence must be maintained during study hours.", "type" => "dont"],
                        ["icon" => "fa-door-closed", "title" => "No Late Entry", "desc" => "Entry not allowed after 10:30 PM without permission.", "type" => "dont"],
                    ];

                    foreach ($rules as $rule) {
                        $colorClass = $rule["type"] === "do" ? "rule-card do" : "rule-card dont";
                        echo "
              <div class='$colorClass'>
                <div class='icon'><i class='fas {$rule['icon']}'></i></div>
                <h3>{$rule['title']}</h3>
                <p>{$rule['desc']}</p>
              </div>
            ";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php include('../../templates/Footer/footer.php'); ?>

    <!-- JavaScript (same as original) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="<?php echo $base_url; ?>assets/js/information-script.js"></script>
</body>

</html>