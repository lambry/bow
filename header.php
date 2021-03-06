<?php
/**
 * The template for displaying the header.
 *
 * @package Bow
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php get_template_part('partials/header', 'meta'); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'bow'); ?></a>

    <header id="masthead" class="site-header" role="banner">
        <div class="container-fluid">
            <div class="row">

                <div class="site-branding col-xs-12 col-md-6">
                    <?php the_custom_logo(); ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <h2 class="site-title"><?php bloginfo('name'); ?></h2>
                    </a>
                    <?php if (get_theme_mod('display_tagline', true) || is_customize_preview()) : ?>
                        <h4 class="site-description"><?php bloginfo('description', 'display'); ?></h4>
                    <?php endif; ?>
                    <div class="primary-toggle"><i></i></div>
                </div><!-- .site-branding -->

                <nav class="primary-navigation col-xs-12 col-md-6" role="navigation">
                    <?php wp_nav_menu([ 'theme_location' => 'primary' ]); ?>
                </nav><!-- .primary-navigation -->

            </div><!-- .row -->
        </div><!-- .container -->
    </header><!-- .site-header -->

    <div id="content" class="site-content">
        <div class="container-fluid">
            <div class="row">
