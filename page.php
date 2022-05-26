<?php
/**
 * Base Structure File For Every Page.
 *
 * @package Byte Ki Duniya
*/
get_header();
?>

    <!-- Simple Page-->
    <section class="page-section mt-5" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase mt-5"><?php the_title(); ?></h2>
            </div><!--text-center-->
            <p><?php the_content(); ?></p>
        </div><!--container-->
    </section>

<?php get_footer(); ?>