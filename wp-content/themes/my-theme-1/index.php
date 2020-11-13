<div class="container">
<?php
/*
* This is our first theme.
*/

// header content
get_header();
?>

    <div class="home-main">
        <div class="row mr-0 ml-0">
            <div class="home-posts col-lg-8 col-xs-12">
                    <!-- if condition to check for the post -->
                    <?php if(have_posts()) : ?>  
                        <!-- loop over the all post     -->
                        <?php while(have_posts()) : the_post(); ?>
                            <article class="home-post">
                                <div class="post-header">
                                    <div class="post-thumbnail row ml-0 mr-0">
                                        <!-- the_permalink function is used to link a post to get detailed information when you click on image -->
                                       <a href="<?php the_permalink() ?>" ><?php the_post_thumbnail('home-featured') ?></a>
                                    </div>
                                    <h1><a href="<?php the_permalink() ?>" ><?php the_title(); ?></a></h1>
                                </div>
                                <div class="post-description">
                                    <!-- this is used to give short discription about post max allowed 50 words -->
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="post-footer row ml-0 mr-0">
                                    <div class="post-meta">
                                        <!-- this function is for author name  -->
                                        <strong>Author: </strong><?php the_author() ?>
                                    </div>
                                    <div class="post-meta">
                                        <!-- this function is for to fetch the time of post -->
                                        <strong>Posted On: </strong><?php the_time() ?>
                                    </div>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="pagination row ml-0 mr-0">
                        <!-- this function paginate_links is for pagination to next pages -->
                        <?php echo paginate_links() ?>
                    </div>
            </div>
            <div class="home-sidebar col-lg-4 col-xs-12">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>

    
<?php
// footer content
get_footer();
?>

</div>
