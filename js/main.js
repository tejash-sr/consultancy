/**
 * Agency Pro Theme - Main JavaScript
 * 
 * @package Agency_Pro
 * @since 1.0.0
 */

(function($) {
    'use strict';

    // Global variables
    let header;
    let menuToggle;
    let navigation;

    /**
     * Initialize all functions on document ready
     */
    $(document).ready(function() {
        init();
        handleNavigation();
        handleScrollEffects();
        handleContactForm();
        handleAnimations();
        handleSmoothScroll();
    });

    /**
     * Initialize variables
     */
    function init() {
        header = $('.site-header');
        menuToggle = $('#menuToggle');
        navigation = $('#site-navigation');
    }

    /**
     * Handle mobile navigation
     */
    function handleNavigation() {
        // Toggle mobile menu
        menuToggle.on('click', function() {
            navigation.toggleClass('active');
            $(this).toggleClass('active');
            $('body').toggleClass('menu-open');
        });

        // Close menu when clicking outside
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.site-header').length && navigation.hasClass('active')) {
                navigation.removeClass('active');
                menuToggle.removeClass('active');
                $('body').removeClass('menu-open');
            }
        });

        // Close menu on link click
        navigation.find('a').on('click', function() {
            if ($(window).width() <= 768) {
                navigation.removeClass('active');
                menuToggle.removeClass('active');
                $('body').removeClass('menu-open');
            }
        });

        // Update active menu item on scroll
        updateActiveMenuItem();
        $(window).on('scroll', updateActiveMenuItem);
    }

    /**
     * Handle scroll effects
     */
    function handleScrollEffects() {
        $(window).on('scroll', function() {
            const scrollTop = $(window).scrollTop();

            // Add scrolled class to header
            if (scrollTop > 50) {
                header.addClass('scrolled');
            } else {
                header.removeClass('scrolled');
            }

            // Animate elements on scroll
            $('.animate-on-scroll').each(function() {
                const elementTop = $(this).offset().top;
                const elementBottom = elementTop + $(this).outerHeight();
                const viewportTop = $(window).scrollTop();
                const viewportBottom = viewportTop + $(window).height();

                if (elementBottom > viewportTop && elementTop < viewportBottom) {
                    $(this).addClass('animated');
                }
            });
        });

        // Trigger scroll event on load
        $(window).trigger('scroll');
    }

    /**
     * Update active menu item based on scroll position
     */
    function updateActiveMenuItem() {
        const scrollPos = $(window).scrollTop() + 100;

        navigation.find('a[href^="#"]').each(function() {
            const currLink = $(this);
            const refElement = $(currLink.attr('href'));

            if (refElement.length && refElement.offset().top <= scrollPos && 
                refElement.offset().top + refElement.height() > scrollPos) {
                navigation.find('a').removeClass('current');
                currLink.addClass('current');
            } else {
                currLink.removeClass('current');
            }
        });
    }

    /**
     * Handle smooth scrolling for anchor links
     */
    function handleSmoothScroll() {
        $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').on('click', function(event) {
            if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && 
                location.hostname === this.hostname) {
                
                let target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

                if (target.length) {
                    event.preventDefault();
                    const headerHeight = header.outerHeight();
                    const targetPosition = target.offset().top - headerHeight;

                    $('html, body').animate({
                        scrollTop: targetPosition
                    }, 800, 'swing');
                }
            }
        });
    }

    /**
     * Handle contact form submission
     */
    function handleContactForm() {
        const form = $('#contactForm');
        const submitBtn = $('#submitBtn');
        const btnText = $('#btnText');
        const btnLoader = $('#btnLoader');
        const formMessage = $('#formMessage');

        if (!form.length) return;

        form.on('submit', function(e) {
            e.preventDefault();

            // Validate form
            if (!validateForm(form)) {
                return;
            }

            // Disable submit button
            submitBtn.prop('disabled', true);
            btnText.hide();
            btnLoader.show();

            // Get form data
            const formData = {
                action: 'agency_pro_contact_form',
                nonce: form.find('input[name="nonce"]').val(),
                name: form.find('#name').val(),
                email: form.find('#email').val(),
                phone: form.find('#phone').val(),
                company: form.find('#company').val(),
                message: form.find('#message').val()
            };

            // Send AJAX request
            $.ajax({
                url: agencyProAjax.ajax_url,
                type: 'POST',
                data: formData,
                success: function(response) {
                    if (response.success) {
                        showMessage('success', response.data.message);
                        form[0].reset();
                    } else {
                        showMessage('error', response.data.message);
                    }
                },
                error: function() {
                    showMessage('error', 'An error occurred. Please try again later.');
                },
                complete: function() {
                    submitBtn.prop('disabled', false);
                    btnText.show();
                    btnLoader.hide();
                }
            });
        });

        /**
         * Validate form fields
         */
        function validateForm(form) {
            let isValid = true;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            const phoneRegex = /^[\d\s\-\+\(\)]+$/;

            // Clear previous messages
            formMessage.hide().removeClass('success error');

            // Validate name
            const name = form.find('#name').val().trim();
            if (name.length < 2) {
                showMessage('error', 'Please enter a valid name.');
                isValid = false;
            }

            // Validate email
            const email = form.find('#email').val().trim();
            if (!emailRegex.test(email)) {
                showMessage('error', 'Please enter a valid email address.');
                isValid = false;
            }

            // Validate phone
            const phone = form.find('#phone').val().trim();
            if (!phoneRegex.test(phone) || phone.length < 10) {
                showMessage('error', 'Please enter a valid phone number.');
                isValid = false;
            }

            // Validate message
            const message = form.find('#message').val().trim();
            if (message.length < 10) {
                showMessage('error', 'Please enter a message (minimum 10 characters).');
                isValid = false;
            }

            return isValid;
        }

        /**
         * Show form message
         */
        function showMessage(type, message) {
            formMessage
                .removeClass('success error')
                .addClass(type)
                .html(message)
                .slideDown();

            // Scroll to message
            $('html, body').animate({
                scrollTop: formMessage.offset().top - header.outerHeight() - 20
            }, 400);

            // Hide message after 5 seconds for success
            if (type === 'success') {
                setTimeout(function() {
                    formMessage.slideUp();
                }, 5000);
            }
        }
    }

    /**
     * Handle scroll animations
     */
    function handleAnimations() {
        // Add animation class to elements
        $('.service-card, .stat-item, .process-step, .testimonial-card').addClass('animate-on-scroll');

        // Intersection Observer for animations
        if ('IntersectionObserver' in window) {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animated');
                        // Optionally unobserve after animation
                        // observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Observe all animated elements
            document.querySelectorAll('.animate-on-scroll').forEach(function(element) {
                observer.observe(element);
            });
        }
    }

    /**
     * Handle window resize
     */
    $(window).on('resize', function() {
        // Close mobile menu on resize to desktop
        if ($(window).width() > 768 && navigation.hasClass('active')) {
            navigation.removeClass('active');
            menuToggle.removeClass('active');
            $('body').removeClass('menu-open');
        }
    });

    /**
     * Add loading animation to buttons
     */
    $('.btn').on('click', function() {
        const btn = $(this);
        if (!btn.hasClass('loading') && btn.attr('type') !== 'submit') {
            btn.addClass('loading');
        }
    });

    /**
     * Lazy load images
     */
    if ('loading' in HTMLImageElement.prototype) {
        const images = document.querySelectorAll('img[loading="lazy"]');
        images.forEach(img => {
            img.src = img.dataset.src;
        });
    } else {
        // Fallback for browsers that don't support lazy loading
        const script = document.createElement('script');
        script.src = 'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js';
        document.body.appendChild(script);
    }

    /**
     * Add parallax effect to hero section
     */
    $(window).on('scroll', function() {
        const scrolled = $(window).scrollTop();
        $('.hero').css('transform', 'translateY(' + (scrolled * 0.5) + 'px)');
    });

    /**
     * Counter animation for stats
     */
    function animateCounters() {
        $('.stat-item h3').each(function() {
            const $this = $(this);
            const countTo = $this.text();
            const isNumber = /^\d+$/.test(countTo);

            if (isNumber) {
                $({ countNum: 0 }).animate({
                    countNum: countTo
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(this.countNum);
                    }
                });
            }
        });
    }

    // Trigger counter animation when stats section is visible
    const statsSection = $('.stats-section');
    if (statsSection.length) {
        const statsObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
                    entry.target.classList.add('counted');
                    animateCounters();
                }
            });
        }, { threshold: 0.5 });

        statsSection.each(function() {
            statsObserver.observe(this);
        });
    }

})(jQuery);
