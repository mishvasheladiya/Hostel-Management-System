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
  <title>Hostel Website Footer</title>

  <!-- FontAwesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/footer-style.css">
</head>
<body>
  <footer class="footer">
    <div class="footer-container">
      <!-- Hostel Info -->
      <div class="footer-section">
        <h2>ROSELLE Hostel</h2>
        <p>
          A comfortable and safe place for students. We provide modern facilities,
          affordable rooms, and a friendly environment to make you feel at home.
        </p>
      </div>

      <!-- Quick Links -->
      <div class="footer-section links">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="<?php echo $base_url; ?>index.php">Home</a></li>
          <li><a href="<?php echo $base_url; ?>componments/Room/room.php">Rooms</a></li>
          <li><a href="<?php echo $base_url; ?>componments/About/about.php">About</a></li>
          <li><a href="<?php echo $base_url; ?>componments/Contact/contact.php">Contact</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="footer-section contact">
        <h3>Contact Us</h3>
        <p><i class="fas fa-map-marker-alt"></i> Rajkot, Gujarat</p>
        <p><i class="fas fa-phone-alt"></i> +91 98765 43210</p>
        <p><i class="fas fa-envelope"></i> info@rosellehostel.com</p>
      </div>

      <!-- Social Media + Subscribe -->
      <div class="footer-section social">
        <h3>Follow Us</h3>
        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
        <a href="https://twitter.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>

        <!-- Subscribe -->
        <div class="footer-section subscribe" style="margin-top:20px;">
          <h3>Subscribe</h3>
          <p>Get the latest updates and offers directly in your inbox.</p>
          <form class="subscribe-box" action="#" method="post">
            <input type="email" name="email" placeholder="Enter your email" required>
            <button type="submit">Subscribe</button>
          </form>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <p>&copy; 2025 ROSELLE Hostel | All Rights Reserved.</p>
    </div>
  </footer>
</body>
</html>
