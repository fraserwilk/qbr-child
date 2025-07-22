<section class="testimonials py-5">
  <div class="container">
    <h2>What our Customers Say</h2>
    <div class="subheading">Don't just take our word for it</div>
    
    <?php if (have_rows('testimonials')): ?>
      <div class="row">
        <?php while (have_rows('testimonials')): the_row();
          $quote = get_sub_field('quote');
          $author = get_sub_field('author');
          $photo = get_sub_field('photo');
        ?>
          <div class="col-md-4 mb-4">
            <div class="service-card p-3 border rounded h-100 d-flex flex-column">
              <?php if ($photo): ?>
                <div class="testimonial-photo mb-3 text-center">
                  <img src="<?php echo esc_url($photo['url']); ?>" 
                       alt="<?php echo esc_attr($photo['alt'] ?: $author); ?>" 
                       class="rounded-circle" 
                       width="60" 
                       height="60">
                </div>
              <?php endif; ?>
              
              <blockquote class="flex-grow-1">
                <p class="mb-3">"<?php echo esc_html($quote); ?>"</p>
              </blockquote>
              
              <cite class="text-muted">
                — <?php echo esc_html($author); ?>
              </cite>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    <?php else: ?>
      <p class="text-center text-muted">No testimonials available at the moment.</p>
    <?php endif; ?>
  </div>
</section>