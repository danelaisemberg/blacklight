<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Blacklight
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function blacklight_body_classes( $classes ) {
    // Adds a class of hfeed to non-singular pages.
    if ( ! is_singular() ) {
        $classes[] = 'hfeed';
    }

    // Adds a class of no-sidebar when there is no sidebar present.
    if ( ! is_active_sidebar( 'sidebar-1' ) ) {
        $classes[] = 'no-sidebar';
    }

    return $classes;
}
add_filter( 'body_class', 'blacklight_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function blacklight_pingback_header() {
    if ( is_singular() && pings_open() ) {
        printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
    }
}
add_action( 'wp_head', 'blacklight_pingback_header' );


/**
 * Cantidad de palabras del extracto del destacado principal.
 */
function bl_extractoPrincipal() {
    
        $content = get_the_content(); 
        $extractoPrincipal = get_field('extractoPrincipal', 'option');
        // get the first 80 words from the content and added to the $abstract variable
        preg_match('/^([^.!?\s]*[\.!?\s]+){0,' . $extractoPrincipal . '}/', strip_tags($content), $abstract);
        // pregmatch will return an array and the first 80 chars will be in the first element 
        echo $abstract[0] . '[...]'; ?>
         
<?php }


/**
 * Cantidad de palabras del extracto del destacado secundario.
 */
function bl_extractoSecundario() {
        
        $content = get_the_content(); 
        $extractoSecundario = get_field('extractoSecundario', 'option');
        if (    $extractoSecundario  != 0) {
            
            $extractoSecundario = get_field('extractoSecundario', 'option');
            // get the first 80 words from the content and added to the $abstract variable
            preg_match('/^([^.!?\s]*[\.!?\s]+){0,' . $extractoSecundario . '}/', strip_tags($content), $abstract);
            // pregmatch will return an array and the first 80 chars will be in the first element 
            echo $abstract[0] . '[...]'; ?>
            
            
        <?php 
            } else {
            // No imprime nada
        }         
}

/**
 * Cantidad de palabras del extracto del destacado index.
 */
function bl_extracto() {
        
        $content = get_the_content(); 
        $extractoIndex = get_field('extractoIndex', 'option');
        if (    $extractoIndex  != 0) {
            
            $extractoSecundario = get_field('extractoIndex', 'option');
            // get the first 80 words from the content and added to the $abstract variable
            preg_match('/^([^.!?\s]*[\.!?\s]+){0,' . $extractoSecundario . '}/', strip_tags($content), $abstract);
            // pregmatch will return an array and the first 80 chars will be in the first element 
            echo $abstract[0] . '[...]'; ?>
            
            
        <?php 
            } else {
            // No imprime nada
        }         
}

/**
 * Output Categories
 */

function bl_category() {

    $categories = get_the_category();
    $separator = ', ';
    $output = '';

        if($categories){
          foreach($categories as $category) {
              $output .= '<a class="bl-category" href="'.get_category_link($category->term_id ).'" title="' . esc_attr( sprintf( __( "%s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
          }
          echo trim($output, $separator);
        }
}


// Atajos de Clases
function paddingY() {
    echo 'py-md-5 px-md-0 p-3 justify-content-md-center';
}

function paddingB() {
    echo 'pb-md-5 px-md-0 p-3 justify-content-md-center';
}

function paddingT() {
    echo 'pt-md-5 px-md-0 p-3 justify-content-md-center';
}

/**
 * Remove “Category:”, “Tag:”, “Author:”
 */
add_filter( 'get_the_archive_title', function ($title) {

    if ( is_category() ) {

            $title = single_cat_title( '', false );

        } elseif ( is_tag() ) {

            $title = single_tag_title( '', false );

        } elseif ( is_author() ) {

            $title = '<span class="vcard">' . get_the_author() . '</span>' ;

        }

    return $title;

});
