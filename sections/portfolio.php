<?php 
    // Get category ID from Theme Customizer
    $catID = get_theme_mod('pine_nuts_portfolio_category');

    $args = array( 'cat' => $catID, 'order' => 'DESC');

    $query = new WP_Query( $args );
    $total_posts = $query->post_count;
    if ($total_posts>0) {
        ?>
    <section id="section3" class="portfolio scrollspy">
        <div class="container">
            <div class="row">
                <div class="col m12">

                    <?php 

                    $pine_nuts_portfolio_title = get_theme_mod('pine_nuts_portfolio_title',__('Portfolio','pine-nuts'));
                    
                    if( !empty($pine_nuts_portfolio_title) ):

                        echo '<h1>'.__($pine_nuts_portfolio_title,'pine-nuts').'</h1>';

                    endif;

                    ?>

                    <div class="divider"></div>
                    <br>

                    <?php 

                    if( $catID == '' || $catID == 0){
                        echo '<h2>Please choose category first.</h2>';
                    }else{

                        // The loop
                        if ( $query->have_posts() ) {
                            $i= 0;
                            while ( $query->have_posts() ) : $query->the_post(); 
                                $i++;
                                if($i%3==0){
                                    echo '<div class="col m4">';
                                    echo '<div class="card">';
                                    echo '<div class="card-image waves-effect waves-block waves-light">';
                                        if ( has_post_thumbnail() ) :
                                            echo '<a href="';
                                            the_permalink();
                                            echo '" title="';
                                            the_title();
                                            echo '">';
                                            the_post_thumbnail();
                                            echo '</a>';
                                        else:
                                            echo '<img src="'.esc_url( get_template_directory_uri() ).'/inc/img/logo.png">';
                                        endif;
                                    echo '</div>';
                                    echo '<div class="card-content">';
                                        echo '<a href="';
                                        the_permalink();
                                        echo '" title="';
                                        the_title();
                                        echo '">';
                                        echo '<span class="card-title activator grey-text text-darken-4">';
                                        the_title();
                                        echo ' </span>';
                                        echo '</a>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                    /*break;*/
                                } else if($i%3==1){
                                    echo '<div class="row wow fadeInRight">';
                                    echo '<div class="col m4">';
                                    echo '<div class="card">';
                                    echo '<div class="card-image waves-effect waves-block waves-light">';
                                        if ( has_post_thumbnail() ) :
                                            echo '<a href="';
                                            the_permalink();
                                            echo '" title="';
                                            the_title();
                                            echo '">';
                                            the_post_thumbnail();
                                            echo '</a>';
                                        else:
                                            echo '<img src="'.esc_url( get_template_directory_uri() ).'/inc/img/logo.png">';
                                        endif;
                                    echo '</div>';
                                    echo '<div class="card-content">';
                                        echo '<a href="';
                                        the_permalink();
                                        echo '" title="';
                                        the_title();
                                        echo '">';
                                        echo '<span class="card-title activator grey-text text-darken-4">';
                                        the_title();
                                        echo ' </span>';
                                        echo '</a>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                } else if($i%3==2){
                                    echo '<div class="col m4">';
                                    echo '<div class="card">';
                                    echo '<div class="card-image waves-effect waves-block waves-light">';
                                        if ( has_post_thumbnail() ) :
                                            echo '<a href="';
                                            the_permalink();
                                            echo '" title="';
                                            the_title();
                                            echo '">';
                                            the_post_thumbnail();
                                            echo '</a>';
                                        else:
                                            echo '<img src="'.esc_url( get_template_directory_uri() ).'/inc/img/logo.png">';
                                        endif;
                                    echo '</div>';
                                    echo '<div class="card-content">';
                                        echo '<a href="';
                                        the_permalink();
                                        echo '" title="';
                                        the_title();
                                        echo '">';
                                        echo '<span class="card-title activator grey-text text-darken-4">';
                                        the_title();
                                        echo ' </span>';
                                        echo '</a>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                                
                            endwhile;
                        } // if

                    }

                    ?>

                </div>
            </div>
        </div>
    </section>
<?php }else{ ?>
    <h1>Please select another category</h1>
<?php } ?>