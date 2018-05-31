 <?php $options = get_fields('option'); //pre($options); ?>  
    <footer>
        <div class="container">
            <div class="row">
                <?php if( !empty( $options['social_links'] ) ): ?>
                    <div class="col-md-2">
                        <div class="social-links">
                            <ul>
                                <?php foreach( $options['social_links'] as $social ): ?>
                                          <li><a href="<?php echo $social['social_link'];  ?>" target="_blank"><?php echo $social['social_icon'];  ?></a></li>
                                <?php endforeach; ?>                           
                            </ul>
                        </div>
                    </div>
                 <?php endif; ?>
                
                <div class="col-md-7">
                    <div class="footer-menu">
                         <?php 
                    $Data = array( 'menu' => 'Footer Menu', 'container' => '', 'container_class' => '', 'container_id' => '', 'menu_class' => '', 'menu_id' => '', 'echo' => true, 'fallback_cb' => 'wp_page_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 'item_spacing' => 'preserve','depth' => 0); 

                    wp_nav_menu( $Data );
                    ?>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="app-links">
                        <ul>
                            <li><a href="<?php echo $options['apple_app_link'];  ?>"><img src="<?php echo $options['apple_app_logo']['url'];  ?>"></a></li>
                            <li><a href="<?php echo $options['google_play_store_link'];  ?>"><img src="<?php echo $options['google_play_store_logo']['url'];  ?>"></a></li>
                        </ul>
                        </div>
                </div>
                
                
                
            </div>
        </div>
        
        <div class="copyright">
            <div class="container">
                <div class="pull-left">
                    <p>© <?php echo date('Y'); ?> IWantService</p>
                </div>
                
                <div class="pull-right">
                    <p>Powered By - <a href="http://imarkinfotech.com" target="_blank">iMark Infotech</a></p>
                </div>
            </div>
        </div>
        
        
    </footer>
	<?php wp_footer(); ?>
	<?php echo do_shortcode('[VerifyAccount]'); ?>
<?php echo do_shortcode('[SignIn]'); ?>
<?php echo do_shortcode('[ForgotPassword]'); ?>
</body>

</html>
    