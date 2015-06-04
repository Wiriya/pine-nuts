<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Pine nuts
 */
?>

	<footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                	<?php 
                		$pine_nuts_footer_title = get_theme_mod('pine_nuts_footer_title',__('Footer Title','pine-nuts'));

	            		if( !empty($pine_nuts_footer_title) ):

	                        echo '<h5 class="white-text">';

	                            echo __($pine_nuts_footer_title,'pine-nuts');

	                        echo '</h5>';

	                    endif;

	                    $pine_nuts_footer_subtitle = get_theme_mod('pine_nuts_footer_subtitle',__('You can add here a text. For that, please go in the Admin Area, Customizer, "General options" <br/> <br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dapibus, eros at accumsan auctor, felis eros condimentum quam, non porttitor est urna vel neque.  <br/> <br/>Maecenas non tellus vitae augue tempor venenatis. Mauris ac tincidunt dolor, id feugiat odio. Mauris egestas ligula sit amet lorem condimentum ultrices','pine-nuts'));

	            		if( !empty($pine_nuts_footer_subtitle) ):

	                        echo '<p>';

	                            echo __($pine_nuts_footer_subtitle,'pine-nuts');

	                        echo '</p>';

	                    endif;
                	?>
            
                </div>
                <div class="col l4 offset-l2 s12">
                    <div class="social">
                        <?php 
                            $pine_nuts_socials_facebook = get_theme_mod('pine_nuts_socials_facebook',__('#','pine-nuts')); 

                            if( !empty($pine_nuts_socials_facebook) ):
                                echo  '<a class="waves-effect waves-light btn-social" href="'.$pine_nuts_socials_facebook.'"><i class="fa fa-facebook-official fa-3x"></i></a>';
                            endif;

                            $pine_nuts_socials_behance = get_theme_mod('pine_nuts_socials_behance',__('#','pine-nuts')); 

                            if( !empty($pine_nuts_socials_behance) ):
                                echo  '<a class="waves-effect waves-light btn-social" href="'.$pine_nuts_socials_behance.'"><i class="fa fa-behance fa-3x"></i></a>';
                            endif;

                            $pine_nuts_socials_dribbble = get_theme_mod('pine_nuts_socials_dribbble',__('#','pine-nuts')); 

                            if( !empty($pine_nuts_socials_dribbble) ):
                                echo  '<a class="waves-effect waves-light btn-social" href="'.$pine_nuts_socials_dribbble.'"><i class="fa fa-dribbble fa-3x"></i></a>';
                            endif;

                            $pine_nuts_socials_gplus = get_theme_mod('pine_nuts_socials_gplus',__('#','pine-nuts')); 

                            if( !empty($pine_nuts_socials_gplus) ):
                                echo  '<a class="waves-effect waves-light btn-social" href="'.$pine_nuts_socials_gplus.'"><i class="fa fa-google-plus fa-3x"></i></a>';
                            endif;

                            $pine_nuts_socials_linkedin = get_theme_mod('pine_nuts_socials_linkedin',__('#','pine-nuts')); 

                            if( !empty($pine_nuts_socials_linkedin) ):
                                echo  '<a class="waves-effect waves-light btn-social" href="'.$pine_nuts_socials_linkedin.'"><i class="fa fa-linkedin fa-3x"></i></a>';
                            endif;

                            $pine_nuts_socials_twitter = get_theme_mod('pine_nuts_socials_twitter',__('#','pine-nuts')); 

                            if( !empty($pine_nuts_socials_twitter) ):
                                echo  '<a class="waves-effect waves-light btn-social" href="'.$pine_nuts_socials_twitter.'"><i class="fa fa-twitter fa-3x"></i></a>';
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
            	<?php 
            		$pine_nuts_copyright = get_theme_mod('pine_nuts_copyright',__('BananaCoding','pine-nuts'));

            		if( !empty($pine_nuts_copyright) ):

                        echo '&copy; '.date('Y').' Copyright ';
                        echo __($pine_nuts_copyright,'pine-nuts');

                    endif;
            	?>
            </div>
        </div>
    </footer>


<?php wp_footer(); ?>

</body>
</html>
