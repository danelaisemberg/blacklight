<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Blacklight
 */

get_header();
?>

	<div id="primary" class="content-area error-404">
		<main id="main" class="site-main">

			<div class="container">
				<div class="row justify-content-md-center">
					<section class="col-md-6 text-center not-found">
						<header class="page-header">
							<h1 class="page-title"><?php esc_html_e( 'Parece que no hay nada por aquí.', 'blacklight' ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content">
							<p><?php esc_html_e( 'No sabemos que sucedió, pero esta página no existe. Quizá te interese utilizar el búscador.', 'blacklight' ); ?></p>

							<?php get_search_form(); ?>

						</div><!-- .page-content -->
					</section><!-- .error-404 -->
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
