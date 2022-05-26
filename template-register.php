<?php
/**
 * Template Name: Register
 *
 * @package Byte Ki Duniya
*/
get_header();
?>

    <!-- Register-->
    <section class="page-section mt-5" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase mt-5">Register</h2>
                <!-- <h3 class="section-subheading text-white">Please fill out the form below and we will get back to you within 1-2 business days. We look forward to serving you!</h3> -->
            </div>
            <form id="contactForm" >
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6 mx-auto">
                        <div class="form-group">
                            <!-- First Name input-->
                            <input class="form-control" id="fname" type="text" placeholder="First Name *" required/>
                        </div><!--form-group-->
                        <div class="form-group">
                            <!-- Last Name input-->
                            <input class="form-control" id="lname" type="text" placeholder="Last Name *" required/>
                        </div><!--form-group-->
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" type="email" placeholder="Your Email *" required/>
                        </div><!--form-group-->
                        <div class="form-group">
                            <!-- Password input-->
                            <input class="form-control" id="password" type="password" placeholder="Password *" required/>
                        </div><!--form-group-->
                        <div class="form-group">
                            <!-- Confirm Password input-->
                            <input class="form-control" id="cpassword" type="password" placeholder="Confirm Password *" required/>
                        </div><!--form-group-->
                    </div><!--col-md-6-->
                </div><!--row-->
                <!-- Submit Button-->
                <div class="text-center">
                    <button class="btn btn-primary btn-xl text-uppercase w-50" name="register" type="submit">register</button>
                </div><!--text-center-->
            </form>
        </div><!--container-->
    </section>

<?php get_footer(); ?>