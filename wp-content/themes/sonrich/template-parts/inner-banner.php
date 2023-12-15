<div class="main-wrapper">
        <!-- parallax banner is start -->
        <div class="parallax-banner-wrapper">
           <?php 
				if (wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) )
				  {
					$bannerUrl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
				  }
				
				else{
          $banner = get_field('default_inner_banner', 'option');
         $bannerUrl = get_template_directory_uri() . '/inc/images/product_banner.jpg';

				}
 
                     if ( is_front_page() ) : ?>
                       <h1 id="banner-header-text" class="parallax-banner-text-box fw-normal">Product</h1>
                    <?php else : ?>
                        <h1 id="banner-header-text" class="parallax-banner-text-box fw-normal"><?php the_title()?></h1>
                    <?php endif; 
                ?>
            <div class="parallax-banner-image" style="background-image: url(<?php echo $bannerUrl; ?>);">
            </div>
        </div>
        <!-- parallax banner is end -->
