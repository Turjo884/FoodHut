<?php 

if ( ! function_exists( 'foodhut_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     * @since Twenty Fifteen 1.0
     */
    function foodhut_setup() {
    
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on foodhut, use a find and replace
         * to change 'foodhut' to the name of your theme in all the template files
         */
        load_theme_textdomain( 'foodhut', get_template_directory() . '/languages' );
    
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );
    
        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded  tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );
    
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support( 'post-thumbnails' );
        // set_post_thumbnail_size( 825, 510, true );
    
        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'foodhut' ),
        ) );
    
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ) );
    
        /*
         * Enable support for Post Formats.
         *
         * See: https://codex.wordpress.org/Post_Formats
         */
        add_theme_support( 'post-formats', array(
            'image', 'video', 'quote', 'link', 'gallery', 'audio'
        ) );

    }
    endif; // foodhut_setup
    add_action( 'after_setup_theme', 'foodhut_setup' );

    

    // FoodHut Custom CSS and JS Files
    function foodhut_scripts() {
        
        // Start CSS Script
        wp_enqueue_style( 'themify-icons', get_template_directory_uri() . '/assets/vendors/themify-icons.css', array(), '1.0', 'all' );

        wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/vendors/animate/animate.css', array(), '3.7.0', 'all' );

        wp_enqueue_style( 'foodhut', get_template_directory_uri() . '/assets/css/foodhut.css', array(), '1.0', 'all' );


        wp_enqueue_style( 'style', get_stylesheet_uri() );
    
        // Start Js Script
        wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.bundle.js', array( 'jquery' ), '4.3.1', true );

        wp_enqueue_script( 'bootstrap-affix', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.affix.js', array( 'imagesloaded' ), '3.3.6', true );

        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.js', array( 'jquery' ), '4.3.1', true );

        wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/vendors/wow/wow.js', array( 'jquery' ), '4.3.1', true );

        wp_enqueue_script( 'foodhut', get_template_directory_uri() . 'assets/js/foodhut.js', array( 'jquery' ), '1.0.0', true );
    
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
    add_action( 'wp_enqueue_scripts', 'foodhut_scripts' );