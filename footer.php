<?php
/**
 * 
 * FOOTER template 
 * 
 * @package Resume theme
 */
?>
 
    </div><!-- end .container -->
         <nav class="site-nav-footer">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        
    </nav>
    <footer class="site-footer">
        <p>I'm your best option © <?php bloginfo('name'); ?></p>
    </footer>
         
<?php wp_footer(); ?>
 </div>
</body>
</html>