<?php
	echo '<header id="section1" class="intro scrollspy">';
		echo '<div class="intro-body wow fadeInUp animated">';
            echo '<div class="row ">';
                echo '<div class="col s8 offset-s2">';
                    echo '<div class="brand-bg">';

	$pine_nuts_bigtitle_title = get_theme_mod('pine_nuts_bigtitle_title',__('PINE NUTS','pine-nuts'));
	$pine_nuts_bigtitle_subtitle = get_theme_mod('pine_nuts_bigtitle_subtitle',__('Pine nuts are the edible seeds of pines.','pine-nuts'));

	if( !empty($pine_nuts_bigtitle_title) ):

		echo '<h1 class="brand-heading">'.__($pine_nuts_bigtitle_title,'pine-nuts').'</h1>';		

	endif;

	if( !empty($pine_nuts_bigtitle_subtitle) ):

		echo '<p class="intro-text">'.__($pine_nuts_bigtitle_subtitle,'pine-nuts').'</p>';

	endif;

					echo '</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
	echo '</header>';


	echo '<div class="clear"></div>';

?>