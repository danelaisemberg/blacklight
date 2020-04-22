<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blacklight
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$blacklight_comment_count = get_comments_number();
			if ( '1' === $blacklight_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'Comentarios', 'blacklight' ),
					'<span>' . esc_html(get_the_title()) . '</span>'
				);
			} else {
                printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s Comentarios', $blacklight_comment_count, 'comments title', 'blacklight' ) ),
					esc_html( number_format_i18n( $blacklight_comment_count ) ),
					'<span>' . esc_html( get_the_title() ) . '</span>'
				);
            }
            ?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
			) );
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'blacklight' ); ?></p>
			<?php
		endif;

	endif;// Check for have_comments(). ?>

	<?php comment_form( $args = array(
        'id_form'           => 'commentform',  // that's the wordpress default value! delete it or edit it ;)
        'id_submit'         => 'commentsubmit',
        'title_reply'       => __( 'Escribir', 'blacklight' ),  // that's the wordpress default value! delete it or edit it ;)
		/* translators: 1: Reply Specific User */
        'title_reply_to'    => __( 'Responder %s', 'blacklight' ),  // that's the wordpress default value! delete it or edit it ;)
        'cancel_reply_link' => __( 'Cancelar', 'blacklight' ),  // that's the wordpress default value! delete it or edit it ;)
        'label_submit'      => __( 'Postear', 'blacklight' ),  // that's the wordpress default value! delete it or edit it ;)

        'comment_field' =>  '<p><textarea placeholder="Escribir..." id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',

        'comment_notes_after' => '<p class="form-allowed-tags">' .
            __( '<abbr title="HyperText Markup Language">HTML</abbr> tags y atributos:', 'blacklight' ) .
            '</p><div class="alert alert-info">' . allowed_tags() . '</div>'

        // So, that was the needed stuff to have bootstrap basic styles for the form elements and buttons

        // Basically you can edit everything here!
        // Checkout the docs for more: http://codex.wordpress.org/Function_Reference/comment_form
        // Another note: some classes are added in the bootstrap-wp.js - ckeck from line 1

    ));

	?>

</div><!-- #comments -->
