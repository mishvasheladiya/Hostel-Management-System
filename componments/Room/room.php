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
    <title>Roselle Hostel - Room</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/main.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/room-style.css">
    
</head>
<body>
    <?php 
    include('../../templates/Header/header.php'); 
    ?>
    
    <main class="room-page">
        <section class="room-title-section" data-aos="fade-down">
            <h1>Hostel Rooms</h1>
        </section>
        
        <section class="room-grid" data-aos="fade-up" data-aos-delay="100">
            <div class="grid-container">

                <!-- 4 Bed AC -->
                <div class="room-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="room-image">
                        <img src="<?php echo $base_url; ?>assets/img/room/4_bed-AC.png" alt="4 Bed AC Room">
                    </div>
                    <div class="room-content">
                        <h3>4 Bed AC Room</h3>
                        <p class="price">&#8377;95,000 per semester</p>
                        <hr>
                        <div class="features">
                            <i class="fas fa-wifi" title="WiFi"></i>
                            <i class="fas fa-bolt" title="Power Backup"></i>
                            <i class="fas fa-toilet" title="Attached Washroom"></i>
                            <i class="fas fa-chair" title="Study Table"></i>
                            <i class="fas fa-archive" title="Cupboard"></i>
                        </div>
                        <a href="<?php echo $base_url; ?>componments/Register/register.php" class="btn-book">Book Now</a>
                    </div>
                </div>
              
                <!-- 6 Bed AC -->
                <div class="room-card" data-aos="fade-up" data-aos-delay="250">
                    <div class="room-image">
                        <img src="<?php echo $base_url; ?>assets/img/room/6_bed-AC.png" alt="6 Bed AC Room">
                    </div>
                    <div class="room-content">
                        <h3>6 Bed AC Room</h3>
                        <p class="price">&#8377;90,000 per semester</p>
                        <hr>
                        <div class="features">
                            <i class="fas fa-wifi" title="WiFi"></i>
                            <i class="fas fa-bolt" title="Power Backup"></i>
                            <i class="fas fa-toilet" title="Common Washroom"></i>
                            <i class="fas fa-chair" title="Study Table"></i>
                            <i class="fas fa-archive" title="Cupboard"></i>
                        </div>
                        <a href="<?php echo $base_url; ?>componments/Register/register.php" class="btn-book">Book Now</a>
                    </div>
                </div>
              
                <!-- 8 Bed AC -->
                <div class="room-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="room-image">
                        <img src="<?php echo $base_url; ?>assets/img/room/8_bed-AC.png" alt="8 Bed AC Room">
                    </div>
                    <div class="room-content">
                        <h3>8 Bed AC Room</h3>
                        <p class="price">&#8377;80,000 per semester</p>
                        <hr>
                        <div class="features">
                            <i class="fas fa-wifi" title="WiFi"></i>
                            <i class="fas fa-bolt" title="Power Backup"></i>
                            <i class="fas fa-toilet" title="Common Washroom"></i>
                            <i class="fas fa-chair" title="Study Table"></i>
                            <i class="fas fa-archive" title="Cupboard"></i>
                        </div>
                        <a href="<?php echo $base_url; ?>componments/Register/register.php" class="btn-book">Book Now</a>
                    </div>
                </div>
              
                <!-- 4 Bed Non-AC -->
                <div class="room-card" data-aos="fade-up" data-aos-delay="350">
                    <div class="room-image">
                        <img src="<?php echo $base_url; ?>assets/img/room/4_bed-Non_AC.png" alt="4 Bed Non-AC Room">
                    </div>
                    <div class="room-content">
                        <h3>4 Bed Non-AC Room</h3>
                        <p class="price">&#8377;75,500 per semester</p>
                        <hr>
                        <div class="features">
                            <i class="fas fa-wifi" title="WiFi"></i>
                            <i class="fas fa-bolt" title="Power Backup"></i>
                            <i class="fas fa-toilet" title="Common Washroom"></i>
                            <i class="fas fa-chair" title="Study Table"></i>
                            <i class="fas fa-archive" title="Cupboard"></i>
                        </div>
                        <a href="<?php echo $base_url; ?>componments/Register/register.php" class="btn-book">Book Now</a>
                    </div>
                </div>
              
                <!-- 6 Bed Non-AC -->
                <div class="room-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="room-image">
                        <img src="<?php echo $base_url; ?>assets/img/room/6_bed-Non_AC.png" alt="6 Bed Non-AC Room">
                    </div>
                    <div class="room-content">
                        <h3>6 Bed Non-AC Room</h3>
                        <p class="price">&#8377;70,000 per semester</p>
                        <hr>
                        <div class="features">
                            <i class="fas fa-wifi" title="WiFi"></i>
                            <i class="fas fa-toilet" title="Common Washroom"></i>
                            <i class="fas fa-chair" title="Study Table"></i>
                            <i class="fas fa-archive" title="Cupboard"></i>
                        </div>
                        <a href="<?php echo $base_url; ?>componments/Register/register.php" class="btn-book">Book Now</a>
                    </div>
                </div>
              
                <!-- 8 Bed Non-AC -->
                <div class="room-card" data-aos="fade-up" data-aos-delay="450">
                    <div class="room-image">
                        <img src="<?php echo $base_url; ?>assets/img/room/8_bed-Non_AC.png" alt="8 Bed Non-AC Room">
                    </div>
                    <div class="room-content">
                        <h3>8 Bed Non-AC Room</h3>
                        <p class="price">&#8377;65,500 per semester</p>
                        <hr>
                        <div class="features">
                            <i class="fas fa-wifi" title="WiFi"></i>
                            <i class="fas fa-bolt" title="Power Backup"></i>
                            <i class="fas fa-toilet" title="Common Washroom"></i>
                            <i class="fas fa-chair" title="Study Table"></i>
                            <i class="fas fa-archive" title="Cupboard"></i>
                        </div>
                        <a href="<?php echo $base_url; ?>componments/Register/register.php" class="btn-book">Book Now</a>
                    </div>
                </div>
            
            </div>
        </section>
    </main>

    <?php include('../../templates/Footer/footer.php'); ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
    </script>
</body>
</html>