
<?php

get_header(); ?>

         <?php 
            if ( get_option( 'show_on_front' ) == 'page' ){
                ?>
                <?php if ( have_posts() ) : ?>

                    <?php /* Start the Loop */ ?>

                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php

                            /* Include the Post-Format-specific template for the content.

                             * If you want to override this in a child theme, then include a file

                             * called content-___.php (where ___ is the Post Format name) and that will be used instead.

                             */

                            get_template_part( 'content', get_post_format() );

                        ?>

                    <?php endwhile; ?>

                    <?php zerif_paging_nav(); ?>

                <?php else : ?>

                    <?php get_template_part( 'content', 'none' ); ?>

                <?php endif; ?>
            <?php } else { ?>

                <?php

                    $pine_nuts_bigtitle_show = get_theme_mod('pine_nuts_bigtitle_show');

                    if( isset($pine_nuts_bigtitle_show) && $pine_nuts_bigtitle_show != 1 ):
                        include get_template_directory() . "/sections/big_title.php";
                    endif;

                    /* About Us*/

                    $pine_nuts_aboutus_show = get_theme_mod('pine_nuts_aboutus_show');

                    if( isset($pine_nuts_aboutus_show) && $pine_nuts_aboutus_show != 1 ):
                        include get_template_directory() . "/sections/about_us.php";
                    endif;

                    /* Portfolio */

                    $pine_nuts_portfolio_show = get_theme_mod('pine_nuts_portfolio_show');

                    if( isset($pine_nuts_portfolio_show) && $pine_nuts_portfolio_show != 1 ):
                        include get_template_directory() . "/sections/portfolio.php";
                    endif;

                    /* Blog */

                    $pine_nuts_blog_show = get_theme_mod('pine_nuts_blog_show');

                    if( isset($pine_nuts_blog_show) && $pine_nuts_blog_show != 1 ):
                        include get_template_directory() . "/sections/blogs.php";
                    endif;

                    /* Contact Us */

                    $pine_nuts_contact_us_show = get_theme_mod('pine_nuts_contact_us_show');

                    if( isset($pine_nuts_contact_us_show) && $pine_nuts_contact_us_show != 1 ):
                        include get_template_directory() . "/sections/contact_us.php";
                    endif;

                ?> 

            <?php }
            ?> 

<?php get_footer(); ?>