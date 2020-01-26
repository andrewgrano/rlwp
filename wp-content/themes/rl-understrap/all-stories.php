<?php /* Template Name: allStories  */ ?>




<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>


<main class="main allStories" role="main">

    <div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

        <hr class="hr--primary">
        <h1 class="pageHeading">All Stories.....</h1>


        <div class="row justify-content-md-center justify-content-lg-start">


            <?php
            $paged = max( get_query_var( 'paged' ), get_query_var( 'page' ), 1 );
            $args = array(
                'post_type'       => 'post',
                'orderby'         => 'post_date',
                'order'           => 'desc',
                'posts_per_page'  => 12,
                'paged'           => $paged
            );

            $query = new WP_query ( $args );
            if ( $query->have_posts() ) { ?>



                <?php while ( $query->have_posts() ) : $query->the_post(); /* start the loop */ ?>

                    <div class="col-lg-4 col-md-6">

                        <?php

                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'loop-templates/widget-main', get_post_format() );
                        ?>
                    </div>


                <?php // End the loop.
                    endwhile;
                } ?>


                <?php
                    $orig_max_num_pages = $wp_query->max_num_pages; // backup

                    // Change it just for the pagination.
                    // and $latestArticles is your custom WP_Query instance.
                    $wp_query->max_num_pages = $latestArticles->max_num_pages;

                    understrap_pagination( [
                        'current' => $paged,
                    ] );

                    $wp_query->max_num_pages = $orig_max_num_pages; // restore
                ?>

        </div>


    </div>
</main>
<?php get_footer(); ?>
