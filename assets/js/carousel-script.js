
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