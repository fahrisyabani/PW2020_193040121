$(window).scroll(function () {
	//portfolio
	if (wScroll > $('.portfolio').offset().top - 250) {
		$('.portfolio .card').addClass('muncul');
	}
}); $('#show-password').click(function () {
	if ($(this).hasClass('fa-eye')) {
		$('#login-password').attr('type', 'text');
		$(this).removeClass('fa-eye');
		$(this).addClass('fa-eye-slash');
	} else {
		$('#login-password').attr('type', 'password');
		$(this).removeClass('fa-eye-slash');
		$(this).addClass('fa-eye');
	}
})