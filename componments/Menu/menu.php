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
        <title>Roselle Hostel - Menu</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/main.css">
        <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/menu-style.css">

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
    <section class="hero">
        <h1>Hostel Mess</h1>
    </section>

    <section class="mess-highlights">
        <div class="highlight-card">
        <img src="<?php echo $base_url; ?>assets/img/menu/mess_thali.png" alt="Mess Thali">
        <h3>Nutritious Meals</h3>
        <p>Balanced diet with healthy and hygienic food options every day.</p>
        </div>
        <div class="highlight-card">
        <img src="<?php echo $base_url; ?>assets/img/menu/clean_kitchen.png" alt="Clean Kitchen">
        <h3>Hygienic Kitchen</h3>
        <p>Strict cleanliness and safety standards in food preparation.</p>
        </div>
        <div class="highlight-card">
        <img src="<?php echo $base_url; ?>assets/img/menu/dining_area.png" alt="Dining Area">
        <h3>Spacious Dining Area</h3>
        <p>Comfortable space with proper seating and ventilation.</p>
        </div>
    </section>

    <section class="mess-timings">
        <h2>Mess Timings</h2>
        <ul>
        <li>🍽 Breakfast: 7:30 AM – 9:00 AM</li>
        <li>🍽 Lunch: 12:30 PM – 2:00 PM</li>
        <li>🍽 Dinner: 7:30 PM – 9:00 PM</li>
        </ul>
    </section>

    <section class="contact-prompt">
        <p>Have questions about our food service? We’re here to help!</p>
        <a href="<?php echo $base_url; ?>componments/Contact/contact.php" class="contact-btn">Contact Us</a>
    </section>


    <!-- JavaScript (same as original) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

  <?php include('C:\Xampp\htdocs\Hostel\templates\Footer\footer.php'); ?>
</body>

</html>