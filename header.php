<!DOCTYPE html>

<!--[if lt IE 7]>  <html class="ie ie6 lte9 lte8 lte7" <?php language_attributes(); ?>> <![endif]-->

<!--[if IE 7]>     <html class="ie ie7 lte9 lte8 lte7" <?php language_attributes(); ?>> <![endif]-->

<!--[if IE 8]>     <html class="ie ie8 lte9 lte8" <?php language_attributes(); ?>> <![endif]-->

<!--[if IE 9]>     <html class="ie ie9 lte9" <?php language_attributes(); ?>> <![endif]-->

<!--[if gt IE 9]>  <html> <![endif]-->

<!--[if !IE]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

<head>


	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<?php is_dt_theme_moible_view(); ?>

	<meta name="description" content="<?php bloginfo('description'); ?>"/>

	<meta name="author" content="designthemes"/>



    <!--[if lt IE 9]>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <![endif]-->



	<title><?php dt_theme_public_title(); ?></title>


<script src="http://www.fluffymaplepuffpuffs.com/wp-content/themes/kidszone/js/jquery-1.6.3.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js" type="text/javascript"></script>
<script src="http://www.fluffymaplepuffpuffs.com/wp-content/themes/kidszone/js/jquery.spritely-0.6.js" type="text/javascript"></script>
<script src="http://www.fluffymaplepuffpuffs.com/wp-content/themes/kidszone/js/custom-scrollbar/jquery.mCustomScrollbar.min.js" type="text/javascript"></script>
<script src="http://www.fluffymaplepuffpuffs.com/wp-content/themes/kidszone/js/custom-scrollbar/jquery.mousewheel.min.js" type="text/javascript"></script>
<script src="http://www.fluffymaplepuffpuffs.com/wp-content/themes/kidszone/js/fixed.js" type="text/javascript"></script>

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<link href="http://www.fluffymaplepuffpuffs.com/wp-content/themes/kidszone/css/leaves.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://www.fluffymaplepuffpuffs.com/wp-content/themes/kidszone/css/leaves.css" type="text/css" media="screen" charset="utf-8">
    <!-- The leaves.js file creates the leaves -->
<link rel="stylesheet" href="http://www.fluffymaplepuffpuffs.com/wp-content/themes/kidszone/css/clouds.css" type="text/css" media="screen" charset="utf-8">
<link href="http://www.fluffymaplepuffpuffs.com/wp-content/themes/kidszone/js/custom-scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">

<?php

	//LOAD THEME STYLES...

	if(dt_theme_option('integration', 'enable-header-code') != '') echo stripslashes(dt_theme_option('integration', 'header-code'));

	wp_head(); ?>



    <style type="text/css">

        .stage {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            min-width: 900px;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }
        .far-clouds {
            background: transparent url(http://www.fluffymaplepuffpuffs.com/wp-content/themes/kidszone/img/far-clouds.png) 305px 102px repeat-x;
        }
        .near-clouds {
            background: transparent url(http://www.fluffymaplepuffpuffs.com/wp-content/themes/kidszone/img/near-clouds.png) 305px 162px repeat-x;
        }
        .mainContent{
            position: absolute;
            top: 0;
            left: 0;
            z-index: 101;
        }


    </style>





</head>


<!--    <div id="far-clouds" class="far-clouds stage"></div>
    <div id="near-clouds" class="near-clouds stage"></div>
-->
<div id="clouds">
	<div class="cloud x1"></div>
	<!-- Time for multiple clouds to dance around -->
	<div class="cloud x2"></div>
	<!--<div class="cloud x3"></div>
	<div class="cloud x4"></div>-->
	<div class="cloud x5"></div>
</div>



<div class="containerjoe">
	<div class="loader">
    	<span></span>
          	<span1></span1>
			<span2></span2>
			<span3></span3>
            <!--<span4></span4>
            <span5></span5>-->

	</div>
</div>


<div class="iosiflogo">
<img class="logoimg" src="http://www.fluffymaplepuffpuffs.com/wp-content/uploads/2014/05/logo.png"  />
</div>

<div class="bannerjoe">
<img src="http://fluffymaplepuffpuffs.com/wp-content/uploads/2014/06/bannerlung.png"/>
</div>

<div class="framejoe" > 
<img src="http://fluffymaplepuffpuffs.com/wp-content/uploads/2014/06/upperside1.png"> 
</div>
<!--
<div class="leftframejoe" > 
<img class="framesidejoe" src="http://fluffymaplepuffpuffs.com/wp-content/uploads/2014/06/leftside1.png"> 
</div>
<div class="rightframejoe" > 
<img class="framesidejoe" src="http://fluffymaplepuffpuffs.com/wp-content/uploads/2014/06/leftside1.png"> 
</div>
<div class="framejoedown" > 
<img src="http://fluffymaplepuffpuffs.com/wp-content/uploads/2014/06/upperside1.png"> 
</div>-->




<div class="iosifbranch">
<img class="logoimg" src="http://www.fluffymaplepuffpuffs.com/wp-content/uploads/2014/05/creanga.png"  />
</div>

<body <?php if(dt_theme_option("appearance","layout") == "boxed") body_class('boxed'); else body_class(); ?>>


    <div class="main-content">

	<!-- wrapper div starts here -->

    <div id="wrapper">



		<?php if(dt_theme_option('general', 'header-top-bar') != true): ?>
		<div id="joefixed" >
            <div class="top-bar">

                <div class="container">
				<div style="width:304px; height:2px;"><a href="https://www.facebook.com/theoriginalfluffymaplepuffpuffs"><img src="http://www.fluffymaplepuffpuffs.com/wp-content/uploads/2014/06/facebook.jpg" ></a> &nbsp;<img src="http://www.fluffymaplepuffpuffs.com/wp-content/uploads/2014/06/instagram.png" >
                </div>
<ul id="cart-summary" class="float-right">

          <?php if(dt_theme_option('general', 'top-bar-phoneno') != ''): ?>

        <li><i class="fa fa-phone"></i><?php _e('Call', 'iamd_text_domain'); ?> : <?php echo stripslashes(dt_theme_option('general', 'top-bar-phoneno')); ?></li>

                        <?php endif;

                        //Only When woocommerce plugin active...

                        if(dt_theme_is_plugin_active('woocommerce/woocommerce.php')):

                            //ACCOUNT PAGE URL...

                            $logout_url = '';

                            $account_pid = get_option( 'woocommerce_myaccount_page_id' );

                            if ( $account_pid ) {

                              $logout_url = wp_logout_url( get_permalink( $account_pid ) );

                              if ( get_option( 'woocommerce_force_ssl_checkout' ) == 'yes' )

                                $logout_url = str_replace( 'http:', 'https:', $logout_url );

                            } ?>

                            <li><i class="fa fa-sign-in"></i><a href="<?php echo $logout_url; ?>"><?php _e('Sign in (or) Logout', 'iamd_text_domain'); ?></a> </li>



                            <li><i class="fa fa-shopping-cart"></i><?php

                                global $woocommerce;

                                $cart_url = "";

                                if(class_exists('woocommerce')):

                                    $cart_url = $woocommerce->cart->get_cart_url();

                                    echo "<a href='".$cart_url."'>".sprintf(_n('(%d) item in cart', '(%d) items in cart', $woocommerce->cart->cart_contents_count, 'iamd_text_domain'), $woocommerce->cart->cart_contents_count)."</a> | <a href='".$cart_url."'>(".$woocommerce->cart->get_cart_total().".00)</a>";

                                endif; ?></li><?php

                        endif; ?>

                    </ul>

                </div>

            </div>

        <?php endif; ?>



    	<!-- header starts here -->

        <div id="header-wrapper">

        <header>

	    	<!-- main menu container starts here -->

            <?php $htype = dt_theme_option('appearance','header_type'); $htype = !empty($htype) ? $htype : 'header1';

			// Checking header type...

            if($htype == 'header3') : ?>

                <div class="menu-main-menu-container header3">

                    <?php /*?><!--<div id="logo">

                        <?php if(dt_theme_option('general', 'logo') == true and dt_theme_option('general', 'logo-url') != ""): ?>

                                <a href="<?php echo home_url(); ?>" title="<?php bloginfo('title'); ?>"><img src="<?php echo dt_theme_option('general', 'logo-url'); ?>" alt="<?php bloginfo('title'); ?>" title="<?php bloginfo('title'); ?>" /></a>

                        <?php elseif(dt_theme_option('general', 'logo') == true and dt_theme_option('general', 'logo-url') == ""): ?>

                                <a href="<?php echo home_url(); ?>" title="<?php bloginfo('title'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('title'); ?>" title="<?php bloginfo('title'); ?>" /></a>

                        <?php else: ?>

                            <div class="logo-title"><h1 id="site-title"><a href="<?php echo home_url(); ?>" title="<?php bloginfo('title'); ?>"><?php bloginfo('title'); ?></a></h1><h2 id="site-description"><?php bloginfo('description'); ?></h2></div>

                        <?php endif; ?>

                    </div>--><?php */?>

                    <div class="container">

                        <nav id="main-menu">

                            <?php wp_nav_menu( array('theme_location' => 'primary-menu', 'container'  => false, 'menu_id' => 'menu-main-menu', 'menu_class' => 'menu', 'fallback_cb' => 'dt_theme_default_navigation', 'walker' => new DTFrontEndMenuWalker())); ?>

                        </nav>

                    </div>

                </div>

      <?php else: ?>

                <div class="menu-main-menu-container <?php echo $htype; ?>">

                    <div class="container">

                       <?php /*?> <!--<div id="logo">

                            <?php if(dt_theme_option('general', 'logo') == true and dt_theme_option('general', 'logo-url') != ""): ?>

                                    <a href="<?php echo home_url(); ?>" title="<?php bloginfo('title'); ?>"><img src="<?php echo dt_theme_option('general', 'logo-url'); ?>" alt="<?php bloginfo('title'); ?>" title="<?php bloginfo('title'); ?>" /></a>

                            <?php elseif(dt_theme_option('general', 'logo') == true and dt_theme_option('general', 'logo-url') == ""): ?>

                                    <a href="<?php echo home_url(); ?>" title="<?php bloginfo('title'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('title'); ?>" title="<?php bloginfo('title'); ?>" /></a>

                            <?php else: ?>

                                <div class="logo-title"><h1 id="site-title"><a href="<?php echo home_url(); ?>" title="<?php bloginfo('title'); ?>"><?php bloginfo('title'); ?></a></h1><h2 id="site-description"><?php bloginfo('description'); ?></h2></div>

                            <?php endif; ?>

                        </div>--><?php */?>

                        <nav id="main-menu">

                            <?php wp_nav_menu( array('theme_location' => 'primary-menu', 'container'  => false, 'menu_id' => 'menu-main-menu', 'menu_class' => 'menu', 'fallback_cb' => 'dt_theme_default_navigation', 'walker' => new DTFrontEndMenuWalker())); ?>

                        </nav>

                    </div>

                </div>

	  <?php endif; ?><!-- main menu container ends here -->

        </header>

        </div></div>

        <!-- header ends here -->

