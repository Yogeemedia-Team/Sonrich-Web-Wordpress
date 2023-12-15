<?php
/*
Template Name: Gallery
*/

get_header();  ?>


<!-- breadcrumb link start -->
<div class="breadcrumb-link">
    <div class="contact-fluid">
        <div class="container">
            <div class="bread-box py-5 d-flex justify-content-between">
                <div class="breadcrumb-title">Gallery</div>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb link end -->

<!-- gallery img section start -->
<section class="gallery-img pt-5">
    <div class="container">
        <div class="row" style="display: flex; flex-wrap: wrap;">
            <div class="col-lg-4 col-sm-6">
                <div class="thumbnail bg-img my-2">
                    <img class="w-100 h-100"
                        src="https://ongoing.website/websites/sonrich/wp-content/uploads/2023/12/gal1.png" alt="img">
                    <span class="thumb-img-title">lorem ipsum</span>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="thumbnail bg-img my-2">
                    <img class="w-100 h-100"
                        src="https://ongoing.website/websites/sonrich/wp-content/uploads/2023/12/gal2.png" alt="img">
                    <span class="thumb-img-title">lorem ipsum</span>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="thumbnail bg-img my-2">
                    <img class="w-100 h-100"
                        src="https://ongoing.website/websites/sonrich/wp-content/uploads/2023/12/gal3.png" alt="img">
                    <span class="thumb-img-title">lorem ipsum</span>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="thumbnail bg-img my-2">
                    <img class="w-100 h-100"
                        src="https://ongoing.website/websites/sonrich/wp-content/uploads/2023/12/gal4.png" alt="img">
                    <span class="thumb-img-title">lorem ipsum</span>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="thumbnail bg-img my-2">
                    <img class="w-100 h-100"
                        src="https://ongoing.website/websites/sonrich/wp-content/uploads/2023/12/gal5.png" alt="img">
                    <span class="thumb-img-title">lorem ipsum</span>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="thumbnail bg-img my-2">
                    <img class="w-100 h-100"
                        src="https://ongoing.website/websites/sonrich/wp-content/uploads/2023/12/gal7.png" alt="img">
                    <span class="thumb-img-title">lorem ipsum</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- gallery img section end -->

<!-- gallery about start -->
<section class="gallery-about pt-2" style="padding-bottom: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-9">
                <div class="gallery-title sub-title pb-3">
                    About This Project
                </div>
                <div class="gallery-about pb-3">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam
                    enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam.
                    Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh. Duis tincidunt
                    lectus quis dui viverra vestibulum. Suspendisse vulputate aliquam dui.Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                    laborum
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="gallery-sub-title">
                    CUSTOM FIELD
                </div>
                <div class="gallery-about pb-3">
                    Lorem ipsum dolor sit amet
                </div>
                <div class="gallery-sub-title">
                    DATE
                </div>
                <div class="gallery-about pb-3">
                    20 November
                </div>
                <div class="gallery-sub-title">
                    CATEGORY
                </div>
                <div class="gallery-about pb-3">
                    Art, Business
                </div>
                <div class="gallery-share">
                    Share
                    <div class="social-share pt-2">
                        <div class="inner-arrow">
                        </div>
                        <ul class="gallery-social-icon-box py-3">
                            <li class="social-icon text-center">
                                <a href="#" target="_blank">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="social-icon text-center">
                                <a href="#" target="_blank">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </li>
                            <li class="social-icon text-center">
                                <a href="#" target="_blank">
                                    <i class="fa-brands fa-google-plus-g"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- gallery about start -->

<?php get_footer(); ?>