$(window).scroll(function() {
	//portfolio
	if (wScroll > $('.portfolio').offset().top - 250 ) {
		$('.portfolio .card').addClass('muncul');
	}
});