<?php
/**
 * Template Name: Services
 *
 * @package Byte Ki Duniya
*/
get_header();
?>

    <!-- Services-->
    <section class="page-section mt-5" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase mt-5">Services</h2>
                <h3 class="section-subheading text-muted">Looking to make a mark on the world wide web? Whether you need a new design for a custom built website or a design for a popular CMS platform you'll find the perfect web design with these design services.</h3>
            </div>
            <div class="row text-center">
                <?php
                    $all_services = new WP_Query( array(
                        'post_type' => 'services', 
                        'order' => 'ASC'
                        )
                    ); 
                    if($all_services->have_posts()) {
                        while($all_services->have_posts()) {
                            $all_services->the_post();
                ?>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa-brands fa-wordpress fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3"><?php the_title(); ?></h4>
                    <p class="text-muted text-center"><?php the_content(); ?></p>
                </div><!--col-lg-4-->
                <?php 
                        }
                    }
                ?>
            </div><!--row-->
        </div><!--container-->
    </section>

<?php get_footer(); ?>