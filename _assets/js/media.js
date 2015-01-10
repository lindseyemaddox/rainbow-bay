

function giveGo() {
	$(document).scroll(function(){
			//checking to find container range
		if ( $(document).scrollTop() > $('#intro').height()){
			//window scroll
			var scrollTop = $(this).scrollTop();

			$('footer').each(function() {

				// distance of container from top. plus or minus depending on design
				var topDistance = $('.media').height() - $('footer').height() - $('nav').height() ;

				//Sets fixed items back to absolute based off thier position from the top.
				if ( scrollTop  >  topDistance) {
					var newPos = $('.media').height() - $('footer').height() ;
					console.log(newPos);
					$('.media aside .aside-inner').css({
						position: 'absolute',
						top: newPos,
					});
				} else {
					//otherwise keeps them fixed.
					$('.media aside').css({
						position: 'fixed',
						top: '45px',
						width: '213px',
					});
				}
			});
		} else {
			var initialHeight = $('#options').height();
			var initialWidth = $('#options').width();
			$('.media aside').css({
				position: 'absolute',
				width: initialWidth,
				top: $('#intro').height() + $('header').height() 
			});
		}
	});
}

function initGiveGo() {
	if ($(window).width() > 800) {
	   	giveGo();
	}
	else {
	}
}

function initFn() {
	initGiveGo();
	   	giveGo();
}

$(function() {
	initFn();
});
