<?php
/**
 * Footer Setting
 *
 * @package Blossom_Travel
 */

function blossom_travel_customize_register_footer( $wp_customize ) {
    
    $wp_customize->add_section(
        'footer_settings',
        array(
            'title'      => __( 'Footer Settings', 'blossom-travel' ),
            'priority'   => 199,
            'capability' => 'edit_theme_options',
        )
    );
    
    /** Footer Copyright */
    $wp_customize->add_setting(
        'footer_copyright',
        array(
            'default'           => '',
            'sanitize_callback' => 'wp_kses_post',
            'transport'         => 'postMessage'
        )
    );
    
    $wp_customize->add_control(
        'footer_copyright',
        array(
            'label'       => __( 'Footer Copyright Text', 'blossom-travel' ),
            'section'     => 'footer_settings',
            'type'        => 'textarea',
        )
    );
    
    $wp_customize->selective_refresh->add_partial( 'footer_copyright', array(
        'selector' => '.site-info .copyright',
        'render_callback' => 'blossom_travel_get_footer_copyright',
    ) );
        
    /** Footer */

    /** Note */
    $wp_customize->add_setting(
        'footer_text',
        array(
            'default'           => '',
            'sanitize_callback' => 'wp_kses_post' 
        )
    );
    
    $wp_customize->add_control(
        new Blossom_Travel_Note_Control( 
            $wp_customize,
            'footer_text',
            array(
                'section'     => 'footer_settings',
                'description' => sprintf( __( '%1$sThis feature is available in Pro version.%2$s %3$sUpgrade to Pro%4$s ', 'blossom-travel' ),'<div class="featured-pro"><span>', '</span>', '<a href="https://blossomthemes.com/wordpress-themes/blossom-travel-pro/?utm_source=blossom_travel&utm_medium=customizer&utm_campaign=upgrade_to_pro" target="_blank">', '</a></div>' ),
            )
        )
    );

    $wp_customize->add_setting( 
        'footer_settings', 
        array(
            'default'           => 'one',
            'sanitize_callback' => 'blossom_travel_sanitize_radio'
        ) 
    );
    
    $wp_customize->add_control(
        new Blossom_Travel_Radio_Image_Control(
            $wp_customize,
            'footer_settings',
            array(
                'section'    => 'footer_settings',
                'feat_class' => 'upg-to-pro',
                'choices'    => array(
                    'one' => get_template_directory_uri() . '/images/pro/footer.png',
                ),
            )
        )
    );
}

add_action( 'customize_register', 'blossom_travel_customize_register_footer' );