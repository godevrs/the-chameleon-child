<?php



	class TheChameleonChild{
	
	
	
		function __construct(){
		
			add_action( 'wp_enqueue_scripts', array($this, 'enqueue_styles') );	
		
		}

		/**
		 * Setup Parent and Child theme  style.
		 *
		 */
		function enqueue_styles() {
			
			
		    wp_enqueue_style( 'the-chameleon', get_template_directory_uri() . '/style.css' );    
			wp_enqueue_style( 'the-chameleon-child',
		        get_stylesheet_directory_uri() . '/style.css',
		        array( 'the-chameleon', 'the-chameleon-skin' ),
		        wp_get_theme()->get('Version')
		    );
			
			
    		//functions	child		
    		wp_enqueue_script( 'the-chameleon-child-functions', get_stylesheet_directory_uri()  .'/js/functions.js', array( 'jquery' ), '1.0.0'  );
			
		}
	

		
		
	
	/**
	 * Setup My Child Theme's textdomain.
	 *
	 * Declare textdomain for this child theme.
	 * Translations can be filed in the /languages/ directory.
	 */
/*
	function my_child_theme_setup() {
	    load_child_theme_textdomain( 'my-child-theme', get_stylesheet_directory() . '/languages' );
	}
	add_action( 'after_setup_theme', 'my_child_theme_setup' );
	
	*/

	}
	
	$TheChameleonChild = new TheChameleonChild();
?>