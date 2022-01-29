<?php get_header(); ?>
 
<main>
<?php
if ( have_posts() ) :
    /* Start the Loop */
    while ( have_posts() ) :
        the_post(); 
 
        get_template_part( 'template/content', 'page' );
 
 
    endwhile;
endif;
?>
</main>
 
<?php get_footer(); ?>