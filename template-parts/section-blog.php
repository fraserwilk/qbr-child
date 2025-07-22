<a id="blog"></a>
<?php 
  $blogs = get_sub_field('blogs');
  if ($blogs) : ?>
<section class="blog py-5">
  <div class="container">
  <h2>Latest Articles</h2>
  <div class="subheading">Expert tips, maintenance guides, and cycling insights to keep you informed</div>
  <section class="row">

      <?php foreach ($blogs as $blog_post) :
      // Ensure it's a valid WP_Post object
      if (!$blog_post instanceof WP_Post) continue;

      $post_id    = $blog_post->ID;
      $title      = get_the_title($post_id);
      $permalink  = get_permalink($post_id);
      $image      = get_the_post_thumbnail($post_id, 'medium');
      $icon       = get_field('icon', $post_id);
      $price      = get_field('price', $post_id);
      $duration   = get_field('duration', $post_id);
      $excerpt_full = get_the_excerpt($post_id); // Use excerpt for blog posts
      $excerpt = wp_trim_words($excerpt_full, 15, '...');
      $link       = get_field('book_now_link', $post_id);
    ?>

      <!-- Render card -->
      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="service-block p-4 border rounded h-100 d-flex flex-column justify-content-between">
          <!-- Topper -->
          <div class="topper mb-4 d-flex align-items-center justify-content-between">
            <?php if ($image): ?>
              <div class="featured-image">
                <?php echo $image; ?>
              </div>
            <?php endif; ?>
            
          </div>
          <!-- Content -->
          <div class="content mb-3">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <span class="blog-category text-primary">
                <?php
                  $categories = get_the_category($post_id);
                  if (!empty($categories)) {
                    echo esc_html($categories[0]->name);
                  }
                ?>
              </span>
              <span class="blog-date text-muted small">
                <?php echo get_the_date('M j, Y', $post_id); ?>
              </span>
            </div>
            <h3 class="blog-title h5 mb-2">
              <a href="<?php echo esc_url($permalink); ?>"><?php echo wp_kses_post( $title ); ?></a>
            </h3>
            <?php if ($excerpt): ?>
              <p class="blog-description text-muted"><?php echo esc_html($excerpt); ?></p>
            <?php endif; ?>
          </div>
          <!-- Footer -->
          <div class="under-block">
            <?php if ($price): ?>
              <div class="service-price fw-bold mb-2"><?php echo esc_html($price); ?></div>
            <?php endif; ?>
            <div class="mb-3">
              <a class="btn btn-outline-secondary btn-sm" href="<?php echo esc_url($permalink); ?>">
              Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </section>
  </div>
  </section>
<?php endif; ?>
