<?php
/**
*@package Paiu resume
*/
?>
<?php get_header(); ?>
<main>
    <?php
        if(have_posts()):
            the_post();

            get_template_part('template/content', get_post_type() );

        endif;
        ?>
    </main>

<?php get_footer(); ?>
