<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blacklight
 *
 * V 2.1
 *
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ingdev' ); ?></a>
    
    <section style="background-color:<?php the_field('menu_bg', 'option'); ?>">
    	<header id="masthead" class="site-header container">
    	<nav id="menu" class="navbar navbar-expand-md navbar-light row" role="navigation">
    		<div class="site-branding navbar-brand">
    			<div class="header-img">
                <a href="<?php echo esc_url( home_url( '/' )); ?>"><img src="<?php the_field('logo', 'option'); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" style="width:<?php the_field('width', 'option'); ?>px"></a>
    			</div>
    		</div><!-- .site-branding -->


    		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toogle navigation">
    		    <span class="navbar-toggler-icon"></span>
    		</button>
            <?php
            wp_nav_menu([
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'container'         => 'div',
                'container_id'      => 'bs4navbar',
                'container_class'   => 'collapse navbar-collapse justify-content-end',
                'menu_id'           => 'false',
                'menu_class'        => 'navbar-nav ml-auto',
                'depth'             => 3,
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker()
                
            ]);
            ?>
        </nav>
    	</header><!-- #masthead -->
    </section>

	<div id="content" class="site-content">

