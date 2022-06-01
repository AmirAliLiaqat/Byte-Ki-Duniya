<?php
/**
 * Footer Template.
 *
 * @package Byte Ki Duniya
*/
?>

    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">
                    <?php 
                        echo get_theme_mod( 'footer_copyright_text', 'Copyright © Byte Ki Duniya 2022' );
                    ?>
                </div><!--col-lg-4-->
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/Bytes-Ki-Duniya-100148202156203" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div><!--col-lg-4-->
                <div class="col-lg-4 ">
                    <a class="link-dark text-decoration-none" href="http://localhost/byte-ki-duniya/privacy-policy/">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="http://localhost/byte-ki-duniya/terms-of-use/">Terms of Use</a>
                </div><!--col-lg-4-->
            </div><!--row-->
        </div><!--container-->
    </footer>

<?php wp_footer(); ?>
</body>
</html>