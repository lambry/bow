<?php
/**
 * The template for displaying all single posts.
 *
 * @package Bow
 */

get_header(); ?>

    <section class="site-primary content-area col-xs-12 col-md-8">
        <main class="site-main" role="main">

            <?php while (have_posts()) : the_post(); ?>

                <?php get_template_part('partials/content', 'single'); ?>

                <?php the_post_navigation(); ?>

                <?php
                    // Load up the comment template
                    if (comments_open() || get_comments_number()) {
                        comments_template();
                    }
                ?>

            <?php endwhile; ?><!-- have_posts() -->

        </main><!-- .site-main -->
    </section><!-- .site-primary -->

    <?php get_sidebar(); ?>

<?php get_footer();
