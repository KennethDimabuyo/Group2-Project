$(window).scroll(function(){

	var wScroll = $(this).scrollTop();

	if (wScroll > $('.item-pics').offset().top- ($(window).height() / 1.5)) {
		$('.item-pics figure').each(function(i){

			setTimeout(function(){
			$('.item-pics figure').eq(i).addClass('is-showing');
			}, 150 * (i+1));
		});
	}

});