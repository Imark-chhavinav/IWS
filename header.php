<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo  get_template_directory_uri() . '/css/style.css'; ?>">

</head>

<body <?php body_class(); ?>>
    <header>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png"></a>
                </div>
                <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                    <ul class="nav navbar-nav menu-row">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="#">How it works </a></li>
                        <li><a href="customer/faq.html">Faq</a></li>
                        <li><a href="#">Directory</a></li>
                        <li><a href="customer/job-listing.html">Job Listing</a></li>
                        <li><a href="contact-us.html">Contact</a></li>
                        
                    </ul>
                    <ul class="nav navbar-nav user-side">
                        <?php if( is_user_logged_in()): ?>
                             <li><a href="<?php echo site_url('/wp-admin/'); ?>"><span class="fa fa-user"></span>Profile</a></li>
                             <li><a href="<?php echo wp_logout_url( site_url() ); ?>" ><span class="fa fa-sign-in"></span> Sign Out</a></li>
                        <?php else: ?>

                            <li><a href="<?php echo site_url('/sign-up/'); ?>"><span class="fa fa-user"></span> Sign Up</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#signInModal"><span class="fa fa-sign-in"></span> Sign in</a></li>

                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>