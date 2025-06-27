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

					<footer class="bg-qbr-blue text-light py-5 px-3">
						<div class="container">
							<div class="row g-4 mb-4">
							
							<!-- Left Section: Logo and Description -->
							<div class="col-lg-6">
								<div class="d-flex align-items-center mb-3">
								<!-- Replace with actual icon -->
								<i class="bi bi-tools text-danger fs-4 me-2"></i>
								<span class="fs-4 fw-bold text-white">Quality Bicycle Repairs</span>
								</div>
								<p class="text-light-50 mb-4">
								Professional bicycle repair and maintenance services. Keeping cyclists safe and bikes
								running smoothly with expert care and precision workmanship.
								</p>
								<div class="small">
								<div class="d-flex align-items-center mb-2">
									<i class="bi bi-telephone text-danger me-2"></i>
									<span>(03) 9830 4956</span>
								</div>
								<div class="d-flex align-items-center mb-2">
									<i class="bi bi-envelope text-danger me-2"></i>
									<span>service@qualitybicyclerepairs.com</span>
								</div>
								<div class="d-flex align-items-center">
									<i class="bi bi-geo-alt text-danger me-2"></i>
									<span>118 Union Road, Surrey Hills, Victoria</span>
								</div>
								</div>
							</div>

							<!-- Services -->
							<div class="col-md-6 col-lg-3">
								<h5 class="text-white fw-semibold mb-3">Services</h5>
								<ul class="list-unstyled small">
								<li><a href="#" class="text-light text-decoration-none link-hover">Complete Tune-Up</a></li>
								<li><a href="#" class="text-light text-decoration-none link-hover">Wheel Service</a></li>
								<li><a href="#" class="text-light text-decoration-none link-hover">Brake System</a></li>
								<li><a href="#" class="text-light text-decoration-none link-hover">Drivetrain Service</a></li>
								<li><a href="#" class="text-light text-decoration-none link-hover">Emergency Repairs</a></li>
								</ul>
							</div>

							<!-- Quick Links -->
							<div class="col-md-6 col-lg-3">
								<h5 class="text-white fw-semibold mb-3">Quick Links</h5>
								<ul class="list-unstyled small">
								<li><a href="#booking" class="text-light text-decoration-none link-hover">Book Service</a></li>
								<li><a href="#testimonials" class="text-light text-decoration-none link-hover">Customer Reviews</a></li>
								<li><a href="#blog" class="text-light text-decoration-none link-hover">Maintenance Tips</a></li>
								<li><a href="#contact" class="text-light text-decoration-none link-hover">Contact Us</a></li>
								<li><a href="#" class="text-light text-decoration-none link-hover">Service Warranty</a></li>
								</ul>
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

