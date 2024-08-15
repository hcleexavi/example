
$(function () {
  console.clear();

  // 이 코드는 창이 열릴때 첫번째 슬라이더의 트랜지션을 적용하기 위한 코드입니다.
	$('.main-slider').on('init', function(event, slick) {
		$('.main-slider').find('.slick-current').removeClass('slick-active').addClass('reset-animation');
		setTimeout( function() {
			$('.main-slider').find('.slick-current').removeClass('reset-animation').addClass('slick-active');
		}, 1);
	});

  // 메인 비주얼 슬라이더 slick 적용
	$('.main-slider').slick({
		fade:true,//크로스페이드 모션 사용 여부 ▶기본값 false
		slidesToShow: 1,
//		draggable:false,//슬라이드 드래그 가능여부 (true or false) ▶기본값 true
		speed:1000,
//		lazyLoad: 'progressive',
		autoplay:true,
		autoplaySpeed:5000,
		pauseOnFocus:false,
//		pauseOnHover:false,
//		appendArrows:$('.arrow-con > .arrows'),
//		prevArrow:'<button type="button" class="slick-prev"><i class="xi-angle-left-min"></i><span class="font-poppins">PREV</span></button>',
//		nextArrow:'<button type="button" class="slick-next"><span class="font-poppins">NEXT</span><i class="xi-angle-right-min"></i></button>',
  });

});
