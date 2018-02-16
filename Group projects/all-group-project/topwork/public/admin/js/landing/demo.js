/* =================================
===  EXPAND COLLAPSE            ====
=================================== */
 $(document).ready(function(){
 	$('#toggle-switcher').click(function(){
		if($(this).hasClass('open')){
			$(this).removeClass('open');
			$('#switch-style').animate({'left':'-180px'});
		}else{
			$(this).addClass('open');
			$('#switch-style').animate({'left':'0'});
			$('body').css("transition","0.3s linear");
		}
	});
	$(".img-container").on("mouseover", function() {
	    $(this).find('.img_overflow').show();
		}).on("mouseout", function() {
	    $(this).find('.img_overflow').hide();
	});
	$(".portfolio li a").on("mouseover", function() {
	    $(this).find('.img-blocker').show();
		}).on("mouseout", function() {
	    $(this).find('.img-blocker').hide();
	});
});