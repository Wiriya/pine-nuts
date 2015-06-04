
<section id="section5" class="contact scrollspy">
    <div class="container">
        <div class="row">
            <div class="col m12">
                <div class="address">
                    <?php 

                    $pine_nuts_contact_us_title = get_theme_mod('pine_nuts_contact_us_title',__('Say Hello!','pine-nuts'));
                    
                    if( !empty($pine_nuts_contact_us_title) ):

                        echo '<h1>'.__($pine_nuts_contact_us_title,'pine-nuts').'</h1>';

                    endif;

                    ?>
                    <br>
                    <?php 

                    $pine_nuts_contact_us_email_show = get_theme_mod('pine_nuts_contact_us_email_show');

                    if( isset($pine_nuts_contact_us_email_show) && $pine_nuts_contact_us_email_show != 1 ):

                        $pine_nuts_contact_us_email = get_theme_mod('pine_nuts_contact_us_email',__('test@test.com','pine-nuts'));

                        echo '<h5>Send us an email to <a href="mailto:'.__($pine_nuts_contact_us_email,'pine-nuts').'">'.__($pine_nuts_contact_us_email,'pine-nuts').'</a></h5>';

                    endif;

                    ?>

                    <?php 

                    $pine_nuts_contact_us_address_show = get_theme_mod('pine_nuts_contact_us_address_show');

                    if( isset($pine_nuts_contact_us_address_show) && $pine_nuts_contact_us_address_show != 1 ):

                        $pine_nuts_contact_us_address = get_theme_mod('pine_nuts_contact_us_address',__('Address: 34/12 Moo 5 Canal Road, Suthep Chiang Mai, Thailand 50200','pine-nuts'));

                        if( isset($pine_nuts_contact_us_email_show) && $pine_nuts_contact_us_email_show != 1 ):
                            echo '<h5>or</h5>';
                        else:
                            echo '<h5></h5>';
                        endif;

                        echo '<h5>'.__($pine_nuts_contact_us_address,'pine-nuts').'</h5>';

                    endif;

                    ?>

                    <?php 

                    $pine_nuts_contact_us_phone_show = get_theme_mod('pine_nuts_contact_us_phone_show');

                    if( isset($pine_nuts_contact_us_phone_show) && $pine_nuts_contact_us_phone_show != 1 ):

                        $pine_nuts_contact_us_phone = get_theme_mod('pine_nuts_contact_us_phone',__('Tel: +11 111 1111','pine-nuts'));

                        if( isset($pine_nuts_contact_us_email_show) && $pine_nuts_contact_us_email_show != 1 ):
                            echo '<h5>or</h5>';
                        elseif( isset($pine_nuts_contact_us_address_show) && $pine_nuts_contact_us_address_show != 1 ):
                            echo '<h5>or</h5>';
                        else:
                            echo '<h5></h5>';
                        endif;

                        echo '<h5>'.__($pine_nuts_contact_us_phone,'pine-nuts').'</h5>';

                    endif;

                    ?>
                </div>
            </div>
        </div>
    </div>
</section>