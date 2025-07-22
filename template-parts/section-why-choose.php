<a id="why-choose"></a>
<section class="why-choose py-5">
  <div class="container">
    <h2 class="row ">Why Choose Quality Bicycle Repairs?</h2>
    <div class="row">
      <?php while (have_rows('why_choose')): the_row();
          // Ensure the title and benefit are set
          if (!get_sub_field('title') || !get_sub_field('benefit')) continue;

          // Get the title and benefit fields
          $title = get_sub_field('title');
          $benefit = get_sub_field('benefit');
      ?>
      
        <div class="col-md-4 mb-4">
          <div class="why-choose-card p-3 border rounded h-100">
            <h3><?php echo esc_html($title); ?></h3>
            <p><?php echo esc_html($benefit); ?></p>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
