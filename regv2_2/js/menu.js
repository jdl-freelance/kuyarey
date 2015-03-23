var $m = jQuery.noConflict();

$m(document).ready(function() {
	$m('#main-nav').find('.nav-menu').supersubs({
		minWidth:    12,   // minimum width of submenus in em units
		maxWidth:    27,   // maximum width of submenus in em units
		extraWidth:  1     // extra width can ensure lines don't sometimes turn over
						   // due to slight rounding differences and font-family
	}).superfish({
		animation: {height:'show'},   // slide-down effect without fade-in
		delay:     1200               // 1.2 second delay on mouseout
	});
	
	$m("#show-nav").click(function() {
		$m('#main-nav').find('.nav-menu').slideToggle("slow");
	});


});