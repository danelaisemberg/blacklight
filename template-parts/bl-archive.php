<?php
/**
 * Template part for displaying posts archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blacklight
 */

?>

<section class="bl-archive">
    <div class="container">
         
            <?php if ( have_posts() ) : ?>
            <div class="row grid justify-content-md-center">
                
                    <?php while ( have_posts() ) :
                        the_post(); ?>
                        <div class="col-md-4 grid-sizer grid-item my-3 bl-destacadoTerciario bl-destacado">
                            <div class="bl-box bg-white bl-shadow-2">
                                    <a href="<?php the_permalink(); ?>">
                                          <?php the_post_thumbnail( 'large', array( 'alt' => get_the_title(), 'class' => 'card-img-top' ) ); ?>
                                     </a>
                                <div class="p-4 bl-boxContent">
                                     
                                     <div class="bl-cardData my-3">
                                         <span><?php the_time( 'j \d\e F \d\e Y' ); ?></span> | Categoría: <span><?php bl_category(); ?></span>
                                     </div>
                                     <h2 class="bl-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                     <p><?php bl_extracto(); ?></p>
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

                    
                <?php endif;	?>
            
    </div>
</section>

