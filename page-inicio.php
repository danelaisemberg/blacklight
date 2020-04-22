<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blacklight
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <h2><?php the_title( $before = 'asd', $after = 'ds', $echo = true ) ?></h2>

	<?php

    // check if the flexible content field has rows of data
    if( have_rows('page_builder') ):

         // loop through the rows of data
        while ( have_rows('page_builder') ) : the_row();

            if( get_row_layout() == 'completo' ):
                
                    blb_fluidContainer();
            
            // check row 'fijo' layout
            // comienzo de contenedor ancho fijo class
            elseif(get_row_layout() == 'fijo' ):
            
                    blb_container();
                        
            endif;

        endwhile;

    else :

        echo 'nada';

    endif;

    ?>
                
        

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
