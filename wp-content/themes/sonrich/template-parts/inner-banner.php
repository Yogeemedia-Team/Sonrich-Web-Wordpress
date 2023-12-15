<div class="main-wrapper">
        <!-- parallax banner is start -->
        <div class="parallax-banner-wrapper">
            <h1 id="banner-header-text" class="parallax-banner-text-box fw-normal">Product</h1>
            <?php 
                     if ( is_front_page() ) : ?>
                       <h1 id="banner-header-text" class="parallax-banner-text-box fw-normal">Product</h1>
                    <?php else : ?>
                        <h1 id="banner-header-text" class="parallax-banner-text-box fw-normal"><?php the_title()?></h1>
                    <?php endif; 
                ?>
            <div class="parallax-banner-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/images/product_banner.jpg);">
            </div>
        </div>
        <!-- parallax banner is end -->