<?php
/**
 * The template for displaying archive pages
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
               <div class="col text-md-center">
                    <?php the_archive_title( '<h1 class="bl-title">', '</h1>' ); ?>
               </div>
           </div>
       </div>

        <?php get_template_part( 'template-parts/bl', 'archive' ); ?>
	
	 </main> <!-- #main -->
</div> <!-- #primary -->
														
<?php					
get_footer();
