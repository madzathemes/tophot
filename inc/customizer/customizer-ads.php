<?php
function tophot_customize_ads($wp_customize){

  //  =============================
  //  = AD 1 Image             =
  //  =============================
  $wp_customize->add_panel( 'tophot_ads', array(
    'priority'       => 310,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'    	=> esc_html__('Ads', 'tophot'),
    'description'    => '',
  ));

  $wp_customize->add_section('sidebar_ad_top', array(
    'title'    	=> esc_html__('Sidebar top ad', 'tophot'),
    'priority' => 5,
    'panel'  => 'tophot_ads',
  ));

  Kirki::add_field( 'tophot_theme_options[sidebar_ad_top]', array(
    'type'        => 'code',
    'settings'    => 'tophot_theme_options[sidebar_ad_top]',
    'label'       => esc_html__( 'YOUR AD CODE', 'tophot' ),
    'section'     => 'sidebar_ad_top',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));


  $wp_customize->add_section('sidebar_ad_middle', array(
    'title'    	=> esc_html__('Sidebar middle ad', 'tophot'),
    'priority' => 6,
    'panel'  => 'tophot_ads',
  ));

  Kirki::add_field( 'tophot_theme_options[sidebar_ad_middle]', array(
    'type'        => 'code',
    'settings'    => 'tophot_theme_options[sidebar_ad_middle]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'tophot' ),
    'section'     => 'sidebar_ad_middle',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('sidebar_ad_bottom', array(
    'title'    	=> esc_html__('Sidebar bottom ad', 'tophot'),
    'priority' => 7,
    'panel'  => 'tophot_ads',
  ));

  Kirki::add_field( 'tophot_theme_options[sidebar_ad_bottom]', array(
    'type'        => 'code',
    'settings'    => 'tophot_theme_options[sidebar_ad_bottom]',
    'label'       => esc_html__('YOUR AD CODE', 'tophot' ),
    'section'     => 'sidebar_ad_bottom',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('article_ad_bottom', array(
    'title'    	=> esc_html__('Article bottom ad', 'tophot'),
    'priority' => 8,
    'panel'  => 'tophot_ads',
  ));

  Kirki::add_field( 'tophot_theme_options[article_ad_bottom]', array(
    'type'        => 'code',
    'settings'    => 'tophot_theme_options[article_ad_bottom]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'tophot' ),
    'section'     => 'article_ad_bottom',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));


  $wp_customize->add_section('footer_ad_top', array(
    'title'    	=> esc_html__('Footer top ad', 'tophot'),
    'priority' => 9,
    'panel'  => 'tophot_ads',
  ));

  Kirki::add_field( 'tophot_theme_options[footer_ad_top]', array(
    'type'        => 'code',
    'settings'    => 'tophot_theme_options[footer_ad_top]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'tophot' ),
    'section'     => 'footer_ad_top',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));


  $wp_customize->add_section('custom_ad_1', array(
    'title'    	=> esc_html__('Custom ad 1', 'tophot'),
    'priority' => 11,
    'panel'  => 'tophot_ads',
  ));

  Kirki::add_field( 'tophot_theme_options[custom_ad_1]', array(
    'type'        => 'code',
    'settings'    => 'tophot_theme_options[custom_ad_1]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'tophot' ),
    'section'     => 'custom_ad_1',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));


  $wp_customize->add_section('custom_ad_2', array(
    'title'    	=> esc_html__('Custom ad 2', 'tophot'),
    'priority' => 12,
    'panel'  => 'tophot_ads',
  ));

  Kirki::add_field( 'tophot_theme_options[custom_ad_2]', array(
    'type'        => 'code',
    'settings'    => 'tophot_theme_options[custom_ad_2]',
    'label'       => esc_html__( 'YOUR AD CODE', 'tophot' ),
    'section'     => 'custom_ad_2',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('custom_ad_3', array(
    'title'    	=> esc_html__('Custom ad 3', 'tophot'),
    'priority' => 13,
    'panel'  => 'tophot_ads',
  ));


  Kirki::add_field( 'tophot_theme_options[custom_ad_3]', array(
    'type'        => 'code',
    'settings'    => 'tophot_theme_options[custom_ad_3]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'tophot' ),
    'section'     => 'custom_ad_3',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('custom_ad_4', array(
    'title'    	=> esc_html__('Custom ad 4', 'tophot'),
    'priority' => 14,
    'panel'  => 'tophot_ads',
  ));

  Kirki::add_field( 'tophot_theme_options[custom_ad_4]', array(
    'type'        => 'code',
    'settings'    => 'tophot_theme_options[custom_ad_4]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'tophot' ),
    'section'     => 'custom_ad_4',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('custom_ad_5', array(
    'title'    	=> esc_html__('Custom ad 5', 'tophot'),
    'priority' => 15,
    'panel'  => 'tophot_ads',
  ));


  Kirki::add_field( 'tophot_theme_options[custom_ad_5]', array(
    'type'        => 'code',
    'settings'    => 'tophot_theme_options[custom_ad_5]',
    'label'       => esc_html__( 'YOUR AD CODE', 'tophot' ),
    'section'     => 'custom_ad_5',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('custom_ad_6', array(
    'title'    	=> esc_html__('Custom ad 6', 'tophot'),
    'priority' => 16,
    'panel'  => 'tophot_ads',
  ));

  Kirki::add_field( 'tophot_theme_options[custom_ad_6]', array(
    'type'        => 'code',
    'settings'    => 'tophot_theme_options[custom_ad_6]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'tophot' ),
    'section'     => 'custom_ad_6',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('custom_ad_7', array(
    'title'    	=> esc_html__('Custom ad 7', 'tophot'),
    'priority' => 17,
    'panel'  => 'tophot_ads',
  ));

  Kirki::add_field( 'tophot_theme_options[custom_ad_7]', array(
    'type'        => 'code',
    'settings'    => 'tophot_theme_options[custom_ad_7]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'tophot' ),
    'section'     => 'custom_ad_7',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('custom_ad_8', array(
    'title'    	=> esc_html__('Custom ad 8', 'tophot'),
    'priority' => 18,
    'panel'  => 'tophot_ads',
  ));


  Kirki::add_field( 'tophot_theme_options[custom_ad_8]', array(
    'type'        => 'code',
    'settings'    => 'tophot_theme_options[custom_ad_8]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'tophot' ),
    'section'     => 'custom_ad_8',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('custom_ad_9', array(
    'title'    	=> esc_html__('Custom ad 9', 'tophot'),
    'priority' => 19,
    'panel'  => 'tophot_ads',
  ));

  Kirki::add_field( 'tophot_theme_options[custom_ad_9]', array(
    'type'        => 'code',
    'settings'    => 'tophot_theme_options[custom_ad_9]',
    'label'       =>  esc_html__('YOUR AD CODE', 'tophot' ),
    'section'     => 'custom_ad_9',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));
  $wp_customize->add_section('header_ad_top', array(
    'title'    	=> esc_html__('Header Ad', 'tophot'),
    'priority' => 1,
    'panel'  => 'tophot_ads',
  ));

  Kirki::add_field( 'tophot_theme_options[header_ad_top]', array(
    'type'        => 'code',
    'settings'    => 'tophot_theme_options[header_ad_top]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'tophot' ),
    'section'     => 'header_ad_top',
    'default'     => '',
    'priority'    => 1,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));


}

add_action('customize_register', 'tophot_customize_ads');
?>
