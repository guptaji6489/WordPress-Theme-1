<?php 
/*
* Harshit Customizer
*/

function harshit_customize_register( $wp_customize ) {
    //All our sections, settings, and controls will be added here
    // here we are creating panel and under panel there is 3 sections
    $wp_customize->add_panel( 'harshit_settings' , array(
        'title'       => __( 'Harshit Settings' ),   // title of a panel
        'description' => '',
        'priority'    => 10,
    ) );

    // Section 1 and unique id is harshit_colors
    $wp_customize->add_section( 'harshit_colors' , array(       // section id
        'title'       => 'Colors',
        'panel'       => 'harshit_settings',                   // panel id
    ) );

    // Section 2 and unique id is harshit_labels
     $wp_customize->add_section( 'harshit_labels' , array(      // section id
        'title'       => 'Labels',
        'panel'       => 'harshit_settings',                    // panel id
    ) );

    // Section 3 and unique id is harshit_misc
    $wp_customize->add_section( 'harshit_misc' , array(      // section id
        'title'       => 'Misc Setting',
        'panel'       => 'harshit_settings',                    // panel id
    ) );

    // this customizer is  for Menu Backgroud by using color type
    $wp_customize->add_setting( 'harshit_nav_bg_color', 
         array(
        'default'     => '#2ca358', //Default setting/value to save
        'type'        => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
        'capability'  => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
        'transport'   => 'referesh', //What triggers a refresh of the setting? 'refresh' 
        'sanitize_callback'  => 'sanitize_hex_color',
        ) 
      );      

      $wp_customize->add_control( 'harshit_nav_bg_color', array(         //control id
        'label'      => __( 'Menu Backgroud' ),
        'section'    => 'harshit_colors',                                // unique id of that section
        'type'       => 'color',
    ) );

    // this customizer is  for Body Backgroud by using color type
    $wp_customize->add_setting( 'harshit_body_bg_color', 
         array(
        'default'     => '#fff', //Default setting/value to save
        'type'        => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
        'capability'  => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
        'transport'   => 'referesh', //What triggers a refresh of the setting? 'refresh' 
        'sanitize_callback'  => 'sanitize_hex_color',
        ) 
      );      

      $wp_customize->add_control( 'harshit_body_bg_color', array(          //control id
        'label'      => __( 'Body Backgroud' ),
        'section'    => 'harshit_colors',                                  // unique id of that section
        'type'       => 'color',
    ) );

    // this customizer is  for Sfeatured_block by using text type
    $wp_customize->add_setting( 'harshit_featured_block_1', 
        array(
    'default'     => 'Latest from Technology', //Default setting/value to save
    'type'        => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
    'capability'  => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
    'transport'   => 'referesh', //What triggers a refresh of the setting? 'refresh' 
    'sanitize_callback'  => 'esc_attr',  // this is something ki jo value aa rahi wo usko text samjhega
    ) 
    );      

    $wp_customize->add_control( 'harshit_featured_block_1', array(             //control id
    'label'      => __( 'Featured Box 1 Title' ),
    'section'    => 'harshit_labels',                                          // unique id of that section
    'type'       => 'text',                                                   // control like a text
  ) );
  

  // this customizer is  for Show/Hide home banner by using radio type
  $wp_customize->add_setting( 'harshit_home_banner', 
        array(
    'default'     => 'yes', //Default setting/value to save
    'type'        => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
    'capability'  => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
    'transport'   => 'referesh', //What triggers a refresh of the setting? 'refresh' 
    'sanitize_callback'  => 'esc_attr',  // this is something ki jo value aa rahi wo usko text samjhega
    ) 
    );      

    $wp_customize->add_control( 'harshit_home_banner', array(             //control id
    'label'      => __( 'Show/Hide home banner' ),
    'section'    => 'harshit_misc',                                          // unique id of that section
    'type'       => 'radio',  
    'choices'    =>  array(
        'yes'    =>  'Yes',
        'no'     =>  'No'
    )                                        
  ) );


 }
 add_action( 'customize_register', 'harshit_customize_register' );