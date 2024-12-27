<?php
/**
 * Front Page Settings
 *
 * @package Blossom_Travel
 */

function blossom_travel_customize_register_frontpage( $wp_customize ) {
	
    /** Front Page Settings */
    $wp_customize->add_panel( 
        'frontpage_settings',
         array(
            'priority'    => 40,
            'capability'  => 'edit_theme_options',
            'title'       => __( 'Front Page Settings', 'blossom-travel' ),
            'description' => __( 'Static Home Page settings.', 'blossom-travel' ),
            'active_callback' => 'blossom_travel_is_active_page',
        ) 
    );

    /** Category Section */
    $wp_customize->add_section(
        'category_image_section',
        array(
            'title'    => __( 'Category Section', 'blossom-travel' ),
            'panel'    => 'frontpage_settings',
            'priority' => 14,
        )
    );

    /** Note */
    $wp_customize->add_setting(
        'category_text',
        array(
            'default'           => '',
            'sanitize_callback' => 'wp_kses_post' 
        )
    );
    
    $wp_customize->add_control(
        new Blossom_Travel_Note_Control( 
            $wp_customize,
            'category_text',
            array(
                'section'     => 'category_image_section',
                'description' => sprintf( __( '%1$sThis feature is available in Pro version.%2$s %3$sUpgrade to Pro%4$s ', 'blossom-travel' ),'<div class="featured-pro"><span>', '</span>', '<a href="https://blossomthemes.com/wordpress-themes/blossom-travel-pro/?utm_source=blossom_travel&utm_medium=customizer&utm_campaign=upgrade_to_pro" target="_blank">', '</a></div>' ),
            )
        )
    );

   
    $wp_customize->add_setting( 
        'category_settings', 
        array(
            'default'           => 'one',
            'sanitize_callback' => 'blossom_travel_sanitize_radio',
            'trasport'          => 'postMessage'
        ) 
    );
    
    $wp_customize->add_control(
        new Blossom_Travel_Radio_Image_Control(
            $wp_customize,
            'category_settings',
            array(
                'section'    => 'category_image_section',
                'feat_class' => 'upg-to-pro',
                'choices'    => array(
                    'one' => get_template_directory_uri() . '/images/pro/category-section-view.png',
                    'two' => get_template_directory_uri() . '/images/pro/category-section.png',
                ),
            )
        )
    );

    /** Category Section Ends*/

    /** Gallery Section */
    $wp_customize->add_section(
        'gallery_image_section',
        array(
            'title'    => __( 'Gallery Section', 'blossom-travel' ),
            'panel'    => 'frontpage_settings',
            'priority' => 26,
        )
    );

    /** Note */
    $wp_customize->add_setting(
        'gallery_text',
        array(
            'default'           => '',
            'sanitize_callback' => 'wp_kses_post' 
        )
    );
    
    $wp_customize->add_control(
        new Blossom_Travel_Note_Control( 
            $wp_customize,
            'gallery_text',
            array(
                'section'     => 'gallery_image_section',
                'description' => sprintf( __( '%1$sThis feature is available in Pro version.%2$s %3$sUpgrade to Pro%4$s ', 'blossom-travel' ),'<div class="featured-pro"><span>', '</span>', '<a href="https://blossomthemes.com/wordpress-themes/blossom-travel-pro/?utm_source=blossom_travel&utm_medium=customizer&utm_campaign=upgrade_to_pro" target="_blank">', '</a></div>' ),
            )
        )
    );

   
    $wp_customize->add_setting( 
        'gallery_settings', 
        array(
            'default'           => 'one',
            'sanitize_callback' => 'blossom_travel_sanitize_radio'
        ) 
    );
    
    $wp_customize->add_control(
        new Blossom_Travel_Radio_Image_Control(
            $wp_customize,
            'gallery_settings',
            array(
                'section'    => 'gallery_image_section',
                'feat_class' => 'upg-to-pro',
                'choices'    => array(
                    'one' => get_template_directory_uri() . '/images/pro/gallery-section.png',
                ),
            )
        )
    );

    /** Gallery Section Ends*/

    /** Trending Section */
    $wp_customize->add_section(
        'trending_image_section',
        array(
            'title'    => __( 'Trending Section', 'blossom-travel' ),
            'panel'    => 'frontpage_settings',
            'priority' => 27,
        )
    );

    /** Note */
    $wp_customize->add_setting(
        'trending_text',
        array(
            'default'           => '',
            'sanitize_callback' => 'wp_kses_post' 
        )
    );
    
    $wp_customize->add_control(
        new Blossom_Travel_Note_Control( 
            $wp_customize,
            'trending_text',
            array(
                'section'     => 'trending_image_section',
                'description' => sprintf( __( '%1$sThis feature is available in Pro version.%2$s %3$sUpgrade to Pro%4$s ', 'blossom-travel' ),'<div class="featured-pro"><span>', '</span>', '<a href="https://blossomthemes.com/wordpress-themes/blossom-travel-pro/?utm_source=blossom_travel&utm_medium=customizer&utm_campaign=upgrade_to_pro" target="_blank">', '</a></div>' ),
            )
        )
    );

   
    $wp_customize->add_setting( 
        'trending_settings', 
        array(
            'default'           => 'one',
            'sanitize_callback' => 'blossom_travel_sanitize_radio'
        ) 
    );
    
    $wp_customize->add_control(
        new Blossom_Travel_Radio_Image_Control(
            $wp_customize,
            'trending_settings',
            array(
                'section'    => 'trending_image_section',
                'feat_class' => 'upg-to-pro',
                'choices'    => array(
                    'one' => get_template_directory_uri() . '/images/pro/trending.png',
                ),
            )
        )
    );

    /** Trending Section Ends*/

    /** Featured Category Section */
    $wp_customize->add_section(
        'feat_cat_image_section',
        array(
            'title'    => __( 'Featured Category Section', 'blossom-travel' ),
            'panel'    => 'frontpage_settings',
            'priority' => 28,
        )
    );

    /** Note */
    $wp_customize->add_setting(
        'feat_cat_text',
        array(
            'default'           => '',
            'sanitize_callback' => 'wp_kses_post' 
        )
    );
    
    $wp_customize->add_control(
        new Blossom_Travel_Note_Control( 
            $wp_customize,
            'feat_cat_text',
            array(
                'section'     => 'feat_cat_image_section',
                'description' => sprintf( __( '%1$sThis feature is available in Pro version.%2$s %3$sUpgrade to Pro%4$s ', 'blossom-travel' ),'<div class="featured-pro"><span>', '</span>', '<a href="https://blossomthemes.com/wordpress-themes/blossom-travel-pro/?utm_source=blossom_travel&utm_medium=customizer&utm_campaign=upgrade_to_pro" target="_blank">', '</a></div>' ),
            )
        )
    );

   
    $wp_customize->add_setting( 
        'feat_cat_settings', 
        array(
            'default'           => 'one',
            'sanitize_callback' => 'blossom_travel_sanitize_radio',
            'trasport'          => 'postMessage'
        ) 
    );
    
    $wp_customize->add_control(
        new Blossom_Travel_Radio_Image_Control(
            $wp_customize,
            'feat_cat_settings',
            array(
                'section'    => 'feat_cat_image_section',
                'feat_class' => 'upg-to-pro',
                'choices'    => array(
                    'one' => get_template_directory_uri() . '/images/pro/featured-category-view.png',
                    'two' => get_template_directory_uri() . '/images/pro/featured-category.png',
                ),
            )
        )
    );

    /** Featured Category Section Ends*/

    /** Shop Section Starts*/
    $wp_customize->add_section(
        'shop_settings',
        array(
            'title'    => __( 'Shop Section', 'blossom-travel' ),
            'panel'    => 'frontpage_settings',
            'priority' => 29,
        )
    );
    
    /** Note */
    $wp_customize->add_setting(
        'shop_section_text',
        array(
            'default'           => '',
            'sanitize_callback' => 'wp_kses_post' 
        )
    );
    
    $wp_customize->add_control(
        new Blossom_Travel_Note_Control( 
            $wp_customize,
            'shop_section_text',
            array(
                'section'     => 'shop_settings',
                'description' => sprintf( __( '%1$sThis feature is available in Pro version.%2$s %3$sUpgrade to Pro%4$s ', 'blossom-travel' ),'<div class="featured-pro"><span>', '</span>', '<a href="https://blossomthemes.com/wordpress-themes/blossom-travel-pro/?utm_source=blossom_travel&utm_medium=customizer&utm_campaign=upgrade_to_pro" target="_blank">', '</a></div>' ),
            )
        )
    );

    /** Shop Section Settings */
    $wp_customize->add_setting(
        'shop_section_image',
        array(
            'default'           => 'one',
            'sanitize_callback' => 'wp_kses_post',
            'transport'         => 'postMessage'
        )
    );
    
    $wp_customize->add_control(
        new Blossom_Travel_Radio_Image_Control(
            $wp_customize,
            'shop_section_image',
            array(
                'section'    => 'shop_settings',
                'feat_class' => 'upg-to-pro',
                'choices'    => array(
                    'one' => get_template_directory_uri() . '/images/pro/shop-section-view.png',
                    'two' => get_template_directory_uri() . '/images/pro/shop-section.png',
                ),
            )
        )
    );
    /** Shop Section Ends*/

    /** Blog Section */
    $wp_customize->add_section(
        'blog_section',
        array(
            'title'    => __( 'Blog Section', 'blossom-travel' ),
            'priority' => 45,
            'panel'    => 'frontpage_settings',
        )
    );

    /** Blog Options */
    $wp_customize->add_setting(
        'ed_blog_section',
        array(
            'default'           => true,
            'sanitize_callback' => 'blossom_travel_sanitize_checkbox'
        )
    );

    $wp_customize->add_control(
        new Blossom_Travel_Toggle_Control(
            $wp_customize,
            'ed_blog_section',
            array(
                'label'       => __( 'Enable Blog Section', 'blossom-travel' ),
                'description' => __( 'Enable to show blog section.', 'blossom-travel' ),
                'section'     => 'blog_section',
            )            
        )
    );

    /** Blog title */
    $wp_customize->add_setting(
        'blog_section_title',
        array(
            'default'           => __( 'Explore all New Trending Stories', 'blossom-travel' ),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'postMessage'
        )
    );
    
    $wp_customize->add_control(
        'blog_section_title',
        array(
            'section' => 'blog_section',
            'label'   => __( 'Blog Title', 'blossom-travel' ),
            'type'    => 'text',
        )
    );

    // Selective refresh for blog title.
    $wp_customize->selective_refresh->add_partial( 'blog_section_title', array(
        'selector'            => '.trending-stories-section h2.section-title',
        'render_callback'     => 'blossom_travel_get_blog_section_title',
    ) );
    
    /** View All Label */
    $wp_customize->add_setting(
        'blog_view_all',
        array(
            'default'           => __( 'View More', 'blossom-travel' ),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'postMessage'
        )
    );
    
    $wp_customize->add_control(
        'blog_view_all',
        array(
            'label'           => __( 'View All Label', 'blossom-travel' ),
            'section'         => 'blog_section',
            'type'            => 'text',
            'active_callback' => 'blossom_travel_blog_view_all_ac'
        )
    );
    
    $wp_customize->selective_refresh->add_partial( 'blog_view_all', array(
        'selector' => '.trending-stories-section .button-wrap .btn-readmore',
        'render_callback' => 'blossom_travel_get_blog_view_all_btn',
    ) ); 
    /** Blog Section Ends */

    /** Advanced Map Section */
    $wp_customize->add_section(
        'adv_map_image_section',
        array(
            'title'    => __( 'Advanced Map Section', 'blossom-travel' ),
            'panel'    => 'frontpage_settings',
            'priority' => 46,
        )
    );

    /** Note */
    $wp_customize->add_setting(
        'adv_map_text',
        array(
            'default'           => '',
            'sanitize_callback' => 'wp_kses_post' 
        )
    );
    
    $wp_customize->add_control(
        new Blossom_Travel_Note_Control( 
            $wp_customize,
            'adv_map_text',
            array(
                'section'     => 'adv_map_image_section',
                'description' => sprintf( __( '%1$sThis feature is available in Pro version.%2$s %3$sUpgrade to Pro%4$s ', 'blossom-travel' ),'<div class="featured-pro"><span>', '</span>', '<a href="https://blossomthemes.com/wordpress-themes/blossom-travel-pro/?utm_source=blossom_travel&utm_medium=customizer&utm_campaign=upgrade_to_pro" target="_blank">', '</a></div>' ),
            )
        )
    );

   
    $wp_customize->add_setting( 
        'adv_map_settings', 
        array(
            'default'           => 'one',
            'sanitize_callback' => 'blossom_travel_sanitize_radio'
        ) 
    );
    
    $wp_customize->add_control(
        new Blossom_Travel_Radio_Image_Control(
            $wp_customize,
            'adv_map_settings',
            array(
                'section'    => 'adv_map_image_section',
                'feat_class' => 'upg-to-pro',
                'choices'    => array(
                    'one' => get_template_directory_uri() . '/images/pro/adv-map.png',
                ),
            )
        )
    );

    /** Advanced Map Section Ends*/

    /** Popular Section */
    $wp_customize->add_section(
        'popular_image_section',
        array(
            'title'    => __( 'Popular Section', 'blossom-travel' ),
            'panel'    => 'frontpage_settings',
            'priority' => 51,
        )
    );

    /** Note */
    $wp_customize->add_setting(
        'popular_text',
        array(
            'default'           => '',
            'sanitize_callback' => 'wp_kses_post' 
        )
    );
    
    $wp_customize->add_control(
        new Blossom_Travel_Note_Control( 
            $wp_customize,
            'popular_text',
            array(
                'section'     => 'popular_image_section',
                'description' => sprintf( __( '%1$sThis feature is available in Pro version.%2$s %3$sUpgrade to Pro%4$s ', 'blossom-travel' ),'<div class="featured-pro"><span>', '</span>', '<a href="https://blossomthemes.com/wordpress-themes/blossom-travel-pro/?utm_source=blossom_travel&utm_medium=customizer&utm_campaign=upgrade_to_pro" target="_blank">', '</a></div>' ),
            )
        )
    );

   
    $wp_customize->add_setting( 
        'popular_settings', 
        array(
            'default'           => 'one',
            'sanitize_callback' => 'blossom_travel_sanitize_radio'
        ) 
    );
    
    $wp_customize->add_control(
        new Blossom_Travel_Radio_Image_Control(
            $wp_customize,
            'popular_settings',
            array(
                'section'    => 'popular_image_section',
                'feat_class' => 'upg-to-pro',
                'choices'    => array(
                    'one' => get_template_directory_uri() . '/images/pro/popular.png',
                ),
            )
        )
    );

    /** Popular Section Ends*/

    /** Popular Category Section */
    $wp_customize->add_section(
        'pop_cat_image_section',
        array(
            'title'    => __( 'Popular Category Section', 'blossom-travel' ),
            'panel'    => 'frontpage_settings',
            'priority' => 61,
        )
    );

    /** Note */
    $wp_customize->add_setting(
        'pop_cat_text',
        array(
            'default'           => '',
            'sanitize_callback' => 'wp_kses_post' 
        )
    );
    
    $wp_customize->add_control(
        new Blossom_Travel_Note_Control( 
            $wp_customize,
            'pop_cat_text',
            array(
                'section'     => 'pop_cat_image_section',
                'description' => sprintf( __( '%1$sThis feature is available in Pro version.%2$s %3$sUpgrade to Pro%4$s ', 'blossom-travel' ),'<div class="featured-pro"><span>', '</span>', '<a href="https://blossomthemes.com/wordpress-themes/blossom-travel-pro/?utm_source=blossom_travel&utm_medium=customizer&utm_campaign=upgrade_to_pro" target="_blank">', '</a></div>' ),
            )
        )
    );

   
    $wp_customize->add_setting( 
        'pop_cat_settings', 
        array(
            'default'           => 'one',
            'sanitize_callback' => 'blossom_travel_sanitize_radio'
        ) 
    );
    
    $wp_customize->add_control(
        new Blossom_Travel_Radio_Image_Control(
            $wp_customize,
            'pop_cat_settings',
            array(
                'section'    => 'pop_cat_image_section',
                'feat_class' => 'upg-to-pro',
                'choices'    => array(
                    'one' => get_template_directory_uri() . '/images/pro/pop-cat.png',
                ),
            )
        )
    );

    /** Popular Category Section Ends*/

    /** Video Section */
    $wp_customize->add_section(
        'video_image_section',
        array(
            'title'    => __( 'Video Section', 'blossom-travel' ),
            'panel'    => 'frontpage_settings',
            'priority' => 62,
        )
    );

    /** Note */
    $wp_customize->add_setting(
        'video_text',
        array(
            'default'           => '',
            'sanitize_callback' => 'wp_kses_post' 
        )
    );
    
    $wp_customize->add_control(
        new Blossom_Travel_Note_Control( 
            $wp_customize,
            'video_text',
            array(
                'section'     => 'video_image_section',
                'description' => sprintf( __( '%1$sThis feature is available in Pro version.%2$s %3$sUpgrade to Pro%4$s ', 'blossom-travel' ),'<div class="featured-pro"><span>', '</span>', '<a href="https://blossomthemes.com/wordpress-themes/blossom-travel-pro/?utm_source=blossom_travel&utm_medium=customizer&utm_campaign=upgrade_to_pro" target="_blank">', '</a></div>' ),
            )
        )
    );

   
    $wp_customize->add_setting( 
        'video_settings', 
        array(
            'default'           => 'one',
            'sanitize_callback' => 'blossom_travel_sanitize_radio'
        ) 
    );
    
    $wp_customize->add_control(
        new Blossom_Travel_Radio_Image_Control(
            $wp_customize,
            'video_settings',
            array(
                'section'    => 'video_image_section',
                'feat_class' => 'upg-to-pro',
                'choices'    => array(
                    'one' => get_template_directory_uri() . '/images/pro/video.png',
                ),
            )
        )
    );

    /** Video Section Ends*/
    
    /** Affiliate Section */
    $wp_customize->add_section(
        'affiliate_image_section',
        array(
            'title'    => __( 'Affiliate Section', 'blossom-travel' ),
            'panel'    => 'frontpage_settings',
            'priority' => 63,
        )
    );

    /** Note */
    $wp_customize->add_setting(
        'affiliate_text',
        array(
            'default'           => '',
            'sanitize_callback' => 'wp_kses_post' 
        )
    );
    
    $wp_customize->add_control(
        new Blossom_Travel_Note_Control( 
            $wp_customize,
            'affiliate_text',
            array(
                'section'     => 'affiliate_image_section',
                'description' => sprintf( __( '%1$sThis feature is available in Pro version.%2$s %3$sUpgrade to Pro%4$s ', 'blossom-travel' ),'<div class="featured-pro"><span>', '</span>', '<a href="https://blossomthemes.com/wordpress-themes/blossom-travel-pro/?utm_source=blossom_travel&utm_medium=customizer&utm_campaign=upgrade_to_pro" target="_blank">', '</a></div>' ),
            )
        )
    );

   
    $wp_customize->add_setting( 
        'affiliate_settings', 
        array(
            'default'           => 'one',
            'sanitize_callback' => 'blossom_travel_sanitize_radio'
        ) 
    );
    
    $wp_customize->add_control(
        new Blossom_Travel_Radio_Image_Control(
            $wp_customize,
            'affiliate_settings',
            array(
                'section'    => 'affiliate_image_section',
                'feat_class' => 'upg-to-pro',
                'choices'    => array(
                    'one' => get_template_directory_uri() . '/images/pro/affiliate.png',
                ),
            )
        )
    );

    /** Affiliate Section Ends*/

    /** Instagram Settings */
    $wp_customize->add_section(
        'instagram_section',
        array(
            'title'    => __( 'Instagram Section', 'blossom-travel' ),
            'priority' => 80,
            'panel'    => 'frontpage_settings',
        )
    );
    
    /** Enable Instagram Section */
    $wp_customize->add_setting( 
        'ed_instagram', 
        array(
            'default'           => true,
            'sanitize_callback' => 'blossom_travel_sanitize_checkbox'
        ) 
    );
    
    $wp_customize->add_control(
        new Blossom_Travel_Toggle_Control( 
            $wp_customize,
            'ed_instagram',
            array(
                'section'     => 'instagram_section',
                'label'       => __( 'Enable Instagram Section', 'blossom-travel' ),
                'description' => __( 'Enable to show Instagram Section', 'blossom-travel' ),
            )
        )
    );

    /** instagram title */
    $wp_customize->add_setting(
        'instagram_title',
        array(
            'default'           => __( 'Instagram', 'blossom-travel' ),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'postMessage'
        )
    );
    
    $wp_customize->add_control(
        'instagram_title',
        array(
            'section'         => 'instagram_section',
            'label'           => __( 'Section Title', 'blossom-travel' ),
            'type'            => 'text',
            'active_callback' => 'blossom_travel_instagram_ac',
        )
    );

    // Selective refresh for blog title.
    $wp_customize->selective_refresh->add_partial( 'instagram_title', array(
        'selector'            => '.instagram-section h2.section-title',
        'render_callback'     => 'blossom_travel_get_instagram_title',
    ) );

    $wp_customize->add_setting( 
        'instagram_shortcode', 
        array(
            'default'           => '[instagram-feed]',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    
    $wp_customize->add_control(
        'instagram_shortcode',
        array(
            'section'         => 'instagram_section',
            'label'           => __( 'Shortcode', 'blossom-travel' ),
            'type'            => 'text',
            'description'     => __( 'Add shortcode for your instagram profile below:', 'blossom-travel' ),
            'active_callback' => 'blossom_travel_instagram_ac',
        )
    );

    /** Sort Front Page Section */
    $wp_customize->add_section(
        'sort_frontpage_image_section',
        array(
            'title'    => __( 'Sort Front Page Section', 'blossom-travel' ),
            'panel'    => 'frontpage_settings',
        )
    );

    /** Note */
    $wp_customize->add_setting(
        'sort_frontpage_text',
        array(
            'default'           => '',
            'sanitize_callback' => 'wp_kses_post' 
        )
    );
    
    $wp_customize->add_control(
        new Blossom_Travel_Note_Control( 
            $wp_customize,
            'sort_frontpage_text',
            array(
                'section'     => 'sort_frontpage_image_section',
                'description' => sprintf( __( '%1$sThis feature is available in Pro version.%2$s %3$sUpgrade to Pro%4$s ', 'blossom-travel' ),'<div class="featured-pro"><span>', '</span>', '<a href="https://blossomthemes.com/wordpress-themes/blossom-travel-pro/?utm_source=blossom_travel&utm_medium=customizer&utm_campaign=upgrade_to_pro" target="_blank">', '</a></div>' ),
            )
        )
    );

   
    $wp_customize->add_setting( 
        'sort_frontpage_settings', 
        array(
            'default'           => 'one',
            'sanitize_callback' => 'blossom_travel_sanitize_radio'
        ) 
    );
    
    $wp_customize->add_control(
        new Blossom_Travel_Radio_Image_Control(
            $wp_customize,
            'sort_frontpage_settings',
            array(
                'section'    => 'sort_frontpage_image_section',
                'feat_class' => 'upg-to-pro',
                'choices'    => array(
                    'one' => get_template_directory_uri() . '/images/pro/sort-section.png',
                ),
            )
        )
    );

    /** Sort Front Page Section Ends*/

    /** One Page Settings */
    $wp_customize->add_section(
        'onepage_image_section',
        array(
            'title'    => __( 'One Page Settings', 'blossom-travel' ),
            'panel'    => 'frontpage_settings',
        )
    );

    /** Note */
    $wp_customize->add_setting(
        'onepage_text',
        array(
            'default'           => '',
            'sanitize_callback' => 'wp_kses_post' 
        )
    );
    
    $wp_customize->add_control(
        new Blossom_Travel_Note_Control( 
            $wp_customize,
            'onepage_text',
            array(
                'section'     => 'onepage_image_section',
                'description' => sprintf( __( '%1$sThis feature is available in Pro version.%2$s %3$sUpgrade to Pro%4$s ', 'blossom-travel' ),'<div class="featured-pro"><span>', '</span>', '<a href="https://blossomthemes.com/wordpress-themes/blossom-travel-pro/?utm_source=blossom_travel&utm_medium=customizer&utm_campaign=upgrade_to_pro" target="_blank">', '</a></div>' ),
            )
        )
    );

   
    $wp_customize->add_setting( 
        'onepage_settings', 
        array(
            'default'           => 'one',
            'sanitize_callback' => 'blossom_travel_sanitize_radio'
        ) 
    );
    
    $wp_customize->add_control(
        new Blossom_Travel_Radio_Image_Control(
            $wp_customize,
            'onepage_settings',
            array(
                'section'    => 'onepage_image_section',
                'feat_class' => 'upg-to-pro',
                'choices'    => array(
                    'one' => get_template_directory_uri() . '/images/pro/one-page.png',
                ),
            )
        )
    );

    /** One Page Settings Ends*/
}
add_action( 'customize_register', 'blossom_travel_customize_register_frontpage' );