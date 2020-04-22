<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * Template Name: Landing Page 1
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blacklight
 */

get_header('blank');
global $post;
$post_slug = $post->post_name;
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main ev-<?php echo $post_slug;?>">

			<div class="container">
				<div class="row">
					<div class="col">
						<h1><?php the_title(); ?></h1>
					</div> <!-- .col -->
				</div> <!-- .row -->
			

				<div class="row <?php paddingY(); ?>">
					<div class="col-md-6">
						<div class="container p-0">
							<div class="row">

								<div class="col-12">
									<?php the_field( 'texto_landing' ); ?>
								</div> <!-- .col-12 -->

								<?php 
								// motivadores
								if ( have_rows( 'repeater_motivadores' ) ) : ?>
									<div class="col-12">
										<h3><?php the_field( 'titulo_motivadores' ); ?></h3>
									</div> <!-- .col-12 -->
									
									<div class="col-12 d-flex">
										<?php while ( have_rows( 'repeater_motivadores' ) ) : the_row(); ?>
											<div class="dummy-container text-center">
												<i class="fas fa-check-circle"></i>
												<?php the_sub_field( 'texto' ); ?>
											</div>
										<?php endwhile; ?>
									</div> <!-- .col-12 -->
								<?php endif; ?>

							</div> <!-- .row -->
						</div> <!-- .container -->
					</div> <!-- .col-md-8 -->

					<div class="offset-md-2 col-md-4 landing-form">
						<h3>Obtenga el documento</h3>
						
					</div> <!-- .col-md-4 -->
				</div> <!-- .row -->
			</div> <!-- .container -->

			<?php 
			// Insetar el pie de pagina con datos legales
			get_template_part('template-parts/landing/pie') 
			?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer('blank');