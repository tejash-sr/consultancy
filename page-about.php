<?php
/**
 * Template Name: About Page
 * The template for displaying the About Us page
 *
 * @package Agency_Pro
 */

get_header();
?>

<!-- Page Header -->
<section class="hero" style="min-height: 60vh; padding-top: 8rem;">
    <div class="hero-content container">
        <h1 class="animate-fade-in-up">About Us</h1>
        <p class="animate-fade-in-up">Empowering businesses through innovative digital solutions and strategic technology partnerships.</p>
    </div>
</section>

<!-- Mission & Vision Section -->
<section class="section">
    <div class="container">
        <div class="contact-wrapper" style="gap: 4rem; align-items: center;">
            <div>
                <h2 class="gradient-text">Our Mission</h2>
                <p style="font-size: 1.125rem; line-height: 1.8; color: var(--text-secondary);">
                    We exist to transform businesses through cutting-edge technology and innovative digital solutions. 
                    Our mission is to bridge the gap between complex technology and business success, making advanced 
                    digital capabilities accessible to organizations of all sizes.
                </p>
                <p style="font-size: 1.125rem; line-height: 1.8; color: var(--text-secondary);">
                    We believe that every business deserves world-class digital solutions that drive growth, enhance 
                    customer experiences, and create lasting competitive advantages in an increasingly digital world.
                </p>
            </div>
            <div>
                <div class="service-card" style="background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); color: white;">
                    <h2 style="color: white; font-size: 3rem; margin-bottom: 1rem;">10+</h2>
                    <h4 style="color: white; margin-bottom: 0.5rem;">Years of Excellence</h4>
                    <p style="color: rgba(255, 255, 255, 0.9);">Delivering innovation and driving digital transformation across industries.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Story Section -->
<section class="section section-gray">
    <div class="container">
        <h2 class="section-title">Our Story</h2>
        <p class="section-subtitle">From a small team of passionate developers to a full-service digital agency trusted by businesses worldwide.</p>
        
        <div style="max-width: 900px; margin: 0 auto;">
            <p style="font-size: 1.125rem; line-height: 1.8; color: var(--text-secondary); margin-bottom: 1.5rem;">
                Founded with a vision to democratize access to enterprise-grade technology, we started as a small team 
                of developers passionate about solving complex business challenges through innovative software solutions.
            </p>
            <p style="font-size: 1.125rem; line-height: 1.8; color: var(--text-secondary); margin-bottom: 1.5rem;">
                Over the years, we've grown into a full-service digital agency, expanding our expertise across web 
                development, mobile applications, UI/UX design, and cutting-edge AI solutions. What hasn't changed is 
                our commitment to excellence, innovation, and putting our clients' success first.
            </p>
            <p style="font-size: 1.125rem; line-height: 1.8; color: var(--text-secondary);">
                Today, we're proud to serve clients across diverse industries, from startups disrupting their markets 
                to established enterprises embracing digital transformation. Each project is an opportunity to push 
                boundaries, deliver exceptional results, and build lasting partnerships.
            </p>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="section">
    <div class="container">
        <h2 class="section-title">Our Core Values</h2>
        <p class="section-subtitle">The principles that guide everything we do and define who we are as an organization.</p>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <svg width="32" height="32" fill="white" viewBox="0 0 24 24">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                        <polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                </div>
                <h3>Excellence</h3>
                <p>We pursue perfection in every project, delivering solutions that exceed expectations and set new standards in digital innovation.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <svg width="32" height="32" fill="white" viewBox="0 0 24 24">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <h3>Integrity</h3>
                <p>Honesty, transparency, and ethical practices form the foundation of every client relationship and business decision.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <svg width="32" height="32" fill="white" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="3"/>
                        <path d="M12 1v6m0 6v6m9.22-7.22l-4.24 4.24m-5.96 0l-4.24-4.24M1 12h6m6 0h6m-3.78 9.22l-4.24-4.24m0-5.96l4.24-4.24"/>
                    </svg>
                </div>
                <h3>Innovation</h3>
                <p>We embrace emerging technologies and creative problem-solving to deliver solutions that give our clients a competitive edge.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <svg width="32" height="32" fill="white" viewBox="0 0 24 24">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87m-4-12a4 4 0 0 1 0 7.75"/>
                    </svg>
                </div>
                <h3>Collaboration</h3>
                <p>We work closely with clients as partners, combining our expertise with their insights to achieve remarkable results.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <svg width="32" height="32" fill="white" viewBox="0 0 24 24">
                        <polyline points="20 6 9 17 4 12"/>
                    </svg>
                </div>
                <h3>Accountability</h3>
                <p>We take ownership of our commitments, delivering on promises and standing behind every solution we create.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <svg width="32" height="32" fill="white" viewBox="0 0 24 24">
                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
                    </svg>
                </div>
                <h3>Continuous Learning</h3>
                <p>In a rapidly evolving industry, we invest in continuous education to stay at the forefront of technology and best practices.</p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="section section-gray">
    <div class="container">
        <h2 class="section-title">Meet Our Team</h2>
        <p class="section-subtitle">A diverse group of talented professionals passionate about creating exceptional digital experiences.</p>
        
        <div class="services-grid" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));">
            <div class="service-card" style="text-align: center;">
                <div style="width: 120px; height: 120px; background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; font-size: 2.5rem; color: white; font-weight: 700;">JS</div>
                <h4>John Smith</h4>
                <p style="color: var(--primary-color); font-weight: 600; margin-bottom: 0.5rem;">Chief Executive Officer</p>
                <p>Visionary leader with 15+ years in technology and business strategy.</p>
            </div>

            <div class="service-card" style="text-align: center;">
                <div style="width: 120px; height: 120px; background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; font-size: 2.5rem; color: white; font-weight: 700;">EM</div>
                <h4>Emily Martinez</h4>
                <p style="color: var(--primary-color); font-weight: 600; margin-bottom: 0.5rem;">Chief Technology Officer</p>
                <p>Tech innovator specializing in scalable architecture and emerging technologies.</p>
            </div>

            <div class="service-card" style="text-align: center;">
                <div style="width: 120px; height: 120px; background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; font-size: 2.5rem; color: white; font-weight: 700;">DL</div>
                <h4>David Lee</h4>
                <p style="color: var(--primary-color); font-weight: 600; margin-bottom: 0.5rem;">Head of Design</p>
                <p>Award-winning designer creating intuitive and beautiful user experiences.</p>
            </div>

            <div class="service-card" style="text-align: center;">
                <div style="width: 120px; height: 120px; background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; font-size: 2.5rem; color: white; font-weight: 700;">SP</div>
                <h4>Sarah Patel</h4>
                <p style="color: var(--primary-color); font-weight: 600; margin-bottom: 0.5rem;">Project Manager</p>
                <p>Expert in agile methodologies ensuring seamless project execution.</p>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="section stats-section">
    <div class="container">
        <h2 class="section-title text-white">Our Impact in Numbers</h2>
        <div class="stats-grid">
            <div class="stat-item">
                <h3>500+</h3>
                <p>Successful Projects</p>
            </div>
            <div class="stat-item">
                <h3>200+</h3>
                <p>Happy Clients</p>
            </div>
            <div class="stat-item">
                <h3>50+</h3>
                <p>Team Members</p>
            </div>
            <div class="stat-item">
                <h3>15+</h3>
                <p>Countries Served</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section">
    <div class="container text-center">
        <h2 class="section-title">Ready to Work Together?</h2>
        <p class="section-subtitle">Let's discuss how our expertise can help drive your business forward.</p>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary btn-large">Get in Touch</a>
    </div>
</section>

<?php
get_footer();
