<?php get_header(); ?>

<main>
    
    <?php
    if( have_posts()):
        //condition (daca avem postari)
            while(have_posts()):
            the_post();
             get_template_part( 'template/content', get_post_type() );
 
            the_post_navigation();
            //take out the posts

    if(comments_open() || get_comments_number()):
        comments_template();
    endif;

    endwhile;
    endif;
    ?>
        
</main>

<?php get_footer(); ?>





