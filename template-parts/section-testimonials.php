
<section class="testimonials py-5">
  <div class="container">
    <h2>What our Customers Say</h2>
    <div class="subheading">Don't just take our word for it</div>
    <div class="row">
      <?php while (have_rows('testimonials')): the_row();
        $quote = get_sub_field('quote');
        $author = get_sub_field('author');
        $photo = get_sub_field('photo');
      ?>
        <div class="col-md-4 mb-4">
          <div class="service-card p-3 border rounded h-100">
            <h3><?php echo esc_html($quote); ?></h3>
            <p><?php echo esc_html($author); ?></p>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
