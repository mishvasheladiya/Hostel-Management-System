<?php
if (!isset($base_url)) {
    $base_url = '/Hostel/';
}

$conn = mysqli_connect("localhost", "root", "", "hostel");
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

$email = $_SESSION['email'] ?? '';

$firstName = 'Student';

if (!empty($email)) {
    $query = "SELECT firstName FROM student WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $firstName = $row['firstName'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/student-header.css">
</head>
<body>
    <div class="main-header">
        <div class="top-bar animate__animated animate__fadeIn">
            <div class="top-bar-container">
                <div class="social-links animate__animated animate__fadeInRight animate__delay-1s">
                    <a href="https://facebook.com" target="_blank" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                    <a href="https://instagram.com" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="https://youtube.com" target="_blank" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
                <div class="auth-links">
                    <button class="auth-btn animate__animated animate__fadeInRight animate__delay-1s">
                    <a href="<?php echo $base_url; ?>componments/Logout/logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
                    </button>
                </div>
            </div>
        </div>
        
        <nav class="main-nav">
            <div class="nav-container">
                <a href="<?php echo $base_url; ?>" class="logo">
                    <img src="<?php echo $base_url; ?>assets/img/logo1.png" alt="Roselle Hostel">
                </a>
                
                <div class="nav-actions">
                    <span class="welcome-user">Welcome, <strong style="color: #90ACE8; "><?= htmlspecialchars($firstName); ?></strong></span>
                    <div class="nav-icons">
                        <a href="#" class="nav-icon" id="themeToggle" aria-label="Toggle Theme"><i class="fas fa-moon"></i></a>
                        <a href="#" class="nav-icon" id="searchToggle" aria-label="Search"><i class="fas fa-search"></i></a>
                    </div>
                </div>
                <button class="mobile-menu-toggle" id="mobileMenuToggle"><i class="fas fa-bars"></i></button>
            </div>
        </nav>
    </div>

    <!-- Mobile menu -->
    <div class="mobile-menu-overlay" id="mobileMenuOverlay"></div>
    <div class="mobile-menu-panel" id="mobileMenuPanel">
        <div class="mobile-menu-header">
            <img src="<?php echo $base_url; ?>assets/img/logo1.png" alt="Roselle Hostel" height="40">
            <button class="mobile-menu-close" id="mobileMenuClose"><i class="fas fa-times"></i></button>
        </div>
        
        <div class="mobile-menu-actions">
            <div class="welcome-user-mobile">Welcome, <strong style="color: #90ACE8; "><?= htmlspecialchars($firstName); ?></strong></div>
            <div class="social-links" style="justify-content: center; margin-bottom: 20px;">
                <a href="https://facebook.com" target="_blank" aria-label="Facebook" style="color: #fff;"><i class="fab fa-facebook"></i></a>
                <a href="https://instagram.com" target="_blank" aria-label="Instagram" style="color: #fff;"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com" target="_blank" aria-label="Twitter" style="color: #fff;"><i class="fab fa-twitter"></i></a>
                <a href="https://youtube.com" target="_blank" aria-label="YouTube" style="color: #fff;"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div style="display: flex; justify-content: center; gap: 20px; margin-bottom: 10px;">
                <a href="#" class="nav-icon" id="mobileThemeToggle" aria-label="Toggle Theme"><i class="fas fa-moon"></i></a>
                <a href="#" class="nav-icon" id="mobileSearchToggle" aria-label="Search"><i class="fas fa-search"></i></a>
            </div>
            <div class="auth-links">
                <button class="auth-btn" style="width: 100%; justify-content: center; color: #fff; border-radius: 5px; border: 1px solid #fff;">
                    <a href="<?php echo $base_url; ?>componments/Logout/logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
                </button>
            </div>
        </div>
    </div>

    <!-- Search Modal -->
    <div class="search-modal" id="searchModal">
        <div class="search-modal-content">
            <span class="close-search">&times;</span>
            <form class="search-form" onsubmit="return false;">
                <input type="text" placeholder="Search..." name="q" id="searchInput">
                <button type="button"><i class="fas fa-search"></i></button>
            </form>
            <!-- 🔹 Results go here -->
            <div id="searchResults" class="list-group mt-2"></div>
        </div>
    </div>

    <script>
        const BASE_URL = "<?php echo $base_url; ?>";

        // --- Theme Toggle ---
        function setTheme(dark) {
            if (dark) {
                document.body.classList.add('dark-theme');
            } else {
                document.body.classList.remove('dark-theme');
            }
        }
        
        function toggleTheme() {
            const isDark = document.body.classList.toggle('dark-theme');
            localStorage.setItem('admin-theme', isDark ? 'dark' : 'light');
            updateThemeIcons();
        }
        
        function updateThemeIcons() {
            const isDark = document.body.classList.contains('dark-theme');
            document.querySelectorAll('#themeToggle i, #mobileThemeToggle i').forEach(icon => {
                icon.className = isDark ? 'fas fa-sun' : 'fas fa-moon';
            });
        }
        
        // On load, set theme from storage
        setTheme(localStorage.getItem('admin-theme') === 'dark');
        updateThemeIcons();
        
        document.getElementById('themeToggle').addEventListener('click', function(e) {
            e.preventDefault();
            toggleTheme();
        });
        
        document.getElementById('mobileThemeToggle').addEventListener('click', function(e) {
            e.preventDefault();
            toggleTheme();
        });

        // --- Mobile Menu ---
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const mobileMenuPanel = document.getElementById('mobileMenuPanel');
        const mobileMenuOverlay = document.getElementById('mobileMenuOverlay');
        const mobileMenuClose = document.getElementById('mobileMenuClose');
        
        function openMobileMenu() {
            mobileMenuPanel.classList.add('active');
            mobileMenuOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
        
        function closeMobileMenu() {
            mobileMenuPanel.classList.remove('active');
            mobileMenuOverlay.classList.remove('active');
            document.body.style.overflow = '';
        }
        
        mobileMenuToggle.addEventListener('click', openMobileMenu);
        mobileMenuClose.addEventListener('click', closeMobileMenu);
        mobileMenuOverlay.addEventListener('click', closeMobileMenu);

        // --- Search Modal (Desktop & Mobile) ---
        function openSearchModal() {
            document.getElementById('searchModal').style.display = 'block';
            document.getElementById('searchInput').focus();
        }
        
        function closeSearchModal() {
            document.getElementById('searchModal').style.display = 'none';
        }
        
        document.getElementById('searchToggle').addEventListener('click', function(e) {
            e.preventDefault();
            openSearchModal();
        });
        
        document.getElementById('mobileSearchToggle').addEventListener('click', function(e) {
            e.preventDefault();
            closeMobileMenu();
            setTimeout(openSearchModal, 300);
        });
        
        document.querySelector('.close-search').addEventListener('click', closeSearchModal);

        // Close search modal when clicking outside
        window.addEventListener('click', function(event) {
            const searchModal = document.getElementById('searchModal');
            if (event.target === searchModal) {
                closeSearchModal();
            }
        });

        // Live search
        document.getElementById('searchInput').addEventListener('keyup', function() {
            let query = this.value.trim();
            if (query.length < 2) {
                document.getElementById('searchResults').innerHTML = '';
                return;
            }
            
            fetch(BASE_URL + "search.php?q=" + encodeURIComponent(query))
                .then(res => res.text())
                .then(data => {
                    document.getElementById('searchResults').innerHTML = data;
                })
                .catch(err => console.error("Search error:", err));
        });
    </script>
</body>
</html>
