<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Blacklight
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main bl-search">

		<?php if ( have_posts() ) : ?>

			<div class="container">
				<div class="row mb-5 <?php paddingY(); ?>">
					<div class="col-md-8 text-md-center">
						<h1 class="bl-title">Realizar una nueva búsqueda.</h1>
	               		<?php get_search_form(); ?>
					</div>
				</div>
	           <div class="row">
	               <div class="col text-md-center">
	                    <h2 class="bl-title">
	                    <?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Resultados: %s', 'blacklight' ), '<span>' . get_search_query() . '</span>' );
						?>
	                    </h2>
	               </div>
	           </div>
	       </div>

			<?php
			get_template_part( 'template-parts/bl', 'archive' );

		else: ?>

			<div class="container">
	           <div class="row  <?php paddingY(); ?>">
	               <div class="col-md-8 text-md-center">
	                    <h1 class="bl-title">
						<?php 
						printf( esc_html__( 'No hay resultados de búsqueda: %s', 'blacklight' ), '<span> ' . get_search_query() . '</span>' ); 
						?>
						</h1>
	               		<p>Realizar una nueva búsqueda.</p>
	               		<?php get_search_form(); ?>
	               	</div>
	            </div>

	       </div>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
