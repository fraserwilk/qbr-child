<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class('grid-card'); ?> id="post-<?php the_ID(); ?>">
	<div class="card h-100">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="card-img-top">
				<?php echo get_the_post_thumbnail( $post->ID, 'medium_large', array('class' => 'img-fluid') ); ?>
			</div>
		<?php endif; ?>

		<div class="card-body d-flex flex-column">
			<header class="entry-header">

				<?php
				the_title(
					sprintf( '<h3 class="card-title entry-title"><a href="%s" rel="bookmark" class="text-decoration-none">', esc_url( get_permalink() ) ),
					'</a></h3>'
				);
				?>


			</header><!-- .entry-header -->


				<div class="entry-content flex-grow-1">
					<?php
					the_excerpt();
					understrap_link_pages();
					?>
				</div><!-- .entry-content -->
				
			</div>
			<footer class="entry-footer mt-auto px-4">

				<?php understrap_entry_footer(); ?>

			</footer><!-- .entry-footer -->
		</div><!-- .card-body -->
	</div><!-- .card -->
</article><!-- #post-<?php the_ID(); ?> -->
