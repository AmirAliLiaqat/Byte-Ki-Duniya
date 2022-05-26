<?php
/**
 * Template Name: Plugins
 *
 * @package Byte Ki Duniya
*/
get_header();
?>

    <!-- Plugins section -->
    <section class="page-section mt-5" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase mt-5">Plugins</h2>
                <h3 class="section-subheading text-muted">In WordPress, a plugin is a small software application that extends the features and functions of a WordPress website. Plugins play a major role in building great websites using WordPress. They make it easier for users to add features to their website without knowing a single line of code. WordPress is designed so that other developers can add their own code to it. The WordPress plugin API offers a robust set of hooks and filters which allow developers to modify existing WordPress functionality or add new functionality.</h3>
            </div><!--text-center-->
            <div class="row">
                <?php
                    $all_portfolio = new WP_Query( array(
                        'post_type' => 'portfolio',
                        'order' => 'ASC'
                        )
                    ); 
                    if($all_portfolio->have_posts()) {
                        while($all_portfolio->have_posts()) {
                            $all_portfolio->the_post();
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