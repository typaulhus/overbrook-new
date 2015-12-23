$(function(){

	var wwdActive = false;

	function checkWWD() {
		if (wwdActive === false){
			$('.wwd_box').hide();
			$('.WWD_MenuBtn').removeClass('activeHover');
		}
		else {
			$('.wwd_box').show();
		}
	}

	$('.WWD_MenuBtn').hover(function(){
		wwdActive = true;
		$('.wwd_box').show();
	},function(){
		$('.wwd_box').hide();
		$('.WWD_MenuBtn').removeClass('activeHover');
		wwdActive = false;
	});

	$('.wwd_box').mouseenter(function() {
		wwdActive = true;
		$('.WWD_MenuBtn').addClass('activeHover');
		checkWWD();
	});
	$('.wwd_box').mouseleave(function() {
		wwdActive = false;
		setTimeout(function(){checkWWD();}, 350);
	});


  $('.mr_social_sharing_wrapper').prepend('<span class="shareLabel">Share this page:</span>');
  
});