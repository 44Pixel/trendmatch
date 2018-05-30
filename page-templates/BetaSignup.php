<?php /* Template Name: BetaSignup */ ?>

<?php get_header(); ?>

<div class="page-wrapper">
	<section id="beta-signup" class="hero">
		<div class="container">
			<div class="flex-wrapper col2 align-middle img-right bg-square white-text">
				<div class="item">
					<div class="inner">
						<h1 class="mobile-only">Vær med til at bygge den næste mode-app</h1>
						<div class="mobile-only">
							<a class="button rounded full" href="#beta-signup-form">Bliv app tester</a>
							<a class="button rounded ghost" href="#app-video">Se mere</a>
						</div>
						<div id="app-video" class="mockup iphone-portrait content-right">
							<img src="/wp-content/uploads/2018/05/iPhone-Single-Mockup.png">
							<div class="content video">
						  		<video muted loop autoplay playsinline poster="/wp-content/uploads/2018/05/trendmatch-app-preview-video-placeholder.jpg" src="/wp-content/uploads/2018/05/ScreenRecording_05-28-2018-10-41-34.mp4"></video>
							</div>
						</div>
					</div>
				</div>
				<div class="item" id="beta-signup-form">
					<div class="inner">
						<h1 class="desktop-only">Vær med til at bygge den næste mode-app</h1>
						<div class="beta-signup-form-wrapper">	
							<h3>Bliv beta tester</h3>
							<?php echo do_shortcode('[mc4wp_form id="11"]') ?>	
						</div>
						<p>Vi søger de første 100 testere, til en lukket beta. Deltagere vil være blandt de første der kan <strong>downloade og benytte app'en</strong>.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="for-webshops" class="overlap-top">
		<div class="container center-content">
			<h3>Har du en webshop?</h3>
			<a href="/for-webshops" class="underline-hover">Læs mere her</a>
		</div>
	</section>
	
	
</div>
         
<?php get_footer(betaSignup); ?>