<?php
/*
Template Name: Contact
*/

get_header();  ?>


<?php get_template_part('template-parts/inner', 'banner'); ?>

<!-- contact form start -->
<section class="contact-form py-5">
    <div class="container">
        <div class="contact-heading-box">
            <div class="contact-heading h2 font2 text-center">
                GET IN TOUCH WITH US
            </div>
            <div class="contact-sub-heading h5 font2 text-center pt-2">
                Say Hello! Don’t be shy.
            </div>
        </div>
        <div class="row p-1 p-md-3 p-lg-5">
            <div class="col-12 col-md-4">
                <div class="sub-title pb-3">
                    OUR OFFICE
                </div>
                <div class="con-info">
                    <div class="address">
                        No.204/A/1,Bandaragama Road, <br>
                        Kesbewa,SriLanka
                    </div>
                    <div class="email">
                        Email: <a href="mailto:info@luvnarich.net" style="text-decoration:none;">info@luvnarich.net</a>
                    </div>
                    <div class="phone">
                        Phone: <a href="tel:0753370000" style="text-decoration:none;">0753370000</a>
                    </div>
                    <!-- <div class="fax">
                        Fax: +88 (0) 202 0000 001
                    </div> -->
                </div>
                <ul class="social-icon-box d-flex py-3">
                    <li class="social-icon pe-4">
                        <a href="#" target="_blank">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                    </li>
                    <li class="social-icon pe-4">
                        <a href="#" target="_blank">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                    <li class="social-icon pe-4">
                        <a href="#" target="_blank">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </li>
                    <li class="social-icon pe-4">
                        <a href="#" target="_blank">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>
                    </li>
                    <li class="social-icon pe-4">
                        <a href="#" target="_blank">
                            <i class="fa-brands fa-tumblr"></i>
                        </a>
                    </li>
                    <li class="social-icon pe-4">
                        <a href="#" target="_blank">
                            <i class="fa-brands fa-pinterest"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-8">
                <div class="sub-title pb-3">
                    CONTACT US
                </div>
                <div class="contact-form">
                    <div class="row pb-3">
                        <div class="col-12 col-md-6">
                            <input class="con-form-input p-3 mb-3" type="text" name="" id="" placeholder="First Name *">
                        </div>
                        <div class="col-12 col-md-6">
                            <input class="con-form-input p-3" type="text" name="" id="" placeholder="Last Name *">
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-12 col-md-6">
                            <input class="con-form-input p-3 mb-3" type="text" name="" id="" placeholder="Email *">
                        </div>
                        <div class="col-12 col-md-6">
                            <input class="con-form-input p-3" type="text" name="" id="" placeholder="Website">
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col">
                            <textarea class="con-form-input p-3 mb-3" name="" id="" cols="30" rows="5"
                                placeholder="Message..."></textarea>
                        </div>
                    </div>
                    <button class="btn con-form-input" type="submit">CONTACT US</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact form end -->

<!--Map Section Start-->
<div class="map-section">
    <div class="container-fluid map-se p-0">
        <div class="row">
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4049.532879454854!2d79.93978077506603!3d6.78980292001122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae24f9580d60a1f%3A0x9b4c6fc20f16379d!2sSonrich%20Ashia%20(Pvt)Ltd.%20Head%20Office!5e1!3m2!1sen!2slk!4v1702615618442!5m2!1sen!2slk"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</div>
<!--Map Section End-->

<?php get_footer(); ?>