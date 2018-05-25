	<footer>

		<!-- footer content starts -->
		
		
		
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
   console.log("Form successfully submitted. Name: " + form.name + "ID: " + form.id);
});
mc4wp.forms.on('error', function(form) {
	dataLayer.push({
		'event': 'BetaSignupForm',
		'eventCategory': 'Forms',
		'eventAction': 'Error',
		'eventLabel': 'BetaSignupForm',
	});
   console.log("Form error");
});
mc4wp.forms.on('started', function(form) {
	dataLayer.push({
		'event': 'BetaSignupForm',
		'eventCategory': 'Forms',
		'eventAction': 'Started',
		'eventLabel': 'BetaSignupForm',
	});
   console.log("Form started");
});
</script>
<!-- Mailchimp Form Tracking ends -->
    
    <link href="https://opensource.keycdn.com/fontawesome/4.5.0/font-awesome.min.css" rel="stylesheet">
    </body>
</html>
