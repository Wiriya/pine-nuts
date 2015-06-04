<?php /** * The header for our theme. * * Displays all of the <head> section and everything up till
<div id="content">
    * * @package Pine nuts */ ?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <!-- Font -->
        <link href='http://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <!--<div id="page" class="hfeed site">-->

            <div class="fixed-action-btn fixed-menu" style="top: 0px; left: 24px;">
                <a href="#" data-activates="nav-mobile" class="button-collapse top-nav"><i class="small mdi-navigation-menu"></i></a>
            </div>

            <ul id="nav-mobile" class="side-nav side-menu">
            <?php 
                
                $pine_nuts_logo = get_theme_mod('pine_nuts_logo');

                if(isset($pine_nuts_logo) && $pine_nuts_logo != ""):

                    echo '<li class="logo"><div class="brandlogo"><a id="logo-container" href="'.home_url().'" class="brand-logo"><img src="'.$pine_nuts_logo.'"></a></div></li>';
                else:

                    echo '<li class="logo"><div class="brandlogo"><a id="logo-container" href="'.home_url().'" class="brand-logo"><img src="'.get_template_directory_uri().'/inc/img/logo.png"></a></div></li>';

                endif;

                $pine_nuts_bigtitle_show = get_theme_mod('pine_nuts_bigtitle_show');

                if( isset($pine_nuts_bigtitle_show) && $pine_nuts_bigtitle_show != 1 ):

                    $pine_nuts_home_menu = get_theme_mod('pine_nuts_home_menu',__('home','pine-nuts'));

                    if( !empty($pine_nuts_home_menu) ):

                        if(is_front_page()):

                            echo '<li><a class="waves-effect waves-orange btn-flat" href="#section1">'.$pine_nuts_home_menu.'</a></li>'; 
                        
                        else:

                            echo '<li><a class="waves-effect waves-orange btn-flat" href="'.home_url().'">'.$pine_nuts_home_menu.'</a></li>';
                        endif;

                    endif;

                endif; 

                $pine_nuts_aboutus_show = get_theme_mod('pine_nuts_aboutus_show');

                if( isset($pine_nuts_aboutus_show) && $pine_nuts_aboutus_show != 1 ):

                    $pine_nuts_about_menu = get_theme_mod('pine_nuts_about_menu',__('about','pine-nuts'));

                    if( !empty($pine_nuts_about_menu) ):

                        if(is_front_page()):

                            echo '<li><a class="waves-effect waves-orange btn-flat" href="#section2">'.$pine_nuts_about_menu.'</a></li>';

                        else:

                            echo '<li><a class="waves-effect waves-orange btn-flat" href="'.home_url().'#section2">'.$pine_nuts_about_menu.'</a></li>';

                        endif;

                    endif;

                endif; 

                $pine_nuts_portfolio_show = get_theme_mod('pine_nuts_portfolio_show');

                if( isset($pine_nuts_portfolio_show) && $pine_nuts_portfolio_show != 1 ):

                    $pine_nuts_portfolio_menu = get_theme_mod('pine_nuts_portfolio_menu',__('portfolio','pine-nuts'));

                    if( !empty($pine_nuts_portfolio_menu) ):

                        if(is_front_page()):

                            echo '<li><a class="waves-effect waves-orange btn-flat" href="#section3">'.$pine_nuts_portfolio_menu.'</a></li>';

                        else:

                            echo '<li><a class="waves-effect waves-orange btn-flat" href="'.home_url().'#section3">'.$pine_nuts_portfolio_menu.'</a></li>';

                        endif;

                    endif;

                endif;

                $pine_nuts_blog_show = get_theme_mod('pine_nuts_blog_show');

                if( isset($pine_nuts_blog_show) && $pine_nuts_blog_show != 1 ):
                    
                   $pine_nuts_blog_menu = get_theme_mod('pine_nuts_blog_menu',__('blog','pine-nuts'));

                    if( !empty($pine_nuts_blog_menu) ):

                        if(is_front_page()):

                            echo '<li><a class="waves-effect waves-orange btn-flat" href="#section4">'.$pine_nuts_blog_menu.'</a></li>';

                        else:

                            echo '<li><a class="waves-effect waves-orange btn-flat" href="'.home_url().'#section4">'.$pine_nuts_blog_menu.'</a></li>';

                        endif;

                    endif; 

                endif;

                $pine_nuts_contact_us_show = get_theme_mod('pine_nuts_contact_us_show');

                if( isset($pine_nuts_contact_us_show) && $pine_nuts_contact_us_show != 1 ):
                    
                    $pine_nuts_contact_us_menu = get_theme_mod('pine_nuts_contact_us_menu',__('contact us','pine-nuts'));

                    if( !empty($pine_nuts_contact_us_menu) ):

                        if(is_front_page()):

                            echo '<li><a class="waves-effect waves-orange btn-flat" href="#section5">'.$pine_nuts_contact_us_menu.'</a></li>';

                        else:

                            echo '<li><a class="waves-effect waves-orange btn-flat" href="'.home_url().'#section5">'.$pine_nuts_contact_us_menu.'</a></li>';

                        endif;


                    endif;

                endif;
            ?>
            </ul>