<?php
/**
 * Template Name: Contact
 *
 * @package Byte Ki Duniya
*/
get_header();
?>

    <!-- Contact-->
    <section class="page-section mt-5" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase mt-5">Contact Us</h2>
                <h3 class="section-subheading text-white">Please fill out the form below and we will get back to you within 1-2 business days. We look forward to serving you!</h3>
            </div>
            <form id="contactForm" >
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="name" type="text" placeholder="Your Name *" required/>
                        </div><!--form-group-->
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" type="email" placeholder="Your Email *" required/>
                        </div><!--form-group-->
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required/>
                        </div><!--form-group-->
                    </div><!--col-md-6-->
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" id="message" placeholder="Your Message *" required></textarea>
                        </div><!--form-group-->
                    </div><!--col-md-6-->
                </div><!--row-->
                <!-- Submit Button-->
                <div class="text-center">
                    <button class="btn btn-primary btn-xl text-uppercase" name="submitButton" type="submit">Send Message</button>
                </div><!--text-center-->
            </form>
        </div><!--container-->
    </section>

<?php get_footer(); ?>