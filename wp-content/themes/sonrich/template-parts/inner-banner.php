<div class="banner-section px-0">
    <div class="container-fluid px-0">
        <div class="background-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/inc/images/sonrich-banner.jpg');">
            <div class="banner-content position-absolute">
                <?php 
                     if ( is_front_page() ) : ?>
                       <h1 class="banner-slagon text-white fs2 ls1 fw-300 l-height1 text-lg-start text-center" style="text-shadow: 2px 2px 5px #000000;">EMPOWERING INDIVIDUALS WITH</h1>
                       <h2 class="banner-heading text-lg-start text-center">Personal health</h2>
                    <?php else : ?>
                        <h2 class="banner-heading text-lg-start text-center"><?php the_title()?></h2>
                    <?php endif; 
                ?>
            </div>
        </div>
    </div>
</div>