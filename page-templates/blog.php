<?php
/**
 * Template Name: Sala de Lectura
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blacklight
 */

get_header();
?>

<section class="ev-sala-home">
	<div class="container">
		<div class="row justify-content-md-center <?php paddingY(); ?>">
			<div class="col-md-8 text-center">
				<h1 class="bl-title"><?php the_title(); ?></h1>
			</div>
			<div class="col-md-8 text-center">
				<?php get_search_form(); ?>
			</div>
		</div>
			<?php
				
				$argsCat = array(
					'category_name'  => 'sala-de-lectura',
					'posts_per_page' => 12,
					'paged' 		 => $paged 
				);

				// Almacena nro de paginacion en variable
				$paged = ( get_query_var('page') ) ? get_query_var('page') : 1;

				// The query
				$queryCat = new WP_Query($argsCat);

				global $wp_query;
				// Put default query object in a temp variable
				$tmp_query = $wp_query;
				// Now wipe it out completely
				$wp_query = null;
				// Re-populate the global with our custom query
				$wp_query = $queryCat;
			?>

			<?php if ( $queryCat->have_posts() ) : ?>
			<div class="row">
				<div class="col-md-6">
					<h2 class="bl-title">Lo último</h2>
				</div>
			</div>
			<div class="row <?php paddingB(); ?> grid">
				<?php // Start the Loop 
				while ( $queryCat->have_posts() ) : $queryCat->the_post(); ?>
					<div class="col-md-4 grid-sizer grid-item my-3 bl-destacadoTerciario bl-destacado">
			             <div class="bl-box bg-white bl-shadow-2">
			                <a href="<?php the_permalink(); ?>">
			                     <?php the_post_thumbnail( 'blog-secondaryFeatured', array( 'alt' => get_the_title() ) ); ?>
			                </a>
			                <div class="p-4 bl-boxContent">
			                     <div class="bl-cardData my-3">
			                         <span><?php the_time( 'j \d\e M \d\e Y' ); ?></span> | Categoría: <span><?php bl_category(); ?></span>
			                     </div>
			                     <h2 class="bl-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			                     <p><?php bl_extractoSecundario(); ?></p>
			                     <a class="bl-link" href="<?php the_permalink(); ?>">Leer Más</a> 
			                </div>
			             </div>
			         </div>
				<?php endwhile; ?>
			</div>

			<div class="row <?php paddingY(); ?> justify-content-md-center">
                <div class="col-md-8 text-center">  
                    <?php echo paginate_links(); ?>
                </div>
            </div>
			<?php wp_reset_postdata(); // Reset global post ?>

			<?php endif;

				// Restore original query object
				$wp_query = null;
				$wp_query = $tmp_query;

			?>

	</div>
</section>

            	

<?php
get_footer();
