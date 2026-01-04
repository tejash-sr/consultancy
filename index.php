<?php
/**
 * The main template file
 *
 * @package Agency_Pro
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="container">
                    <header class="entry-header">
                        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                    </header>

                    <div class="entry-content">
                        <?php
                        the_content();

                        wp_link_pages(array(
                            'before' => '<div class="page-links">' . esc_html__('Pages:', 'agency-pro'),
                            'after'  => '</div>',
                        ));
                        ?>
                    </div>
                </div>
            </article>
            <?php
        endwhile;
    else :
        ?>
        <div class="container">
            <p><?php esc_html_e('No content found.', 'agency-pro'); ?></p>
        </div>
        <?php
    endif;
    ?>
</main>

<?php
get_footer();
