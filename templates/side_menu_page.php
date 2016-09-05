<!-- Declare as template -->
<?php /* Template Name: Side Bar Page */ ?>

<?php get_header(); ?>

<!-- Add content in first column here -->
  <div class="left-col-menu">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#left-col-menu-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <i class="fa fa-book" aria-hidden="true"></i>
    </button>
  <?php
    wp_nav_menu( array(
        'menu'              =>  'left-col-menu',
        'menu_class'        =>  'nav navbar-nav nav-pills nav-stacked',
        'container_id'      =>  'left-col-menu-1',
        'container_class'   =>  'collapse navbar-collapse',
        'theme_location'    =>  'left-col-menu',
        'depth'             =>  2,
        'fallback_cb'       =>  'wp_bootstrap_navwalker::fallback',
        'walker'            =>  new wp_bootstrap_navwalker()
    ));
    ?>
  </div> <!-- left-col-menu -->


  </div> <!-- col-xs-1 class-menu -->
<!-- End of first column -->

    <div class="col-sm-8 blog-main">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part('templates/content', 'page'); ?>
        <?php endwhile; else: ?>
        	<p><?php _e('Sorry, no pages matched your criteria.'); ?></p>
        <?php endif; ?>

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
        <?php if(is_active_sidebar('smp-sidebar')): ?>
          <?php dynamic_sidebar('smp-sidebar'); ?>
        <?php endif; ?>
        </div> <!-- col-sm-3 col-sm-offset-1 blog-sidebar -->

        </div> <!-- Row -->
<?php get_footer(); ?>
