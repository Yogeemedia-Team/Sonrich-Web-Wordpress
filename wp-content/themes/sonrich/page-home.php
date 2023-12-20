<?php
/*
Template Name: Home
*/
get_header();  ?>

<div class="banner-section px-0">
    <div class="container-fluid px-0">
        <div class="background-image"
            style="background-image: url('<?php echo get_template_directory_uri(); ?>/inc/images/sonrich-banner.jpg');">
            <div class="banner-content position-absolute">
                <h1 class="banner-slagon text-white fs2 ls1 fw-300 l-height1 text-lg-start text-center"
                    style="text-shadow: 2px 2px 5px #000000;">EMPOWERING INDIVIDUALS WITH</h1>
                <h2 class="banner-heading text-lg-start text-center">Personal health</h2>
            </div>
        </div>
    </div>
</div>

<!--Second Section Start-->
<div class="section-nature">
    <div class="container">
        <div class="nature-sec-1">
            <div class="row mt-4 px-2 px-lg-5">
                <div class="col-12 col-lg-6">
                    <div class="peo-description">
                        <p class="heading-1 improve text-center text-lg-start">IMPROVE PEOPLES LIVES</h5>
                        <P class="create pt-3 text-center text-lg-start">
                            Let's create a <span>better world</span> where people <span>love each other,</span>
                            love <span>nature</span> and specially who <span>respect law.</span>
                        </P>
                    </div>
                    <div class="nature-sec-2">
                        <div class="row mt-4">
                            <div class="nature-links">
                                <p><a href="about-us">About Us</a></p>
                                <p><a href="root-values">Root Values</a></p>
                                <p><a href="good-will">Good Will</a></p>
                                <p><a href="complances">Complances</a></p>
                                <p><a href="business-ventures">Business Ventures</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="circle-area">
                        <div class="image-1 my-5">
                            <img src="<?php echo get_template_directory_uri(); ?>/inc/images/Featured_product4.png"
                                alt="img" class="img-1 d-block m-auto float-none float-lg-end">
                        </div>
                        <div class="circle">
                            <div class="circle-content">
                                <img src="<?php echo get_template_directory_uri(); ?>/inc/images/logo-new.png"
                                    alt="logo" class="circle-image">
                                <p class="circle-content-para">
                                    Luvnarich is an esteemed company focused on wellness and lifestyle, utilizing an
                                    e-commerce & Web based system powered direct selling business
                                </p>
                                <a href="about-us" class="circle-link">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--Second Section End-->

<!--Featured Section Start-->
<div class="container-fluid fea-se">
    <div class="Featured-section">
        <div class="featured-images">
            <h2 class="featured-title text-center pt-5">Featured Product</h2>
            <div class="row f-product py-5">

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
                <div class="col-lg-3 col-md-6 text-center">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>"
                            class="fea-img w-100">
                    </a>
                    <div class="featured-pr text-center">
                        <h4 class="product_name"><?php the_title(); ?></h4>
                        <!-- <h6 class="cat_name">category name</h6> -->
                        <div class="star-rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <?php
                                // Display the price custom field
                                $price = get_post_meta(get_the_ID(), '_product_price', true);
                                if (!empty($price)) :
                                ?>
                        <h5 class="product-price">$<?php echo esc_html($price); ?></h5>
                        <?php endif; ?>
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
<!--Featured Section End-->

<!--Third Section Start-->
<section class="stay">
    <img src="<?php echo get_template_directory_uri(); ?>/inc/images/blue-moving.jpeg" alt="blue moving"
        class="blue-move">
    <div class="container stay-se">
        <div class="row p-2 p-md-5  mt-4">
            <div class="col-12 col-lg-6">
                <div class="stay-description">
                    <div class="stay-content">
                        <h2 class="heading-2 success-title text-lg-start text-center m-auto m-lg-0">
                            Stay on the right path to success...
                        </h2>
                    </div>
                    <p class="first-p text-justify py-3">
                        Cross success with our herbal supplements. Crafted for vitality, our blends merge tradition with
                        modern wellness science. From immunity boosters to stress relief, we’ve distilled nature's
                        essence into each capsule. Improve your journey with purity and purpose.
                    </p>
                    <ul class="stay-list ps-3">
                        <div class="list-item">
                            <!-- <i class="fa fa-solid fa-circle"></i> -->
                            <li>because achieving greatness starts with feeling great.</li>
                        </div>
                        <!-- <div class="list-item">
                            <i class="fa fa-solid fa-circle"></i>
                            <li>laboris nisi ut aliquip ex ea commodo</li>
                        </div>
                        <div class="list-item">
                            <i class="fa fa-solid fa-circle"></i>
                            <li>consequat. Duis aute irure dolor</li>
                        </div> -->
                    </ul>
                    <!-- <p class="second-p">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos provident sequi eos
                        quibusdam unde nulla ratione sint vero aspernatur nisi fugiat voluptatum eligendi illo,
                        ullam
                        quidem? Eos nesciunt laborum consequuntur.
                    </p> -->
                </div>
            </div>
            <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">
                <div class="right-bac-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/inc/images/Success.png" alt="img"
                        class="success w-100 py-3 py-md-5 py-xl-0 px-xl-2 left-courve">
                </div>
            </div>
        </div>
    </div>
</section>
<!--Third Section End-->

<!--Fourth Section Start-->
<div class="container fourth-se">
    <div class="fourth-section">
        <div class="row mt-4">
            <div class="col-md-6 d-flex align-items-center text-center">
                <div class="people-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/inc/images/peoples.png" alt=""
                        class="left-side-image">
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-side-content">
                    <h5 class="heading-3 right-content-title mt-4  text-md-start text-center">
                        WORKING CLOSELY TOGETHER
                    </h5>
                    <h2 class="heading-2 right-content-sub-title text-center text-md-start">
                        Supporting Success
                    </h2>
                    <span class="short-underline m-auto m-md-0"></span>
                    <p class="page-description success-description text-center text-md-start py-4">
                        In our close collaboration, success finds its strongest ally. At Luvnarich we're more than a
                        partner; we're your dedicated support system on the road to triumph. By working hand in hand, we
                        ensure your journey is guided by expertise, innovation, and a shared commitment to achieving
                        milestones.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Fourth Section End-->

<!----- Add By ON -->
<section class="highlight-section">
    <div class="row highlight-se">
        <div class="col-md-4 text-center cards-1">
            <div class="star-icon">
                <i class="fa-solid fa-star"></i>
            </div>
            <h2 class="highlights">Company Highlights</h2>
            <div class="button-des">
                <button class="learn-more">LEARN MORE
                    <a href="#"><i class="fa fa-solid fa-chevron-right"></i></a>
                </button>
            </div>
        </div>
        <div class="col-md-4 text-center cards-2">
            <div class="star-icon">
                <i class="fa-solid fa-building-wheat"></i>
            </div>
            <h2 class="highlights">Community Engagement</h2>
            <div class="button-des">
                <button class="learn-more">LEARN MORE
                    <a href="#"><i class="fa fa-solid fa-chevron-right"></i></a>
                </button>
            </div>
        </div>
        <div class="col-md-4 text-center cards-3">
            <div class="star-icon">
                <i class="fa-solid fa-people-group"></i>
            </div>
            <h2 class="highlights">Our People</h2>
            <div class="button-des">
                <button class="learn-more">LEARN MORE
                    <a href="#"><i class="fa fa-solid fa-chevron-right"></i></a>
                </button>
            </div>
        </div>
    </div>
    <!--Fifth Section End-->
</section>

<!--Map Section Start-->
<div class="map-section">
    <div class="container-fluid map-se">
        <div class="row">
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4049.532879454854!2d79.93978077506603!3d6.78980292001122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae24f9580d60a1f%3A0x9b4c6fc20f16379d!2sSonrich%20Ashia%20(Pvt)Ltd.%20Head%20Office!5e1!3m2!1sen!2slk!4v1702615618442!5m2!1sen!2slk"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
<!--Map Section End-->


<?php get_footer(); ?>