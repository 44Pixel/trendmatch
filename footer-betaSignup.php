	<footer>

		<!-- footer content starts -->
		
		<div class="container">
			<p><span>Trendmatch er udviklet af: </span>
				<span><a target="_blank" href="http://codux.dk/">Codux IVS</a>, Cvr 39152444 og </span>
				<span><a target="_blank" href="https://44pixel.com/">44Pixel ApS</a>, Cvr 38161814</span>
				<span class="break"> | </span>
				<span>Kontakt: </span>
				<span><a class="mail" href="mailto:hello@trendmatch.dk">hello@trendmatch.dk</a>, </span>
				<span>tel.: <a class="phone" href="tel:+4523381938">+45 2338 1938</a></span>
				<span class="break"> | </span>
				<span><a target="_blank" href="/persondatapolitik">Persondatapolitik</a></span>
			</p>
		</div>
		
		<!-- footer content ends -->

		</div> <!--Sitewrapper ends-->
    </footer>
    
    <?php wp_footer(); ?>

<!-- Mailchimp Form Tracking begins -->
<script>
mc4wp.forms.on('success', function(form) {
	dataLayer.push({
		'event': 'BetaSignupForm',
		'eventCategory': 'Forms',
		'eventAction': 'Success',
		'eventLabel': 'BetaSignupForm',
	});
});
mc4wp.forms.on('error', function(form) {
	dataLayer.push({
		'event': 'BetaSignupForm',
		'eventCategory': 'Forms',
		'eventAction': 'Error',
		'eventLabel': 'BetaSignupForm',
	});
});
mc4wp.forms.on('started', function(form) {
	dataLayer.push({
		'event': 'BetaSignupForm',
		'eventCategory': 'Forms',
		'eventAction': 'Started',
		'eventLabel': 'BetaSignupForm',
	});
});
</script>
<!-- Mailchimp Form Tracking ends -->
    
    <link href="https://opensource.keycdn.com/fontawesome/4.5.0/font-awesome.min.css" rel="stylesheet">
    </body>
</html>
