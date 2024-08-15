try {
	//제이쿼리가 있으면
	this.jQuery = this.jQuery || undefined;

	//제이쿼리가 있으면
	if(jQuery) {
		//$ 중복방지
		(function($) {
			$(function() {

				//section animation
				$(window).on('scroll', function(){
					var scrollTop = $(window).scrollTop(),
						winBottom = scrollTop + $(window).height(),
						$elem = $('.ani');
					$elem.each(function(){
						var $this = $(this),
							thisTop = $this.offset().top,
							thisBottom = thisTop + $this.outerHeight();
						if(scrollTop < (thisTop - 1000)){
							$this.attr('data-on','off');
						}
						if(winBottom > (thisBottom / 1.3)){
							$this.attr('data-on','on');
						}
					});
				});
				
				//축하의 글
				var $boardMsg = $('.board_msg'),
					$boardBox = $boardMsg.find('.board_box'),
					$boardSlide = $boardBox.find('.board_list'),
					$boardSlideItem = $boardSlide.find('.board_item'),
					ItemLength = $boardSlideItem.length, //10
					$boardDots = $boardBox.find('.barbox .thumbnailbox'),
					$boardCtrl = $boardBox.find('.board_control'),
					$boardPrev = $boardCtrl.find('.prev'),
					$boardNext = $boardCtrl.find('.next');

				$boardSlide.slick({
					autoplay : false,
					dots:true,
					appendDots: $boardDots,
					slidesToShow: 3,
					slidesToScroll: 1,
					rows: 2,
					infinite: true,
					prevArrow : $boardPrev,
					nextArrow : $boardNext,
					pauseOnDotsHover : true,
					swipe:false,
					draggable:false,
					//추가 기능
					isRunOnLowIE : false,
					pauseOnArrowClick : true,
					pauseOnDirectionKeyPush : true,
					pauseOnSwipe : true,
					pauseOnDotsClick : true,
					responsive: [
						{
							breakpoint: 1001,
							settings: {
								swipe:true,
								draggable:true,
								swipeToSlide: true,
								slidesToShow  : 2,
								slidesToScroll: 2
							}
						},{
							breakpoint: 641,
							settings: {
								swipe:true,
								draggable:true,
								swipeToSlide: true,
								rows: 1,
								slidesToShow  : 1,
								slidesToScroll: 1
							}
						}
					]
				});

			});
		})(jQuery);
	}
}catch(e) {
	console.error(e);
}