<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sonrich
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="shortcut icon" href="inc/img/home/favicon.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200;300;400;600;700;900&display=swap"
        rel="stylesheet">

    <!-- Owl Carosel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/inc/responsive.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">


    <title> Sonrich </title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="main-wrapper">
        <!--Header Section Start-->
        <header>

            <!-- top nav start -->
            <div class="navigation-bar" style="background: var(--black);">
                <nav class="navbar navbar-expand-lg navbar-light container p-2">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-2 mb-lg-0 ms-auto">
                            <li class="nav-item ms-2">
                                <a class="top-bar nav-link dropdown-toggle" target="_blank" href="#" role="button">
                                    Future Sonrich
                                </a>
                            </li>
                            <li class="nav-item ms-2">
                                <a class="top-bar nav-link dropdown-toggle" target="_blank" href="#" role="button">
                                    invoice
                                </a>
                            </li>
                            <li class="nav-item ms-2">
                                <a class="top-bar nav-link dropdown-toggle" target="_blank" href="#" role="button">
                                    Sell Sell
                                </a>
                            </li>
                            <li class="nav-item ms-2">
                                <a class="top-bar nav-link dropdown-toggle" target="_blank" href="#" role="button">
                                    Old Sonrich
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>


            <!-- ----Add By ON----- -->
            <div class="navigation-bar">
                <nav class="navbar navbar-expand-lg navbar-light container p-0">
                    <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img
                            src="<?php echo get_template_directory_uri(); ?>/inc/images/Sonrich_international.png"
                            alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                                'container'      => 'div',
                                'container_class' => 'navigation-bar',
                                'menu_class'     => 'navbar-nav mb-2 mb-lg-0 ms-auto',
                                'fallback_cb'    => false,
                                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'walker' => new WP_Bootstrap_Navwalker(),
                            )
                        );
                        ?>
                        <form class="d-flex ms-2" role="search">
                            <input class="form-control navbar-search me-2 ms-auto" type="search" placeholder="Search"
                                aria-label="Search">
                            <div class="search-icon">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
        </header>


    <!-- <div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'sonrich'); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
            the_custom_logo();
            if (is_front_page() && is_home()) :
            ?>
				<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php
            else :
                ?>
				<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
				<?php
            endif;
            $sonrich_description = get_bloginfo('description', 'display');
            if ($sonrich_description || is_customize_preview()) :
                ?>
				<p class="site-description"><?php echo $sonrich_description; ?></p>
			<?php endif; ?>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'sonrich'); ?></button>
			
		</nav> -->