<?php
/**
 * Template for displaying generic pages
 *
 * @package Agency_Pro
 */

get_header();
?>

<section class="hero" style="min-height: 50vh; padding-top: 8rem;">
    <div class="hero-content container">
        <h1 class="animate-fade-in-up"><?php the_title(); ?></h1>
    </div>
</section>

<main id="primary" class="site-main">
    <section class="section">
        <div class="container" style="max-width: 900px;">
            <?php
            while (have_posts()) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail" style="margin-bottom: 2rem;">
                            <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: auto; border-radius: 1rem;')); ?>
                        </div>
                    <?php endif; ?>

                    <div class="entry-content" style="line-height: 1.8; font-size: 1.125rem;">
                        <?php
                        the_content();

                        wp_link_pages(array(
                            'before' => '<div class="page-links" style="margin-top: 2rem; padding: 1rem; background: var(--background-gray); border-radius: 0.5rem;">' . esc_html__('Pages:', 'agency-pro'),
                            'after'  => '</div>',
                        ));
                        ?>
                    </div>
                </article>

                <?php
                // If comments are open or we have at least one comment, load up the comment template.
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
