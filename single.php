<?php
/**
 * Single Page File.
 *
 * @package Byte Ki Duniya
*/
get_header();
?>

    <!-- Simple Page-->
    <section class="page-section mt-5" id="about">
        <div class="container">
            <div class="text-center mt-5">
                <?php the_post_thumbnail( 'large' ); ?>
                <h2 class="section-heading mt-5"><?php the_title(); ?></h2>
            </div><!--text-center-->
            <?php the_content(); ?>
            <?php require_once 'comments.php'; ?>
        </div><!--container-->
    </section>

<?php get_footer(); ?>