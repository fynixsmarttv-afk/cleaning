// Sands Cleaners - Ultra Luxury JavaScript with Animations

// Smooth Scroll and Navigation
document.addEventListener('DOMContentLoaded', function() {
    
    // Create animated particles in hero section
    createHeroParticles();
    
    // Create floating gradient orbs
    createGradientOrbs();
    
    // Mobile Menu Toggle
    const mobileToggle = document.querySelector('.mobile-toggle');
    const navMenu = document.querySelector('.nav-menu');
    
    if (mobileToggle) {
        mobileToggle.addEventListener('click', function() {
            mobileToggle.classList.toggle('active');
            navMenu.classList.toggle('active');
        });
    }
    
    // Close mobile menu when clicking a link
    const navLinks = document.querySelectorAll('.nav-menu a');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (navMenu.classList.contains('active')) {
                navMenu.classList.remove('active');
                mobileToggle.classList.remove('active');
            }
        });
    });
    
    // Header scroll effect
    const header = document.querySelector('header');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
    
    // Active navigation highlighting
    const sections = document.querySelectorAll('section[id]');
    window.addEventListener('scroll', function() {
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (scrollY >= (sectionTop - 200)) {
                current = section.getAttribute('id');
            }
        });
        
        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === '#' + current) {
                link.classList.add('active');
            }
        });
    });
    
    // Scroll to Top Button
    const scrollTopBtn = document.querySelector('.scroll-top');
    if (scrollTopBtn) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 500) {
                scrollTopBtn.classList.add('visible');
            } else {
                scrollTopBtn.classList.remove('visible');
            }
        });
        
        scrollTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
    
    // Animated Counter for Stats
    const animateCounter = (element, target, duration = 2000) => {
        let current = 0;
        const increment = target / (duration / 16);
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            element.textContent = Math.floor(current).toLocaleString();
        }, 16);
    };
    
    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.2,
        rootMargin: '0px 0px -100px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
                
                // Trigger counter animation for stats
                if (entry.target.classList.contains('stat-number')) {
                    const target = parseInt(entry.target.getAttribute('data-count'));
                    animateCounter(entry.target, target);
                    observer.unobserve(entry.target);
                }
            }
        });
    }, observerOptions);
    
    // Observe all animated elements
    const animatedElements = document.querySelectorAll('.service-card, .process-step, .stat-item, .pricing-card');
    animatedElements.forEach(el => observer.observe(el));
    
    // Observe stat numbers specifically
    const statNumbers = document.querySelectorAll('.stat-number');
    statNumbers.forEach(stat => observer.observe(stat));
    
    // Scroll Reveal Animation System
    const scrollRevealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
                scrollRevealObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.15,
        rootMargin: '0px 0px -50px 0px'
    });
    
    // Apply scroll reveal animations to sections
    const applyScrollRevealAnimations = () => {
        const sections = document.querySelectorAll('section');
        
        sections.forEach((section, index) => {
            // Skip hero carousel section
            if (section.closest('.hero-carousel')) return;
            
            // Add scroll-reveal class
            section.classList.add('scroll-reveal');
            
            // Apply different animation directions based on index
            const animations = [
                'slide-from-left',
                'slide-from-right',
                'slide-from-bottom',
                'slide-from-top',
                'zoom-in',
                'slide-from-left',
                'slide-from-right',
                'slide-from-bottom'
            ];
            
            const animationClass = animations[index % animations.length];
            section.classList.add(animationClass);
            
            // Observe the section
            scrollRevealObserver.observe(section);
        });
        
        // Also apply to individual service cards with stagger effect
        const serviceCards = document.querySelectorAll('.service-card');
        serviceCards.forEach((card, index) => {
            card.classList.add('scroll-reveal');
            
            // Alternate between left and right
            if (index % 2 === 0) {
                card.classList.add('slide-from-left');
            } else {
                card.classList.add('slide-from-right');
            }
            
            // Add stagger delay - increased for smoother effect
            card.style.transitionDelay = `${index * 0.15}s`;
            
            scrollRevealObserver.observe(card);
        });
        
        // Process steps with individual animations
        const processSteps = document.querySelectorAll('.process-step');
        processSteps.forEach((step, index) => {
            step.classList.add('scroll-reveal');
            
            // Each step slides from bottom with stagger
            step.classList.add('slide-from-bottom');
            step.style.transitionDelay = `${index * 0.2}s`;
            
            scrollRevealObserver.observe(step);
        });
        
        // Pricing cards with zoom effect
        const pricingCards = document.querySelectorAll('.pricing-card');
        pricingCards.forEach((card, index) => {
            card.classList.add('scroll-reveal', 'zoom-in');
            card.style.transitionDelay = `${index * 0.18}s`;
            scrollRevealObserver.observe(card);
        });
        
        // Garment items animation
        const garmentItems = document.querySelectorAll('.garment-item');
        garmentItems.forEach((item, index) => {
            item.classList.add('scroll-reveal', 'slide-from-top');
            item.style.transitionDelay = `${index * 0.1}s`;
            scrollRevealObserver.observe(item);
        });
    };
    
    // Apply animations after DOM is ready
    applyScrollRevealAnimations();
    
    // Parallax Effect
    window.addEventListener('scroll', function() {
        const parallaxElements = document.querySelectorAll('.parallax-bg');
        parallaxElements.forEach(element => {
            const scrolled = window.pageYOffset;
            const rate = scrolled * 0.5;
            element.style.transform = `translate3d(0, ${rate}px, 0)`;
        });
    });
    
    // Form Validation and Submission
    const contactForm = document.querySelector('.contact-form form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(contactForm);
            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const btnText = submitBtn.innerHTML;
            
            // Show loading state
            submitBtn.innerHTML = '<span class="loading"></span> Sending...';
            submitBtn.disabled = true;
            
            // Simulate form submission (replace with actual AJAX call)
            setTimeout(() => {
                // Show success message
                const successMsg = document.createElement('div');
                successMsg.className = 'alert alert-success';
                successMsg.textContent = 'Thank you! Your message has been sent successfully.';
                successMsg.style.cssText = 'padding: 20px; background: #10b981; color: white; border-radius: 12px; margin-top: 20px; text-align: center;';
                
                contactForm.appendChild(successMsg);
                contactForm.reset();
                submitBtn.innerHTML = btnText;
                submitBtn.disabled = false;
                
                // Remove success message after 5 seconds
                setTimeout(() => {
                    successMsg.remove();
                }, 5000);
            }, 2000);
        });
        
        // Real-time validation
        const inputs = contactForm.querySelectorAll('.form-control');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (input.hasAttribute('required') && !input.value.trim()) {
                    input.style.borderColor = '#ef4444';
                } else if (input.type === 'email' && !isValidEmail(input.value)) {
                    input.style.borderColor = '#ef4444';
                } else {
                    input.style.borderColor = '#10b981';
                }
            });
            
            input.addEventListener('input', function() {
                input.style.borderColor = '#e2e8f0';
            });
        });
    }
    
    // Email validation helper
    function isValidEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#' && href !== '#!') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    const headerOffset = 80;
                    const elementPosition = target.offsetTop;
                    const offsetPosition = elementPosition - headerOffset;
                    
                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
    
    // FAQ Accordion
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        if (question) {
            question.addEventListener('click', function() {
                const isActive = item.classList.contains('active');
                
                // Close all other items
                faqItems.forEach(otherItem => {
                    otherItem.classList.remove('active');
                });
                
                // Toggle current item
                if (!isActive) {
                    item.classList.add('active');
                }
            });
        }
    });
    
    // Testimonial Carousel
    const initTestimonialCarousel = () => {
        const track = document.querySelector('.testimonials-track');
        const cards = document.querySelectorAll('.testimonial-card');
        const prevBtn = document.querySelector('.testimonial-prev');
        const nextBtn = document.querySelector('.testimonial-next');
        const dots = document.querySelectorAll('.testimonial-dot');
        
        if (!track || cards.length === 0) return;
        
        let currentIndex = 0;
        let autoPlayInterval;
        
        const updateCarousel = (index) => {
            track.style.transform = `translateX(-${index * 100}%)`;
            
            cards.forEach((card, i) => {
                card.classList.toggle('active', i === index);
            });
            
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === index);
            });
        };
        
        const nextSlide = () => {
            currentIndex = (currentIndex + 1) % cards.length;
            updateCarousel(currentIndex);
        };
        
        const prevSlide = () => {
            currentIndex = (currentIndex - 1 + cards.length) % cards.length;
            updateCarousel(currentIndex);
        };
        
        const goToSlide = (index) => {
            currentIndex = index;
            updateCarousel(currentIndex);
            resetAutoPlay();
        };
        
        const startAutoPlay = () => {
            autoPlayInterval = setInterval(nextSlide, 6000);
        };
        
        const stopAutoPlay = () => {
            clearInterval(autoPlayInterval);
        };
        
        const resetAutoPlay = () => {
            stopAutoPlay();
            startAutoPlay();
        };
        
        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                nextSlide();
                resetAutoPlay();
            });
        }
        
        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                prevSlide();
                resetAutoPlay();
            });
        }
        
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => goToSlide(index));
        });
        
        track.addEventListener('mouseenter', stopAutoPlay);
        track.addEventListener('mouseleave', startAutoPlay);
        
        updateCarousel(0);
        startAutoPlay();
    };
    
    initTestimonialCarousel();
    
    // Delivery Truck Animation
    const bookingSection = document.querySelector('.booking-animation');
    if (bookingSection) {
        const truck = bookingSection.querySelector('.delivery-truck');
        const bookBtn = bookingSection.querySelector('.book-now-btn');
        
        if (bookBtn) {
            bookBtn.addEventListener('click', function() {
                if (truck) {
                    truck.style.animation = 'truckDrive 3s ease-in-out';
                    setTimeout(() => {
                        truck.style.animation = '';
                    }, 3000);
                }
            });
        }
    }
    
    // Add hover effect to cards
    const cards = document.querySelectorAll('.service-card, .pricing-card, .process-step');
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = '';
        });
    });
    
    // Lazy loading for images
    const images = document.querySelectorAll('img[data-src]');
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
                imageObserver.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
    
    // Animate elements on scroll
    const slideUpElements = document.querySelectorAll('.slide-up');
    const slideUpObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    slideUpElements.forEach(el => slideUpObserver.observe(el));
    
    // Add floating animation to hero elements
    const floatingElements = document.querySelectorAll('.float');
    floatingElements.forEach(el => {
        el.style.animation = 'float 6s ease-in-out infinite';
    });
    
    // Preloader (if exists)
    const preloader = document.querySelector('.preloader');
    if (preloader) {
        window.addEventListener('load', function() {
            preloader.style.opacity = '0';
            setTimeout(() => {
                preloader.style.display = 'none';
            }, 500);
        });
    }
    
    console.log('Sands Cleaners - Luxury Website Loaded Successfully!');
});

// Create floating particles in hero section
function createHeroParticles() {
    const hero = document.querySelector('.hero');
    if (!hero) return;
    
    const particlesContainer = document.createElement('div');
    particlesContainer.className = 'hero-particles';
    hero.insertBefore(particlesContainer, hero.firstChild);
    
    // Create 50 particles
    for (let i = 0; i < 50; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        
        // Random positioning
        particle.style.left = Math.random() * 100 + '%';
        particle.style.animationDuration = (Math.random() * 10 + 10) + 's';
        particle.style.animationDelay = Math.random() * 5 + 's';
        
        // Random size variation
        const size = Math.random() * 3 + 2;
        particle.style.width = size + 'px';
        particle.style.height = size + 'px';
        
        particlesContainer.appendChild(particle);
    }
}

// Create gradient orbs
function createGradientOrbs() {
    const hero = document.querySelector('.hero');
    if (!hero) return;
    
    const orb1 = document.createElement('div');
    orb1.className = 'gradient-orb orb-1';
    
    const orb2 = document.createElement('div');
    orb2.className = 'gradient-orb orb-2';
    
    const orb3 = document.createElement('div');
    orb3.className = 'gradient-orb orb-3';
    
    hero.insertBefore(orb1, hero.firstChild);
    hero.insertBefore(orb2, hero.firstChild);
    hero.insertBefore(orb3, hero.firstChild);
}

// Add CSS keyframes for truck animation dynamically
if (!document.getElementById('truck-animation-style')) {
    const truckStyle = document.createElement('style');
    truckStyle.id = 'truck-animation-style';
    truckStyle.textContent = `
        @keyframes truckDrive {
            0% {
                transform: translateX(0) scale(1);
            }
            50% {
                transform: translateX(100px) scale(0.95);
            }
            100% {
                transform: translateX(0) scale(1);
            }
        }
    `;
    document.head.appendChild(truckStyle);
}
