
  <!-- Add post pagination -->
  <?php
  if (function_exists("wp_bs_pagination"))
      {
           //wp_bs_pagination($the_query->max_num_pages);
           wp_bs_pagination();
  }
  ?>


</div> <!-- container-fluid -->

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
      </div> <!-- col-xs-12 -->
    </div>
</footer>



<?php wp_footer(); ?>
</body>
</html>
