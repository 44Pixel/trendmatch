<!doctype html>
<html>
	<head>

		<!-- Create Data Layer -->
		<script>
		dataLayer = [];
		</script>
       
    	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0"/>
		<meta name="apple-mobile-web-app-capable" content="yes"/>
		
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-PL27VPQ');</script>
		<!-- End Google Tag Manager -->
		
		<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900|Poppins:300,400,500,600,700,800,900" rel="stylesheet">
       
        <?php wp_head(); ?>               
        
    </head>
    
    <body>
		
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PL27VPQ"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		
	<div class="site-wrapper">
		
		<!-- NAV BAR -->
		
		<div class="navbar-wrapper container desktop-only">
			<a class="logo" href="/">
				<img src="/wp-content/uploads/2018/05/trendmatch-logo-color-horizontal.svg">
			</a>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'main-menu',
					'container_class' => 'navbar' ) );
			?>
		</div>
		
		<div class="navbar-wrapper container mobile-only">
			<a class="logo" href="/">
				<img src="/wp-content/uploads/2018/05/trendmatch-logo-color.png">	
			</a>
		</div>
		<!-- NAV BAR ENDS -->
