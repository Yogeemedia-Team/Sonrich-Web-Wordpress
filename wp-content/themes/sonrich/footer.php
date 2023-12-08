<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sonrich
 */

?>

<!-- footer Section Start -->
<footer>
    <div class="footer-section">
        <div class="row justify-content-center flex-wrap text-center mt-4">
            <div class="col-sm-12 col-md-6 col-lg-6 footer-top-left text-center text-md-end">
                <a href="index.html">
                    <img src="<?php echo get_template_directory_uri(); ?>/inc/images/sonrich_ashia_logo.png" alt="footer logo" class="footer-logo">
                </a>
            </div>
                <div class="col-sm-12 col-md-6 col-lg-6 footer-top-right text-center text-md-start mt-0 mt-lg-3">
                    <i class="fa fa-brands fa-facebook-f text-light fs-2 px-2"></i>
                    <i class="fa-brands fa-linkedin-in text-light fs-2 px-2"></i>
                    <a href="#" class="footer-button btn align-bottom ms-3">Click here to Apply</a>
                </div>
                </div>
                <div class="footer-last mt-4">
                    <div class="row text-light">
                        <div class="col-sm-12 col-md-6 col-lg-6 text-center text-md-end">
                            <p class="text-center text-md-end w-100">2022 Sonrich Asia(Pvt) Ltd. All Right Reserved</p>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 text-center text-md-start mt-3 mt-md-0">
                            <p class="text-center text-md-start w-100">
                                No.204/A/1,Bandaragama Road,Kesbewa,SriLanka
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->
    </div>

    <!-- main js -->
    <script src="inc/js/script.js"></script>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var banner = document.querySelector('.parallax-banner-wrapper');

            window.addEventListener('scroll', function () {
                var scrolled = window.scrollY;
                var translateY = scrolled * 0.4; // Adjust the parallax speed as needed

                banner.querySelector('.parallax-banner-image').style.transform = 'translate3d(0, ' + translateY + 'px, 0)';
            });
        });
    </script>

<script>

jQuery(document).ready(function(){
    // This button will increment the value
    $('.qtyplus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name='+fieldName+']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
    // This button will decrement the value till 0
    $(".qtyminus").click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
});

</script>

<?php wp_footer(); ?>

</body>
</html>
