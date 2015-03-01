function expandfaq() {
$('#faq p.faquestion').click(function(){

        // set the index value.
        var str = $(this).index();

        // If this items index value is equal(.eq) to what you clicked(str), do somthing to it.
            $('#faq p.faqanswer').hide();
            $(this).next('#faq p.faqanswer').slideDown(300);
  });
}

function firstLoad2() {
	initVars();
	expandfaq();
}

$(function() {
	firstLoad2();
});
