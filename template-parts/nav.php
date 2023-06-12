<div class="container-fluid bg-principal">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="row">
        <div class="col-12">
          <div class="d-flex justify-content-between">
            <?php the_custom_logo(); ?>
            <?php aws_get_search_form( true ); ?>
            <div class="d-flex justify-content-start w-20">
              <?php
              $image = get_field('promocion');
              if (!empty($image)) : ?>
                <img class="promocion-nav" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <?php endif; ?>
            </div>

          </div>
        </div>
        <div class="col-12 col-sm-12">
          <div class="d-flex justify-content-between">
            <?php if (is_active_sidebar('nav1')) :
              dynamic_sidebar('nav1');
            endif; ?>
            <?php if (is_active_sidebar('nav2')) :
              dynamic_sidebar('nav2');
            endif; ?>
            <?php if (is_active_sidebar('nav3')) :
              dynamic_sidebar('nav3');
            endif; ?>
          </div>
        </div>
      </div>
    </div>
  </nav>
</div>