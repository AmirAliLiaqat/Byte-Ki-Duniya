<?php
/**
 * Template Name: Themes
 *
 * @package Byte Ki Duniya
*/
get_header();
?>

    <!-- Themes section -->
    <section class="page-section mt-5" id="themes">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase mt-5">Themes</h2>
                <h3 class="section-subheading text-muted">We have developed many attractive and responsive wordpress themes with complete customization tools and easy to use and easy to manage and control. Simply click on download button and install in you wordpress directory and activate it and enjoy this most advance features.</h3>
            </div><!--text-center-->
            <div class="row">
                <?php
                    $all_themes = new WP_Query( array(
                        'post_type' => 'themes',
                        'posts_per_page' => 100,
                        'order' => 'ASC'
                        )
                    ); 
                    if($all_themes->have_posts()) {
                        while($all_themes->have_posts()) {
                            $all_themes->the_post();
                ?>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div><!--portfolio-hover-->
                            <?php the_post_thumbnail( 'medium' ); ?>
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading"><?php the_title(); ?></div>
                            <div class="download-btn text-center">
                                <a href="<?php echo strip_tags(get_the_excerpt()); ?>" class="btn btn-primary">Download</a>
                            </div><!--download-btn-->
                        </div><!--portfolio-caption-->
                    </div><!--portfolio-item-->
                </div><!--col-lg-4-->
                <?php 
                        }
                    }
                ?>
            </div><!--row-->
        </div><!--container-->
    </section>

<?php get_footer(); ?>