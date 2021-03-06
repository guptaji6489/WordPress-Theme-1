<?php
/*
* This is to display footer.
*/
?>

<footer class="site-footer">
    <div class="row ml-0 mr-0 footer-widgets">
        <div class="widget-col col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <!-- ITS a dynamic sidebar of recent posts -->
            <?php dynamic_sidebar('footer-1') ?>
        </div>
        <div class="widget-col col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <!-- ITS a dynamic sidebar of archives -->
            <?php dynamic_sidebar('footer-2') ?>
        </div>
        <div class="widget-col col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <!-- ITS a dynamic sidebar of meta -->
             <?php dynamic_sidebar('footer-3') ?>
        </div>
    </div>
</footer>

</body>
<?php wp_footer() ?> 
</html>