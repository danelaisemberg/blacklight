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

<div id="primary" class="bl-contacto" style="background-color:<?php the_field( 'bg_contacto' ); ?>">
	<main id="main" class="site-main">
		<div class="container">
	    	<div class="row <?php paddingY(); ?>">
	        	<div class="col-md-5 d-flex align-items-center bl-message">
	        		<div class="dummy-container text-white">
	        			<h1 class="bl-title text-white"><?php the_field( 'titulo_contacto' ); ?></h1>
	        			<?php the_field( 'texto_contacto' ); ?>
	        			<div class="text-md-center pb-5">
	        				<?php if ( the_field( 'img_contacto' ) ) { ?>
								<img src="<?php the_field( 'img_contacto' ); ?>" alt="">
		        			<?php } else { ?>
								<img src="<?php echo site_url( ); ?>/wp-content/themes/blacklight/img/contact.svg" alt="">
		        			<?php } ?>
	        			</div>
	        		</div>
	        	</div> <!-- .col-md-6 -->
	        	<div class="offset-md-1 col-md-5 px-5 py-3 bg-white rounded bl-contacto-form bl-shadow-2">
	        		<h4 class="bl-title"><?php the_field( 'titulo_form' ); ?></h4>
	        		<?php the_field( 'formulario_contacto' ); ?>
	        	</div> <!-- .col-md-6 -->
	    	</div> <!-- .row -->
    	</div> <!-- .container -->
    </main> <!-- #main -->
</div> <!-- #primary -->

<?php
get_footer();
