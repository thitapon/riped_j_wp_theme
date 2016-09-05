<?php
  // Customizing Footer text
  function riped_j_customize_menu( $wp_customize ){

    $wp_customize -> add_section('Footer_text', array(
      'title'       =>  __('Footer text', 'RIPED-J-THEME'),
      'description' =>  sprintf(__('Text for footer (after copyright and year).','RIPED-J-THEME')),
      'priority'    =>  200
    ));

    $wp_customize -> add_setting('footer_text', array(
      'default'     =>  bloginfo('author'),
      'type'        =>  'theme_mod'
    ));

    $wp_customize -> add_control('footer_text', array(
      'label'       =>    __('Footer text','RIPED-J-THEME'),
      'section'     =>  'Footer_text',
      'priority'    =>  1
    ));
    // End Footer text section

    // Header colors
    $wp_customize -> add_section('Header_color', array(
      'title'       =>  __('Header colors', 'RIPED-J-THEME'),
      'description' =>  sprintf(__('Setting colors for Header.','RIPED-J-THEME')),
      'priority'    =>  300
    ));

    // Header colors
    $wp_customize -> add_setting('header_color', array(
      'default'     =>  '#1ebbe6',
      'type'        =>  'theme_mod',
      'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize -> add_control(new WP_Customize_Color_Control( $wp_customize, 'header_color', array(
      'label'       =>    __('Header color','RIPED-J-THEME'),
      'section'     =>  'Header_color',
      'settings'    =>  'header_color',
      'priority'    =>  10
    )));

    // Header main text color
    $wp_customize -> add_setting('header_text_color', array(
      'default'     =>  '#2f338e',
      'type'        =>  'theme_mod',
      'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize -> add_control(new WP_Customize_Color_Control( $wp_customize, 'header_text_color', array(
      'label'       =>    __('Header text color','RIPED-J-THEME'),
      'section'     =>  'Header_color',
      'settings'    =>  'header_text_color',
      'priority'    =>  11
    )));

    // Header main text hover color
    $wp_customize -> add_setting('header_text_hover_color', array(
      'default'     =>  '#ffffff',
      'type'        =>  'theme_mod',
      'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize -> add_control(new WP_Customize_Color_Control( $wp_customize, 'header_text_hover_color', array(
      'label'       =>    __('Header text (hover) color','RIPED-J-THEME'),
      'section'     =>  'Header_color',
      'settings'    =>  'header_text_hover_color',
      'priority'    =>  12
    )));

    // Header active background color
    $wp_customize -> add_setting('header_active_color', array(
      'default'     =>  '#2f338e',
      'type'        =>  'theme_mod',
      'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize -> add_control(new WP_Customize_Color_Control( $wp_customize, 'header_active_color', array(
      'label'       =>    __('Header active background color','RIPED-J-THEME'),
      'section'     =>  'Header_color',
      'settings'    =>  'header_active_color',
      'priority'    =>  15
    )));

    // Header active text color
    $wp_customize -> add_setting('header_activetext_color', array(
      'default'     =>  '#ffffff',
      'type'        =>  'theme_mod',
      'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize -> add_control(new WP_Customize_Color_Control( $wp_customize, 'header_activetext_color', array(
      'label'       =>    __('Header active text color','RIPED-J-THEME'),
      'section'     =>  'Header_color',
      'settings'    =>  'header_activetext_color',
      'priority'    =>  16
    )));

    // Header submenu background color
    $wp_customize -> add_setting('header_submenu_color', array(
      'default'     =>  '#1ebbe6',
      'type'        =>  'theme_mod',
      'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize -> add_control(new WP_Customize_Color_Control( $wp_customize, 'header_submenu_color', array(
      'label'       =>    __('Header submenu background color','RIPED-J-THEME'),
      'section'     =>  'Header_color',
      'settings'    =>  'header_submenu_color',
      'priority'    =>  20
    )));

  // Header submenu text color
  $wp_customize -> add_setting('header_subtext_color', array(
    'default'     =>  '#ffffff',
    'type'        =>  'theme_mod',
    'sanitize_callback' => 'sanitize_hex_color'
  ));

  $wp_customize -> add_control(new WP_Customize_Color_Control( $wp_customize, 'header_subtext_color', array(
    'label'       =>    __('Header submenu text color','RIPED-J-THEME'),
    'section'     =>  'Header_color',
    'settings'    =>  'header_subtext_color',
    'priority'    =>  21
  )));

  // Header submenu text color (hover)
  $wp_customize -> add_setting('header_subtext_hover_color', array(
    'default'     =>  '#ffffff',
    'type'        =>  'theme_mod',
    'sanitize_callback' => 'sanitize_hex_color'
  ));

  $wp_customize -> add_control(new WP_Customize_Color_Control( $wp_customize, 'header_subtext_hover_color', array(
    'label'       =>    __('Header submenu text color (hover)','RIPED-J-THEME'),
    'section'     =>  'Header_color',
    'settings'    =>  'header_subtext_hover_color',
    'priority'    =>  22
  )));

  // Header submenu active background color
  $wp_customize -> add_setting('header_submenu_active_color', array(
    'default'     =>  '#2f338e',
    'type'        =>  'theme_mod',
    'sanitize_callback' => 'sanitize_hex_color'
  ));

  $wp_customize -> add_control(new WP_Customize_Color_Control( $wp_customize, 'header_submenu_active_color', array(
    'label'       =>    __('Header submenu active background color','RIPED-J-THEME'),
    'section'     =>  'Header_color',
    'settings'    =>  'header_submenu_active_color',
    'priority'    =>  25
  )));

  // Header submenu active text color
  $wp_customize -> add_setting('header_submenu_activetext_color', array(
    'default'     =>  '#ffffff',
    'type'        =>  'theme_mod',
    'sanitize_callback' => 'sanitize_hex_color'
  ));

  $wp_customize -> add_control(new WP_Customize_Color_Control( $wp_customize, 'header_submenu_activetext_color', array(
    'label'       =>    __('Header submenu active text color','RIPED-J-THEME'),
    'section'     =>  'Header_color',
    'settings'    =>  'header_submenu_activetext_color',
    'priority'    =>  26
  )));
  // End Header colors

  // Body colors
  $wp_customize -> add_section('Body_color', array(
    'title'       =>  __('Body colors', 'RIPED-J-THEME'),
    'description' =>  sprintf(__('Setting colors for Body.','RIPED-J-THEME')),
    'priority'    =>  400
  ));

  // Body background color
  $wp_customize -> add_setting('body_color', array(
    'default'     =>  '#f5f5f5',
    'type'        =>  'theme_mod',
    'sanitize_callback' => 'sanitize_hex_color'
  ));

  $wp_customize -> add_control(new WP_Customize_Color_Control( $wp_customize, 'body_color', array(
    'label'       =>    __('Body background color','RIPED-J-THEME'),
    'section'     =>  'Body_color',
    'settings'    =>  'body_color',
    'priority'    =>  10
  )));

  // Body text color
  $wp_customize -> add_setting('body_text_color', array(
    'default'     =>  '#333333',
    'type'        =>  'theme_mod',
    'sanitize_callback' => 'sanitize_hex_color'
  ));

  $wp_customize -> add_control(new WP_Customize_Color_Control( $wp_customize, 'body_text_color', array(
    'label'       =>    __('Body text color','RIPED-J-THEME'),
    'section'     =>  'Body_color',
    'settings'    =>  'body_text_color',
    'priority'    =>  11
    )));

    // Side menu color
    $wp_customize -> add_setting('sidemenu_color', array(
      'default'     =>  '#4083ec',
      'type'        =>  'theme_mod',
      'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize -> add_control(new WP_Customize_Color_Control( $wp_customize, 'sidemenu_color', array(
      'label'       =>    __('Side menu background color','RIPED-J-THEME'),
      'section'     =>  'Body_color',
      'settings'    =>  'sidemenu_color',
      'priority'    =>  15
  )));

  // Side menu text color
  $wp_customize -> add_setting('sidemenu_text_color', array(
    'default'     =>  '#2f338e',
    'type'        =>  'theme_mod',
    'sanitize_callback' => 'sanitize_hex_color'
  ));

  $wp_customize -> add_control(new WP_Customize_Color_Control( $wp_customize, 'sidemenu_text_color', array(
    'label'       =>    __('Side menu text color','RIPED-J-THEME'),
    'section'     =>  'Body_color',
    'settings'    =>  'sidemenu_text_color',
    'priority'    =>  16
)));

  // Side menu active text color
  $wp_customize -> add_setting('sidemenu_activetext_color', array(
    'default'     =>  '#ffffff',
    'type'        =>  'theme_mod',
    'sanitize_callback' => 'sanitize_hex_color'
  ));

  $wp_customize -> add_control(new WP_Customize_Color_Control( $wp_customize, 'sidemenu_activetext_color', array(
    'label'       =>    __('Side menu active text color','RIPED-J-THEME'),
    'section'     =>  'Body_color',
    'settings'    =>  'sidemenu_activetext_color',
    'priority'    =>  17
  )));
  // End body

  // Footer colors
  $wp_customize -> add_section('Footer_color', array(
    'title'       =>  __('Footer colors', 'RIPED-J-THEME'),
    'description' =>  sprintf(__('Setting colors for Footer.','RIPED-J-THEME')),
    'priority'    =>  500
  ));

  // Footer background color
  $wp_customize -> add_setting('footer_color', array(
    'default'     =>  '#4083ec',
    'type'        =>  'theme_mod',
    'sanitize_callback' => 'sanitize_hex_color'
  ));

  $wp_customize -> add_control(new WP_Customize_Color_Control( $wp_customize, 'footer_color', array(
    'label'       =>    __('Footer background color','RIPED-J-THEME'),
    'section'     =>  'Footer_color',
    'settings'    =>  'footer_color',
    'priority'    =>  10
  )));

  // Footer text color
  $wp_customize -> add_setting('footer_text_color', array(
    'default'     =>  '#ffffff',
    'type'        =>  'theme_mod',
    'sanitize_callback' => 'sanitize_hex_color'
  ));

  $wp_customize -> add_control(new WP_Customize_Color_Control( $wp_customize, 'footer_text_color', array(
    'label'       =>    __('Footer text color','RIPED-J-THEME'),
    'section'     =>  'Footer_color',
    'settings'    =>  'footer_text_color',
    'priority'    =>  11
  )));

  // pagination color
  $wp_customize -> add_setting('pagination_color', array(
    'default'     =>  '#4083ec',
    'type'        =>  'theme_mod',
    'sanitize_callback' => 'sanitize_hex_color'
  ));

  $wp_customize -> add_control(new WP_Customize_Color_Control( $wp_customize, 'pagination_color', array(
    'label'       =>    __('Pagination color','RIPED-J-THEME'),
    'section'     =>  'Footer_color',
    'settings'    =>  'pagination_color',
    'priority'    =>  15
  )));

  // pagination text color
  $wp_customize -> add_setting('pagination_text_color', array(
    'default'     =>  '#ffffff',
    'type'        =>  'theme_mod',
    'sanitize_callback' => 'sanitize_hex_color'
  ));

  $wp_customize -> add_control(new WP_Customize_Color_Control( $wp_customize, 'pagination_text_color', array(
    'label'       =>    __('Pagination text color','RIPED-J-THEME'),
    'section'     =>  'Footer_color',
    'settings'    =>  'pagination_text_color',
    'priority'    =>  16
  )));
  // End footer

  // Site Logos
  $wp_customize -> add_section('Site_logos', array(
    'title'       =>  __('Site logos', 'RIPED-J-THEME'),
    'description' =>  sprintf(__('Changing site logos.','RIPED-J-THEME')),
    'priority'    =>  600
  ));

  // Left logo
  $wp_customize -> add_setting('left_logo_img', array(
    'default'     =>  'http://www.utcc.ac.th/admission/2016/assets/images/logo/logo.png',
    'type'        =>  'theme_mod',
  ));

  $wp_customize -> add_control(new WP_Customize_Image_Control( $wp_customize, 'left_logo_img', array(
    'label'       =>    __('Left logo image','RIPED-J-THEME'),
    'section'     =>  'Site_logos',
    'settings'    =>  'left_logo_img',
    'priority'    =>  10
  )));

  // Left logo link
  $wp_customize -> add_setting('left_logo_link', array(
    'default'     =>  'http://www.utcc.ac.th/',
    'type'        =>  'theme_mod',
  ));

  $wp_customize -> add_control('left_logo_link', array(
    'label'       =>    __('Left logo link','RIPED-J-THEME'),
    'section'     =>  'Site_logos',
    'priority'    =>  11
  ));

  // Right logo
  $wp_customize -> add_setting('right_logo_img', array(
    'default'     =>  get_bloginfo('template_directory'). '/img/Logo_RIPED.png',
    'type'        =>  'theme_mod',
  ));

  $wp_customize -> add_control(new WP_Customize_Image_Control( $wp_customize, 'right_logo_img', array(
    'label'       =>    __('Right logo image','RIPED-J-THEME'),
    'section'     =>  'Site_logos',
    'settings'    =>  'right_logo_img',
    'priority'    =>  12
  )));

  // Right logo link
  $wp_customize -> add_setting('right_logo_link', array(
    'default'     =>  'http://riped.utcc.ac.th/',
    'type'        =>  'theme_mod',
  ));

  $wp_customize -> add_control('right_logo_link', array(
    'label'       =>    __('Right logo link','RIPED-J-THEME'),
    'section'     =>  'Site_logos',
    'priority'    =>  13
  ));
  // End site logos

  // Front page
  $wp_customize -> add_section('Front_site', array(
    'title'       =>  __('Front page', 'RIPED-J-THEME'),
    'description' =>  sprintf(__('Changing front page details.','RIPED-J-THEME')),
    'priority'    =>  700
  ));

  // Front page picture
  $wp_customize -> add_setting('front_pic', array(
    'default'     =>  get_bloginfo('template_directory').'/img/profile_placeholder.png',
    'type'        =>  'theme_mod',
  ));

  $wp_customize -> add_control(new WP_Customize_Image_Control( $wp_customize, 'front_pic', array(
    'label'       =>    __('Front page picture','RIPED-J-THEME'),
    'section'     =>  'Front_site',
    'settings'    =>  'front_pic',
    'priority'    =>  10
  )));

  // Front page header
  $wp_customize -> add_setting('front_header', array(
    'default'     =>  'Lorem ipsum',
    'type'        =>  'theme_mod',
  ));

  $wp_customize -> add_control('front_header', array(
    'label'       =>    __('Front page header','RIPED-J-THEME'),
    'section'     =>  'Front_site',
    'priority'    =>  11
  ));

  // Front page text
  $wp_customize -> add_setting('front_text', array(
    'default'     =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quis vestibulum tortor. Pellentesque sed vestibulum felis, vel ornare urna. Integer fermentum nisl id sapien maximus, et sodales augue euismod. Maecenas pellentesque dui euismod, blandit tellus ornare, euismod nisl. Aliquam mauris leo, luctus vitae varius sed, aliquam in metus. Aenean non quam justo. In ornare hendrerit eros in commodo. Ut egestas metus vel tincidunt blandit. Donec suscipit justo vel pulvinar fermentum. Etiam ante nunc, hendrerit ac neque non, consectetur consequat ex. Quisque porta ante eget tellus porttitor, ut bibendum mi sagittis. Quisque sit amet tempus sapien. Phasellus lobortis, nisl nec sollicitudin suscipit, lectus erat convallis mauris, eget sagittis libero libero a nisi. Donec ultrices mauris ut metus tempor posuere.',
    'type'        =>  'theme_mod',
  ));

  $wp_customize -> add_control('front_text', array(
    'label'       =>    __('Front page text','RIPED-J-THEME'),
    'section'     =>  'Front_site',
    'type'        =>  'textarea',
    'priority'    =>  12
  ));


}

  add_action('customize_register', 'riped_j_customize_menu')

?>
