<section id="section2" class="about-us scrollspy">
    <div class="container">
        <div class="row">
            <div class="col m4">
                <p></p>
            </div>
            <div class="col m8 wow fadeIn">

                <!-- SECTION TITLE -->

                <?php 

                    $pine_nuts_aboutus_title = get_theme_mod('pine_nuts_aboutus_title',__('About Us','pine-nuts'));
                    
                    if( !empty($pine_nuts_aboutus_title) ):

                        echo '<h1>'.__($pine_nuts_aboutus_title,'pine-nuts').'</h1>';

                    endif;

                ?>

                <div class="divider"></div>

                <!-- SHORT DESCRIPTION ABOUT THE SECTION -->

                <?php

                    $pine_nuts_aboutus_subtitle = get_theme_mod('pine_nuts_aboutus_subtitle',__('Add a subtitle in Customizer, "About us section"','pine-nuts'));

                    if( !empty($pine_nuts_aboutus_subtitle) ):

                        echo '<h3>';

                            echo __($pine_nuts_aboutus_subtitle,'pine-nuts');

                        echo '</h3>';

                    endif;

                    $pine_nuts_aboutus_text = get_theme_mod('pine_nuts_aboutus_text','You can add here a large piece of text. For that, please go in the Admin Area, Customizer, "About us section" <br/> <br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dapibus, eros at accumsan auctor, felis eros condimentum quam, non porttitor est urna vel neque.  <br/> <br/>Maecenas non tellus vitae augue tempor venenatis. Mauris ac tincidunt dolor, id feugiat odio. Mauris egestas ligula sit amet lorem condimentum ultrices');


                    if( !empty($pine_nuts_aboutus_text) ):

                        echo '<p>';

                            echo __($pine_nuts_aboutus_text,'pine-nuts');

                        echo '</p>';

                    endif;

                ?>
            </div>
        </div>
    </div>
</section>