<div class="container">
<?php
/*
* This is to display single posts.
*/
get_header();
?>

<div class="post-container">
 <!-- if condition to check posts -->
    <?php if(have_posts()) : ?>
        <!-- while loop to take all posts -->
        <?php while(have_posts()) : the_post(); ?>
        <div class="post-image">
            <?php the_post_thumbnail('home-featured') ?>
        </div>
        <div class="post-title">
             <!-- title of the post by the_title() -->
            <?php the_title()  ?>
        </div>
        <div class="post-meta-row">
            <div class="post-meta">
                 <!-- author of the post by the_author() -->
                <strong>Author: </strong><?php the_author() ?>
            </div>
            <div class="post-meta">
                 <!-- time of the post  -->
                <strong>Posted On: </strong><?php the_time() ?>
            </div>
        </div>
        <div class="post-content">
             <!-- content of that post -->
            <?php the_content()  ?>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>
 </div>


<?php
get_footer();
?>
</div>
