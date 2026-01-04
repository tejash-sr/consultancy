<?php
/**
 * Template for displaying archive pages (blog, categories, tags)
 *
 * @package Agency_Pro
 */

get_header();
?>

<section class="hero" style="min-height: 50vh; padding-top: 8rem;">
    <div class="hero-content container">
        <h1 class="animate-fade-in-up">
            <?php
            if (is_category()) {
                single_cat_title();
            } elseif (is_tag()) {
                single_tag_title();
            } elseif (is_author()) {
                echo 'Author: ' . get_the_author();
            } elseif (is_date()) {
                echo 'Archive: ' . get_the_date();
            } else {
                echo 'Blog';
            }
            ?>
        </h1>
        <?php if (is_category() && category_description()) : ?>
            <p class="animate-fade-in-up"><?php echo category_description(); ?></p>
        <?php else : ?>
            <p class="animate-fade-in-up">Insights, updates, and industry expertise from our team.</p>
        <?php endif; ?>
    </div>
</section>

<main id="primary" class="site-main">
    <section class="section">
        <div class="container">
            <?php if (have_posts()) : ?>
                <div class="services-grid">
                    <?php
                    while (have_posts()) :
                        the_post();
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('service-card'); ?>>
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium', array('style' => 'width: 100%; height: 200px; object-fit: cover; border-radius: 0.5rem; margin-bottom: 1rem;')); ?>
                                </a>
                            <?php endif; ?>

                            <div class="entry-meta" style="color: var(--text-secondary); font-size: 0.875rem; margin-bottom: 0.75rem;">
                                <span><?php echo get_the_date(); ?></span>
                                <?php if (has_category()) : ?>
                                    <span style="margin-left: 1rem;"><?php the_category(', '); ?></span>
                                <?php endif; ?>
                            </div>

                            <h3>
                                <a href="<?php the_permalink(); ?>" style="color: var(--text-primary);">
                                    <?php the_title(); ?>
                                </a>
                            </h3>

                            <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>

                            <a href="<?php the_permalink(); ?>" class="service-link" style="margin-top: 1rem;">
                                Read More
                                <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </article>
                        <?php
                    endwhile;
                    ?>
                </div>

                <!-- Pagination -->
                <div class="pagination" style="margin-top: 3rem; text-align: center;">
                    <?php
                    the_posts_pagination(array(
                        'prev_text' => '← Previous',
                        'next_text' => 'Next →',
                        'before_page_number' => '<span class="meta-nav screen-reader-text">Page </span>',
                    ));
                    ?>
                </div>

            <?php else : ?>
                
                <div class="service-card" style="text-align: center; padding: 4rem 2rem;">
                    <h2>No posts found</h2>
                    <p>Sorry, but nothing matched your search terms. Please try again with different keywords.</p>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary" style="margin-top: 1rem;">
                        Return Home
                    </a>
                </div>

            <?php endif; ?>
        </div>
    </section>
</main>

<?php
get_footer();
