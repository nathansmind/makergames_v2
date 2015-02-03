<?php
		
	// Register JS
	function register_my_scripts() {
	  wp_deregister_script('jquery');  
	  wp_register_script('jquery', "http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js", array(),'2.1.0',false);
	  // wp_register_script('modernizer', get_template_directory_uri()."/js/vendor/modernizr.js",array(),'2.7.1', false);
	  // wp_register_script('foundation', get_template_directory_uri()."/js/foundation.min.js", array('jquery'),'5.1.1',true); 
	}
	
	// Register CSS
	function register_my_styles(){
	  wp_register_style('main', get_template_directory_uri()."/style.css",array(),'2.7','all');  
	}
	
	add_action('wp_print_scripts','register_my_scripts');
	add_action('wp_print_styles', 'register_my_styles');
	
	
	// Load the Theme JS
	function theme_js() {
		// wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js');
		// wp_enqueue_script('foundation', get_template_directory_uri() . '/js/foundation.min.js');	
		wp_enqueue_script('theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery'), '', true );		
		
	}
	
	// Load the Theme CSS
	function theme_styles() {
		wp_enqueue_style('main', get_template_directory_uri() . '/style.css' );
	}
		
	add_action( 'wp_enqueue_scripts', 'theme_js');
	add_action( 'wp_enqueue_scripts', 'theme_styles');	



	// enables wigitized sidebars
	if ( function_exists('register_sidebar') )

	// Sidebar Widget
	// Location: the sidebar
	register_sidebar(array('name'=>'Sidebar',
		'before_widget' => '<div class="widget-area widget-sidebar"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Header Widget
	// Location: right after the navigation
	register_sidebar(array('name'=>'Header',
		'before_widget' => '<div class="widget-area widget-header"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
	// Footer Widget
	// Location: at the top of the footer, above the copyright
	register_sidebar(array('name'=>'Footer',
		'before_widget' => '<div class="widget-area widget-footer"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
	// The Printer Widget
	// Location: displayed on the top of the home page, right after the header, right before the loop, within the contend area
	register_sidebar(array('name'=>'Printers',
		'before_widget' => '<div class="widget-area widget-printers"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));

	// post thumbnail support
	if ( function_exists( 'add_theme_support' ) ) {
        add_theme_support( 'post-thumbnails' );
        add_image_size( 'printer-feed', 700, 600, true );
    }

	// custom menu support
	add_theme_support( 'menus' );
	if ( function_exists( 'register_nav_menus' ) ) {
	  	register_nav_menus(
	  		array(
	  		  'header-menu' => 'Header Menu',
	  		  'sidebar-menu' => 'Sidebar Menu',
	  		  'footer-menu' => 'Footer Menu',
	  		  'logged-in-menu' => 'Logged In Menu'
	  		)
	  	);
	}

	// custom background support
	add_custom_background();

	// custom header image support
	define('NO_HEADER_TEXT', true );
	define('HEADER_IMAGE', '%s/images/default-header.png'); // %s is the template dir uri
	define('HEADER_IMAGE_WIDTH', 1068); // use width and height appropriate for your theme
	define('HEADER_IMAGE_HEIGHT', 300);
	// gets included in the admin header
	function admin_header_style() {
	    ?><style type="text/css">
	        #headimg {
	            width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
	            height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
	        }
	    </style><?php
	}
	
	// removes detailed login error information for security
	add_filter('login_errors',create_function('$a', "return null;"));
	
	// Removes Trackbacks from the comment cout
	add_filter('get_comments_number', 'comment_count', 0);
	function comment_count( $count ) {
		if ( ! is_admin() ) {
			global $id;
			$comments_by_type = &separate_comments(get_comments('status=approve&post_id=' . $id));
			return count($comments_by_type['comment']);
		} else {
			return $count;
		}
	}

	// improved custom excerpt
	function improved_trim_excerpt($text) {
        global $post;
        if ( '' == $text ) {
                $text = get_the_content('');
                $permalink = get_permalink($post->ID);
                $text = apply_filters('the_content', $text);
                $text = str_replace('\]\]\>', ']]&gt;', $text);
                $text = preg_replace('@<script[^>]*?>.*?</script>@si', '', $text);
                $text = strip_tags($text, '<p>');
                $excerpt_length = 21;
                $words = explode(' ', $text, $excerpt_length + 1);
                if (count($words)> $excerpt_length) {
                        array_pop($words);
                        array_push($words, '... <a href="' . $permalink . '" class="read-more">Read More</a>');
                        $text = implode(' ', $words);
                }
        }
        return $text;
    }
    
    remove_filter('get_the_excerpt', 'wp_trim_excerpt');
    add_filter('get_the_excerpt', 'improved_trim_excerpt');
    
    
    
    // multiple excerpt lengths
    // use "echo excerpt(10);" within PHP tags to call an excerpt of 10 words, etc.
    function excerpt($limit) {
	  $excerpt = explode(' ', get_the_excerpt(), $limit);
	  $permalink = get_permalink($post->ID);
	  if (count($excerpt)>=$limit) {
	    array_pop($excerpt);
	    $excerpt = implode(" ",$excerpt).'...';
	  } else {
	    $excerpt = implode(" ",$excerpt);
	  }
	  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
	  $excerpt = $excerpt.'... <a href="'.$permalink.'">Read More&gt;&gt;</a>';
	  return $excerpt;
	}
	
	function content($limit) {
	  $content = explode(' ', get_the_content(), $limit);
	  if (count($content)>=$limit) {
	    array_pop($content);
	    $content = implode(" ",$content).'...';
	  } else {
	    $content = implode(" ",$content);
	  }
	  $content = preg_replace('/[.+]/','', $content);
	  $content = apply_filters('the_content', $content);
	  $content = str_replace(']]>', ']]&gt;', $content);
	  return $content;
	}

	
	// category id in body and post class
	function category_id_class($classes) {
		global $post;
		foreach((get_the_category($post->ID)) as $category)
			$classes [] = 'cat-' . $category->cat_ID . '-id';
			return $classes;
	}
	add_filter('post_class', 'category_id_class');
	add_filter('body_class', 'category_id_class');
	
	// Add Custom Post types to categories
	function add_custom_types_to_tax( $query ) {
		if( is_category() || is_tag() && empty( $query->query_vars['3dprinters'] ) ) {
		
		// Get all your post types
		$post_types = get_post_types();
		
		$query->set( 'post_type', $post_types );
		return $query;
		}
	}
	add_filter( 'pre_get_posts', 'add_custom_types_to_tax' );	
	
	// Add Custom Post types to categories
	function my_get_posts( $query ) {

		if ( ( is_home() && $query->is_main_query() ) || is_feed() )
		$query->set( 'post_type', array( 'post', '3dprinters' ) );

	return $query;
	}
	
	add_filter( 'pre_get_posts', 'my_get_posts' );
	
	// Exerpt Contols	
	add_filter('excerpt_length', 'my_excerpt_length');
	
	function my_excerpt_length($length) {
		return 100; 
	}	
	
	
?>