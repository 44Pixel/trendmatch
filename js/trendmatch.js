// jQuery funktioner begynder her
jQuery(function ($) {
"use strict";
	
//Open all external links in new tab
 $(document).ready(function() {
 $("a[href^='http://']").each(
 function(){
 if(this.href.indexOf(location.hostname) === -1) {
 $(this).attr('target', '_blank');
 }
 }
 );
 $("a[href^='https://']").each(
 function(){
 if(this.href.indexOf(location.hostname) === -1) {
 $(this).attr('target', '_blank');
 }
 }
 );
 });
	
//PUT NEW CODE HERE
$(document).ready(function() {
	
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top - 100
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
	
	
	
	// Add UTM parameters to form
	
	// Parse the URL
	function getParameterByName(name) {
		name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
		var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
			results = regex.exec(location.search);
		return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
	}
	// Give the URL parameters variable names
	var source = getParameterByName('utm_source');
	var medium = getParameterByName('utm_medium');
	var campaign = getParameterByName('utm_campaign');
	var term = getParameterByName('utm_term');
	var content = getParameterByName('utm_content');
	
	// Set the value of each field equal to the utm paramters
	$('input[name="SOURCE"]').attr('value',source);
	$('input[name="MEDIUM"]').attr('value',medium);
	$('input[name="CAMPAIGN"]').attr('value',campaign);
	$('input[name="TERM"]').attr('value',term);
	$('input[name="CONTENT"]').attr('value',content);
	// UTM PARAMTER FUNCTION ENDS
	
	
});	
	
}); //JQuery funktion ender
