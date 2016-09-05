<?php get_header(); ?>

<!-- Add content in first column here -->


  </div> <!-- col-xs-1 class-menu -->
<!-- End of first column -->

    <div class="col-sm-8 blog-main">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part('templates/content', 'page'); ?>
        <?php endwhile; else: ?>
        	<p><?php _e('Sorry, no pages matched your criteria.'); ?></p>
        <?php endif; ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
