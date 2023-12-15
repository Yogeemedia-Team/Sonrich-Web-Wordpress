<?php
/*
Template Name: Shop
*/

get_header();  ?>

<div class="main-wrapper">

    <div class="main-wrapper">
        <!-- parallax banner is start -->
        <div class="parallax-banner-wrapper">
            <h1 id="banner-header-text" class="parallax-banner-text-box fw-normal">Product</h1>
            <div class="parallax-banner-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/images/shop-title-image.jpg);">
            </div>
        </div>
        <!-- parallax banner is end -->

        <!-- start product section -->
        <div class="shop-products mt-5">
            <div class="row">
                <div class="product-title-box text-center align-content-center justify-content-center mt-5 pt-5">
                    <h5 class="product-title text-center fs-5 fw-normal">Products</h5>

                    <h3 class="product-heading-title fw-normal text-center"><span style="text-transform: none;">Organic veggies</span></h3>

                    <div class="bottom-description">
                        <h6 class="product-heading-description text-center fw-normal">Program is available for
                            people who have workedat
                            growing least one prently.
                        </h6>
                    </div>

                </div>
            </div>

            <!-- start product section -->
            <div class="shop-product-section">
                <div class="container">
                    <div class="row">
                        <!-- Products loop -->
                        <?php
                        $args = array(
                            'post_type'      => 'product', // Your custom post type
                            'posts_per_page' => -1,         // Set to -1 to display all posts
                        );

                        $products_query = new WP_Query($args);

                        if ($products_query->have_posts()) :
                            while ($products_query->have_posts()) : $products_query->the_post();
                        ?>
                                <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
                                    <div class="products-item w-100 mt-4">
                                        <div class="product-item-image">
                                            <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>" class="w-100"></a>
                                        </div>
                                        <div class="product-details">
                                            <h4 class="entry-title text-center font-weight-normal">
                                                <a href="<?php the_permalink(); ?>" class="font-weight-normal"><?php the_title(); ?></a>
                                            </h4>
                                            <div class="prize-btn">
                                                <div class="main-box text-center m-auto" data-animation="to-right">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <div class="btn-box d-flex align-items-center">
                                                            <?php
                                                            // Display the price custom field
                                                            $price = get_post_meta(get_the_ID(), '_product_price', true);
                                                            if (!empty($price)) {
                                                            ?>
                                                                <span class="product-price-currency fs-5 text-center m-auto">$<?php echo esc_html($price); ?></span>
                                                            <?php
                                                            }
                                                            ?>
                                                            <span class="product-price-currency fs-6 text-center m-auto" aria-hidden="true">Read More</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                        else :
                            ?>
                            <p><?php _e('No products found', 'your-text-domain'); ?></p>
                        <?php endif; ?>
                        <!-- Products loop -->

                </div>
            </div>
            <!-- start product section -->
        </div>
        <!-- end product section -->

        <!-- subscribe section start -->
        <div class="subscribe-newsleter-wrapper mt-5">
            <div class="parallax-subscribe-newsletter" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/images/parallax-65465.jpg);"></div>

            <div class="newsletter-textbox">
                <div class="newsletter-textbox-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/inc/images/home-graphic-2.png" alt="img">
                </div>

                <div class="newsletter-bottom-textbox text-center mt-5">
                    <h4 class="text-white text-center">Products</h4>
                    <h2 class="text-white text-center">Subscribe to our newsletter</h2>

                    <div class="input-group input-newsletter mt-4 pt-2">
                        <input type="email" class="form-control" name="" placeholder="Email Address">
                        <span class="input-group-btn">
                            <button class="btn text-white" type="submit">SUBMIT</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- subscribe section end -->
    </div>

</div>

<?php get_footer(); ?>