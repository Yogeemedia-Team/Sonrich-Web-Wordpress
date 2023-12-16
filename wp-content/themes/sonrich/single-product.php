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
                <h1><span><?php the_title();?></span></h1>
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
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>" class="w-100">
                        <?php endif; ?>
                    </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="single-product-detail-right">
                        <div class="single-product-details">
                            <h1 class="product_title mb-2 text-uppercase fs-5"><?php the_title(); ?></h1>

                            <div class="single-product-description">
                                <?php the_content(); ?>
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
                    <?php
                    // Custom query to get related products
                    $related_args = array(
                        'post_type'      => 'product',
                        'posts_per_page' => 4, // Number of related products to display
                        'post__not_in'   => array(get_the_ID()), // Exclude the current product
                        'orderby'        => 'rand', // You can change the orderby as needed
                    );

                    $related_query = new WP_Query($related_args);

                    if ($related_query->have_posts()) :
                        while ($related_query->have_posts()) : $related_query->the_post();
                    ?>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="products-item w-100" style="position: relative;">
                                    <div class="product-item-image">
                                        <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>" class="w-100"></a>
                                        <span class="add-to-cart-button-outer">
                                            <span class="add-to-cart-button-inner">
                                                <a href="<?php the_permalink(); ?>" class="add-to-cart-button">View</a>
                                            </span>
                                        </span>
                                    </div>
                                    <div class="product-details">
                                        <h4 class="entry-title text-center font-weight-normal">
                                            <a href="<?php the_permalink(); ?>" class="font-weight-normal"><?php the_title(); ?></a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p>No related products found.</p>';
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Related product section end -->



</div>

<?php get_footer(); ?>