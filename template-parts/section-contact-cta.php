<a id="contact"></a>
<?php 
$page = get_sub_field('contact-cta');
    if ($page):
        setup_postdata($page); ?>

        <section class="container-cta bg-dark text-white">
            <div class="full-width">
                <?php echo apply_filters('the_content', $page->post_content); ?>
            </div>
        </section>

    <?php wp_reset_postdata(); ?>
<?php endif; ?>
    

