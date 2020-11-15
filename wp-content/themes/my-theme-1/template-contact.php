<div class="container">
<?php
/*
* This is to display about page.
* Template Name: Contact Template
*/
get_header();
?>
<div class="page-custom-header">
    <?php $img_url = get_the_post_thumbnail_url(get_the_ID(),'full') ?>
    <img src="<?php echo $img_url ?>" alt="<?php echo get_the_title() ?>" 
    class="img-fluid" style="margin-top:10px;width:100%;height:350px">
</div>
<div class="flex-row ml-0 mr-0 mt-3">
   <!-- if condition to check posts -->
   <?php if(have_posts()) : ?>
    <!-- while loop to take all posts -->
        <?php while(have_posts()) : the_post(); ?>
        <!-- title of the post -->
            <h1><?php the_title()  ?></h1>
            <!-- content of the post -->
            <p><?php the_content()  ?></p>
         <!-- end of the while loop -->
        <?php endwhile; ?>
    <?php endif; ?>
</div>


<?php  
//    get the footer content 
    get_footer();
?>
</div>
