<?php
/*
Template Name: Single-Product
*/

get_header();  ?>

<div class="main-wrapper single-product-page">

    <!-- single-product-header-bottom-part start -->
    <div class="single-product-header-bottom-part">
        <div class="title_subtitle_holder">
            <div class="title_subtitle_holder_inner">
                <h1><span>Shop</span></h1>
            </div>
        </div>
    </div>
    <!-- single-product-header-bottom-part end -->

    <!-- single-produt-detail-section start -->
    <div class="single-product-detail-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="single-product-detail-left w-100">
                        <div class="single-product-image w-100">
                            <img src="<?php echo get_template_directory_uri(); ?>/inc/images/shop-image-10-600x600.jpg" alt="" class="w-100">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="single-product-detail-right">
                        <div class="single-product-details">
                            <h1 class="product_title mb-2 text-uppercase fs-5">Organic Pear</h1>
                            <!-- <p class="price"><span class="single-product-price-amount amount"><bdi><span class="single-product-currency">$</span>22.00</bdi></span></p> -->
                            <div class="single-product-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Id leo in vitae turpis massa sed elementum. In ante metus dictum at. Lacus vel facilisis volutpat est velit egestas dui. A scelerisque purus semper eget. Diam quis enim lobortis scelerisque fermentum. At augue eget arcu dictum varius duis at consectetur lorem. Volutpat maecenas volutpat blandit aliquam etiam erat velit scelerisque. Amet justo donec enim diam. Sem fringilla ut morbi tincidunt augue interdum velit euismod. Platea dictumst quisque sagittis purus sit amet volutpat consequat mauris. Mollis aliquam ut porttitor leo a.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single-produt-detail-section end -->


    <!-- Related product section start -->
    <div class="related-product-section mt-3">
        <div class="related-products mt-5 mb-5 pb-5">
            <div class="shop-product-section">
                <div class="container pt-4">
                    <div class="related-product-header">
                        <h2>Related Products</h2>
                    </div>
                    <div class="row mt-5 pt-2">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="products-item w-100" style="position: relative;">
                                <div class="product-item-image">
                                    <span class="onsale onsale-outter"><span class="onsale-inner">Sale</span></span>
                                    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/inc/images/shop-image-10-600x600.jpg" alt="" class="w-100"></a>
                                    <span class="add-to-cart-button-outer">
                                        <span class="add-to-cart-button-inner">
                                            <!-- <a href="" class="add-to-cart-button">Add to cart</a> -->
                                        </span>
                                    </span>
                                </div>
                                <div class="product-details">
                                    <h4 class="entry-title text-center font-weight-normal">
                                        <a href="#" class="font-weight-normal">Organic Pear</a>
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="products-item w-100">
                                <div class="product-item-image">
                                    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/inc/images/shop-image-11-600x600.jpg" alt="" class="w-100"></a>
                                </div>

                                <div class="product-details">
                                    <h4 class="entry-title text-center font-weight-normal">
                                        <a href="#" class="font-weight-normal">Organic Pear</a>
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="products-item w-100">
                                <div class="product-item-image">
                                    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/inc/images/shop-image-12-600x600.jpg" alt="" class="w-100"></a>
                                </div>

                                <div class="product-details">
                                    <h4 class="entry-title text-center font-weight-normal">
                                        <a href="#" class="font-weight-normal">Organic Pear</a>
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="products-item w-100">
                                <div class="product-item-image">
                                    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/inc/images/shop-image-13-600x600.jpg" alt="" class="w-100"></a>
                                </div>

                                <div class="product-details">
                                    <h4 class="entry-title text-center font-weight-normal">
                                        <a href="#" class="font-weight-normal">Organic Pear</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Related product section end -->


</div>

<?php get_footer(); ?>