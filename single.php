
<?php
/**
 * Template for displaying single posts
 *
 * @package Agency_Pro
 */

get_header();
?>

<main id="primary" class="site-main">
    <section class="section">
        <div class="container" style="max-width: 900px;">
            <?php
            while (have_posts()) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header" style="margin-bottom: 2rem;">
                        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                        
                        <div class="entry-meta" style="color: var(--text-secondary); margin-top: 1rem;">
                            <span>
                                <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24" style="display: inline-block; vertical-align: middle; margin-right: 5px;">
                                    <circle cx="12" cy="12" r="10"/>
                                    <polyline points="12 6 12 12 16 14"/>
                                </svg>
                                <?php echo get_the_date(); ?>
                            </span>
                            <?php if (has_category()) : ?>
                                <span style="margin-left: 1rem;">
                                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24" style="display: inline-block; vertical-align: middle; margin-right: 5px;">
                                        <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/>
                                        <line x1="7" y1="7" x2="7.01" y2="7"/>
                                    </svg>
                                    <?php the_category(', '); ?>
                                </span>
                            <?php endif; ?>
                        </div>
                    </header>

                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail" style="margin-bottom: 2rem;">
                            <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: auto; border-radius: 1rem;')); ?>
                        </div>
                    <?php endif; ?>

                    <div class="entry-content" style="line-height: 1.8; font-size: 1.125rem;">
                        <?php
                        the_content();

                        wp_link_pages(array(
                            'before' => '<div class="page-links" style="margin-top: 2rem;">' . esc_html__('Pages:', 'agency-pro'),
                            'after'  => '</div>',
                        ));
                        ?>
                    </div>

                    <?php if (get_the_tags()) : ?>
                        <div class="entry-tags" style="margin-top: 2rem; padding-top: 2rem; border-top: 1px solid var(--border-color);">
                            <strong>Tags:</strong>
                            <?php the_tags('', ', ', ''); ?>
                        </div>
                    <?php endif; ?>
                </article>

                <?php
                // Author bio (optional)
                if (get_the_author_meta('description')) :
                    ?>
                    <div class="author-bio" style="margin-top: 3rem; padding: 2rem; background: var(--background-gray); border-radius: 1rem;">
                        <h3 style="margin-bottom: 1rem;">About <?php echo get_the_author(); ?></h3>
                        <p><?php echo get_the_author_meta('description'); ?></p>
                    </div>
                    <?php
                endif;

                // Navigation
                ?>
                <div class="post-navigation" style="margin-top: 3rem; display: flex; justify-content: space-between; gap: 2rem;">
                    <?php
                    $prev_post = get_previous_post();
                    $next_post = get_next_post();
                    
                    if ($prev_post) :
                        ?>
                        <div class="nav-previous" style="flex: 1;">
                            <a href="<?php echo get_permalink($prev_post); ?>" class="btn btn-secondary">
                                ← Previous Post
                            </a>
                        </div>
                        <?php
                    endif;

                    if ($next_post) :
                        ?>
                        <div class="nav-next" style="flex: 1; text-align: right;">
                            <a href="<?php echo get_permalink($next_post); ?>" class="btn btn-secondary">
                                Next Post →
                            </a>
                        </div>
                        <?php
                    endif;
                    ?>
                </div>

                <?php
                // Comments
                if (comments_open() || get_comments_number()) :
                    ?>
                    <div style="margin-top: 3rem;">
                        <?php comments_template(); ?>
                    </div>
                    <?php
                endif;

            endwhile;
            ?>
        </div>
    </section>
</main>

<?php
get_footer();
