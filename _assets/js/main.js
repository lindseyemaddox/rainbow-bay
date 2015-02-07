// JavaScript Document

// set initial variables
var $showNav,
	$nav;


// function to set dom vars, etc that will not change
function initVars() {

	$showNav 	= $('nav span#nav');
	$nav 	= $('nav > ul');
}

function showDrop(){
	$('.drop > a').click(function(event){
		if ($(this).next('ul').hasClass('expanded')) {
			$(this).next('ul').removeClass('expanded');
		} else {
			$('.drop ul').removeClass('expanded');
			$(this).next('ul').addClass('expanded');
		}
		event.preventDefault()
	});
}



function showNav(){
	$showNav.click(function(){
			$nav.toggleClass('expanded');
		return false;
	});
}

// this function fixes placeholders in browsers that don't support it
function initPlaceholders() {
	if ($('input[placeholder]').length > 0) {
		if (!placeholderSupported()) {
			$('input[placeholder]').focus(function() {
				var input = $(this);
				if (input.val() == input.attr('placeholder')) {
					input.val('');
					input.removeClass('placeholder');
				}
			}).blur(function() {
				var input = $(this);
				if (input.val() == '' || input.val() == input.attr('placeholder')) {
					input.addClass('placeholder');
					input.val(input.attr('placeholder'));
				}
			}).blur();
			$('input[placeholder]').parents('form').submit(function() {
				$(this).find('[placeholder]').each(function() {
					var input = $(this);
					if (input.val() == input.attr('placeholder')) {
						input.val('');
					}
				})
			});
		}
	}
}
function placeholderSupported() {
    test = document.createElement('input');
    return ('placeholder' in test);
}




function firstLoad() {
	initVars();
	showDrop();
	showNav();
	initPlaceholders();
}

$(function() {
	firstLoad();
});
