<?php
/**
 * Pine nuts Theme Customizer
 *
 * @package Pine nuts
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function pine_nuts_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->remove_section('colors');
	$wp_customize->remove_section('nav');


	/***********************************************/

	/************** GENERAL OPTIONS  ***************/

	/***********************************************/

	$wp_customize->add_section( 'pine_nuts_general_section' , array(

			'title'       => __( 'General options', 'pine-nuts' ),

    	  	'priority'    => 50,

    	  	'description' => __('Pine Nuts theme general options','pine-nuts'),

	));

	/* LOGO	*/

	$wp_customize->add_setting( 'pine_nuts_logo', array('sanitize_callback' => 'esc_url_raw'));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(

	      	'label'    => __( 'Logo', 'pine-nuts' ),

	      	'section'  => 'pine_nuts_general_section',

	      	'settings' => 'pine_nuts_logo',

			'priority'    => 1,

	)));

	/* COPYRIGHT */

	$wp_customize->add_setting( 'pine_nuts_copyright', array('sanitize_callback' => 'pine_nuts_sanitize_text','default' => __('BananaCoding','pine-nuts')));

	$wp_customize->add_control( 'pine_nuts_copyright', array(

			'label'    => __( 'Copyright', 'pine-nuts' ),

	      	'section'  => 'pine_nuts_general_section',

	      	'settings' => 'pine_nuts_copyright',

			'priority'    => 2,

	));

	/* Footer title */

	$wp_customize->add_setting( 'pine_nuts_footer_title', array('sanitize_callback' => 'pine_nuts_sanitize_text','default' => __('Footer Title','pine-nuts')));

	$wp_customize->add_control( 'pine_nuts_footer_title', array(

			'label'    => __( 'Footer title', 'pine-nuts' ),

	      	'section'  => 'pine_nuts_general_section',

	      	'settings' => 'pine_nuts_footer_title',

			'priority'    => 3,

	));

	/* Footer subtitle */

	$wp_customize->add_setting( 'pine_nuts_footer_subtitle', array('sanitize_callback' => 'pine_nuts_sanitize_text','default' => __('You can add here a text. For that, please go in the Admin Area, Customizer, "General options" <br/> <br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dapibus, eros at accumsan auctor, felis eros condimentum quam, non porttitor est urna vel neque.  <br/> <br/>Maecenas non tellus vitae augue tempor venenatis. Mauris ac tincidunt dolor, id feugiat odio. Mauris egestas ligula sit amet lorem condimentum ultrices','pine-nuts')));

	$wp_customize->add_control( 'pine_nuts_footer_subtitle', array(

			'label'    => __( 'Footer subtitle', 'pine-nuts' ),

	      	'section'  => 'pine_nuts_general_section',

	      	'settings' => 'pine_nuts_footer_subtitle',

			'priority'    => 4,

	));

	/* facebook */

	$wp_customize->add_setting( 'pine_nuts_socials_facebook', array('sanitize_callback' => 'esc_url_raw','default' => '#'));

	$wp_customize->add_control( 'pine_nuts_socials_facebook', array(

			'label'    => __( 'Facebook link', 'pine-nuts' ),

	      	'section'  => 'pine_nuts_general_section',

	      	'settings' => 'pine_nuts_socials_facebook',

			'priority'    => 5,

	));

	/* twitter */

	$wp_customize->add_setting( 'pine_nuts_socials_twitter', array('sanitize_callback' => 'esc_url_raw','default' => '#'));

	$wp_customize->add_control( 'pine_nuts_socials_twitter', array(

			'label'    => __( 'Twitter link', 'pine-nuts' ),

	      	'section'  => 'pine_nuts_general_section',

	      	'settings' => 'pine_nuts_socials_twitter',

			'priority'    => 6,

	));

	/* linkedin */

	$wp_customize->add_setting( 'pine_nuts_socials_linkedin', array('sanitize_callback' => 'esc_url_raw','default' => '#'));

	$wp_customize->add_control( 'pine_nuts_socials_linkedin', array(

			'label'    => __( 'Linkedin link', 'pine-nuts' ),

	      	'section'  => 'pine_nuts_general_section',

	      	'settings' => 'pine_nuts_socials_linkedin',

			'priority'    => 7,

	));

	/* behance */

	$wp_customize->add_setting( 'pine_nuts_socials_behance', array('sanitize_callback' => 'esc_url_raw','default' => '#'));

	$wp_customize->add_control( 'pine_nuts_socials_behance', array(

			'label'    => __( 'Behance link', 'pine-nuts' ),

	      	'section'  => 'pine_nuts_general_section',

	      	'settings' => 'pine_nuts_socials_behance',

			'priority'    => 8,

	));

	/* dribbble */

	$wp_customize->add_setting( 'pine_nuts_socials_dribbble', array('sanitize_callback' => 'esc_url_raw','default' => '#'));

	$wp_customize->add_control( 'pine_nuts_socials_dribbble', array(

			'label'    => __( 'Dribbble link', 'pine-nuts' ),

	      	'section'  => 'pine_nuts_general_section',

	      	'settings' => 'pine_nuts_socials_dribbble',

			'priority'    => 9,

	));

	/* g+ */

	$wp_customize->add_setting( 'pine_nuts_socials_gplus', array('sanitize_callback' => 'esc_url_raw','default' => '#'));

	$wp_customize->add_control( 'pine_nuts_socials_gplus', array(

			'label'    => __( 'Google plus link', 'pine-nuts' ),

	      	'section'  => 'pine_nuts_general_section',

	      	'settings' => 'pine_nuts_socials_gplus',

			'priority'    => 10,

	));


	/*****************************************************/

    /**************	BIG TITLE SECTION *******************/

	/****************************************************/

	$wp_customize->add_section( 'pine_nuts_bigtitle_section' , array(

			'title'       => __( 'Big title section', 'pine-nuts' ),

    	  	'priority'    => 51

	));



	/* show/hide */

	$wp_customize->add_setting( 'pine_nuts_bigtitle_show', array('sanitize_callback' => 'pine_nuts_sanitize_text'));

    $wp_customize->add_control(

		'pine_nuts_bigtitle_show',

		array(

			'type' => 'checkbox',

			'label' => __('Hide big title section?','pine-nuts'),

			'section' => 'pine_nuts_bigtitle_section',

			'priority'    => 1,

		)

	);

	/* title */

	$wp_customize->add_setting( 'pine_nuts_bigtitle_title', array('sanitize_callback' => 'pine_nuts_sanitize_text','default' => __('PINE NUTS','pine-nuts')));

	$wp_customize->add_control( 'pine_nuts_bigtitle_title', array(

			'label'    => __( 'Title', 'pine-nuts' ),

	      	'section'  => 'pine_nuts_bigtitle_section',

	      	'settings' => 'pine_nuts_bigtitle_title',

			'priority'    => 2,

	));

	/* sub title */

	$wp_customize->add_setting( 'pine_nuts_bigtitle_subtitle', array('sanitize_callback' => 'pine_nuts_sanitize_text','default' => __('Pine nuts are the edible seeds of pines.','pine-nuts')));

	$wp_customize->add_control( 'pine_nuts_bigtitle_subtitle', array(

			'label'    => __( 'SubTitle', 'pine-nuts' ),

	      	'section'  => 'pine_nuts_bigtitle_section',

	      	'settings' => 'pine_nuts_bigtitle_subtitle',

			'priority'    => 3,

	));

	/* menu name */

	$wp_customize->add_setting( 'pine_nuts_home_menu', array('sanitize_callback' => 'pine_nuts_sanitize_text','default' => __('home','pine-nuts')));

	$wp_customize->add_control( 'pine_nuts_home_menu', array(

			'label'    => __( 'Menu title', 'pine-nuts' ),

	      	'section'  => 'pine_nuts_bigtitle_section',

	      	'settings' => 'pine_nuts_home_menu',

			'priority'    => 4,

	));

	/************************************/

	/******* ABOUT US SECTION ***********/

	/************************************/

	$wp_customize->add_section( 'pine_nuts_aboutus_section' , array(

			'title'       => __( 'About us section', 'pine-nuts' ),

    	  	'priority'    => 52

	));

	/* about us show/hide */

	$wp_customize->add_setting( 'pine_nuts_aboutus_show', array('sanitize_callback' => 'pine_nuts_sanitize_text'));

    $wp_customize->add_control(

		'pine_nuts_aboutus_show',

		array(

			'type' => 'checkbox',

			'label' => __('Hide about us section?','pine-nuts'),

			'section' => 'pine_nuts_aboutus_section',

			'priority'    => 1,

		)

	);

	/* title */

	$wp_customize->add_setting( 'pine_nuts_aboutus_title', array('sanitize_callback' => 'pine_nuts_sanitize_text','default' => __('About Us','pine-nuts')));

	$wp_customize->add_control( 'pine_nuts_aboutus_title', array(

				'label'    => __( 'Title', 'pine-nuts' ),

				'section'  => 'pine_nuts_aboutus_section',

				'settings' => 'pine_nuts_aboutus_title',

				'priority'    => 2,

	));

	/* subtitle */

	$wp_customize->add_setting( 'pine_nuts_aboutus_subtitle', array('sanitize_callback' => 'pine_nuts_sanitize_text','default' => __('Add a subtitle in Customizer, "About us section"','pine-nuts')));

	$wp_customize->add_control( 'pine_nuts_aboutus_subtitle', array(

			'label'    => __( 'Subtitle', 'pine-nuts' ),

	      	'section'  => 'pine_nuts_aboutus_section',

	      	'settings' => 'pine_nuts_aboutus_subtitle',

			'priority'    => 3,

	));

	/* text */

	$wp_customize->add_setting( 'pine_nuts_aboutus_text', array('sanitize_callback' => 'pine_nuts_sanitize_text','default' => __('You can add here a text. For that, please go in the Admin Area, Customizer, "About us section" <br/> <br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dapibus, eros at accumsan auctor, felis eros condimentum quam, non porttitor est urna vel neque.  <br/> <br/>Maecenas non tellus vitae augue tempor venenatis. Mauris ac tincidunt dolor, id feugiat odio. Mauris egestas ligula sit amet lorem condimentum ultrices','pine-nuts')));

	$wp_customize->add_control( 'pine_nuts_aboutus_text', array(

			'label'    => __( 'Text', 'pine-nuts' ),

	      	'section'  => 'pine_nuts_aboutus_section',

	      	'settings' => 'pine_nuts_aboutus_text',

			'priority'    => 4,

	));

	/* menu name */

	$wp_customize->add_setting( 'pine_nuts_about_menu', array('sanitize_callback' => 'pine_nuts_sanitize_text','default' => __('about','pine-nuts')));

	$wp_customize->add_control( 'pine_nuts_about_menu', array(

			'label'    => __( 'Menu title', 'pine-nuts' ),

	      	'section'  => 'pine_nuts_aboutus_section',

	      	'settings' => 'pine_nuts_about_menu',

			'priority'    => 5,

	));

	/***********************************************/

	/************** PORTFOLIO SECTION ***************/

	/***********************************************/

	$wp_customize->add_section( 'pine_nuts_portfolio_section' , array(

			'title'       => __( 'Portfolio section', 'pine-nuts' ),

    	  	'priority'    => 53,

    	  	'description' => __('Please select category for show on Portfolio section','pine-nuts'),

	));

	/* portfolio show/hide */

	$wp_customize->add_setting( 'pine_nuts_portfolio_show', array('sanitize_callback' => 'pine_nuts_sanitize_text'));

    $wp_customize->add_control(

		'pine_nuts_portfolio_show',

		array(

			'type' => 'checkbox',

			'label' => __('Hide portfolio section?','pine-nuts'),

			'section' => 'pine_nuts_portfolio_section',

			'priority'    => 1,

		)

	);

	/* title */

	$wp_customize->add_setting( 'pine_nuts_portfolio_title', array('sanitize_callback' => 'pine_nuts_sanitize_text','default' => __('Portfolio','pine-nuts')));

	$wp_customize->add_control( 'pine_nuts_portfolio_title', array(

				'label'    => __( 'Title', 'pine-nuts' ),

				'section'  => 'pine_nuts_portfolio_section',

				'settings' => 'pine_nuts_portfolio_title',

				'priority'    => 2,

	));

	/* Category */

	$wp_customize->add_setting( 'pine_nuts_portfolio_category', array('sanitize_callback' => 'pine_nuts_sanitize_text'));

	$wp_customize->add_control(
	    new WP_Customize_Category_Control(

	        $wp_customize,

	        'pine_nuts_portfolio_category',

	        array(
	            'label'    => 'Category',

	            'settings' => 'pine_nuts_portfolio_category',

	            'section'  => 'pine_nuts_portfolio_section',

	            'priority'    => 3,
	        )
	    )
	);

	/* menu name */

	$wp_customize->add_setting( 'pine_nuts_portfolio_menu', array('sanitize_callback' => 'pine_nuts_sanitize_text','default' => __('portfolio','pine-nuts')));

	$wp_customize->add_control( 'pine_nuts_portfolio_menu', array(

			'label'    => __( 'Menu title', 'pine-nuts' ),

	      	'section'  => 'pine_nuts_portfolio_section',

	      	'settings' => 'pine_nuts_portfolio_menu',

			'priority'    => 4,

	));

	/***********************************************/

	/************** BLOG SECTION ***************/

	/***********************************************/

	$wp_customize->add_section( 'pine_nuts_blog_section' , array(

			'title'       => __( 'Blog section', 'pine-nuts' ),

    	  	'priority'    => 54,

	));

	/* blog show/hide */

	$wp_customize->add_setting( 'pine_nuts_blog_show', array('sanitize_callback' => 'pine_nuts_sanitize_text'));

    $wp_customize->add_control(

		'pine_nuts_blog_show',

		array(

			'type' => 'checkbox',

			'label' => __('Hide blog section?','pine-nuts'),

			'section' => 'pine_nuts_blog_section',

			'priority'    => 1,

		)

	);

	/* title */

	$wp_customize->add_setting( 'pine_nuts_blog_title', array('sanitize_callback' => 'pine_nuts_sanitize_text','default' => __('Blog','pine-nuts')));

	$wp_customize->add_control( 'pine_nuts_blog_title', array(

				'label'    => __( 'Title', 'pine-nuts' ),

				'section'  => 'pine_nuts_blog_section',

				'settings' => 'pine_nuts_blog_title',

				'priority'    => 2,

	));

	/* Category */

	$wp_customize->add_setting( 'pine_nuts_blog_category', array('sanitize_callback' => 'pine_nuts_sanitize_text'));

	$wp_customize->add_control(
	    new WP_Customize_Category_Control(

	        $wp_customize,

	        'pine_nuts_blog_category',

	        array(
	            'label'    => 'Category',

	            'settings' => 'pine_nuts_blog_category',

	            'section'  => 'pine_nuts_blog_section',

	            'priority'    => 3,
	        )
	    )
	);

	/* menu name */

	$wp_customize->add_setting( 'pine_nuts_blog_menu', array('sanitize_callback' => 'pine_nuts_sanitize_text','default' => __('blog','pine-nuts')));

	$wp_customize->add_control( 'pine_nuts_blog_menu', array(

			'label'    => __( 'Menu title', 'pine-nuts' ),

	      	'section'  => 'pine_nuts_blog_section',

	      	'settings' => 'pine_nuts_blog_menu',

			'priority'    => 4,

	));

	/***********************************************/

	/************** COUTACT US SECTION ***************/

	/***********************************************/

	$wp_customize->add_section( 'pine_nuts_contact_us_section' , array(

			'title'       => __( 'Coutact us section', 'pine-nuts' ),

    	  	'priority'    => 55,

	));

	/* contact us show/hide */

	$wp_customize->add_setting( 'pine_nuts_contact_us_show', array('sanitize_callback' => 'pine_nuts_sanitize_text'));

    $wp_customize->add_control(

		'pine_nuts_contact_us_show',

		array(

			'type' => 'checkbox',

			'label' => __('Hide contact us section?','pine-nuts'),

			'section' => 'pine_nuts_contact_us_section',

			'priority'    => 1,

		)

	);

	/* title */

	$wp_customize->add_setting( 'pine_nuts_contact_us_title', array('sanitize_callback' => 'pine_nuts_sanitize_text','default' => __('Say Hello!','pine-nuts')));

	$wp_customize->add_control( 'pine_nuts_contact_us_title', array(

				'label'    => __( 'Title', 'pine-nuts' ),

				'section'  => 'pine_nuts_contact_us_section',

				'settings' => 'pine_nuts_contact_us_title',

				'priority'    => 2,

	));


	/* email show/hide */

	$wp_customize->add_setting( 'pine_nuts_contact_us_email_show', array('sanitize_callback' => 'pine_nuts_sanitize_text'));

    $wp_customize->add_control(

		'pine_nuts_contact_us_email_show', array(

			'type' => 'checkbox',

			'label' => __('Hide contact us email?','pine-nuts'),

			'section' => 'pine_nuts_contact_us_section',

			'priority'    => 3,

		)

	);

	/* email address */

	$wp_customize->add_setting( 'pine_nuts_contact_us_email', array('sanitize_callback' => 'pine_nuts_sanitize_text','default' => __('test@test.com','pine-nuts')));

	$wp_customize->add_control( 'pine_nuts_contact_us_email', array(

			'label'    => __( 'Email address', 'pine-nuts' ),

	      	'section'  => 'pine_nuts_contact_us_section',

	      	'settings' => 'pine_nuts_contact_us_email',

			'priority'    => 4,

	));

	/* address show/hide */

	$wp_customize->add_setting( 'pine_nuts_contact_us_address_show', array('sanitize_callback' => 'pine_nuts_sanitize_text'));

    $wp_customize->add_control(

		'pine_nuts_contact_us_address_show', array(

			'type' => 'checkbox',

			'label' => __('Hide contact us address?','pine-nuts'),

			'section' => 'pine_nuts_contact_us_section',

			'priority'    => 5,

		)

	);

	/* address */

	$wp_customize->add_setting( 'pine_nuts_contact_us_address', array('sanitize_callback' => 'pine_nuts_sanitize_text','default' => __('Address: 34/12 Moo 5 Canal Road, Suthep Chiang Mai, Thailand 50200','pine-nuts')));

	$wp_customize->add_control( 'pine_nuts_contact_us_address', array(

			'label'    => __( 'Address', 'pine-nuts' ),

	      	'section'  => 'pine_nuts_contact_us_section',

	      	'settings' => 'pine_nuts_contact_us_address',

			'priority'    => 6,

	));

	/* phone show/hide */

	$wp_customize->add_setting( 'pine_nuts_contact_us_phone_show', array('sanitize_callback' => 'pine_nuts_sanitize_text'));

    $wp_customize->add_control(

		'pine_nuts_contact_us_phone_show', array(

			'type' => 'checkbox',

			'label' => __('Hide contact us phone?','pine-nuts'),

			'section' => 'pine_nuts_contact_us_section',

			'priority'    => 7,

		)

	);

	/* phone */

	$wp_customize->add_setting( 'pine_nuts_contact_us_phone', array('sanitize_callback' => 'pine_nuts_sanitize_text','default' => __('Tel: +11 111 1111','pine-nuts')));

	$wp_customize->add_control( 'pine_nuts_contact_us_phone', array(

			'label'    => __( 'Address', 'pine-nuts' ),

	      	'section'  => 'pine_nuts_contact_us_section',

	      	'settings' => 'pine_nuts_contact_us_phone',

			'priority'    => 8,

	));

	/* menu name */

	$wp_customize->add_setting( 'pine_nuts_contact_us_menu', array('sanitize_callback' => 'pine_nuts_sanitize_text','default' => __('contact us','pine-nuts')));

	$wp_customize->add_control( 'pine_nuts_contact_us_menu', array(

			'label'    => __( 'Menu title', 'pine-nuts' ),

	      	'section'  => 'pine_nuts_contact_us_section',

	      	'settings' => 'pine_nuts_contact_us_menu',

			'priority'    => 9,

	));

}
add_action( 'customize_register', 'pine_nuts_customize_register' );


function pine_nuts_sanitize_text( $input ) {

    return wp_kses_post( force_balance_tags( $input ) );

}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function pine_nuts_customize_preview_js() {
	wp_enqueue_script( 'pine_nuts_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'pine_nuts_customize_preview_js' );
