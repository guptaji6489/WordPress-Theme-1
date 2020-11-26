<?php
/*
* This is to display header.
*/
?>
<!DOCTYPE html>
<html>
    <head> 
        <!-- this wp_head is to include all the stylesheet or link part  -->
       <?php wp_head() ?> 
       <style type="text/css">
            /* from this style you can change body background color */
            body{
                background: <?php echo get_theme_mod( 'harshit_body_bg_color' , '#fff') ?>
            }
            /* from this style you can change menu background color */
           .site-navigation{
                background: <?php echo get_theme_mod( 'harshit_nav_bg_color' , '#2ca358') ?>
            }
        </style>
    </head>
    <body>
        <div class="site-main">
            <header class="site-header">
                <div class="site-branding">
                    <!-- this function the_custom_logo is used to make or set custom logo in theme -->
                    <?php the_custom_logo() ?>
                </div>
            </header>
            <nav class="site-navigation">
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary'
                    ));
                ?>
            </nav>
        </div>
