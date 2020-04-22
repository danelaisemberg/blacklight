<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blacklight
 */

?>

<!-- Container -->
<div class="container">
   
    <!-- Head -->
    <div class="row"> 
        <div class="col text-center">
           
            <?php blacklight_post_thumbnail(); ?>
            <header class="entry-header">
                <?php
                if ( is_singular() ) :
                    the_title( '<h1 class="entry-title">', '</h1>' );
                else :
                    the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                endif;

                if ( 'post' === get_post_type() ) :
                    ?>
                    <div class="entry-meta">
                        <?php
                        blacklight_posted_on();
                        ?>
                    </div><!-- .entry-meta -->
                <?php endif; ?>
            </header><!-- .entry-header -->
        </div>
    </div>
    <!-- End Head -->
    
    
    <!-- Content -->
    <div class="row">
        <div class="offset-md-2 col-md-8">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <div class="entry-content">
                    <?php
                    the_content( sprintf(
                        wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'blacklight' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        get_the_title()
                    ) );

                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blacklight' ),
                        'after'  => '</div>',
                    ) );
                    ?>
                </div><!-- .entry-content -->

                <footer class="entry-footer">
                    <?php blacklight_entry_footer(); ?>
                </footer><!-- .entry-footer -->
            </article><!-- #post-<?php the_ID(); ?> -->
            
        </div>
    </div>
    <!-- End Content -->
</div>
<!-- End Container -->


<div class="container">
    <div class="row <?php paddingY(); ?> justify-content-md-center bl-pagination">
        <div class="col-md-5 text-left">
            <?php previous_post_link( $format = '<i>Anterior:</i></br> « %link', $link = '%title' ); ?>    
        </div>
        <div class="col-md-5 text-right">
            <?php next_post_link( $format = '<i>Siguiente:</i></br> %link »', $link = '%title' ); ?>
        </div>
    </div>
</div>    

    


<div class="comments-container bg-lightgrey">
    <div class="container">
        <div class="row p-md-5 pt-5">
            <div class="offset-md-2 col-md-8">
                <?php 

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                ?>
            </div>
        </div>
    </div>
</div>

