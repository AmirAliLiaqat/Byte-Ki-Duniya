<?php
/**
 * Template Name: Blog Posts
 *
 * @package Byte Ki Duniya
*/
get_header();
?>

    <!-- Blog-->
    <section class="page-section mt-5" id="blog">
        <div class="container">
            <div class="blog-title my-5 text-center">
                <h1>Latest Posts</h1>
            </div><!--blog-title-->
            <div class="blog-container p-4">
                <?php
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    $all_posts = new WP_Query( array(
                        'post_type' => 'post', 
                        'posts_per_page' => 5,
                        'order' => 'DSEC',
                        'paged' => $paged,
                        )
                    ); 
                    if($all_posts->have_posts()) {
                        while($all_posts->have_posts()) {
                            $all_posts->the_post();
                ?>
                <div class="row blog-post mb-5">
                    <div class="col-lg-4 col-sm-6 blog-img">
                        <?php the_post_thumbnail( 'large' ); ?>
                    </div><!--col-lg-4-->
                    <div class="col-md-8 col-sm-6">
                        <h3 class="mt-3">
                            <a href="<?php the_permalink(); ?>" class="text-decoration-none"><?php the_title(); ?></a>
                        </h3>
                            <div class="content mx-3">
                                <p>
                                    Written By:  <span class="text-danger"><?php the_author(); ?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    Published on: May 14, 2022 <?php get_the_date('M j, Y'); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="text-warning"> <?php echo get_comments_number(); ?> comments</span>
                                </p>
                                <?php the_excerpt(); ?>
                            </div>
                        <div class="text-end">
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary text-uppercase mb-3">See More</a>
                        </div>
                    </div><!--col-lg-8-->
                </div><!--row-->
                <?php 
                        }
                    }
                ?>
                <?php wp_reset_postdata(); ?>
                <div class="blog-pagination text-center">
                    <?php 
                        echo paginate_links( array(
                            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                            'total'        => $all_posts->max_num_pages,
                            'current'      => max( 1, get_query_var( 'paged' ) ),
                            'format'       => '?paged=%#%',
                            'show_all'     => false,
                            'type'         => 'plain',
                            'end_size'     => 2,
                            'mid_size'     => 1,
                            'prev_next'    => true,
                            'prev_text'    => sprintf( '<i></i> %1$s', __( '« Previous', 'text-domain' ) ),
                            'next_text'    => sprintf( '%1$s <i></i>', __( 'Next »', 'text-domain' ) ),
                            'add_args'     => false,
                            'add_fragment' => '',
                        ) );
                    ?>
                </div><!--blog-pagination-->
            </div><!--blog-container-->
        </div><!--container-->
    </section>

<?php get_footer(); ?>