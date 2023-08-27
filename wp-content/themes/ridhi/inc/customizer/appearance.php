<?php
/**
 * Ridhi Appearance Settings
 *
 * @package Ridhi
 */

function ridhi_customize_register_appearance( $wp_customize ) {
    
    /** Appearance Settings */
    $wp_customize->add_panel( 
        'appearance_settings',
         array(
            'priority'    => 50,
            'capability'  => 'edit_theme_options',
            'title'       => __( 'Appearance Settings', 'ridhi' ),
            'description' => __( 'Customize Typography, Background Image & Color.', 'ridhi' ),
        ) 
    );
    
    /** Typography */
    $wp_customize->add_section(
        'typography_settings',
        array(
            'title'    => __( 'Typography', 'ridhi' ),
            'priority' => 20,
            'panel'    => 'appearance_settings',
        )
    );
    
    /** Primary Font */
    $wp_customize->add_setting(
		'primary_font',
		array(
			'default'			=> 'Nunito Sans',
			'sanitize_callback' => 'ridhi_sanitize_select'
		)
	);

	$wp_customize->add_control(
		new Ridhi_Select_Control(
    		$wp_customize,
    		'primary_font',
    		array(
                'label'	      => __( 'Primary Font', 'ridhi' ),
                'description' => __( 'Primary font of the site.', 'ridhi' ),
    			'section'     => 'typography_settings',
    			'choices'     => ridhi_get_all_fonts(),	
     		)
		)
	);

    $wp_customize->add_setting(
        'ed_localgoogle_fonts',
        array(
            'default'           => false,
            'sanitize_callback' => 'ridhi_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_control(
        'ed_localgoogle_fonts',
        array(
            'label'   => __( 'Load Google Fonts Locally', 'ridhi' ),
            'section' => 'typography_settings',
            'type'    => 'checkbox',
        )
    );

    $wp_customize->add_setting(
        'ed_preload_local_fonts',
        array(
            'default'           => false,
            'sanitize_callback' => 'ridhi_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_control(
        'ed_preload_local_fonts',
        array(
            'label'           => __( 'Preload Local Fonts', 'ridhi' ),
            'section'         => 'typography_settings',
            'type'            => 'checkbox',
            'active_callback' => 'ridhi_flush_fonts_callback'
        )
    );
    

    $wp_customize->add_setting(
        'flush_google_fonts',
        array(
            'default'           => '',
            'sanitize_callback' => 'wp_kses',
        )
    );

    $wp_customize->add_control(
        'flush_google_fonts',
        array(
            'label'       => __( 'Flush Local Fonts Cache', 'ridhi' ),
            'description' => __( 'Click the button to reset the local fonts cache.', 'ridhi' ),
            'type'        => 'button',
            'settings'    => array(),
            'section'     => 'typography_settings',
            'input_attrs' => array(
                'value' => __( 'Flush Local Fonts Cache', 'ridhi' ),
                'class' => 'button button-primary flush-it',
            ),
            'active_callback' => 'ridhi_flush_fonts_callback'
        )
    );
    
    /** Move Background Image section to appearance panel */
    $wp_customize->get_section( 'colors' )->panel              = 'appearance_settings';
    $wp_customize->get_section( 'colors' )->priority           = 10;
    $wp_customize->get_section( 'background_image' )->panel    = 'appearance_settings';
    $wp_customize->get_section( 'background_image' )->priority = 15;
    
}
add_action( 'customize_register', 'ridhi_customize_register_appearance' );

function ridhi_flush_fonts_callback( $control ){
    $ed_localgoogle_fonts   = $control->manager->get_setting( 'ed_localgoogle_fonts' )->value();
    $control_id   = $control->id;
    
    if ( $control_id == 'flush_google_fonts' && $ed_localgoogle_fonts ) return true;
    if ( $control_id == 'ed_preload_local_fonts' && $ed_localgoogle_fonts ) return true;
    return false;
}