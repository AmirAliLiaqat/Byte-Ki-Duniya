<?php
/**
 * Main template file!
 *
 * @package Byte Ki Duniya
*/
get_header();
?>

    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Welcome To Byte Ki Duniya</div>
            <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">Read More</a>
        </div><!--container-->
    </header>

    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Services</h2>
                <h3 class="section-subheading text-muted">Looking to make a mark on the world wide web? Whether you need a new design for a custom built website or a design for a popular CMS platform you'll find the perfect web design with these design services.</h3>
            </div>
            <div class="row text-center">
                <?php
                    $all_services = new WP_Query( array(
                        'post_type' => 'services', 
                        'posts_per_page' => 3,
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
            <div class="see-more-btn text-center">
                <a href="http://localhost/byte-ki-duniya/services/" class="btn btn-primary btn-xl text-uppercase">See More</a>
            </div><!--see-more-btn-->
        </div><!--container-->
    </section>

    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Portfolio</h2>
                <h3 class="section-subheading text-muted">Project to project we have developed, designed, and customized a variety of work. Technology is our specialty, but we always develop our projects based on the needs of our clients. Take a look at our work and see if our experience relates to some of your business goals.</h3>
            </div><!--text-center-->
            <div class="row">
                <?php
                    $all_portfolio = new WP_Query( array(
                        'post_type' => 'portfolio', 
                        'posts_per_page' => 6,
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
            <div class="see-more-btn text-center">
                <a href="http://localhost/byte-ki-duniya/portfolio/" class="btn btn-primary btn-xl text-uppercase">See More</a>
            </div>
        </div><!--container-->
    </section>

    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">About</h2>
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

    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Our Team</h2>
            </div><!--text-center-->
            <div class="row">
                <?php
                    $our_team = new WP_Query( array(
                        'post_type' => 'team', 
                        'posts_per_page' => 6,
                        'order' => 'ASC'
                        )
                    ); 
                    if($our_team->have_posts()) {
                        while($our_team->have_posts()) {
                            $our_team->the_post();
                ?>
                <div class="col-lg-4">
                    <div class="team-member">
                        <!-- <img class="mx-auto rounded-circle" src="" /> -->
                        <div class="rounded-circle">
                            <?php echo strip_tags(the_post_thumbnail( 'small' )); ?>
                        </div><!--rounded-circle-->
                        <h4><?php the_title(); ?></h4>
                        <p class="text-muted"><?php echo strip_tags(get_the_excerpt()); ?></p>
                        <?php the_content(); ?>
                    </div><!--team-member-->
                </div><!--col-lg-4-->
                <?php 
                        }
                    }
                ?>
            </div><!--row-->
        </div><!--container-->
    </section>

    <!-- Newsletter-->
    <div class="py-5 bg-dark">
        <div class="container">
            <div class="row text-center text-white">
                <h1>Join our newsletter</h1>
                <p>Subscribe to our newsletter to recieve exclusive offers, latest news and updated.</p>
                <div class="col-md-12 col-sm-8">
                    <div class="form-group">
                        <form action="" method="post">
                            <input class="form-control w-50 btn-xl d-inline" name="newsletter" id="newsletter" type="text" placeholder="enter your email" required/>
                            <button type="submit" class="btn btn-primary btn-xl text-uppercase" name="subscribe">Subscribe</button>
                        </form>
                    </div><!--form-group-->
                </div><!--col-lg-8-->
            </div><!--row-->
        </div><!--container-->
    </div><!--pb-5-->

    <!-- Portfolio Modals-->
    <?php
        $all_portfolio_modals = new WP_Query( array(
            'post_type' => 'portfolio-modals', 
            'posts_per_page' => 6,
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