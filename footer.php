<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

					<footer class="bg-qbr-blue text-light py-1 px-3">
						<div class="container">
							<div class="row g-4 mb-2">
							
							<!-- Left Section: Logo and Description -->
							<div class="col-lg-6">
								<div class="d-flex align-items-center mb-3">
									<span class="fs-4 fw-bold text-white">Quality Bicycle Repairs</span>
								</div>
								<p class="text-light-50 mb-3">
								Professional bicycle repair and maintenance services. Keeping cyclists safe and bikes
								running smoothly with expert care and precision workmanship.
								</p>
								
							</div>

							
							</div>

							<!-- Bottom Bar -->
							<div class="border-top border-primary-subtle pt-4">
							<div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
								<p class="mb-0 small text-light-50">
								&copy; <?php echo date('Y'); ?> Quality Bicycle Repairs. Professional bicycle service since 2000.
								</p>
								<div class="d-flex gap-4 small">
								<a href="#" class="text-light text-decoration-none link-hover">Privacy Policy</a>
								<a href="#" class="text-light text-decoration-none link-hover">Terms of Service</a>
								<a href="#" class="text-light text-decoration-none link-hover">Service Guarantee</a>
								</div>
							</div>
							</div>
						</div>
						</footer>


						<!-- <?php understrap_site_info(); ?> -->

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!-- col -->

		</div><!-- .row -->

	</div><!-- .container(-fluid) -->

</div><!-- #wrapper-footer -->

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

