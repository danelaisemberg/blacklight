<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * Template Name: Contacto
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blacklight
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="container">
	    	<div class="row">
	        	<div class="offset-md-2 col-md-6">
	        		<h1 class="bl-title"><?php the_title(); ?></h1>
	        		<?php the_content(); ?>
	        	</div> <!-- .col-md-6 -->
	    	</div> <!-- .row -->
    	</div> <!-- .container -->
    </main> <!-- #main -->
</div> <!-- #primary -->

<?php
get_footer();
