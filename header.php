<?php
/**
 * 
 * HEADER template 
 * 
 * @package Resume theme
 */
?>
 
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
 <div class="wrap">
     
    <header class="site-header">
        
        
            
        <div class="site-logo"> 
            
          <a href="<?php echo esc_url( home_url('/') ); ?>" rel="home" title="<?php      bloginfo('name'); ?>"> 
              
                <div class="thumbnail">
                        <?php the_post_thumbnail( 'special-thumbnail' ); ?>
                 </div> 
            </a> 
        </div><!-- end .logo -->
        <h1 class="site-name"><?php bloginfo('name'); ?></h1>
        <p class="site-description"><?php bloginfo('description'); ?></p>
           
    </header>
     
    <nav class="site-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        
    </nav>
 
    <div class="central">
        
    
 
            
        