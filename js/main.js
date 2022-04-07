//*-----Sticky Nav----*/

$(window).on('scroll',function(){
	if ($(window).scrollTop()){
		$('nav').addClass('black');
	}
	else
	{
		$('nav').removeClass('black');
	}
});

/*-----Scroll Top---*/

$(document).ready(function(){
	//show hide button on scroll
	$(window).scroll(function(){
		if($(this).scrollTop() > 200){
			$('.scrollToTop').fadeIn(); 
			} else{
				$('.scrollToTop').fadeOut();
		}
	});

	   	
});















/*----counter-----*/

