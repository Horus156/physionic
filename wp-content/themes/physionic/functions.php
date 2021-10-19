<?php 
    // compatibilidad de la plantilla
	add_theme_support( 'nav-menus' );
	add_theme_support('post-thumbnails');
	add_theme_support(
	    'html5',
	    array(
	        'search-form',
	        'comment-form',
	        'comment-list',
	        'gallery',
	        'caption',
	    )
	);
	add_theme_support( 'responsive-embeds' );

	add_filter( 'show_admin_bar', '__return_false' );

    //Al iniciar el tema
	function init_template(){
		//configuracion 
		add_theme_support('post-thumbnails');

		//Configuracion title
		add_theme_support('title-tag');

		//Crear ubicacion de los menus
        register_nav_menus(
			array(
				'menu_ppl'=>'Main menu'
			)
		);
	}
	add_action('after_setup_theme','init_template');


    function sidebar(){
        register_sidebar( 
			array( 
				'name' => 'Banner text'
			) 
		);
        register_sidebar( 
			array( 
				'name' => 'Banner form'
			) 
		);
        register_sidebar( 
			array( 
				'name' => 'Leading Medicine'
			) 
		);
        register_sidebar( 
			array( 
				'name' => 'Clients'
			) 
		);
        register_sidebar( 
			array( 
				'name' => 'FAQ'
			) 
		);
        register_sidebar( 
			array( 
				'name' => 'Pricing'
			) 
		);
        register_sidebar( 
			array( 
				'name' => 'Newsletter'
			) 
		);
        register_sidebar( 
			array( 
				'name' => 'Footer'
			) 
		);
    }
    add_action('widgets_init','sidebar');

    function pm_add_font_awesome() {
        wp_enqueue_style( 'pm-font-awesome', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css' );
    } 
   add_action( 'wp_enqueue_scripts', 'pm_add_font_awesome' );

   	function my_theme_setup() {
    	add_theme_support( 'woocommerce' );
	}
	add_action( 'after_setup_theme', 'my_theme_setup' );

?>