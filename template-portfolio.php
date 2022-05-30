<?php
/**
 * Template Name: Portfolio
 *
 * @package Byte Ki Duniya
*/
get_header();
?>

    <!-- Portfolio Grid-->
    <section class="page-section mt-5" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase mt-5">Portfolio</h2>
                <h3 class="section-subheading text-muted">Project to project we have developed, designed, and customized a variety of work. Technology is our specialty, but we always develop our projects based on the needs of our clients. Take a look at our work and see if our experience relates to some of your business goals.</h3>
            </div><!--text-center-->
            <div class="row">
                <?php
                    $all_portfolio = new WP_Query( array(
                        'post_type' => 'portfolio',
                        'posts_per_page' => 10,
                        'order' => 'ASC'
                        )
                    ); 
                    if($all_portfolio->have_posts()) {
                        while($all_portfolio->have_posts()) {
                            $all_portfolio->the_post();
                ?>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="<?php echo strip_tags(get_the_excerpt()); ?>">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div><!--portfolio-hover-->
                            <?php the_post_thumbnail( 'medium' ); ?>
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading"><?php the_title(); ?></div>
                            <div class="portfolio-caption-subheading text-muted"><?php the_content(); ?></div>
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

    <!-- Portfolio Modals-->
    <?php
        $all_portfolio_modals = new WP_Query( array(
            'post_type' => 'portfolio-modals', 
            'posts_per_page' => 100,
            'order' => 'ASC'
            )
        ); 
        if($all_portfolio_modals->have_posts()) {
            while($all_portfolio_modals->have_posts()) {
                $all_portfolio_modals->the_post();
    ?>
    <div class="portfolio-modal modal fade" id="<?php echo strip_tags(get_the_excerpt()); ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo THEME_DIR_URL; ?>/assets/img/close-icon.svg" alt="Close" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase"><?php the_title(); ?></h2>
                                <p class="item-intro text-muted"><?php the_content(); ?></p>
                                <?php the_post_thumbnail( 'large' ); ?>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--portfolio-modal-->
    <?php 
            }
        }
    ?>

<?php get_footer(); ?>