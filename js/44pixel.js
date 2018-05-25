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
	
	
	

	
	
	
});	
	
}); //JQuery funktion ender
