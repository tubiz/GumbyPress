<?php

	//Set the content width based on the theme's design and stylesheet.
	 if ( ! isset( $content_width ) )
		$content_width = 600; /* pixels */


	if ( ! function_exists( 'gp_theme_setup' ) ) :
	function gp_theme_setup() {

		//Add default posts and comments RSS feed links to head
		add_theme_support( 'automatic-feed-links' );

		//Enable support for Post Thumbnails on posts and pages
		add_theme_support( 'post-thumbnails' );

		//Register A WordPress Nav Menu
		register_nav_menus( array(
			'primary' => ( 'Primary Menu' ),
		) );

	}
	endif;
	add_action( 'after_setup_theme', 'gp_theme_setup' );



	//Register A Sidebar Widget
	function gp_widgets_init() {
	    register_sidebar( array(
	        'name' => ( 'Right Sidebar' ),
	        'description'   => 'The Right sidebar',
	        'class'         => '',
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h6 class="widget-title"> ',
	        'after_title' => ' </h6>',
	    ) );
	}
	add_action( 'widgets_init', 'gp_widgets_init' );



	//Enqueue all the required stylesheet and javascript files
	function gp_load_style_scripts() {
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}  

	    wp_register_script('modernizr', get_template_directory_uri().'/js/modernizr-2.6.2.min.js','1.0', 'all');
		wp_register_script('gumby', get_template_directory_uri().'/js/gumby.min.js','1.0', 'all', true);

	    wp_enqueue_script(  'modernizr');
	    wp_enqueue_script( 'jquery' );
	    wp_enqueue_script( 'gumby' );

		wp_register_style('gumby', get_template_directory_uri().'/css/gumby.css','1.0', 'all');


	    wp_enqueue_style( 'gumby' );
		wp_enqueue_style( 'style', get_stylesheet_uri() );

	}
	add_action( 'wp_enqueue_scripts', 'gp_load_style_scripts' );
	
	//Walker Class - This add support for the dropdown menu in the Gumbyframework
	class Walker_Page_Custom extends Walker_Nav_menu{

		function start_lvl(&$output, $depth){
			$indent = str_repeat("\t", $depth);
			$output .= "\n$indent<div class=\"dropdown\"><ul>\n";
		}

		function end_lvl(&$output , $depth){
			$indent = str_repeat("\t", $depth);
			$output .= "$indent</ul></div>\n";
		}
	}