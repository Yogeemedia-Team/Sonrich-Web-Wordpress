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

                            <?php
                            // Display the price custom field
                            $price = get_post_meta(get_the_ID(), '_product_price', true);
                            if (!empty($price)) :
                            ?>
                                <p class="price">
                                    <span class="single-product-price-amount amount">
                                        <bdi><span class="single-product-currency">$</span><?php echo esc_html($price); ?></bdi>
                                    </span>
                                </p>
                            <?php endif; ?>

                            <div class="single-product-description">
                                <?php the_content(); ?>
                            </div>

                            <div class="product-quantity mt-4 d-flex">
                                <form id='myform' method='POST' action='#' class="pt">
                                    <input type='button' value='-' class='qtyminus' field='quantity' />
                                    <input type='text' name='quantity' value='0' class='qty' />
                                    <input type='button' value='+' class='qtyplus' field='quantity' />
                                </form>
                                <button class="buy--btn mx-4">ADD TO CART</button>
                            </div>

                            <div class="product_meta">
                                <span class="sku_wrapper">SKU: <span class="sku">012</span></span>
                                <span class="posted_in">Category: <a href="https://bridge268.qodeinteractive.com/product-category/organic/" rel="tag">Organic</a></span>
                                <span class="tagged_as">Tags: <a href="https://bridge268.qodeinteractive.com/product-tag/natural/" rel="tag">Natural</a>, <a href="https://bridge268.qodeinteractive.com/product-tag/vegan/" rel="tag">Vegan</a></span>
                            </div>

                            <div class="product-according mt-5">
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                            <button class="accordion-button text-center" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                DESCRIPTION
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                            <div class="accordion-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Id leo in vitae turpis massa sed elementum. In ante metus dictum at. Lacus vel facilisis volutpat est velit egestas dui. A scelerisque purus semper eget.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                            <button class="accordion-button collapsed text-center" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                ADDITIONAL INFORMATION
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                            <div class="accordion-body">
                                                <div class="accordion_content ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active" style="">
                                                    <div class="accordion_content_inner">
                                                        <table class="product-attributes shop_attributes">
                                                            <tbody>
                                                                <tr class="product-attributes-item product-attributes-item-dimensions">
                                                                    <th class="product-attributes-item__label">Dimensions</th>
                                                                    <td class="product-attributes-item__value">10 × 2 × 3 cm</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                            <button class="accordion-button collapsed text-center" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                                REVIEWS (0)
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                            <div class="accordion-body">
                                                <div class="according-content-inner">
                                                    <div class="review-area">
                                                        <div class="comments">
                                                            <h2 class="reviews-title">Reviews</h2>
                                                            <p class="noreviews">There are no reviews yet.</p>
                                                        </div>

                                                        <div class="review-form-wrapper">
                                                            <div class="review-form">
                                                                <div id="respond" class="comment-respond">
                                                                    <span id="reply-title" class="comment-reply-title">"Be the first to review “Organic Pear”</span>
                                                                </div>

                                                                <form action="" class="comment-form">
                                                                    <p class="comment-notes">
                                                                        <span id="email-notes">Your email address will not be published.</span>
                                                                        <span class="required-field-message" aria-hidden="true">Required fields are marked</span>
                                                                        <span class="required" aria-hidden="true">*</span>
                                                                    </p>
                                                                    <div class="comment-form-rating">
                                                                        <label for="rating">Your rating&nbsp;<span class="required">*</span></label>
                                                                        <p class="stars">
                                                                            <span class="fa fa-star checked"></span>
                                                                            <span class="fa fa-star checked"></span>
                                                                            <span class="fa fa-star checked"></span>
                                                                            <span class="fa fa-star"></span>
                                                                            <span class="fa fa-star"></span>
                                                                        </p>
                                                                        <select name="rating" id="rating" required="" style="display: none;">
                                                                            <option value="">Rate…</option>
                                                                            <option value="5">Perfect</option>
                                                                            <option value="4">Good</option>
                                                                            <option value="3">Average</option>
                                                                            <option value="2">Not that bad</option>
                                                                            <option value="1">Very poor</option>
                                                                        </select>
                                                                    </div>
                                                                    <p class="comment-form-comment"><label for="comment">Your review&nbsp;<span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" required=""></textarea></p>
                                                                    <p class="comment-form-author"><label for="author">Name&nbsp;<span class="required">*</span></label><input id="author" name="author" type="text" value="" size="30" required=""></p>
                                                                    <p class="comment-form-email"><label for="email">Email&nbsp;<span class="required">*</span></label><input id="email" name="email" type="email" value="" size="30" required=""></p>
                                                                    <p class="comment-form-cookies-consent"><input id="comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"> <label for="comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label></p>
                                                                    <p class="form-submit">
                                                                        <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                                                    </p>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                        <div class="qode-pli-price text-center">
                                            <?php
                                            // Display the price custom field
                                            $price = get_post_meta(get_the_ID(), '_product_price', true);
                                            if (!empty($price)) :
                                            ?>
                                                <span class="product-price-amount amount">
                                                    <bdi><span class="product-price-currency">$</span><?php echo esc_html($price); ?></bdi>
                                                </span>
                                            <?php endif; ?>
                                        </div>
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