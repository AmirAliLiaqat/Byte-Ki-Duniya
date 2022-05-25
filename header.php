<?php
/**
 * Header Template.
 *
 * @package Byte Ki Duniya
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body id="page-top">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background:#000;">
        <div class="container text-uppercase mt-4 mt-lg-0">
            <?php the_custom_logo(); ?>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <?php 
                    wp_nav_menu( array (
                    'theme_location' => 'primary',
                    ) ); 
                ?>
            </div><!--collapse-->
        </div><!--container-->
    </nav>