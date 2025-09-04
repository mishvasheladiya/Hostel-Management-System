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
  <title>Roselle Hostel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <!-- CSS Files -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/main.css">
  <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/room-style.css">
  <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/about-style.css">
  <style>
    .contact-cta {
      background: rgba(255, 255, 255, 0.18);
      /* box-shadow: 0 12px 40px 0 rgba(34, 54, 120, 0.13), 0 1.5px 8px 0 rgba(34,54,120,0.08); */
      backdrop-filter: blur(18px) saturate(180%);
      -webkit-backdrop-filter: blur(18px) saturate(180%);
      border-radius: 36px;
      border: 1.5px solid rgba(255,255,255,0.22);
      padding: 56px 0 36px 0;
      text-align: center;
      margin: 6px auto 40px auto;
      max-width: 650px;
      position: relative;
      overflow: visible;
      transition: box-shadow 0.3s cubic-bezier(.77,0,.18,1), transform 0.3s cubic-bezier(.77,0,.18,1);
      will-change: box-shadow, transform;
      animation: cta-float-in 1.2s cubic-bezier(.77,0,.18,1) both;
    }

    .contact-cta:hover {
      box-shadow: 0 24px 64px 0 rgba(34, 54, 120, 0.18), 0 2.5px 16px 0 rgba(34,54,120,0.10);
      transform: translateY(-6px) scale(1.012);
    }

    .contact-cta::before {
      content: '';
      position: absolute;
      top: -80px;
      left: -80px;
      width: 220px;
      height: 220px;
      background: radial-gradient(circle, #b6c7f7 0%, #e0e7ef 100%);
      opacity: 0.22;
      z-index: 0;
      filter: blur(18px);
      pointer-events: none;
      transition: opacity 0.3s;
    }
    .contact-cta::after {
      content: '';
      position: absolute;
      bottom: -60px;
      right: -60px;
      width: 160px;
      height: 160px;
      background: radial-gradient(circle, #f7d9b6 0%, #f8fafc 100%);
      opacity: 0.13;
      z-index: 0;
      filter: blur(14px);
      pointer-events: none;
      transition: opacity 0.3s;
    }

    .contact-cta .container {
      position: relative;
      z-index: 2;
    }

    .contact-cta h3 {
      margin-bottom: 18px;
      color: #223678;
      font-size: 2.0rem;
      font-weight: 700;
      letter-spacing: 1px;
      text-shadow: 0 2px 16px rgba(255,255,255,0.10);
      animation: cta-title-float 1.1s cubic-bezier(.77,0,.18,1) both;
    }

    .contact-cta p {
      max-width: 600px;
      margin: 0 auto 28px;
      color: #3a4668;
      font-size: 1.15rem;
      font-weight: 400;
      text-shadow: 0 1px 8px rgba(255,255,255,0.08);
      animation: cta-text-fade 1.3s cubic-bezier(.77,0,.18,1) both;
    }

    .contact-btn {
      display: inline-block;
      background: linear-gradient(90deg, #223678 0%, #b6c7f7 100%);
      color: #fff;
      padding: 13px 38px;
      border-radius: 28px;
      font-size: 1.13rem;
      font-weight: 600;
      text-decoration: none;
      box-shadow: 0 4px 24px 0 rgba(34,54,120,0.10);
      border: none;
      transition: all 0.22s cubic-bezier(.77,0,.18,1);
      position: relative;
      z-index: 2;
      letter-spacing: 0.5px;
      animation: cta-btn-float 1.5s cubic-bezier(.77,0,.18,1) both;
    }

    .contact-btn:hover {
      background: linear-gradient(90deg, #b6c7f7 0%, #223678 100%);
      color: #223678;
      transform: translateY(-3px) scale(1.04);
      box-shadow: 0 8px 32px 0 rgba(34,54,120,0.16);
      text-shadow: 0 2px 8px rgba(34,54,120,0.10);
      border: 1.5px solid #b6c7f7;
    }

    /* Animations */
    @keyframes cta-float-in {
      0% { opacity: 0; transform: translateY(60px) scale(0.98); }
      100% { opacity: 1; transform: translateY(0) scale(1); }
    }
    @keyframes cta-title-float {
      0% { opacity: 0; transform: scale(0.8) translateY(30px); }
      100% { opacity: 1; transform: scale(1) translateY(0); }
    }
    @keyframes cta-text-fade {
      0% { opacity: 0; transform: translateY(20px); }
      100% { opacity: 1; transform: translateY(0); }
    }
    @keyframes cta-btn-float {
      0% { opacity: 0; transform: scale(0.7) translateY(20px); }
      100% { opacity: 1; transform: scale(1) translateY(0); }
    }

    /* Responsive Adjustments */
    @media (max-width: 900px) {
      .contact-cta {
        max-width: 97vw;
        padding: 38px 8px 24px 8px;
      }
      .contact-cta h3 {
        font-size: 1.5rem;
      }
      .contact-cta p {
        font-size: 1rem;
      }
    }
    @media (max-width: 600px) {
      .contact-cta {
        border-radius: 18px;
        padding: 22px 2vw 12px 2vw;
      }
      .contact-cta h3 {
        font-size: 1.1rem;
      }
      .contact-btn {
        padding: 10px 18px;
        font-size: 1rem;
      }
    }
  </style>
    <style>
        :root {
            --primary-color: #1A2C52;
            --primary-light: rgba(8, 42, 123, 0.2);
            --primary-medium: rgba(8, 42, 123, 0.6);
            --text-dark: #333;
            --text-light: #848696;
            --white: #fff;
            --background: #f5f5f5;
            --card-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            --transition-slow: 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            --transition-medium: 0.5s ease-out;
            --transition-fast: 0.3s ease;
            --border-radius: 10px;
            --card-width-desktop: 280px;
            --card-height-desktop: 380px;
            --card-width-tablet: 200px;
            --card-height-tablet: 280px;
            --card-width-mobile: 180px;
            --card-height-mobile: 240px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }

        body {
            /min-height: 100vh;/
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: var(--background);
            /* overflow-x: hidden; */
            /padding: 20px;/
            position: relative;
        }

        body::before {
            content: '';
            /* position: absolute; */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(8, 42, 123, 0.05) 0%, rgba(8, 42, 123, 0) 100%);
            z-index: -1;
        }

        .about {
            font-size: clamp(2rem, 10vw, 7.5rem);
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: -0.02em;
            position: relative;
            text-align: center;
            margin-top: 0px;
            margin-bottom: 40px;
            pointer-events: none;
            white-space: nowrap;
            font-family: "Arial Black", "Arial Bold", Arial, sans-serif;
            background: linear-gradient(to bottom,
                    var(--primary-medium) 30%,
                    rgba(255, 255, 255, 0) 76%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .carousel-container {
            width: 100%;
            max-width: 1200px;
            height: clamp(300px, 50vh, 450px);
            position: relative;
            perspective: 1000px;
            margin: 0 auto;
        }

        .carousel-track {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            transform-style: preserve-3d;
            transition: transform var(--transition-slow);
        }

        .cards {
            position: absolute;
            width: var(--card-width-desktop);
            height: var(--card-height-desktop);
            background: var(--white);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: all var(--transition-slow);
            cursor: pointer;
            transform-origin: center center;
        }

        .cards img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all var(--transition-slow);
        }

        .cards-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 20px;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0) 100%);
            color: var(--white);
            opacity: 0;
            transition: opacity var(--transition-medium);
            pointer-events: none;
        }

        .cards.center .cards-overlay {
            opacity: 1;
        }

        .cards-overlay h3 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .cards-overlay p {
            font-size: 0.9rem;
            opacity: 0.8;
        }

        .cards.center {
            z-index: 10;
            transform: scale(1.1) translateZ(0);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
        }

        .cards.center img {
            filter: none;
        }

        .cards.left-2 {
            z-index: 1;
            transform: translateX(-400px) scale(0.8) translateZ(-300px);
            opacity: 0.7;
        }

        .cards.left-2 img {
            filter: grayscale(100%);
        }

        .cards.left-1 {
            z-index: 5;
            transform: translateX(-200px) scale(0.9) translateZ(-100px);
            opacity: 0.9;
        }

        .cards.left-1 img {
            filter: grayscale(100%);
        }

        .cards.right-1 {
            z-index: 5;
            transform: translateX(200px) scale(0.9) translateZ(-100px);
            opacity: 0.9;
        }

        .cards.right-1 img {
            filter: grayscale(100%);
        }

        .cards.right-2 {
            z-index: 1;
            transform: translateX(400px) scale(0.8) translateZ(-300px);
            opacity: 0.7;
        }

        .cards.right-2 img {
            filter: grayscale(100%);
        }

        .cards.hidden {
            opacity: 0;
            pointer-events: none;
        }

        .member-info {
            text-align: center;
            margin-top: 40px;
            margin-left: 320px;
            transition: all var(--transition-medium);
            max-width: 600px;
            padding: 0 20px;
        }

        .member-name {
            color: var(--primary-medium);
            font-size: clamp(1.8rem, 5vw, 2.5rem);
            font-weight: 700;
            margin-bottom: 10px;
            position: relative;
            display: inline-block;
        }

        .member-name::before,
        .member-name::after {
            content: "";
            position: absolute;
            top: 60%;
            width: clamp(50px, 10vw, 100px);
            height: 2px;
            background: var(--primary-color);
        }

        .member-name::before {
            left: -120px;
        }

        .member-name::after {
            right: -120px;
        }

        .member-role {
            color: var(--text-light);
            font-size: clamp(1rem, 3vw, 1.5rem);
            font-weight: 500;
            opacity: 0.8;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            padding: 10px 0;
            margin-top: -15px;
            position: relative;
        }

        .member-bio {
            margin-top: 20px;
            color: var(--text-dark);
            line-height: 1.6;
            font-size: clamp(0.9rem, 2vw, 1rem);
        }

        .dots {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 30px;
            flex-wrap: wrap;
            padding: 0 20px;
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: var(--primary-light);
            cursor: pointer;
            transition: all var(--transition-fast);
        }

        .dot.active {
            background: var(--primary-color);
            transform: scale(1.2);
        }

        .nav-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: var(--primary-medium);
            color: var(--white);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 20;
            transition: all var(--transition-fast);
            font-size: 1.5rem;
            border: none;
            outline: none;
            padding-bottom: 4px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .nav-arrow:hover {
            background: var(--primary-color);
            transform: translateY(-50%) scale(1.1);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .nav-arrow:focus-visible {
            outline: 2px solid var(--primary-color);
            outline-offset: 2px;
        }

        .nav-arrow.left {
            left: 20px;
            padding-right: 3px;
        }

        .nav-arrow.right {
            right: 20px;
            padding-left: 3px;
        }

        /* Responsive styles */
        @media (max-width: 1200px) {
            .cards.left-2 {
                transform: translateX(-300px) scale(0.8) translateZ(-300px);
            }

            .cards.right-2 {
                transform: translateX(300px) scale(0.8) translateZ(-300px);
            }
        }

        @media (max-width: 992px) {
            .cards {
                width: var(--card-width-tablet);
                height: var(--card-height-tablet);
            }

            .cards.left-2 {
                transform: translateX(-250px) scale(0.8) translateZ(-300px);
            }

            .cards.left-1 {
                transform: translateX(-120px) scale(0.9) translateZ(-100px);
            }

            .cards.right-1 {
                transform: translateX(120px) scale(0.9) translateZ(-100px);
            }

            .cards.right-2 {
                transform: translateX(250px) scale(0.8) translateZ(-300px);
            }

            .member-info {
                text-align: center;
                margin-top: 10px;
                margin-left: 50px;
                transition: all var(--transition-medium);
                max-width: 600px;
                padding: 0 20px;
            }
            .member-name::before {
                left: -70px;
            }

            .member-name::after {
                right: -70px;
            }
        }

        @media (max-width: 768px) {
            .about {
                margin-top: 30px;
            }

            .carousel-container {
                height: 320px;
            }

            .cards {
                width: var(--card-width-mobile);
                height: var(--card-height-mobile);
            }

            .cards.left-2 {
                transform: translateX(-180px) scale(0.8) translateZ(-300px);
            }

            .cards.left-1 {
                transform: translateX(-90px) scale(0.9) translateZ(-100px);
            }

            .cards.right-1 {
                transform: translateX(90px) scale(0.9) translateZ(-100px);
            }

            .cards.right-2 {
                transform: translateX(180px) scale(0.8) translateZ(-300px);
            }

            .nav-arrow {
                width: 36px;
                height: 36px;
                font-size: 1.2rem;
            }

            .nav-arrow.left {
                left: 10px;
            }

            .nav-arrow.right {
                right: 10px;
            }

            .member-info {
                text-align: center;
                margin-top: 10px;
                margin-left: 20px;
                transition: all var(--transition-medium);
                max-width: 600px;
                padding: 0 20px;
            }
            .member-name::before,
            .member-name::after {
                width: 40px;
            }

            .member-name::before {
                left: -50px;
            }

            .member-name::after {
                right: -50px;
            }
        }

        @media (max-width: 480px) {
            .carousel-container {
                height: 280px;
                margin-left: 10px;
            }

            .cards {
                width: calc(var(--card-width-mobile) - 20px);
                height: calc(var(--card-height-mobile) - 20px);
            }

            .cards.left-2,
            .cards.right-2 {
                display: none;
            }

            .cards.left-1 {
                transform: translateX(-70px) scale(0.85) translateZ(-100px);
            }

            .cards.right-1 {
                transform: translateX(70px) scale(0.85) translateZ(-100px);
            }

            .member-info {
                text-align: center;
                margin-top: 10px;
                margin-left: 20px;
                transition: all var(--transition-medium);
                max-width: 600px;
                padding: 0 20px;
            }

            .member-name::before,
            .member-name::after {
                display: none;
            }

            .dots {
                margin-top: 20px;
            }

            .dot {
                width: 10px;
                height: 10px;
            }
        }

        /* Accessibility and focus styles */
        .cards:focus-visible,
        .dot:focus-visible {
            outline: 2px solid var(--primary-color);
            outline-offset: 2px;
        }

        /* Animation for card hover */
        .cards:hover {
            transform: scale(1.02);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.2);
        }

        .cards.center:hover {
            transform: scale(1.15) translateZ(0);
        }

        /* Preload animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .carousel-container,
        .member-info,
        .dots {
            animation: fadeIn 0.8s ease-out;
        }
    </style>
</head>
<body>
  <?php include('templates/Header/header.php'); ?>

    <h1 class="about animate_animated animate_fadeIn">Our Hostel</h1>

    <div class="carousel-container">
        <button class="nav-arrow left" aria-label="Previous slide">‹</button>
        <div class="carousel-track">
            <div class="cards" data-index="0">
                <img src="<?php echo $base_url; ?>assets/img/carousel/building.png" alt="Building" loading="lazy">
            </div>
            <div class="cards" data-index="1">
                <img src="<?php echo $base_url; ?>assets/img/carousel/floor.png" alt="Floor" loading="lazy">
            </div>
            <div class="cards" data-index="2">
                <img src="<?php echo $base_url; ?>assets/img/carousel/room1.png" alt="Room" loading="lazy">
            </div>
            <div class="cards" data-index="3">
                <img src="<?php echo $base_url; ?>assets/img/carousel/study.jpg" alt="Study" loading="lazy">
            </div>
            <div class="cards" data-index="4">
                <img src="<?php echo $base_url; ?>assets/img/carousel/mess.jpg" alt="Mess" loading="lazy">
            </div>
            <div class="cards" data-index="5">
                <img src="<?php echo $base_url; ?>assets/img/carousel/garden.png" alt="Garden" loading="lazy">
            </div>
        </div>
        <button class="nav-arrow right" aria-label="Next slide">›</button>
    </div>

    <div class="member-info animate_animated animate_fadeIn">
        <h2 class="member-name">Emily Kim</h2>
        <p class="member-role">Founder</p>
    </div>

    <div class="dots">
        <div class="dot active" data-index="0" aria-label="Go to slide 1"></div>
        <div class="dot" data-index="1" aria-label="Go to slide 2"></div>
        <div class="dot" data-index="2" aria-label="Go to slide 3"></div>
        <div class="dot" data-index="3" aria-label="Go to slide 4"></div>
        <div class="dot" data-index="4" aria-label="Go to slide 5"></div>
        <div class="dot" data-index="5" aria-label="Go to slide 6"></div>
    </div>

    <div class="main-content" style="padding:0; margin:0;">
      <div class="room-page">
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
        </div>
      <div class="about-page">
        <section class="about-title-section">
          <h1 data-aos="fade-down">About Hostel</h1>
        </section>

        <section class="about-container">   
          <article class="about-row" data-aos="fade-right" data-aos-delay="150">
            <div class="about-img">
              <img src="<?php echo $base_url; ?>assets/img/about/community.png" alt="Community Events at Roselle" loading="lazy" />
            </div>
            <div class="about-text">
              <h2>Community & Culture</h2>
              <p>We celebrate inclusivity and diversity through events and shared experiences. ROSELLE is more than a place—it's a feeling of belonging.</p>
            </div>
          </article>

          <article class="about-row reverse" data-aos="fade-left" data-aos-delay="200">
             <div class="about-img">
              <img src="<?php echo $base_url; ?>assets/img/about/sustainability.png" alt="Green Initiatives at Roselle" loading="lazy" />
            </div>
            <div class="about-text">
              <h2>Sustainability</h2>
              <p>From recycling to smart lighting, ROSELLE is proud to support green living. We educate and inspire our residents to make eco-conscious choices daily.</p>
            </div>
          </article>

          <article class="about-row" data-aos="fade-right" data-aos-delay="250">
            <div class="about-img">
              <img src="<?php echo $base_url; ?>assets/img/about/security.webp" alt="Safety and Security at Roselle" loading="lazy" />
            </div>
            <div class="about-text">
              <h2>Safety & Security</h2>
              <p>Secure access, CCTV surveillance, and trained staff make ROSELLE a safe haven for all residents. Your peace of mind matters to us.</p>
            </div>
          </article>

          <article class="about-row reverse" data-aos="fade-left" data-aos-delay="300">
            <div class="about-img">
              <img src="<?php echo $base_url; ?>assets/img/about/wellness.png" alt="Health and Wellness at Roselle" loading="lazy" />
            </div>
            <div class="about-text">
              <h2>Health & Wellness</h2>
              <p>ROSELLE promotes well-being through nutritious meals, fitness zones, and peaceful meditation areas. Your health is our priority.</p>
            </div>
          </article>

          <article class="about-row" data-aos="fade-right" data-aos-delay="350">
            <div class="about-img">
              <img src="<?php echo $base_url; ?>assets/img/about/technology.png" alt="Technology at Roselle" loading="lazy" />
            </div>
            <div class="about-text">
              <h2>Technology & Connectivity</h2>
              <p>Smart rooms, high-speed Wi-Fi, and digital platforms keep you connected, informed, and empowered with a few taps.</p>
            </div>
          </article>

          <section class="about-extra-info">
            <article class="info-card" data-aos="fade-up" data-aos-delay="400">
              <h3>Testimonials</h3>
              <p><strong>"Living at ROSELLE has been a life-changing experience."</strong> – Anika Sharma</p>
              <p><strong>"Supportive staff and great facilities!"</strong> – Rahul Patel</p>
            </article>

            <article class="info-card" data-aos="fade-up" data-aos-delay="450">
              <h3>Awards & Recognition</h3>
              <p>Ranked among the best student hostels for innovation, care, and sustainable living. We aim to exceed expectations every day.</p>
            </article>

            <article class="info-card" data-aos="fade-up" data-aos-delay="500">
              <h3>Contact & Visit Us</h3>
              <p>Want to be a part of ROSELLE? <a href="<?php echo $base_url; ?>componments/Contact/contact.php">Get in touch</a> or visit us to see the warmth and vibrancy in person.</p>
            </article>
          </section>

        </section>
      </div>
    </div>

    <section class="contact-cta full-width" data-aos="fade-up" data-aos-delay="450">
      <div class="container">
        <h3>Have Questions?</h3>
        <p>Get in touch with our team for more information about our hostel facilities and services.</p>
        <a href="<?php echo $base_url; ?>componments/Contact/contact.php" class="contact-btn">Contact Us</a>
      </div>
    </section>
  </main>

  <!-- JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script>
        const teamMembers = [{
                name: "Building",
                role: "Our main hostel building with modern facilities",
            },
            {
                name: "Floor",
                role: "Spacious and well-maintained hostel floors",
            },
            {
                name: "Room",
                role: "Comfortable and clean student rooms",
            },
            {
                name: "Study",
                role: "Quiet study areas for students",
            },
            {
                name: "Mess",
                role: "Healthy and hygienic dining facility",
            },
            {
                name: "Garden",
                role: "Beautiful green spaces for relaxation",
            }
        ];

        let cardies;
        let dots;
        let memberName;
        let memberRole;
        let memberBio;
        let leftArrow;
        let rightArrow;
        let currentIndex = 0;
        let isAnimating = false;
        let touchStartX = 0;
        let touchEndX = 0;
        let carouselTrack;
        let visibleItems = 5; // Default number of visible items

        // Initialize the carousel when the DOM is fully loaded
        document.addEventListener('DOMContentLoaded', () => {
            initCarousel();
        });

        function initCarousel() {
            // Get all necessary DOM elements
            cardies = document.querySelectorAll(".cards");
            dots = document.querySelectorAll(".dot");
            memberName = document.querySelector(".member-name");
            memberRole = document.querySelector(".member-role");
            memberBio = document.querySelector(".member-bio p");
            leftArrow = document.querySelector(".nav-arrow.left");
            rightArrow = document.querySelector(".nav-arrow.right");
            carouselTrack = document.querySelector(".carousel-track");

            // Set initial state
            updateCarousel(0);

            // Add event listeners
            setupEventListeners();

            // Handle initial responsive layout
            handleResize();

            // Add resize listener for responsive adjustments
            window.addEventListener('resize', handleResize);
        }

        function setupEventListeners() {
            // Navigation arrows
            leftArrow.addEventListener("click", () => {
                updateCarousel(currentIndex - 1);
            });

            rightArrow.addEventListener("click", () => {
                updateCarousel(currentIndex + 1);
            });

            // Dots navigation
            dots.forEach((dot, i) => {
                dot.addEventListener("click", () => {
                    updateCarousel(i);
                });

                // Keyboard accessibility
                dot.setAttribute('tabindex', '0');
                dot.addEventListener("keydown", (e) => {
                    if (e.key === "Enter" || e.key === " ") {
                        e.preventDefault();
                        updateCarousel(i);
                    }
                });
            });

            // Card click
            cardies.forEach((cards, i) => {
                cards.addEventListener("click", () => {
                    updateCarousel(i);
                });

                // Keyboard accessibility
                cards.setAttribute('tabindex', '0');
                cards.addEventListener("keydown", (e) => {
                    if (e.key === "Enter" || e.key === " ") {
                        e.preventDefault();
                        updateCarousel(i);
                    }
                });
            });

            // Keyboard navigation
            document.addEventListener("keydown", (e) => {
                if (e.key === "ArrowLeft") {
                    updateCarousel(currentIndex - 1);
                } else if (e.key === "ArrowRight") {
                    updateCarousel(currentIndex + 1);
                }
            });

            // Touch events for mobile
            carouselTrack.addEventListener("touchstart", handleTouchStart, {
                passive: true
            });
            carouselTrack.addEventListener("touchend", handleTouchEnd, {
                passive: true
            });
            carouselTrack.addEventListener("touchcancel", handleTouchEnd, {
                passive: true
            });
        }

        function updateCarousel(newIndex) {
            if (isAnimating) return;
            isAnimating = true;

            // Ensure the index is within bounds
            currentIndex = (newIndex + cardies.length) % cardies.length;

            // Update card positions and classes
            cardies.forEach((cards, i) => {
                const offset = (i - currentIndex + cardies.length) % cardies.length;

                // Remove all position classes
                cards.classList.remove(
                    "center",
                    "left-1",
                    "left-2",
                    "right-1",
                    "right-2",
                    "hidden"
                );

                // Add appropriate position class based on offset
                if (offset === 0) {
                    cards.classList.add("center");
                } else if (offset === 1) {
                    cards.classList.add("right-1");
                } else if (offset === 2 && visibleItems >= 5) {
                    cards.classList.add("right-2");
                } else if (offset === cardies.length - 1) {
                    cards.classList.add("left-1");
                } else if (offset === cardies.length - 2 && visibleItems >= 5) {
                    cards.classList.add("left-2");
                } else {
                    cards.classList.add("hidden");
                }
            });

            // Update dots
            dots.forEach((dot, i) => {
                dot.classList.toggle("active", i === currentIndex);
                dot.setAttribute('aria-selected', i === currentIndex ? 'true' : 'false');
            });

            // Fade out current info
            memberName.style.opacity = "0";
            memberRole.style.opacity = "0";
            if (memberBio) memberBio.style.opacity = "0";

            // Update member info with animation
            setTimeout(() => {
                memberName.textContent = teamMembers[currentIndex].name;
                memberRole.textContent = teamMembers[currentIndex].role;
                if (memberBio) memberBio.textContent = teamMembers[currentIndex].bio;

                memberName.style.opacity = "1";
                memberRole.style.opacity = "1";
                if (memberBio) memberBio.style.opacity = "1";
            }, 300);

            // Reset animation flag after transition completes
            setTimeout(() => {
                isAnimating = false;
            }, 800);
        }

        // Touch event handlers
        function handleTouchStart(e) {
            touchStartX = e.changedTouches[0].screenX;
        }

        function handleTouchEnd(e) {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        }

        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = touchStartX - touchEndX;

            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) {
                    // Swipe left - go to next
                    updateCarousel(currentIndex + 1);
                } else {
                    // Swipe right - go to previous
                    updateCarousel(currentIndex - 1);
                }
            }
        }

        // Responsive adjustments based on screen size
        function handleResize() {
            const width = window.innerWidth;

            if (width <= 480) {
                visibleItems = 3; // Only show center and immediate neighbors on mobile
            } else if (width <= 768) {
                visibleItems = 5; // Show all on larger screens
            } else {
                visibleItems = 5; // Default
            }

            // Re-apply current carousel state with new responsive settings
            updateCarousel(currentIndex);
        }
    </script>
  <script>
    // Initialize AOS
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  </script>

   <?php include('templates/Footer/footer.php'); ?>
</body>
</html>