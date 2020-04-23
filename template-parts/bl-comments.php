<?php
/**
 * Template part para mostrar los comentarios
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blacklight
 */

?>

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