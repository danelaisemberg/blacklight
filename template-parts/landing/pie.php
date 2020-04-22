<div class="container">
	<div class="row <?php paddingY(); ?>">
	<?php if ( have_rows( 'landing_repeater', 'options' ) ) : ?>
			<?php while ( have_rows( 'landing_repeater', 'options' ) ) : the_row(); ?>

				<div class="col-md-6">
					<h3><?php the_sub_field( 'titulo' ); ?></h3>
					<?php the_sub_field( 'texto' ); ?>
				</div>

			<?php endwhile; ?>
	<?php endif; ?>
	</div> <!-- .row -->
</div> <!-- .container -->