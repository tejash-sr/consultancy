<?php
/**
 * Template for displaying 404 error page
 *
 * @package Agency_Pro
 */

get_header();
?>

<section class="hero" style="min-height: 70vh; display: flex; align-items: center;">
    <div class="hero-content container" style="text-align: center;">
        <h1 style="font-size: 8rem; font-weight: 800; color: white; margin-bottom: 1rem; text-shadow: 0 4px 6px rgba(0,0,0,0.2);">404</h1>
        <h2 style="color: white; margin-bottom: 1.5rem;">Oops! Page Not Found</h2>
        <p style="font-size: 1.25rem; color: rgba(255,255,255,0.9); margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">
            The page you're looking for doesn't exist or has been moved. Don't worry, we'll help you get back on track.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-white btn-large">
                <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24" style="display: inline-block; vertical-align: middle; margin-right: 8px;">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                    <polyline points="9 22 9 12 15 12 15 22"/>
                </svg>
                Go Home
            </a>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-secondary btn-large">
                Contact Us
            </a>
        </div>
    </div>
</section>

<section class="section section-gray">
    <div class="container">
        <h2 class="section-title">Popular Pages</h2>
        <div class="services-grid" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));">
            <div class="service-card">
                <div class="service-icon">
                    <svg width="32" height="32" fill="white" viewBox="0 0 24 24">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                    </svg>
                </div>
                <h3>Home</h3>
                <p>Return to our homepage and explore our services.</p>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="service-link">
                    Visit Page
                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <svg width="32" height="32" fill="white" viewBox="0 0 24 24">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                    </svg>
                </div>
                <h3>About Us</h3>
                <p>Learn more about our company and team.</p>
                <a href="<?php echo esc_url(home_url('/about')); ?>" class="service-link">
                    Visit Page
                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <svg width="32" height="32" fill="white" viewBox="0 0 24 24">
                        <path d="M13 3L4 14h7l-1 7 9-11h-7l1-7z"/>
                    </svg>
                </div>
                <h3>Services</h3>
                <p>Discover what we can do for your business.</p>
                <a href="<?php echo esc_url(home_url('/services')); ?>" class="service-link">
                    Visit Page
                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <svg width="32" height="32" fill="white" viewBox="0 0 24 24">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                        <polyline points="22,6 12,13 2,6"/>
                    </svg>
                </div>
                <h3>Contact</h3>
                <p>Get in touch with us for your project.</p>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="service-link">
                    Visit Page
                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container" style="max-width: 600px; text-align: center;">
        <h2 class="section-title">Search Our Site</h2>
        <p style="margin-bottom: 2rem;">Can't find what you're looking for? Try searching:</p>
        <?php get_search_form(); ?>
    </div>
</section>

<?php
get_footer();
