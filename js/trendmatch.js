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
	
	

	
	
	
});	
	
}); //JQuery funktion ender
