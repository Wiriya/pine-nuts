
<?php 
    // Get category ID from Theme Customizer
    $catID = get_theme_mod('pine_nuts_blog_category');

    $args = array( 'cat' => $catID, 'order' => 'DESC');

    $query = new WP_Query( $args );
    $total_posts = $query->post_count;
    if ($total_posts>0) {
        ?>

    <section id="section4" class="blogs scrollspy">
        <div class="container">
            <div class="row">
                <div class="col s12">

                    <?php 

                    $pine_nuts_blog_title = get_theme_mod('pine_nuts_blog_title',__('Blog','pine-nuts'));
                    
                    if( !empty($pine_nuts_blog_title) ):

                        echo '<h1>'.__($pine_nuts_blog_title,'pine-nuts').'</h1>';

                    endif;

                    ?>

                    <div class="divider"></div>
                    <br>


                    <?php 

                    if( $catID == '' || $catID == 0 ){
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
                                    echo '<div class="card-content">';
                                    echo '<p class="blog-date">';
                                    $category = get_the_category();
                                    echo $category[0]->cat_name;
                                    echo ' / <b>';
                                    the_date('d.m.Y');
                                    echo '</b></p>';
                                        echo '<a href="';
                                        the_permalink();
                                        echo '" title="';
                                        the_title();
                                        echo '">';
                                        echo '<span class="card-title activator grey-text text-darken-4">';
                                        the_title();
                                        echo ' </span>';
                                        echo '</a>';
                                        echo '<p>';
                                        the_content('Read more...');
                                        echo '</p>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                    break;
                                } else if($i%3==1){
                                    echo '<div class="row wow fadeInUp">';
                                    echo '<div class="col m4">';
                                    echo '<div class="card">';
                                    echo '<div class="card-content">';
                                    echo '<p class="blog-date">';
                                    $category = get_the_category();
                                    echo $category[0]->cat_name;
                                    echo ' / <b>';
                                    the_date('d.m.Y');
                                    echo '</b></p>';
                                        echo '<a href="';
                                        the_permalink();
                                        echo '" title="';
                                        the_title();
                                        echo '">';
                                        echo '<span class="card-title activator grey-text text-darken-4">';
                                        the_title();
                                        echo ' </span>';
                                        echo '</a>';
                                        echo '<p>';
                                        the_content('Read more...');
                                        echo '</p>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                } else if($i%3==2){
                                    echo '<div class="col m4">';
                                    echo '<div class="card">';
                                    echo '<div class="card-content">';
                                    echo '<p class="blog-date">';
                                    $category = get_the_category();
                                    echo $category[0]->cat_name;
                                    echo ' / <b>';
                                    the_date('d.m.Y');
                                    echo '</b></p>';
                                        echo '<a href="';
                                        the_permalink();
                                        echo '" title="';
                                        the_title();
                                        echo '">';
                                        echo '<span class="card-title activator grey-text text-darken-4">';
                                        the_title();
                                        echo ' </span>';
                                        echo '</a>';
                                        echo '<p>';
                                        the_content('Read more...');
                                        echo '</p>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                            endwhile;
                        } // if

                    }
                    ?>
                    <div class="row wow fadeInUp">
                        <div class="col m4 offset-m4 view-all">

                        <?php 

                            if( $catID != '' && $catID != 0){
                                echo '<a class="waves-effect waves-orange btn-flat amber accent-2 white-text" href="index.php?cat='.$catID.'"><i class="mdi-navigation-arrow-forward right"></i>View all articles</a>';
                            }
                            
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
