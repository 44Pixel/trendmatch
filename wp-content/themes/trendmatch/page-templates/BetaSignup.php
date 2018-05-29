<?php /* Template Name: BetaSignup */ ?>

<?php get_header(betaSignup); ?>

<div class="page-wrapper">
	<section id="beta-signup" class="full-width hero">
		<div class="splash center-content">
			<div class="inner">
				
				<div class="top-wrapper">
					<div class="inner">
						<div class="logo-wrapper">
							<img class="logo" src="/wp-content/uploads/2018/05/trendmatch-logo-icon-color.svg">
							<h1 class="logo">trendmatch</h1>
						</div>

						<h2>Bliv tester på trendmatch, og få app'en skrædder&shy;syet til dig</h2>

						<div class="beta-signup-form-wrapper">			
							<?php echo do_shortcode('[mc4wp_form id="11"]') ?>	
						</div>
					</div>
				</div>
				
				<div class="bottom-wrapper">
					<p>Vi søger op mod 100 testere, til en lukket beta. Deltagere vil være blandt de første der kan <strong>downloade og benytte app'en</strong>.</p>
					<p>Til gengæld ønsker vi din feedback, så vi kan skræddersy Trendmatch til dig og vores andre brugere. Det er altså din mulighed for at påvirke udviklingen af trendmatch til netop dine ønsker.</p>
				</div>
				
			</div>
		</div>
	</section>
	
	<section id="app-preview">
		<div class="container wide">
			<div class="flex-wrapper col3">
				<div class="item">
					<div class="inner">
						<h3>Swipe tests</h3>
						<p>Swipe stylesLorem ipsum orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
						<p>Nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad </p>
						<p>Minim veniam, quis nostrud exerci tation ullamcorper suscipitconsequat. </p>
					</div>
				</div>
				<div class="item">
					<div class="inner">
						<div class="mockup iphone-portrait">
							<img src="/wp-content/uploads/2018/05/iPhone-Single-Mockup.png">
							<div class="content video">
						  		<video loop autoplay poster="/wp-content/uploads/2018/05/trendmatch-app-preview-video-placeholder.jpg" src="/wp-content/uploads/2018/05/ScreenRecording_05-28-2018-10-41-34.mp4"></video>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="inner">
						<h3>Swipe styles</h3>
						<p>Swipe stylesLorem ipsum orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
						<p>Nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad </p>
						<p>Minim veniam, quis nostrud exerci tation ullamcorper suscipitconsequat.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	
</div>
         
<?php get_footer(betaSignup); ?>