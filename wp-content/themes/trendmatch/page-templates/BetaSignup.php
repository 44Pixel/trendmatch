<?php /* Template Name: BetaSignup */ ?>

<?php get_header(); ?>

<div class="page-wrapper">
	<section id="beta-signup" class="hero">
		<div class="container">
			<div class="flex-wrapper col2 align-middle img-right">
				<div class="item">
					<div class="inner">
						<h1 class="mobile-only">Vær med til at bygge den næste mode-app</h1>
						<div class="mobile-only">
							<a class="button rounded full" href="#beta-signup-form">Bliv app tester</a>
							<a class="button rounded ghost" href="#app-video">Se mere</a>
						</div>
						<div id="app-video" class="mockup iphone-portrait content-right">
							<img src="/wp-content/uploads/2018/06/trendmatch-tøj-shopping-app-på-iphone.png" alt="Trendmatch tøj shopping app vist på iPhone 6s i højformat">
							<div class="content video">
						  		<video muted loop autoplay playsinline poster="/wp-content/uploads/2018/06/trendmatch-tøj-shopping-app.png" src="/wp-content/uploads/2018/06/trendmatch-tøj-shopping-app-video.mp4"></video>
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
						<h4>Hvad vil det sige at være beta tester?</h4>
						<p class="small">Som tester modtager du et link til at downloade app'en, hvilket kræver en iPhone. Du siger samtidig ja til at hjælpe med at udvikle app'en, hvilket indebærer at du modtager invitationer til at give feedback, samt opdateringer på mail.</p>
						<p class="small">Ønsker du ikke længere at modtage disse mails kan du altid framelde dem. Du vil fortsat kunne benytte appen, selvom vi vil være kede af at miste din feedback. Du kan læse mere om hvordan vi håndtere din data <a target="_blank" href="/persondatapolitik">her</a>.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="for-webshops" class="overlap-top">
		<div class="container center-content">
			<h3>Har du en webshop?</h3>
			<a href="<?php echo get_permalink( get_page_by_path( 'For webshops' ) ) ?>" class="underline-hover">Læs mere her</a>
		</div>
	</section>
	
	
</div>
         
<?php get_footer(betaSignup); ?>