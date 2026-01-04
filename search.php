<?php
/**
 * Template for displaying search results
 *
 * @package Agency_Pro
 */

get_header();
?>

<section class="hero" style="min-height: 50vh; padding-top: 8rem;">
    <div class="hero-content container">
        <h1 class="animate-fade-in-up">
            <?php
            printf(
                esc_html__('Search Results for: %s', 'agency-pro'),
                '<span style="color: var(--accent-color);">"' . get_search_query() . '"</span>'
            );
            ?>
        </h1>
        <?php if (have_posts()) : ?>
            <p class="animate-fade-in-up">
                <?php
                printf(
                    esc_html(_n('Found %s result', 'Found %s results', $wp_query->found_posts, 'agency-pro')),
                    '<strong>' . number_format_i18n($wp_query->found_posts) . '</strong>'
                );
                ?>
            </p>
        <?php endif; ?>
    </div>
</section>

<main id="primary" class="site-main">
    <section class="section">
        <div class="container">
            <?php if (have_posts()) : ?>
                <div style="max-width: 900px; margin: 0 auto;">
                    <?php
                    while (have_posts()) :
                        the_post();
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('service-card'); ?> style="margin-bottom: 2rem;">
                            <div style="display: flex; gap: 2rem; align-items: start;">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div style="flex-shrink: 0;">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('thumbnail', array('style' => 'width: 120px; height: 120px; object-fit: cover; border-radius: 0.5rem;')); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>

                                <div style="flex: 1;">
                                    <div class="entry-meta" style="color: var(--text-secondary); font-size: 0.875rem; margin-bottom: 0.5rem;">
                                        <span><?php echo get_the_date(); ?></span>
                                        <?php if (has_category()) : ?>
                                            <span style="margin-left: 1rem;">
                                                <?php
                                                $categories = get_the_category();
                                                if (!empty($categories)) {
                                                    echo '<span style="background: var(--primary-color); color: white; padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.75rem;">' . esc_html($categories[0]->name) . '</span>';
                                                }
                                                ?>
                                            </span>
                                        <?php endif; ?>
                                    </div>

                                    <h3 style="margin-bottom: 0.75rem;">
                                        <a href="<?php the_permalink(); ?>" style="color: var(--text-primary);">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>

                                    <p style="margin-bottom: 1rem;">
                                        <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                                    </p>

                                    <a href="<?php the_permalink(); ?>" class="service-link">
                                        Read More
                                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M5 12h14M12 5l7 7-7 7"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </article>
                        <?php
                    endwhile;
                    ?>

                    <!-- Pagination -->
                    <div class="pagination" style="margin-top: 3rem; text-align: center;">
                        <?php
                        the_posts_pagination(array(
                            'prev_text' => '← Previous',
                            'next_text' => 'Next →',
                        ));
                        ?>
                    </div>
                </div>

            <?php else : ?>
                
                <div style="max-width: 600px; margin: 0 auto;">
                    <div class="service-card" style="text-align: center; padding: 4rem 2rem;">
                        <svg width="64" height="64" fill="var(--text-secondary)" viewBox="0 0 24 24" style="margin-bottom: 1.5rem; opacity: 0.5;">
                            <circle cx="11" cy="11" r="8"/>
                            <path d="m21 21-4.35-4.35"/>
                        </svg>
                        <h2>No Results Found</h2>
                        <p style="margin-bottom: 2rem;">
                            Sorry, but nothing matched your search terms. Please try again with different keywords.
                        </p>

                        <!-- Search form -->
                        <div style="margin-bottom: 2rem;">
                            <?php get_search_form(); ?>
                        </div>

                        <h4 style="margin-bottom: 1rem;">Suggestions:</h4>
                        <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                            <li>✓ Check your spelling</li>
                            <li>✓ Try more general keywords</li>
                            <li>✓ Try different keywords</li>
                            <li>✓ Browse our <a href="<?php echo esc_url(home_url('/services')); ?>">services page</a></li>
                        </ul>
                    </div>
                </div>

            <?php endif; ?>
        </div>
    </section>
</main>

<?php
get_footer();
