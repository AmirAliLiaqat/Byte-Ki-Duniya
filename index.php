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
                <li>
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." />
                    </div><!--timeline-image-->
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2020-2021</h4>
                            <h4 class="subheading">Our Humble Beginnings</h4>
                        </div><!--timeline-heading-->
                        <div class="timeline-body">
                            <p class="text-muted">The owner was looking at the dream of this beautiful company but he had no partner to help him and work together to build this company.</p>
                        </div><!--timeline-body-->
                    </div><!--timeline-panel-->
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." />
                    </div><!--timeline-image-->
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Feburary 2022</h4>
                            <h4 class="subheading">An Agency is Born</h4>
                        </div><!--timeline-heading-->
                        <div class="timeline-body">
                            <p class="text-muted">Fortunately, he found a good friend and they worked together day and night and helped each other. At last, the owner's dream was fulfilled, and this Byte Ki Duniya company appears with this all strength.</p>
                        </div><!--timeline-body-->
                    </div><!--timeline-panel-->
                </li>
                <li>
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." />
                    </div><!--timeline-image-->
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>May 2022</h4>
                            <h4 class="subheading">Transition to Full Service</h4>
                        </div><!--timeline-heading-->
                        <div class="timeline-body">
                            <p class="text-muted"> After a few months, the company started its work and provided many services related to information technology, web development, graphic designing, and many other more.</p>
                        </div><!--timeline-body-->
                    </div><!--timeline-panel-->
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="..." />
                    </div><!--timeline-image-->
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>July 2022</h4>
                            <h4 class="subheading">Phase Two Expansion</h4>
                        </div><!--timeline-heading-->
                        <div class="timeline-body">
                            <p class="text-muted">In July 2022 this company started its second phase of Expansion and providing WordPress development services like theme development and plugins development and many more development services.</p>
                        </div><!--timeline-body-->
                    </div><!--timeline-panel-->
                </li>
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
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/default.jpg" alt="..." />
                        <h4>Amir Ali</h4>
                        <p class="text-muted">Web Developer</p>
                        <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/AmirLiaqat0309"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/mehar.amir.liaqat"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/amir-ali-a98315222/"><i class="fab fa-linkedin-in"></i></a>
                    </div><!--team-member-->
                </div><!--col-lg-4-->
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/default.jpg" alt="..." />
                        <h4>Ahmad Ali</h4>
                        <p class="text-muted">Graphic Designer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/profile.php?id=100051554183535"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/ahmad-ali-8626b2228/"><i class="fab fa-linkedin-in"></i></a>
                    </div><!--team-member-->
                </div><!--col-lg-4-->
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/default.jpg" alt="..." />
                        <h4>Ali Raza</h4>
                        <p class="text-muted">Site Helper</p>
                        <a class="btn btn-dark btn-social mx-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div><!--team-member-->
                </div><!--col-lg-4-->
            </div><!--row-->
        </div><!--container-->
    </section>

    <!-- Clients-->
    <div class="pb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-2 col-sm-6 my-3">
                    <img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/microsoft.png"/>
                </div><!--col-lg-2-->
                <div class="col-md-2 col-sm-6 my-3">
                    <img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/google.png"/>
                </div><!--col-lg-2-->
                <div class="col-md-2 col-sm-6 my-3">
                    <img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/facebook.png"/>
                </div><!--col-lg-2-->
                <div class="col-md-2 col-sm-6 my-3">
                    <img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/yahoo.svg"/>
                </div><!--col-lg-2-->
                <div class="col-md-2 col-sm-6 my-3">
                    <img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/mashable.svg"/>
                </div><!--col-lg-2-->
                <div class="col-md-2 col-sm-6 my-3">
                    <img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/smart-company.svg"/>
                </div><!--col-lg-2-->
                <div class="col-md-2 col-sm-6 my-3">
                    <img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/tech-crunch.svg"/>
                </div><!--col-lg-2-->
                <div class="col-md-2 col-sm-6 my-3">
                    <img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/tnw.svg"/>
                </div><!--col-lg-2-->
                <div class="col-md-2 col-sm-6 my-3">
                    <img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/virgin.svg"/>
                </div><!--col-lg-2-->
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