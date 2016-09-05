<!-- Content for Index and Single -->

  <h1 class="blog-post-title">
    <!-- If single post, remove link -->
    <?php if(is_single()): ?>
      <?php the_title(); ?>
    <?php else: ?>
      <a href= "<?php the_permalink(); ?>">
        <?php the_title(); ?>
      </a>
    <?php endif; ?>
  </h1> <!-- blog-post-title -->

  <!-- Post Meta -->
  <div class="blog-post-meta">
    <?php the_time('F j, Y g:i a'); ?>
    by
    <a href="<?php echo get_author_posts_url(get_the_author_meta("ID")) ?>">
      <?php the_author(); ?>
    </a>
  </div> <!-- blog-post-meta -->

  <!-- Post Thumbnail -->
  <?php if(has_post_thumbnail()) : ?>
    <div class="blog-post-thumbnail">
      <?php the_post_thumbnail(); ?>
    </div> <!-- blog-post-thumbnail -->
  <?php endif; ?>

  <!-- Post content -->
  <?php if(is_single()): ?>
    <div class="blog-content">
       <?php the_content(); ?>
    </div> <!-- blog-content -->
  <?php else: ?>
    <div class="blog-excerpt">
       <?php the_excerpt(); ?>
    </div> <!-- blog-excerpt -->
  <?php endif; ?>
