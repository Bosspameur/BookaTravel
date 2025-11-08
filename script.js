
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add scroll effect to navbar
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.background = 'rgba(26, 35, 126, 0.95)';
                navbar.style.backdropFilter = 'blur(15px)';
                navbar.style.boxShadow = '0 8px 32px rgba(26, 35, 126, 0.4)';
            } else {
                navbar.style.background = 'linear-gradient(135deg, #1a237e 0%, #0d1b69 100%)';
                navbar.style.backdropFilter = 'blur(10px)';
                navbar.style.boxShadow = '0 4px 20px rgba(26, 35, 126, 0.3)';
            }
        });

        // Animate cards on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                }
            });
        }, observerOptions);

        // Observe all destination cards
        document.querySelectorAll('.destination-card').forEach(card => {
            observer.observe(card);
        });

        // Add parallax effect to hero section
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const heroContent = document.querySelector('.hero-content');
            const searchForm = document.querySelector('.search-form');

            if (heroContent) {
                heroContent.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
            if (searchForm) {
                searchForm.style.transform = `translateY(${scrolled * 0.3}px)`;
            }
        });

        // Form validation and effects
        document.querySelectorAll('.form-control').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });

            input.addEventListener('blur', function() {
                if (!this.value) {
                    this.parentElement.classList.remove('focused');
                }
            });
        });

        // Add loading animation
        window.addEventListener('load', function() {
            document.body.classList.add('loaded');
        });

        // Button click effects
        document.querySelectorAll('.btn').forEach(button => {
            button.addEventListener('click', function(e) {
                let ripple = document.createElement('span');
                ripple.classList.add('ripple');
                this.appendChild(ripple);

                let x = e.clientX - e.target.offsetLeft;
                let y = e.clientY - e.target.offsetTop;

                ripple.style.left = `${x}px`;
                ripple.style.top = `${y}px`;

                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });

        // Destination card hover effects
        document.querySelectorAll('.destination-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-15px) scale(1.02)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Contact form submission
        document.querySelector('.contact-form form').addEventListener('submit', function(e) {
            e.preventDefault();

            // Show success message
            const button = this.querySelector('.btn-contact');
            const originalText = button.innerHTML;

            button.innerHTML = '<i class="fas fa-check me-2"></i>Message envoyé !';
            button.style.background = 'linear-gradient(45deg, #4caf50, #66bb6a)';

            setTimeout(() => {
                button.innerHTML = originalText;
                button.style.background = 'linear-gradient(45deg, var(--primary-navy), var(--light-navy))';
                this.reset();
            }, 3000);
        });

        // Search form submission
        document.querySelector('.search-form form').addEventListener('submit', function(e) {
            e.preventDefault();

            const button = this.querySelector('.btn-search');
            const originalText = button.innerHTML;

            button.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Recherche...';

            setTimeout(() => {
                button.innerHTML = '<i class="fas fa-check me-2"></i>Trouvé !';
                button.style.background = 'linear-gradient(45deg, #4caf50, #66bb6a)';

                setTimeout(() => {
                    button.innerHTML = originalText;
                    button.style.background = 'linear-gradient(45deg, var(--primary-navy), var(--light-navy))';
                }, 2000);
            }, 1500);
        });
    