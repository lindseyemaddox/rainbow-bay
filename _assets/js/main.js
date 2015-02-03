// JavaScript Document

// set initial variables
var $drop1,
	$showDrop1,
	$drop2,
	$showDrop2,
	$drop3,
	$showDrop3,
	$showNav,
	$nav;


// function to set dom vars, etc that will not change
function initVars() {
	$drop1 	= $('.drop1 a span');
	$drop2 	= $('.drop2 a span');
	$drop3 	= $('.drop3 a span');
	$showDrop1 	= $('.drop1 ul');
	$showDrop2 	= $('.drop2 ul');
	$showDrop3 	= $('.drop3 ul');
	$showNav 	= $('nav span#nav');
	$nav 	= $('nav > ul');
}

function showDrop1(){
	$('.drop1 > a').click(function(){
		if ($drop1.hasClass('expanded')) {
			$drop1.removeClass('expanded');
			$drop1.addClass('collapsed');
			$showDrop1.removeClass('expanded');
			$showDrop1.addClass('collapsed');
		} else {
			$drop1.addClass('expanded');
			$drop1.removeClass('collapsed');
			$showDrop1.addClass('expanded');
			$showDrop1.removeClass('collapsed');
		}
		return false;
	});
}

function showDrop2(){
	$('.drop2 > a').click(function(){
		if ($drop2.hasClass('expanded')) {
			$drop2.removeClass('expanded');
			$drop2.addClass('collapsed');
			$showDrop2.removeClass('expanded');
			$showDrop2.addClass('collapsed');
		} else {
			$drop2.addClass('expanded');
			$drop2.removeClass('collapsed');
			$showDrop2.addClass('expanded');
			$showDrop2.removeClass('collapsed');
		}
		return false;
	});
}

function showDrop3(){
	$('.drop3 > a').click(function(){
		if ($drop3.hasClass('expanded')) {
			$drop3.removeClass('expanded');
			$drop3.addClass('collapsed');
			$showDrop3.removeClass('expanded');
			$showDrop3.addClass('collapsed');
		} else {
			$drop3.addClass('expanded');
			$drop3.removeClass('collapsed');
			$showDrop3.addClass('expanded');
			$showDrop3.removeClass('collapsed');
		}
		return false;
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
	showDrop1();
	showDrop2();
	showDrop3();
	showNav();
	initPlaceholders();
}

$(function() {
	firstLoad();
});
