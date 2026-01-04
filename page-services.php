<?php
/**
 * Template Name: Services Page
 * The template for displaying the Services page
 *
 * @package Agency_Pro
 */

get_header();
?>

<!-- Page Header -->
<section class="hero" style="min-height: 60vh; padding-top: 8rem;">
    <div class="hero-content container">
        <h1 class="animate-fade-in-up">Our Services</h1>
        <p class="animate-fade-in-up">Comprehensive digital solutions designed to accelerate your business growth and digital transformation.</p>
    </div>
</section>

<!-- Services Overview -->
<section class="section">
    <div class="container">
        <h2 class="section-title">What We Offer</h2>
        <p class="section-subtitle">End-to-end digital services that combine creativity, technology, and strategic thinking to deliver measurable results.</p>
    </div>
</section>

<!-- Web Development Service -->
<section class="section section-gray" id="web-development">
    <div class="container">
        <div class="contact-wrapper" style="gap: 3rem; align-items: center;">
            <div>
                <h2 class="gradient-text" style="font-size: 2.5rem;">Web Development</h2>
                <p style="font-size: 1.125rem; line-height: 1.8; color: var(--text-secondary); margin-bottom: 1.5rem;">
                    Build powerful, scalable, and secure websites and web applications that drive business growth. 
                    We specialize in creating custom solutions using modern technologies and frameworks.
                </p>
                
                <h4 style="margin-top: 2rem; margin-bottom: 1rem;">Technologies We Use:</h4>
                <div style="display: flex; flex-wrap: wrap; gap: 0.75rem; margin-bottom: 1.5rem;">
                    <span style="background: white; padding: 0.5rem 1rem; border-radius: 2rem; font-weight: 600; color: var(--primary-color); box-shadow: var(--shadow-sm);">React</span>
                    <span style="background: white; padding: 0.5rem 1rem; border-radius: 2rem; font-weight: 600; color: var(--primary-color); box-shadow: var(--shadow-sm);">Vue.js</span>
                    <span style="background: white; padding: 0.5rem 1rem; border-radius: 2rem; font-weight: 600; color: var(--primary-color); box-shadow: var(--shadow-sm);">Node.js</span>
                    <span style="background: white; padding: 0.5rem 1rem; border-radius: 2rem; font-weight: 600; color: var(--primary-color); box-shadow: var(--shadow-sm);">Python</span>
                    <span style="background: white; padding: 0.5rem 1rem; border-radius: 2rem; font-weight: 600; color: var(--primary-color); box-shadow: var(--shadow-sm);">PHP</span>
                    <span style="background: white; padding: 0.5rem 1rem; border-radius: 2rem; font-weight: 600; color: var(--primary-color); box-shadow: var(--shadow-sm);">WordPress</span>
                </div>
                
                <h4 style="margin-bottom: 1rem;">What We Deliver:</h4>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="20" height="20" fill="var(--success-color)" viewBox="0 0 24 24">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <span>Custom website development</span>
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="20" height="20" fill="var(--success-color)" viewBox="0 0 24 24">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <span>E-commerce solutions</span>
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="20" height="20" fill="var(--success-color)" viewBox="0 0 24 24">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <span>Progressive Web Apps (PWA)</span>
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="20" height="20" fill="var(--success-color)" viewBox="0 0 24 24">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <span>Content Management Systems</span>
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="20" height="20" fill="var(--success-color)" viewBox="0 0 24 24">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <span>API development & integration</span>
                    </li>
                </ul>
            </div>
            <div>
                <div class="service-card" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 3rem;">
                    <svg width="64" height="64" fill="white" viewBox="0 0 24 24" style="margin-bottom: 1.5rem;">
                        <path d="M13 3L4 14h7l-1 7 9-11h-7l1-7z"/>
                    </svg>
                    <h3 style="color: white; font-size: 2rem; margin-bottom: 1rem;">Fast & Scalable</h3>
                    <p style="color: rgba(255, 255, 255, 0.95); font-size: 1.125rem;">Optimized for performance and built to scale with your business growth.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- App Development Service -->
<section class="section" id="app-development">
    <div class="container">
        <div class="contact-wrapper" style="gap: 3rem; align-items: center; flex-direction: row-reverse;">
            <div>
                <h2 class="gradient-text" style="font-size: 2.5rem;">App Development</h2>
                <p style="font-size: 1.125rem; line-height: 1.8; color: var(--text-secondary); margin-bottom: 1.5rem;">
                    Create stunning mobile applications for iOS and Android that engage users and drive business results. 
                    We build native and cross-platform apps that deliver exceptional user experiences.
                </p>
                
                <h4 style="margin-top: 2rem; margin-bottom: 1rem;">Platforms & Technologies:</h4>
                <div style="display: flex; flex-wrap: wrap; gap: 0.75rem; margin-bottom: 1.5rem;">
                    <span style="background: var(--background-gray); padding: 0.5rem 1rem; border-radius: 2rem; font-weight: 600; color: var(--primary-color); box-shadow: var(--shadow-sm);">React Native</span>
                    <span style="background: var(--background-gray); padding: 0.5rem 1rem; border-radius: 2rem; font-weight: 600; color: var(--primary-color); box-shadow: var(--shadow-sm);">Flutter</span>
                    <span style="background: var(--background-gray); padding: 0.5rem 1rem; border-radius: 2rem; font-weight: 600; color: var(--primary-color); box-shadow: var(--shadow-sm);">iOS Native</span>
                    <span style="background: var(--background-gray); padding: 0.5rem 1rem; border-radius: 2rem; font-weight: 600; color: var(--primary-color); box-shadow: var(--shadow-sm);">Android Native</span>
                    <span style="background: var(--background-gray); padding: 0.5rem 1rem; border-radius: 2rem; font-weight: 600; color: var(--primary-color); box-shadow: var(--shadow-sm);">Ionic</span>
                </div>
                
                <h4 style="margin-bottom: 1rem;">App Solutions:</h4>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="20" height="20" fill="var(--success-color)" viewBox="0 0 24 24">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <span>iOS & Android app development</span>
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="20" height="20" fill="var(--success-color)" viewBox="0 0 24 24">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <span>Cross-platform development</span>
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="20" height="20" fill="var(--success-color)" viewBox="0 0 24 24">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <span>App Store optimization</span>
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="20" height="20" fill="var(--success-color)" viewBox="0 0 24 24">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <span>App maintenance & support</span>
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="20" height="20" fill="var(--success-color)" viewBox="0 0 24 24">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <span>Backend & API integration</span>
                    </li>
                </ul>
            </div>
            <div>
                <div class="service-card" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); color: white; padding: 3rem;">
                    <svg width="64" height="64" fill="white" viewBox="0 0 24 24" style="margin-bottom: 1.5rem;">
                        <rect x="5" y="2" width="14" height="20" rx="2" ry="2"/>
                        <line x1="12" y1="18" x2="12.01" y2="18"/>
                    </svg>
                    <h3 style="color: white; font-size: 2rem; margin-bottom: 1rem;">User-Centric Design</h3>
                    <p style="color: rgba(255, 255, 255, 0.95); font-size: 1.125rem;">Intuitive interfaces that users love and engage with daily.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- UI/UX Design Service -->
<section class="section section-gray" id="ui-ux-design">
    <div class="container">
        <div class="contact-wrapper" style="gap: 3rem; align-items: center;">
            <div>
                <h2 class="gradient-text" style="font-size: 2.5rem;">UI/UX Design</h2>
                <p style="font-size: 1.125rem; line-height: 1.8; color: var(--text-secondary); margin-bottom: 1.5rem;">
                    Design beautiful, intuitive interfaces that users love. We combine aesthetic excellence with 
                    user-centered design principles to create engaging digital experiences.
                </p>
                
                <h4 style="margin-top: 2rem; margin-bottom: 1rem;">Design Services:</h4>
                <div style="display: flex; flex-wrap: wrap; gap: 0.75rem; margin-bottom: 1.5rem;">
                    <span style="background: white; padding: 0.5rem 1rem; border-radius: 2rem; font-weight: 600; color: var(--primary-color); box-shadow: var(--shadow-sm);">User Research</span>
                    <span style="background: white; padding: 0.5rem 1rem; border-radius: 2rem; font-weight: 600; color: var(--primary-color); box-shadow: var(--shadow-sm);">Wireframing</span>
                    <span style="background: white; padding: 0.5rem 1rem; border-radius: 2rem; font-weight: 600; color: var(--primary-color); box-shadow: var(--shadow-sm);">Prototyping</span>
                    <span style="background: white; padding: 0.5rem 1rem; border-radius: 2rem; font-weight: 600; color: var(--primary-color); box-shadow: var(--shadow-sm);">Visual Design</span>
                    <span style="background: white; padding: 0.5rem 1rem; border-radius: 2rem; font-weight: 600; color: var(--primary-color); box-shadow: var(--shadow-sm);">Usability Testing</span>
                </div>
                
                <h4 style="margin-bottom: 1rem;">Design Deliverables:</h4>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="20" height="20" fill="var(--success-color)" viewBox="0 0 24 24">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <span>User interface design</span>
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="20" height="20" fill="var(--success-color)" viewBox="0 0 24 24">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <span>User experience strategy</span>
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="20" height="20" fill="var(--success-color)" viewBox="0 0 24 24">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <span>Interactive prototypes</span>
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="20" height="20" fill="var(--success-color)" viewBox="0 0 24 24">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <span>Design systems & style guides</span>
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="20" height="20" fill="var(--success-color)" viewBox="0 0 24 24">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <span>Responsive design for all devices</span>
                    </li>
                </ul>
            </div>
            <div>
                <div class="service-card" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); color: white; padding: 3rem;">
                    <svg width="64" height="64" fill="white" viewBox="0 0 24 24" style="margin-bottom: 1.5rem;">
                        <circle cx="12" cy="12" r="3"/>
                        <path d="M12 1v6m0 6v6m9.22-7.22l-4.24 4.24m-5.96 0l-4.24-4.24M1 12h6m6 0h6m-3.78 9.22l-4.24-4.24m0-5.96l4.24-4.24"/>
                    </svg>
                    <h3 style="color: white; font-size: 2rem; margin-bottom: 1rem;">Design Excellence</h3>
                    <p style="color: rgba(255, 255, 255, 0.95); font-size: 1.125rem;">Award-winning designs that combine beauty with functionality.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- AI & Automation Service -->
<section class="section" id="ai-consulting">
    <div class="container">
        <div class="contact-wrapper" style="gap: 3rem; align-items: center; flex-direction: row-reverse;">
            <div>
                <h2 class="gradient-text" style="font-size: 2.5rem;">AI & Automation</h2>
                <p style="font-size: 1.125rem; line-height: 1.8; color: var(--text-secondary); margin-bottom: 1.5rem;">
                    Harness the power of artificial intelligence and automation to transform your business operations, 
                    enhance decision-making, and gain competitive advantages in the digital age.
                </p>
                
                <h4 style="margin-top: 2rem; margin-bottom: 1rem;">AI Technologies:</h4>
                <div style="display: flex; flex-wrap: wrap; gap: 0.75rem; margin-bottom: 1.5rem;">
                    <span style="background: var(--background-gray); padding: 0.5rem 1rem; border-radius: 2rem; font-weight: 600; color: var(--primary-color); box-shadow: var(--shadow-sm);">Machine Learning</span>
                    <span style="background: var(--background-gray); padding: 0.5rem 1rem; border-radius: 2rem; font-weight: 600; color: var(--primary-color); box-shadow: var(--shadow-sm);">Natural Language Processing</span>
                    <span style="background: var(--background-gray); padding: 0.5rem 1rem; border-radius: 2rem; font-weight: 600; color: var(--primary-color); box-shadow: var(--shadow-sm);">Computer Vision</span>
                    <span style="background: var(--background-gray); padding: 0.5rem 1rem; border-radius: 2rem; font-weight: 600; color: var(--primary-color); box-shadow: var(--shadow-sm);">Predictive Analytics</span>
                </div>
                
                <h4 style="margin-bottom: 1rem;">AI Solutions:</h4>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="20" height="20" fill="var(--success-color)" viewBox="0 0 24 24">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <span>AI strategy & consulting</span>
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="20" height="20" fill="var(--success-color)" viewBox="0 0 24 24">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <span>Process automation</span>
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="20" height="20" fill="var(--success-color)" viewBox="0 0 24 24">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <span>Chatbots & virtual assistants</span>
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="20" height="20" fill="var(--success-color)" viewBox="0 0 24 24">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <span>Data analytics & insights</span>
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="20" height="20" fill="var(--success-color)" viewBox="0 0 24 24">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <span>Custom AI model development</span>
                    </li>
                </ul>
            </div>
            <div>
                <div class="service-card" style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%); color: var(--text-primary); padding: 3rem;">
                    <svg width="64" height="64" fill="var(--primary-color)" viewBox="0 0 24 24" style="margin-bottom: 1.5rem;">
                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                        <polyline points="3.27 6.96 12 12.01 20.73 6.96"/>
                        <line x1="12" y1="22.08" x2="12" y2="12"/>
                    </svg>
                    <h3 style="font-size: 2rem; margin-bottom: 1rem;">Future-Ready Solutions</h3>
                    <p style="font-size: 1.125rem;">Cutting-edge AI that drives efficiency and innovation.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section stats-section">
    <div class="container text-center">
        <h2 class="section-title text-white" style="font-size: 3rem;">Ready to Start Your Project?</h2>
        <p class="section-subtitle text-white" style="color: rgba(255, 255, 255, 0.9) !important; font-size: 1.25rem;">Let's discuss your requirements and create a tailored solution for your business.</p>
        <div style="margin-top: 2rem;">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-white btn-large">Contact Us Today</a>
        </div>
    </div>
</section>

<?php
get_footer();
