<?php
/**
 * Template Name: About Us
 *
 * @package Byte Ki Duniya
*/
get_header();
?>

    <!-- About-->
    <section class="page-section mt-5" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase mt-5">About</h2>
                <h3 class="section-subheading text-muted">Byte Ki Duniya is a professional IT services company specializing in solutions for the web and mobile application development and also graphic designing services provider company. We’re obsessed & passionate web development company with the mission to use the right mix of technologies to come up with the right online solutions for your business.</h3>
            </div><!--text-center-->
            <ul class="timeline">
                <?php
                    $all_portfolio = new WP_Query( array(
                        'post_type' => 'about', 
                        'posts_per_page' => 6,
                        'order' => 'ASC'
                        )
                    ); 
                    if($all_portfolio->have_posts()) {
                        while($all_portfolio->have_posts()) {
                            $all_portfolio->the_post();
                ?>
                <li class="<?php echo strip_tags(get_the_excerpt()); ?>">
                    <div class="timeline-image">
                        <?php the_post_thumbnail( 'small' ); ?>
                    </div><!--timeline-image-->
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4><?php the_title(); ?></h4>
                        </div><!--timeline-heading-->
                        <div class="timeline-body">
                            <p class="text-muted"><?php the_content(); ?></p>
                        </div><!--timeline-body-->
                    </div><!--timeline-panel-->
                </li>
                <?php 
                        }
                    }
                ?>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            <br />
                            Be Part
                            Of Our
                            Story!
                        </h4>
                    </div><!--timeline-image-->
                </li>
            </ul>
        </div><!--container-->
    </section>

<?php get_footer(); ?>