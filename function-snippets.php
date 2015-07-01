<?php
    if ( ! function_exists( 'menu_setup' ) ) :
    /**
     *  
     */
    function menu_setup() {

        // This theme uses wp_nav_menu() in two locations.
        // This snippet supports the two navs in proper-nav.php
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'zupgroup' ),
            'mobile' => __( 'Mobile Menu', 'zupgroup' )
        ) );

    }
    endif; // zupgroup_setup
    add_action( 'after_setup_theme', 'menu_setup' );


    function menu_scripts() {
        wp_enqueue_style( 'mmenu-css', get_template_directory_uri() . '/assetsjquery.mmenu.css', array(), '20150701');
        wp_enqueue_script( 'mmenu-js', get_template_directory_uri() . '/assets/jquery.mmenu.min.js', array(), '20150701', true);
        
    }
    add_action( 'wp_enqueue_scripts', 'zupgroup_scripts' );
?>