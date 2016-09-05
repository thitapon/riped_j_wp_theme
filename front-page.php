<?php get_header(); ?>

  <!-- Add content in first column here -->


  </div> <!-- col-xs-1 class-menu -->
  <!-- End of first column -->

  <div class="col-sm-10">
  </div>
  </div>
  </div>
  <!-- close out the current container -->
  <div class="container">
    <div class="row">
      <?php if(get_theme_mod(front_pic)): ?>
        <div class="col-sm-6 col-lg-4" id="front-img">
          <img src="<?php echo get_theme_mod(front_pic, get_bloginfo('template_directory').'/img/profile_placeholder.png') ?>" class="img-responsive">
        </div> <!-- front img -->
        <div class="col-sm-6 col-lg-8" id="front-text">
      <?php else: ?>
        <div class="col-lg-12" id="front-text">
      <?php endif; ?>
        <h2>
          <?php echo get_theme_mod(front_header, 'Lorem ipsum') ?>
        </h2>
        <p>
          <?php echo get_theme_mod(front_text, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quis vestibulum tortor. Pellentesque sed vestibulum felis, vel ornare urna. Integer fermentum nisl id sapien maximus, et sodales augue euismod. Maecenas pellentesque dui euismod, blandit tellus ornare, euismod nisl. Aliquam mauris leo, luctus vitae varius sed, aliquam in metus. Aenean non quam justo. In ornare hendrerit eros in commodo. Ut egestas metus vel tincidunt blandit. Donec suscipit justo vel pulvinar fermentum. Etiam ante nunc, hendrerit ac neque non, consectetur consequat ex. Quisque porta ante eget tellus porttitor, ut bibendum mi sagittis. Quisque sit amet tempus sapien. Phasellus lobortis, nisl nec sollicitudin suscipit, lectus erat convallis mauris, eget sagittis libero libero a nisi. Donec ultrices mauris ut metus tempor posuere.') ?>
        </p>
      </div> <!-- front text -->
    </div><!-- row -->
  </div><!-- container -->

  <footer class="container_fluid" id="footer-tab">
    <div class="row">
      <div class="col-sm-4" id="left-footer">
        <?php if(is_active_sidebar('lf-sidebar')): ?>
          <?php dynamic_sidebar('lf-sidebar'); ?>
        <?php endif; ?>
      </div> <!-- left footer -->
      <div class="col-sm-4" id="center-footer">
        <?php if(is_active_sidebar('cf-sidebar')): ?>
          <?php dynamic_sidebar('cf-sidebar'); ?>
        <?php endif; ?>
      </div> <!-- center footer -->
      <div class="col-sm-4" id="right-footer">
        <?php if(is_active_sidebar('rf-sidebar')): ?>
          <?php dynamic_sidebar('rf-sidebar'); ?>
        <?php endif; ?>
      </div> <!-- right footer -->
    </div> <!-- row -->
      <div class="row">
        <div class="col-xs-12">
          <p class="text-center">
            &copy; <?php echo Date('Y'); ?> - <?php if(get_theme_mod(footer_text)): echo get_theme_mod(footer_text); else: bloginfo('author'); endif; ?>
          </p>
        </div>
      </div>
  </footer>

  <?php wp_footer(); ?>
  </body>
  </html>
