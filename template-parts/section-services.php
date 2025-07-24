<section id="services"></section>
<?php 
  $services = get_sub_field('services');

if ($services) : ?>

<section class="services py-5">
  <div class="container">
<h2>Bicycle Repair & Maintenance</h2>
<div class="subheading">Our certified technicians provide comprehensive bicycle services using professional-grade tools and premium components to ensure your bike performs at its best.</div>
<section class="row">
    <?php foreach ($services as $service_post) :
      // Ensure it's a valid WP_Post object
      if (!$service_post instanceof WP_Post) continue;

      $post_id    = $service_post->ID;
      $title      = get_the_title($post_id);
      $permalink  = get_permalink($post_id);
      $icon       = get_field('icon', $post_id);
      $price      = get_field('price', $post_id);
      $duration   = get_field('duration', $post_id);
      $description = get_field('description', $post_id);
      $book_now_link = function_exists('get_field') ? get_field('book_now_link', $post_id) : null;
    ?>

      <!-- Render card -->
      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="service-block p-4 border rounded h-100 d-flex flex-column justify-content-between">
          <!-- Topper -->
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
          <!-- Content -->
          <div class="content mb-3">
            <h3 class="service-title h5 mb-2">
              <a href="<?php echo esc_url($permalink); ?>"><?php echo esc_html($title); ?></a>
            </h3>
            <?php if ($description): ?>
              <p class="service-description text-muted"><?php echo esc_html($description); ?></p>
            <?php endif; ?>
          </div>
          <!-- Footer -->
          <div class="under-block">
            <?php if ($price): ?>
              <div class="service-price fw-bold mb-2"><?php echo esc_html($price); ?></div>
            <?php endif; ?>
            <?php if ($book_now_link): ?>
              <div class="service-link">
                <a class="btn btn-primary text-light" href="<?php echo esc_url($book_now_link['url']); ?>" target="<?php echo esc_attr($book_now_link['target'] ?: '_self'); ?>">
                  <?php echo esc_html($book_now_link['title'] ?: 'Book Now'); ?>
                </a>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </section>
  </div>
</section>
<?php endif; ?>
