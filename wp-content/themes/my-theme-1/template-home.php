<div class="container">
<?php
/*
* This is to display about page.
* Template Name: Homepage Template
*/
get_header();
?>

<div class="page-custom-header">
    <?php  $banner_status = get_theme_mod( 'harshit_home_banner' , 'yes');  ?>
    <?php if($banner_status == "yes") : ?>
        <?php $img_url = get_the_post_thumbnail_url(get_the_ID(),'full') ?>
        <img src="<?php echo $img_url ?>" alt="<?php echo get_the_title() ?>" 
        class="img-fluid" style="margin-top:10px;width:100%;height:300px">
    <?php endif; ?>
</div>

<div class="flex-row ml-0 mr-0 mt-3 text-center">
     <!-- if condition to check posts -->
   <?php if(have_posts()) : ?>
    <!-- while loop to take all posts -->
        <?php while(have_posts()) : the_post(); ?>
            <!-- content of the post -->
            <p><?php the_content()  ?></p>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<div class="home-posts row ml-0 mr-0 mt-5">
    <div class="col">
        <!-- main heading of Latest from Technology ( customizer label) -->
        <div class="section-head"><h3><?php echo get_theme_mod( 'harshit_featured_block_1' ,
         'Latest from Technology') ?> </h3></div>
            <div class="section-content pt-4">
                <?php
                    $args = array (
                        'cat'  =>  3
                    );
                    $tech_posts = new WP_Query( $args );
                    if( $tech_posts->have_posts() ) : ?>
                        <?php while( $tech_posts->have_posts()) : $tech_posts->the_post(); ?>
                            <div class="home-post-row row ml-0 mr-0 mb-3">
                                <div class="post-thumb col-4 pl-0">
                                    <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid')) ?>
                                </div>
                                <div class="post-title col-8">
                                    <!-- this the_echo get_the_permalink(get_the_ID() function is to link the page -->
                                    <h3><a href="<?php echo get_the_permalink(get_the_ID()) ?>">
                                    <!-- this the_title function is to display title -->
                                    <?php the_title() ?></a></h3>
                                    <!-- this the_excerpt function is to display short discription -->
                                    <p><?php the_excerpt() ?></p>          
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
            </div>
        </div>
    <div class="col">
        <div class="section-head"><h3>Latest From Social Media: </h3></div>
        <div class="section-content pt-4">
        <?php
            $args = array (
                'cat'  =>  4
            );
            $tech_posts = new WP_Query( $args );
            // <!-- if condition to check posts -->
             if( $tech_posts->have_posts() ) : ?>
                <?php while( $tech_posts->have_posts()) : $tech_posts->the_post(); ?>
                    <div class="home-post-row row ml-0 mr-0 mb-3">
                        <div class="post-thumb col-4 pl-0">
                            <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid')) ?>
                        </div>
                        <div class="post-title col-8">
                            <!-- this the_echo get_the_permalink(get_the_ID() function is to link the page -->
                            <h3><a href="<?php echo get_the_permalink(get_the_ID()) ?>">
                            <!-- this the_title function is to display title -->
                            <?php the_title() ?></a></h3>
                            <!-- this the_excerpt function is to display short discription -->
                            <p><?php the_excerpt() ?></p>          
                        </div>
                    </div>
                    
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</div>

<?php  
    get_footer();
?>
</div>