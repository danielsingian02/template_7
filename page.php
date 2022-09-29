<?php
get_header();
?>
<article class="content-page" style="background-image:url('<?php echo get_theme_mod('Background_image',get_bloginfo('template_directory').'/assets/images/Asset 7 1.png' ); ?>')">
        <?php
        if ( have_posts()){
            while( have_posts()){
                the_post();
                the_content();
            }
        }
        ?>
    </article>
<?php
get_footer();
?>
