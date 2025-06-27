<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}

$wrapper_id = 'full-width-page-wrapper';
if ( is_page_template( 'page-templates/no-title.php' ) ) {
	$wrapper_id = 'no-title-page-wrapper';
}
?>

<div class="wrapper" id="<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?>">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php if (have_rows('page_sections', get_the_ID())): ?>
						<?php while (have_rows('page_sections')): the_row(); ?>

							<?php if (get_row_layout() === 'services'): ?>
							<?php get_template_part('template-parts/section', 'services'); ?>

							<?php elseif (get_row_layout() === 'testimonials'): ?>
							<?php get_template_part('template-parts/section', 'testimonials'); ?>

							<?php elseif (get_row_layout() === 'why_choose'): ?>
							<?php get_template_part('template-parts/section', 'why-choose'); ?>

							<?php elseif (get_row_layout() === 'hubtiger'): ?>
							<?php get_template_part('template-parts/section', 'hubtiger'); ?>

							<?php elseif (get_row_layout() === 'blog'): ?>
							<?php get_template_part('template-parts/section', 'blog'); ?>

							<?php elseif (get_row_layout() === 'contact_cta'): ?>
							<?php get_template_part('template-parts/section', 'contact-cta'); ?>

							<?php endif; ?>

						<?php endwhile; ?>
						<?php endif; ?>


				</main>

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?> -->

<?php
get_footer();
