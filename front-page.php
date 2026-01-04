<?php
/**
 * Template Name: Front Page
 * The template for displaying the home page
 *
 * @package Agency_Pro
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content container">
        <h1 class="animate-fade-in-up">Transform Your Business with Cutting-Edge Digital Solutions</h1>
        <p class="animate-fade-in-up">We craft innovative web, mobile, and AI-powered solutions that drive growth, enhance user experience, and position your brand for the digital future.</p>
        <div class="hero-buttons animate-fade-in-up">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-white btn-large">Get Started</a>
            <a href="<?php echo esc_url(home_url('/services')); ?>" class="btn btn-secondary btn-large">Our Services</a>
        </div>
    </div>
</section>

<!-- Services Overview Section -->
<section class="section" id="services">
    <div class="container">
        <h2 class="section-title">Our Expertise</h2>
        <p class="section-subtitle">We deliver comprehensive digital solutions tailored to your business needs, combining technical excellence with creative innovation.</p>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <svg width="32" height="32" fill="white" viewBox="0 0 24 24">
                        <path d="M13 3L4 14h7l-1 7 9-11h-7l1-7z"/>
                    </svg>
                </div>
                <h3>Web Development</h3>
                <p>Build powerful, scalable websites and web applications using cutting-edge technologies. From responsive designs to complex enterprise solutions.</p>
                <a href="<?php echo esc_url(home_url('/services#web-development')); ?>" class="service-link">
                    Learn More 
                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <svg width="32" height="32" fill="white" viewBox="0 0 24 24">
                        <rect x="5" y="2" width="14" height="20" rx="2" ry="2"/>
                        <line x1="12" y1="18" x2="12.01" y2="18"/>
                    </svg>
                </div>
                <h3>App Development</h3>
                <p>Native and cross-platform mobile applications that deliver seamless user experiences on iOS and Android devices.</p>
                <a href="<?php echo esc_url(home_url('/services#app-development')); ?>" class="service-link">
                    Learn More 
                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <svg width="32" height="32" fill="white" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="3"/>
                        <path d="M12 1v6m0 6v6m9.22-7.22l-4.24 4.24m-5.96 0l-4.24-4.24M1 12h6m6 0h6m-3.78 9.22l-4.24-4.24m0-5.96l4.24-4.24"/>
                    </svg>
                </div>
                <h3>UI/UX Design</h3>
                <p>Create intuitive, visually stunning interfaces that users love. We combine aesthetics with functionality for optimal engagement.</p>
                <a href="<?php echo esc_url(home_url('/services#ui-ux-design')); ?>" class="service-link">
                    Learn More 
                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <svg width="32" height="32" fill="white" viewBox="0 0 24 24">
                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                        <polyline points="3.27 6.96 12 12.01 20.73 6.96"/>
                        <line x1="12" y1="22.08" x2="12" y2="12"/>
                    </svg>
                </div>
                <h3>AI & Automation</h3>
                <p>Leverage artificial intelligence and automation to streamline operations, enhance decision-making, and stay ahead of the competition.</p>
                <a href="<?php echo esc_url(home_url('/services#ai-consulting')); ?>" class="service-link">
                    Learn More 
                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Stats & USP Section -->
<section class="section stats-section">
    <div class="container">
        <h2 class="section-title text-white">Why Choose Us</h2>
        <div class="stats-grid">
            <div class="stat-item">
                <h3>500+</h3>
                <p>Projects Delivered</p>
            </div>
            <div class="stat-item">
                <h3>98%</h3>
                <p>Client Satisfaction</p>
            </div>
            <div class="stat-item">
                <h3>50+</h3>
                <p>Expert Team Members</p>
            </div>
            <div class="stat-item">
                <h3>24/7</h3>
                <p>Support Available</p>
            </div>
        </div>
    </div>
</section>

<!-- USP Section -->
<section class="section section-gray">
    <div class="container">
        <h2 class="section-title">What Sets Us Apart</h2>
        <p class="section-subtitle">We combine technical excellence, creative innovation, and strategic thinking to deliver exceptional results.</p>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <svg width="32" height="32" fill="white" viewBox="0 0 24 24">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                        <polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                </div>
                <h3>Quality Assurance</h3>
                <p>Rigorous testing and quality control ensure every project meets the highest standards of performance and reliability.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <svg width="32" height="32" fill="white" viewBox="0 0 24 24">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                    </svg>
                </div>
                <h3>Agile Methodology</h3>
                <p>Flexible, iterative development process that adapts to your needs and delivers results faster.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <svg width="32" height="32" fill="white" viewBox="0 0 24 24">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <h3>Security First</h3>
                <p>Enterprise-grade security measures protect your data and ensure compliance with industry standards.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <svg width="32" height="32" fill="white" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12 6 12 12 16 14"/>
                    </svg>
                </div>
                <h3>On-Time Delivery</h3>
                <p>We respect your timeline and consistently deliver projects on schedule without compromising quality.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <svg width="32" height="32" fill="white" viewBox="0 0 24 24">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87m-4-12a4 4 0 0 1 0 7.75"/>
                    </svg>
                </div>
                <h3>Expert Team</h3>
                <p>Seasoned professionals with deep expertise across multiple technologies and industries.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <svg width="32" height="32" fill="white" viewBox="0 0 24 24">
                        <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
                    </svg>
                </div>
                <h3>24/7 Support</h3>
                <p>Round-the-clock support ensures your business stays running smoothly without interruption.</p>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="section">
    <div class="container">
        <h2 class="section-title">Our Process</h2>
        <p class="section-subtitle">A proven methodology that ensures successful project delivery from concept to launch.</p>
        
        <div class="process-steps">
            <div class="process-step">
                <div class="step-number">1</div>
                <h4>Discovery & Planning</h4>
                <p>We analyze your requirements, understand your goals, and create a comprehensive project roadmap.</p>
            </div>

            <div class="process-step">
                <div class="step-number">2</div>
                <h4>Design & Prototype</h4>
                <p>Our designers create intuitive interfaces and interactive prototypes for your approval.</p>
            </div>

            <div class="process-step">
                <div class="step-number">3</div>
                <h4>Development</h4>
                <p>Expert developers bring your vision to life using cutting-edge technologies and best practices.</p>
            </div>

            <div class="process-step">
                <div class="step-number">4</div>
                <h4>Testing & QA</h4>
                <p>Rigorous testing ensures your solution is bug-free, secure, and performs flawlessly.</p>
            </div>

            <div class="process-step">
                <div class="step-number">5</div>
                <h4>Launch & Support</h4>
                <p>We deploy your solution and provide ongoing support to ensure continued success.</p>
            </div>
        </div>
    </div>
</section>

<!-- Client Logos Section -->
<section class="section section-gray">
    <div class="container">
        <h2 class="section-title">Trusted by Industry Leaders</h2>
        <p class="section-subtitle">We've partnered with innovative companies across various industries to deliver exceptional digital solutions.</p>
        
        <div class="stats-grid" style="margin-top: 3rem;">
            <div class="stat-item" style="opacity: 0.6;">
                <div style="width: 150px; height: 60px; background: #ddd; margin: 0 auto; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-weight: 600; color: #666;">CLIENT LOGO</div>
            </div>
            <div class="stat-item" style="opacity: 0.6;">
                <div style="width: 150px; height: 60px; background: #ddd; margin: 0 auto; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-weight: 600; color: #666;">CLIENT LOGO</div>
            </div>
            <div class="stat-item" style="opacity: 0.6;">
                <div style="width: 150px; height: 60px; background: #ddd; margin: 0 auto; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-weight: 600; color: #666;">CLIENT LOGO</div>
            </div>
            <div class="stat-item" style="opacity: 0.6;">
                <div style="width: 150px; height: 60px; background: #ddd; margin: 0 auto; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-weight: 600; color: #666;">CLIENT LOGO</div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="section">
    <div class="container">
        <h2 class="section-title">What Our Clients Say</h2>
        <p class="section-subtitle">Don't just take our word for it - hear from businesses that have transformed their digital presence with us.</p>
        
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <p class="testimonial-quote">"Working with this agency was an absolute pleasure. They delivered a stunning website that exceeded our expectations and significantly improved our conversion rates."</p>
                <div class="testimonial-author">
                    <div class="author-avatar">JD</div>
                    <div class="author-info">
                        <h5>John Doe</h5>
                        <p>CEO, Tech Innovations Inc.</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <p class="testimonial-quote">"The team's expertise in app development helped us launch our product ahead of schedule. Their attention to detail and commitment to quality is unmatched."</p>
                <div class="testimonial-author">
                    <div class="author-avatar">SS</div>
                    <div class="author-info">
                        <h5>Sarah Smith</h5>
                        <p>Product Manager, StartupHub</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <p class="testimonial-quote">"From concept to execution, they guided us every step of the way. The AI solution they built has streamlined our operations and saved us countless hours."</p>
                <div class="testimonial-author">
                    <div class="author-avatar">MJ</div>
                    <div class="author-info">
                        <h5>Michael Johnson</h5>
                        <p>CTO, Enterprise Solutions Ltd.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA Section -->
<section class="section stats-section">
    <div class="container text-center">
        <h2 class="section-title text-white" style="font-size: 3rem;">Ready to Transform Your Business?</h2>
        <p class="section-subtitle text-white" style="color: rgba(255, 255, 255, 0.9) !important; font-size: 1.25rem;">Let's discuss how we can help you achieve your digital goals and drive growth.</p>
        <div style="margin-top: 2rem;">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-white btn-large">Get in Touch Today</a>
        </div>
    </div>
</section>

<?php
get_footer();
