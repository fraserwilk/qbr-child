<a id="book"></a>
<section class="hubtiger py-5">
  <div class="container">
    <h2 class="row">Book Your Repair</h2>
    <div class="subheading"> <?php // Centered the div for better button placement ?>

      <?php 
      // Use the 'Link' field from ACF
      $link = get_sub_field('hubtiger_button');

      if( $link ): 
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
          <a class="btn btn-primary btn-lg text-light" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
              <?php echo esc_html( $link_title ); ?>
          </a>
      <?php endif; ?>
      
    </div>
  </div>
</section>