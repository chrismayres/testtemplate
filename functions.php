<?php 
    //title tag
    function test_theme_support() {
        
        add_theme_support('title-tag');
        add_theme_support('custom-logo');
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme','test_theme_support');

    //menu
    function test_menus() {
        $locations = array(
            'primary' => "Desktop Left Sidebar",
            'footer' => "Footer Menu"
        ); 
        register_nav_menus($locations);
    }
    add_action('init', 'test_menus');

    
    
    //Register CSS files
    function test_register_styles() {
        $version = wp_get_theme() -> get('Version');
        wp_enqueue_style('test-styles', get_template_directory_uri() . "/style.css", array('test-bootstrap'), $version, 'all');
        wp_enqueue_style('test-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
        wp_enqueue_style('test-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
    }
    add_action( 'wp_enqueue_scripts', 'test_register_styles');

    //Register js files
    function test_register_scripts() {
        wp_enqueue_script('test-jquery-script', 'https://code.jquery.com/jquery-3.4.1.slim.min.jss', array(), '', true);
        wp_enqueue_script('test-popper-script', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', '', array(), true);
        wp_enqueue_script('test-bootstrap-script', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', '', array(), true);
        wp_enqueue_script('test-scripts', get_template_directory_uri() . '/assets/js/main.js', array(), '', true);
    }
    add_action( 'wp_enqueue_scripts', 'test_register_scripts');
?>