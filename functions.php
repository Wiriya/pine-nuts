<?php
/**
 * Pine nuts functions and definitions
 *
 * @package Pine nuts
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'pine_nuts_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function pine_nuts_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Pine nuts, use a find and replace
	 * to change 'pine-nuts' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'pine-nuts', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'pine-nuts' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'pine_nuts_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => get_stylesheet_directory_uri() . '/inc/img/bg.jpg',
	) ) );

	add_theme_support( 'post-thumbnails' ); 
}
endif; // pine_nuts_setup
add_action( 'after_setup_theme', 'pine_nuts_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function pine_nuts_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'pine-nuts' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'pine_nuts_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function pine_nuts_scripts() {
     // load materialize css
	wp_enqueue_style( 'pine-nuts-materialize', get_template_directory_uri() . '/inc/css/materialize.min.css' );
	wp_enqueue_style( 'pine-nuts-animate', get_template_directory_uri() . '/inc/css/animate.css' );
	wp_enqueue_style( 'pine-nuts-font-awesome', get_template_directory_uri() . '/inc/css/font-awesome.min.css' );
	wp_enqueue_style( 'pine-nuts-style', get_stylesheet_uri() );
    
    // load jquery 2
    wp_deregister_script('jquery');
    wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js", false, null);
    wp_enqueue_script('jquery');

	wp_enqueue_script( 'pine-nuts-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'pine-nuts-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
    
    // load materialize js
	wp_enqueue_script('pine-nuts-materializejs', get_template_directory_uri().'/inc/js/materialize.min.js', array('jquery') );
	wp_enqueue_script('pine-nuts-wowjs', get_template_directory_uri().'/inc/js/wow.min.js', array('jquery') );
    
    wp_enqueue_script('pine-nuts-bananajs', get_template_directory_uri().'/inc/js/init.js', array(), '20150320', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pine_nuts_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

function add_custom_menu5( $nav, $args )
{
	$pine_nuts_contact_us_show = get_theme_mod('pine_nuts_contact_us_show');

    if( isset($pine_nuts_contact_us_show) && $pine_nuts_contact_us_show != 1 ):
        
        $pine_nuts_contact_us_menu = get_theme_mod('pine_nuts_contact_us_menu',__('contact us','pine-nuts'));

    	if( !empty($pine_nuts_contact_us_menu) ):

			$newmenuitem = '<li><a class="waves-effect waves-orange btn-flat" href="#section5">'.$pine_nuts_contact_us_menu.'</a></li>';
			$nav = $newmenuitem.$nav;

    	endif;

    endif;
        
    return $nav;
}
add_filter( 'wp_nav_menu_items', 'add_custom_menu5', 10, 7 );

function add_custom_menu4( $nav, $args )
{
	$pine_nuts_blog_show = get_theme_mod('pine_nuts_blog_show');

    if( isset($pine_nuts_blog_show) && $pine_nuts_blog_show != 1 ):
        
       $pine_nuts_blog_menu = get_theme_mod('pine_nuts_blog_menu',__('blog','pine-nuts'));

    	if( !empty($pine_nuts_blog_menu) ):

			$newmenuitem = '<li><a class="waves-effect waves-orange btn-flat" href="#section4">'.$pine_nuts_blog_menu.'</a></li>';
			$nav = $newmenuitem.$nav;

    	endif; 

    endif;
	        
    return $nav;
}
add_filter( 'wp_nav_menu_items', 'add_custom_menu4', 10, 6 );

function add_custom_menu3( $nav, $args )
{

    $pine_nuts_portfolio_show = get_theme_mod('pine_nuts_portfolio_show');

    if( isset($pine_nuts_portfolio_show) && $pine_nuts_portfolio_show != 1 ):

    	$pine_nuts_portfolio_menu = get_theme_mod('pine_nuts_portfolio_menu',__('portfolio','pine-nuts'));

    	if( !empty($pine_nuts_portfolio_menu) ):

		$newmenuitem = '<li><a class="waves-effect waves-orange btn-flat" href="#section3">'.$pine_nuts_portfolio_menu.'</a></li>';
		$nav = $newmenuitem.$nav;

    	endif;

    endif;
        
    return $nav;
}
add_filter( 'wp_nav_menu_items', 'add_custom_menu3', 10, 5 );

function add_custom_menu2( $nav, $args )
{

	$pine_nuts_aboutus_show = get_theme_mod('pine_nuts_aboutus_show');

    if( isset($pine_nuts_aboutus_show) && $pine_nuts_aboutus_show != 1 ):

    	$pine_nuts_about_menu = get_theme_mod('pine_nuts_about_menu',__('about','pine-nuts'));

    	if( !empty($pine_nuts_about_menu) ):

    		$newmenuitem = '<li><a class="waves-effect waves-orange btn-flat" href="#section2">'.$pine_nuts_about_menu.'</a></li>';
			$nav = $newmenuitem.$nav;

    	endif;

    endif;
        
    return $nav;
}
add_filter( 'wp_nav_menu_items', 'add_custom_menu2', 10, 4 );

function add_custom_menu1( $nav, $args )
{
	$pine_nuts_bigtitle_show = get_theme_mod('pine_nuts_bigtitle_show');

    if( isset($pine_nuts_bigtitle_show) && $pine_nuts_bigtitle_show != 1 ):

    	$pine_nuts_home_menu = get_theme_mod('pine_nuts_home_menu',__('home','pine-nuts'));

	    if( !empty($pine_nuts_home_menu) ):

			$newmenuitem = '<li><a class="waves-effect waves-orange btn-flat" href="#section1">'.$pine_nuts_home_menu.'</a></li>';
			$nav = $newmenuitem.$nav;		

		endif;

    endif;	
        
    return $nav;
}
add_filter( 'wp_nav_menu_items', 'add_custom_menu1', 10, 3 );

function add_logo( $nav, $args )
{

	$pine_nuts_logo = get_theme_mod('pine_nuts_logo');

	if(isset($pine_nuts_logo) && $pine_nuts_logo != ""):

		$newmenuitem = '<li class="logo"><div class="brandlogo"><a id="logo-container" href="'.home_url().'" class="brand-logo"><img src="'.$pine_nuts_logo.'"></a></div></li>';
        $nav = $newmenuitem.$nav;

	else:

		$newmenuitem = '<li class="logo"><div class="brandlogo"><a id="logo-container" href="'.home_url().'" class="brand-logo"><img src="'.get_template_directory_uri().'/inc/img/logo.png"></a></div></li>';
        $nav = $newmenuitem.$nav;

	endif;

    return $nav;
}
add_filter( 'wp_nav_menu_items', 'add_logo', 10, 2 );

function pine_nuts_wp_page_menu()
{

    echo '<ul id="nav-mobile" class="side-nav side-menu">';

    	echo '<li class="logo"><div class="brandlogo"><a id="logo-container" href="'.home_url().'" class="brand-logo"><img src="'.get_template_directory_uri().'/inc/img/logo.png"></a></div></li>';
    	wp_list_pages(array('title_li' => '', 'depth' => 1));

    echo '</ul>';

}


class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {

	/**
     * Start the element output.
     *
     * @param  string $output Passed by reference. Used to append additional content.
     * @param  object $item   Menu item data object.
     * @param  int $depth     Depth of menu item. May be used for padding.
     * @param  array $args    Additional strings.
     * @return void
     */
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    	$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

    	$class_names = $value = '';

    	$classes = empty( $item->classes ) ? array() : (array) $item->classes;
    	$classes[] = 'menu-item-' . $item->ID;

    	$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    	$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . ' waves-effect waves-orange btn-flat"' : '';

    	$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
    	$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

    	$output .= $indent . '<li' . $id . $value .'>';

    	$atts = array();
    	$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
    	$atts['target'] = ! empty( $item->target )     ? $item->target     : '';
    	$atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
    	$atts['href']   = ! empty( $item->url )        ? $item->url        : '';

    	$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

    	$attributes = '';
    	foreach ( $atts as $attr => $value ) {
        	if ( ! empty( $value ) ) {
            	$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
            	$attributes .= ' ' . $attr . '="' . $value . '"';
        	}
    	}
    	$item_output = $args->before;
    	$item_output .= '<a'. $attributes .$class_names.'>';
    	$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
    	$item_output .= '</a>';
    	$item_output .= $args->after;

    	$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

    /**
     * @see Walker::end_el()
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item Page data object. Not used.
     * @param int $depth Depth of page. Not Used.
     */
    function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $output .= "</li>\n";
    }

} // Walker_Nav_Menu


if (class_exists('WP_Customize_Control')) {

	class WP_Customize_Category_Control extends WP_Customize_Control {
	  	public $type    = 'dropdown-category';

	  	public function render_content() {
	    $dropdown = wp_dropdown_categories(array(
	      	'name'              => '_customize-dropdown-categories-' . $this->id,
	        'echo'              => 0,
	        'show_option_none'  => __( '&mdash; Select &mdash;' ),
	        'option_none_value' => '0',
	        'selected'          => $this->value(),
	    ));

	    $dropdown = str_replace( '<select', '<select ' . $this->get_link(), $dropdown );

	    printf(
		    '<label class="customize-control-select"><span class="customize-control-title">%s</span> %s</label>',
		    $this->label,
		    $dropdown );
	  	}
	}// WP_Customize_Control
}




