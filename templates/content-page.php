
<!-- Page title -->
<h1 class="page-title">
    <?php the_title(); ?>
</h1> <!-- page-title -->

<!-- Page Meta -->
<div class="page-meta">
  <?php the_time('F j, Y'); ?>
  by
  <a href="<?php echo get_author_posts_url(get_the_author_meta("ID")) ?>">
    <?php the_author(); ?>
  </a>
</div> <!-- page-meta -->

<!-- Page content -->
<div class="page-content">
   <?php the_content(); ?>
</div> <!-- page-content -->
