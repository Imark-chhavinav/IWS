  
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="social-links">
                        <ul>
                             <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                
                                <li><a href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                
                                <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-7">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">How it works</a></li>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Directory</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="app-links">
                    <ul>
                            <li><a href="#"><img src="images/app-store-img.png"></a></li>
                            <li><a href="#"><img src="images/google-store-img.png"></a></li>
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
    