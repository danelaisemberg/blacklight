<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blacklight
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer section bg-black py-4">
		<div class="site-info container">
            <div class="row">
               <div class="col-md-6">
                <p class="m-0">
                <?php 
                        $siteName = get_field('siteName', 'option');

                        if ($siteName) :
                            echo $siteName;
                        else :
                            echo "Agregar Nombre";
                        endif;  

                    ?>
                    
                    &copy; 

                    <?php echo date(Y);?>
                    
                  </p>

                    
               </div>
               <div class="col-md-6 text-md-right">
                        <?php
                        printf( esc_html__( 'By %1$s', 'blacklight' ), '<a href="https://www.ingenima.com">Ingenima</a>' );
                        ?>
               </div>
                
            </div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
