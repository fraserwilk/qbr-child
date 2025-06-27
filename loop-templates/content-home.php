<?php
/**
 * Partial template for content in page.php
 *
 * @package Understrap
 */

defined( 'ABSPATH' ) || exit;
?>

<section <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="entry-content">

		<?php
		the_content();
		understrap_link_pages();
		?>

		<?php if (have_rows('services')): ?>
			<div class="row">
				<?php while (have_rows('services')): the_row(); ?>
					<?php
					$service_post = get_sub_field('service');
					if ($service_post):
						$post_id    = $service_post->ID;
						$title      = get_the_title($post_id);
						$permalink  = get_permalink($post_id);
						$image      = get_the_post_thumbnail($post_id, 'medium');
						$icon       = get_field('icon', $post_id);
						$price      = get_field('price', $post_id);
						$duration   = get_field('duration', $post_id);
						$description= get_field('description', $post_id);
						$link       = get_field('book_now_link', $post_id);
					?>
						<div class="col-12 col-md-6 col-lg-4 mb-4">
							<div class="service-block p-4 border rounded h-100 d-flex flex-column justify-content-between">
								
								<div class="topper mb-4 d-flex align-items-center justify-content-between">
									<?php if ($icon): ?>
										<div class="service-icon-wrapper me-2">
											<span class="service-icon dashicons <?php echo esc_attr($icon); ?>"></span>
										</div>
									<?php endif; ?>

									<?php if ($duration): ?>
										<span class="service-duration badge bg-secondary rounded-pill"><?php echo esc_html($duration); ?></span>
									<?php endif; ?>
								</div>

								<div class="content mb-3">
									<h3 class="service-title h5 mb-2">
										<a href="<?php echo esc_url($permalink); ?>"><?php echo esc_html($title); ?></a>
									</h3>

									<?php if ($description): ?>
										<p class="service-description text-muted"><?php echo esc_html($description); ?></p>
									<?php endif; ?>
								</div>

								<div class="under-block">
									<?php if ($price): ?>
										<div class="service-price fw-bold mb-2"><?php echo esc_html($price); ?></div>
									<?php endif; ?>

									<?php if ($link): ?>
										<div class="service-link">
											<a class="btn btn-primary" href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target'] ?: '_self'); ?>">
												<?php echo esc_html($link['title'] ?: 'Book Now'); ?>
											</a>
										</div>
									<?php endif; ?>
								</div>

							</div>
						</div>
					<?php endif; ?>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php understrap_edit_post_link(); ?>
	</footer>

</section>
