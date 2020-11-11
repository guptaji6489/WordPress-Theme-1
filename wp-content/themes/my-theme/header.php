<?php
/*
* This is to display header.
*/
?>
<!DOCTYPE html>
<html>
    <head>
       <?php wp_head() ?> 
    </head>
    <body>
        <div class="site-main">
            <header class="site-header">
                <div class="site-branding">
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
