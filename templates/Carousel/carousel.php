

</html><?php
if (!isset($base_url)) {
    $base_url = '/Hostel/';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="description" content="Hostel Team Carousel - Meet our team members">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- <style>
        :root {
            --primary-color: rgb(8, 42, 123);
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
            --border-radius: 20px;
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
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: var(--background);
            overflow-x: hidden;
            padding: 20px;
            position: relative;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(8, 42, 123, 0.05) 0%, rgba(8, 42, 123, 0) 100%);
            z-index: -1;
        }

        .about-title {
            font-size: clamp(3rem, 10vw, 7.5rem);
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: -0.02em;
            position: relative;
            text-align: center;
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

        .card {
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

        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all var(--transition-slow);
        }

        .card-overlay {
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

        .card.center .card-overlay {
            opacity: 1;
        }

        .card-overlay h3 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .card-overlay p {
            font-size: 0.9rem;
            opacity: 0.8;
        }

        .card.center {
            z-index: 10;
            transform: scale(1.1) translateZ(0);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
        }

        .card.center img {
            filter: none;
        }

        .card.left-2 {
            z-index: 1;
            transform: translateX(-400px) scale(0.8) translateZ(-300px);
            opacity: 0.7;
        }

        .card.left-2 img {
            filter: grayscale(100%);
        }

        .card.left-1 {
            z-index: 5;
            transform: translateX(-200px) scale(0.9) translateZ(-100px);
            opacity: 0.9;
        }

        .card.left-1 img {
            filter: grayscale(100%);
        }

        .card.right-1 {
            z-index: 5;
            transform: translateX(200px) scale(0.9) translateZ(-100px);
            opacity: 0.9;
        }

        .card.right-1 img {
            filter: grayscale(100%);
        }

        .card.right-2 {
            z-index: 1;
            transform: translateX(400px) scale(0.8) translateZ(-300px);
            opacity: 0.7;
        }

        .card.right-2 img {
            filter: grayscale(100%);
        }

        .card.hidden {
            opacity: 0;
            pointer-events: none;
        }

        .member-info {
            text-align: center;
            margin-top: 40px;
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
            .card.left-2 {
                transform: translateX(-300px) scale(0.8) translateZ(-300px);
            }

            .card.right-2 {
                transform: translateX(300px) scale(0.8) translateZ(-300px);
            }
        }

        @media (max-width: 992px) {
            .card {
                width: var(--card-width-tablet);
                height: var(--card-height-tablet);
            }

            .card.left-2 {
                transform: translateX(-250px) scale(0.8) translateZ(-300px);
            }

            .card.left-1 {
                transform: translateX(-120px) scale(0.9) translateZ(-100px);
            }

            .card.right-1 {
                transform: translateX(120px) scale(0.9) translateZ(-100px);
            }

            .card.right-2 {
                transform: translateX(250px) scale(0.8) translateZ(-300px);
            }

            .member-name::before {
                left: -70px;
            }

            .member-name::after {
                right: -70px;
            }
        }

        @media (max-width: 768px) {
            .about-title {
                margin-top: 30px;
            }

            .carousel-container {
                height: 320px;
            }

            .card {
                width: var(--card-width-mobile);
                height: var(--card-height-mobile);
            }

            .card.left-2 {
                transform: translateX(-180px) scale(0.8) translateZ(-300px);
            }

            .card.left-1 {
                transform: translateX(-90px) scale(0.9) translateZ(-100px);
            }

            .card.right-1 {
                transform: translateX(90px) scale(0.9) translateZ(-100px);
            }

            .card.right-2 {
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

            .card {
                width: calc(var(--card-width-mobile) - 20px);
                height: calc(var(--card-height-mobile) - 20px);
            }

            .card.left-2,
            .card.right-2 {
                display: none;
            }

            .card.left-1 {
                transform: translateX(-70px) scale(0.85) translateZ(-100px);
            }

            .card.right-1 {
                transform: translateX(70px) scale(0.85) translateZ(-100px);
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
        .card:focus-visible,
        .dot:focus-visible {
            outline: 2px solid var(--primary-color);
            outline-offset: 2px;
        }

        /* Animation for card hover */
        .card:hover {
            transform: scale(1.02);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.2);
        }

        .card.center:hover {
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
    </style> -->
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
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: var(--background);
            /* overflow-x: hidden; */
            padding: 20px;
            position: relative;
        }

        body::before {
            content: '';
            /* position: absolute; */
            top: 0;
            left: 0;
            width: 100%;
            background: linear-gradient(135deg, rgba(8, 42, 123, 0.05) 0%, rgba(8, 42, 123, 0) 100%);
            z-index: -1;
        }

        .abouts {
            font-size: clamp(3rem, 10vw, 7.5rem);
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

        .card {
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

        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all var(--transition-slow);
        }

        .card-overlay {
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

        .card.center .card-overlay {
            opacity: 1;
        }

        .card-overlay h3 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .card-overlay p {
            font-size: 0.9rem;
            opacity: 0.8;
        }

        .card.center {
            z-index: 10;
            transform: scale(1.1) translateZ(0);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
        }

        .card.center img {
            filter: none;
        }

        .card.left-2 {
            z-index: 1;
            transform: translateX(-400px) scale(0.8) translateZ(-300px);
            opacity: 0.7;
        }

        .card.left-2 img {
            filter: grayscale(100%);
        }

        .card.left-1 {
            z-index: 5;
            transform: translateX(-200px) scale(0.9) translateZ(-100px);
            opacity: 0.9;
        }

        .card.left-1 img {
            filter: grayscale(100%);
        }

        .card.right-1 {
            z-index: 5;
            transform: translateX(200px) scale(0.9) translateZ(-100px);
            opacity: 0.9;
        }

        .card.right-1 img {
            filter: grayscale(100%);
        }

        .card.right-2 {
            z-index: 1;
            transform: translateX(400px) scale(0.8) translateZ(-300px);
            opacity: 0.7;
        }

        .card.right-2 img {
            filter: grayscale(100%);
        }

        .card.hidden {
            opacity: 0;
            pointer-events: none;
        }

        .member-info {
            text-align: center;
            margin-top: 40px;
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
            .card.left-2 {
                transform: translateX(-300px) scale(0.8) translateZ(-300px);
            }

            .card.right-2 {
                transform: translateX(300px) scale(0.8) translateZ(-300px);
            }
        }

        @media (max-width: 992px) {
            .card {
                width: var(--card-width-tablet);
                height: var(--card-height-tablet);
            }

            .card.left-2 {
                transform: translateX(-250px) scale(0.8) translateZ(-300px);
            }

            .card.left-1 {
                transform: translateX(-120px) scale(0.9) translateZ(-100px);
            }

            .card.right-1 {
                transform: translateX(120px) scale(0.9) translateZ(-100px);
            }

            .card.right-2 {
                transform: translateX(250px) scale(0.8) translateZ(-300px);
            }

            .member-name::before {
                left: -70px;
            }

            .member-name::after {
                right: -70px;
            }
        }

        @media (max-width: 768px) {
            .abouts {
                margin-top: 30px;
            }

            .carousel-container {
                height: 320px;
            }

            .card {
                width: var(--card-width-mobile);
                height: var(--card-height-mobile);
            }

            .card.left-2 {
                transform: translateX(-180px) scale(0.8) translateZ(-300px);
            }

            .card.left-1 {
                transform: translateX(-90px) scale(0.9) translateZ(-100px);
            }

            .card.right-1 {
                transform: translateX(90px) scale(0.9) translateZ(-100px);
            }

            .card.right-2 {
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

            .card {
                width: calc(var(--card-width-mobile) - 20px);
                height: calc(var(--card-height-mobile) - 20px);
            }

            .card.left-2,
            .card.right-2 {
                display: none;
            }

            .card.left-1 {
                transform: translateX(-70px) scale(0.85) translateZ(-100px);
            }

            .card.right-1 {
                transform: translateX(70px) scale(0.85) translateZ(-100px);
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
        .card:focus-visible,
        .dot:focus-visible {
            outline: 2px solid var(--primary-color);
            outline-offset: 2px;
        }

        /* Animation for card hover */
        .card:hover {
            transform: scale(1.02);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.2);
        }

        .card.center:hover {
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
    <!-- <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/carousel-style.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <h1 class="abouts animate__animated animate__fadeIn">Our Hostel</h1>

    <div class="carousel-container">
        <button class="nav-arrow left" aria-label="Previous slide">‹</button>
        <div class="carousel-track">
            <div class="card" data-index="0">
                <img src="<?php echo $base_url; ?>assets/img/carousel/building.png" alt="Building" loading="lazy">
            </div>
            <div class="card" data-index="1">
                <img src="<?php echo $base_url; ?>assets/img/carousel/floor.png" alt="Floor" loading="lazy">
            </div>
            <div class="card" data-index="2">
                <img src="<?php echo $base_url; ?>assets/img/carousel/room1.png" alt="Room" loading="lazy">
            </div>
            <div class="card" data-index="3">
                <img src="<?php echo $base_url; ?>assets/img/carousel/study.jpg" alt="Study" loading="lazy">
            </div>
            <div class="card" data-index="4">
                <img src="<?php echo $base_url; ?>assets/img/carousel/mess.jpg" alt="Mess" loading="lazy">
            </div>
            <div class="card" data-index="5">
                <img src="<?php echo $base_url; ?>assets/img/carousel/garden.png" alt="Garden" loading="lazy">
            </div>
        </div>
        <button class="nav-arrow right" aria-label="Next slide">›</button>
    </div>

    <div class="member-info animate__animated animate__fadeIn">
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

        let cards;
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
            cards = document.querySelectorAll(".card");
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
            cards.forEach((card, i) => {
                card.addEventListener("click", () => {
                    updateCarousel(i);
                });

                // Keyboard accessibility
                card.setAttribute('tabindex', '0');
                card.addEventListener("keydown", (e) => {
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
            currentIndex = (newIndex + cards.length) % cards.length;

            // Update card positions and classes
            cards.forEach((card, i) => {
                const offset = (i - currentIndex + cards.length) % cards.length;

                // Remove all position classes
                card.classList.remove(
                    "center",
                    "left-1",
                    "left-2",
                    "right-1",
                    "right-2",
                    "hidden"
                );

                // Add appropriate position class based on offset
                if (offset === 0) {
                    card.classList.add("center");
                } else if (offset === 1) {
                    card.classList.add("right-1");
                } else if (offset === 2 && visibleItems >= 5) {
                    card.classList.add("right-2");
                } else if (offset === cards.length - 1) {
                    card.classList.add("left-1");
                } else if (offset === cards.length - 2 && visibleItems >= 5) {
                    card.classList.add("left-2");
                } else {
                    card.classList.add("hidden");
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
</body>