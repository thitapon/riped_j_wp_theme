<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset = "<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="<?php bloginfo('author'); ?>">
    <title>
      <?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?>
    </title>

    <!-- load Font Awesome -->
    <script src="https://use.fontawesome.com/76266d9479.js"></script>

    <!-- Load font -->
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">

    <!-- Load JQuery -->
    <?php wp_enqueue_script("jquery"); ?>

    <!-- add wordpress head tag -->
    <?php wp_head() ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Customize styles -->
    <style>
    /* Header background colors  */
      #header-main-menu,
      #site-sub-details,
      #header-main-menu a.navbar-brand:hover{
        background-color: <?php echo get_theme_mod(header_color,'#1ebbe6')?>;
      }

      /* Active menu colors and subdetail colors */
      #header-main-menu  li.active  a,
      #header-main-menu a:hover,
      #header-main-menu ul ul li a:hover,
      #header-main-menu ul li.open > a,
      #site-sub-details li a{
        background-color: <?php echo get_theme_mod(header_active_color,'#2f338e')?>;
        color: <?php echo get_theme_mod(header_activetext_color,'#ffffff')?>;
      }

      /* Submenu background */
      #header-main-menu ul ul,
      #header-main-menu ul ul li a,
      #site-sub-details li a:hover{
        background-color: <?php echo get_theme_mod(header_submenu_color,'#1ebbe6')?>;
        color: <?php echo get_theme_mod(header_subtext_color,'#ffffff')?>;
      }

      /* Main menu text color */
      #header-main-menu  li  a,
      #header-main-menu  li  a:hover{
        color: <?php echo get_theme_mod(header_text_color,'#2f338e')?>;
      }

      /* Sub menu text color (hover)*/
      #header-main-menu ul ul li a:hover{
        background-color: <?php echo get_theme_mod(header_submenu_active_color,'#2f338e')?>;
        color: <?php echo get_theme_mod(header_submenu_activetext_color,'#ffffff')?>;
      }

      /* Main menu text color (hover) */
      #header-main-menu ul li a:hover{
        color: <?php echo get_theme_mod(header_text_hover_color,'#ffffff')?>;
      }


      /* Body colors */
      body{
        background-color: <?php echo get_theme_mod(body_color,'#f5f5f5')?>;
        color: <?php echo get_theme_mod(body_text_color,'#333333')?>;
      }

      ul.pagination li.disabled span,
      ul.pagination li > a{
        color: <?php echo get_theme_mod(body_text_color,'#333333')?>;
      }

      /* Side menu colors */
      #left-col-menu-1 a:hover,
      #left-col-menu-1 ul ul li a:hover,
      #left-col-menu-1 ul li.open > a,
      #left-col-menu-1 li.active a{
        background-color: <?php echo get_theme_mod(sidemenu_color,'#4083ec')?>;
        color: <?php echo get_theme_mod(sidemenu_activetext_color,'#ffffff')?>;
      }

      /* Side text colors */
      #left-col-menu-1 ul li a,
      #left-col-menu-1 ul ul li a{
        color: <?php echo get_theme_mod(sidemenu_text_color,'#2f338e')?>;
      }

      /* Footer colors */
      #footer-tab{
        background-color: <?php echo get_theme_mod(footer_color,'#4083ec')?>;
        color: <?php echo get_theme_mod(footer_text_color,'#ffffff')?>;
      }

      /* pagination colors */
      div.pagination .btn,
      ul.pagination li.active span{
        background-color: <?php echo get_theme_mod(pagination_color,'#4083ec')?>;
        color: <?php echo get_theme_mod(pagination_text_color,'#ffffff')?>;
      }

    </style>
  </head>


  <body>

    <!-- Top nav bar -->
          <div class="navbar-xs navbar-default navbar-fixed-top" id="site-sub-details" role = "banner">
            <div class="navbar-inner">
            <div class="container-fluid">
              <div class="navbar-header pull-left">
                <?php if(get_theme_mod(left_logo_img)): ?>
                  <a href="<?php echo get_theme_mod(left_logo_link,'http://www.utcc.ac.th/')?>" target="_blank">
                    <img src="<?php echo get_theme_mod(left_logo_img,'http://www.utcc.ac.th/admission/2016/assets/images/logo/logo.png')?>", alt="utcc-logo", style="height:28px;width:auto;", border="0">
                  </a>
                <?php endif; ?>

              </div> <!-- navbar header pull left-->

              <div class="navbar-header pull-right">
                <?php
                  wp_nav_menu( array(
                    'menu'              => 'header-subdetail-menu',
                    'theme_location'    => 'header-subdetail-menu',
                    'depth'             => 0,
                    'container'         => 'div',
                    'container_class'   => 'navbar',
                    'container_id'      => 'bs-navbar-2',
                    'menu_class'        => 'nav navbar-nav navbar-right',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker()
                  ));
                  ?>
                </div> <!-- navbar header pull right-->
                </div> <!-- container-fluid -->
              </div>  <!-- navbar-inner -->
            </div>  <!-- navbar-xs -->

      <!-- end top nav bar -->

      <!-- Main nav bar -->

        <nav class="navbar navbar-default navbar-fixed-top" id = "header-main-menu">
          <div class="navbar-inner">
          <div class="container-fluid">
            <?php if(get_theme_mod(right_logo_img)): ?>
              <a class="navbar-brand navbar-right" href="<?php echo get_theme_mod(right_logo_link,'http://riped.utcc.ac.th/')?>" target="_blank">
                <img src="<?php echo get_theme_mod(right_logo_img, get_bloginfo('template_directory'). '/img/Logo_RIPED.png')?>" alt="riped-logo",  style="height:50px;width:auto;">
              </a> <!-- RIPED logo -->
            <?php endif; ?>

          <!-- Toggle get grouped for better mobile display -->
          <div class="navbar-header pull-right">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <i class="fa fa-bars" aria-hidden="true"></i>
            </button>

          </div> <!-- navbar-header -->
          <div class="navbar-header pull-left">
          <?php
            wp_nav_menu( array(
                'menu'              => 'header-menu',
                'theme_location'    => 'header-menu',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-left',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker()
            ));
            ?>
          </div> <!-- navbar-header pull-left -->
        </div> <!-- container-fluid -->
      </div> <!-- navbar-inner -->
      </nav> <!-- nav -->
      <!-- End main nav bar -->

      <!-- Start of content -->
      <div class="container-fluid">
        <div class="row">
        <!-- Start of first column of content part -->
        <div class="col-sm-2 class-menu">
