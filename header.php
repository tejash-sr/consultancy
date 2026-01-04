<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" id="masthead">
    <div class="header-inner">
        <div class="site-branding">
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo" rel="home">
                    <span><?php bloginfo('name'); ?></span>
                </a>
                <?php
            }
            ?>
        </div>

        <button class="menu-toggle" id="menuToggle" aria-label="Toggle menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav class="main-navigation" id="site-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_id'        => 'primary-menu',
                'container'      => false,
                'fallback_cb'    => 'agency_pro_default_menu',
            ));
            ?>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">Get in Touch</a>
        </nav>
    </div>
</header>

<?php
// Default menu if no menu is set
function agency_pro_default_menu() {
    ?>
    <ul id="primary-menu">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
        <li><a href="<?php echo esc_url(home_url('/about')); ?>">About</a></li>
        <li><a href="<?php echo esc_url(home_url('/services')); ?>">Services</a></li>
        <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
    </ul>
    <?php
}
?>
