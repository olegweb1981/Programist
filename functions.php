<?php

function stronglytyped_setup() {
    load_theme_textdomain('stronglytyped');

    add_theme_support('title-tag');

    add_theme_support('custom-logo', array(
        'height' => 60,
        'width' => 150, 
        'flex-height' => true 
    ));

    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(769, 305);

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ));

    add_theme_support('post-formats', array(
        'aside',
        'image',
        'video',
        'gallery'
    ));

    register_nav_menu('primary', 'Primary menu');
}

add_action('after_setup_theme', 'stronglytyped_setup');

function stronglytyped_scripts() {
    wp_enqueue_style( 'style-css', get_stylesheet_uri() );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/fontawesome/css/all.min.css');
    
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'stile', get_template_directory_uri() . '/js/stile.js' );
}

add_action( 'wp_enqueue_scripts', 'stronglytyped_scripts' );

add_filter('excerpt_more', function($more) {
	return '...';
});


//pagination

function stronglytyped_pagination( $args = array() ) {
    
    $defaults = array(
        'range'           => 4,
        'custom_query'    => FALSE,
        'previous_string' => __( 'Prev', 'text-domain' ),
        'next_string'     => __( 'Next', 'text-domain' ),
        'before_output'   => '<div class="next_page"><ul class="page-numbers">',
        'after_output'    => '</ul></div>'
    );
    
    $args = wp_parse_args( 
        $args, 
        apply_filters( 'wp_bootstrap_pagination_defaults', $defaults )
    );
    
    $args['range'] = (int) $args['range'] - 1;
    if ( !$args['custom_query'] )
        $args['custom_query'] = @$GLOBALS['wp_query'];
    $count = (int) $args['custom_query']->max_num_pages;
    $page  = intval( get_query_var( 'paged' ) );
    $ceil  = ceil( $args['range'] / 2 );
    
    if ( $count <= 1 )
        return FALSE;
    
    if ( !$page )
        $page = 1;
    
    if ( $count > $args['range'] ) {
        if ( $page <= $args['range'] ) {
            $min = 1;
            $max = $args['range'] + 1;
        } elseif ( $page >= ($count - $ceil) ) {
            $min = $count - $args['range'];
            $max = $count;
        } elseif ( $page >= $args['range'] && $page < ($count - $ceil) ) {
            $min = $page - $ceil;
            $max = $page + $ceil;
        }
    } else {
        $min = 1;
        $max = $count;
    }
    
    $echo = '';
    $previous = intval($page) - 1;
    $previous = esc_attr( get_pagenum_link($previous) );

    if ( $previous && (1 != $page) )
        $echo .= '<li><a href="' . $previous . '" class="page-numbers" title="' . __( 'previous', 'text-domain') . '">' . $args['previous_string'] . '</a></li>';
    
    if ( !empty($min) && !empty($max) ) {
        for( $i = $min; $i <= $max; $i++ ) {
            if ($page == $i) {
                $echo .= '<li class="active"><span class="page-numbers current">' . str_pad( (int)$i, 1, '0', STR_PAD_LEFT ) . '</span></li>';
            } else {
                $echo .= sprintf( '<li><a href="%s" class="page-numbers">%2d</a></li>', esc_attr( get_pagenum_link($i) ), $i );
            }
        }
    }
    
    $next = intval($page) + 1;
    $next = esc_attr( get_pagenum_link($next) );
    if ($next && ($count != $page) )
        $echo .= '<li><a href="' . $next . '" class="page-numbers" title="' . __( 'next', 'text-domain') . '">' . $args['next_string'] . '</a></li>';

    if ( isset($echo) )
        echo $args['before_output'] . $echo . $args['after_output'];
}

function stronglytyped_customize_register( $wp_customize ) {

    $wp_customize->add_setting( 'header_social' , array(
        'default'   => __('QUESTIONS OR COMMENTS? GET IN TOUCH:', 'stronglytyped'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting( 'facebook_social' , array(
        'default'   => __('Url facebook', 'stronglytyped'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting( 'twitter_social' , array(
        'default'   => __('Url twitter', 'stronglytyped'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting( 'instagram_social' , array(
        'default'   => __('Url instagram', 'stronglytyped'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting( 'dribbble_social' , array(
        'default'   => __('Url dribbble', 'stronglytyped'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_section( 'social_section' , array(
        'title'      => __( 'Social settings', 'stronglytyped' ),
        'priority'   => 30,
    ));

    $wp_customize->add_control(
        'header_social', 
        array(
            'label'    => __( 'Social header in footer', 'stronglytyped' ),
            'section'  => 'social_section',
            'settings' => 'header_social',
            'type'     => 'text'
        )
    );

    $wp_customize->add_control(
        'facebook_social', 
        array(
            'label'    => __( 'Facebook profile url', 'stronglytyped' ),
            'section'  => 'social_section',
            'settings' => 'facebook_social',
            'type'     => 'text'
        )
    );

    $wp_customize->add_control(
        'twitter_social', 
        array(
            'label'    => __( 'Twitter profile url', 'stronglytyped' ),
            'section'  => 'social_section',
            'settings' => 'twitter_social',
            'type'     => 'text'
        )
    );

    $wp_customize->add_control(
        'instagram_social', 
        array(
            'label'    => __( 'Instagram profile url', 'stronglytyped' ),
            'section'  => 'social_section',
            'settings' => 'instagram_social',
            'type'     => 'text'
        )
    );

    $wp_customize->add_control(
        'dribbble_social', 
        array(
            'label'    => __( 'Dribbble profile url', 'stronglytyped' ),
            'section'  => 'social_section',
            'settings' => 'dribbble_social',
            'type'     => 'text'
        )
    );

 }
 add_action( 'customize_register', 'stronglytyped_customize_register' );