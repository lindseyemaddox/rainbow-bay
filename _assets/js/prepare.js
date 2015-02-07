
$(function() {
	$( "#revealParts" ).resizable({
	  handles: 'e',
	  maxWidth: 277
	});

	$('.highlights li').click(function(){
		$('.feature-info').show();
		$('.feature-info li').hide();
	      $(this).addClass('indicator');
	        var str = $(this).index();
            $('.feature-info li').eq(str).fadeIn(500);
		$('body').append('<div class="highlight-overlay"></div>');
		$('.highlight-overlay').click(function(){
			 $('.feature-info li').hide();
			 $('.feature-info').fadeOut();
			 $('.highlight-overlay').remove();
		});
	});

});
