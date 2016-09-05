
  <!-- Add Pagination -->
  <div class="pagination">
  <?php wp_link_pages( array(
    'before'           => '<p>',
    'after'            => '</p>',
    'link_before'      => '<button type="button" class="btn btn-default">',
    'link_after'       => '</button>',
    'next_or_number'   => 'next',
    'separator'        => ' ',
    'nextpagelink'     => __( 'Next page' ),
    'previouspagelink' => __( 'Previous page' ),
    'pagelink'         => '%',
    'echo'             => 1
    ));
  ?>
  </div> <!-- Pagination -->



</div> <!-- col-sm-8 blog-main -->

<!-- Main Sidebar -->
<div class="col-sm-2 blog-sidebar">
  <?php if(is_active_sidebar('main-sidebar')): ?>
    <?php dynamic_sidebar('main-sidebar'); ?>
  <?php endif; ?>
</div> <!-- col-sm-3 col-sm-offset-1 blog-sidebar -->

</div> <!-- Row -->
