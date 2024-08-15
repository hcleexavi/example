//레이어팝업
cookiedata = document.cookie;
var date = new Date();
var year = String(date.getFullYear());
var month = String(date.getMonth() + 1);
var day = String(date.getDate());

var hours = String(date.getHours());
var minutes = String(date.getMinutes());

if (("" + month).length == 1){
	month = "0" + month;
}
if (("" + day).length == 1){
	day = "0" + day;
}
if (("" + hours).length == 1){
	hours = "0" + hours;
}
if (("" + minutes).length == 1){
	minutes = "0" + minutes;
}

var todatehours = year + month + day + hours + minutes;
var intdate = parseInt(todatehours);
var todate = year + "-" + month + "-" + day;

function main_getCookie(name){
	var nameOfCookie = name + "=";
	var x = 0;
	while (x <= document.cookie.length) {
			var y = (x + nameOfCookie.length);
			if (document.cookie.substring(x, y) == nameOfCookie) {
					if ((endOfCookie = document.cookie.indexOf(";", y)) == -1) 
							endOfCookie = document.cookie.length;
					return unescape(document.cookie.substring(y, endOfCookie));
			}
			x = document.cookie.indexOf(" ", x) + 1;
			if (x == 0) 
					break;
	}
	return "";
}

function main_setCookie( name, value, expiredays ) {
	var todayDate = new Date();
		todayDate.setDate( todayDate.getDate() + expiredays );
		document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";"
}

function main_closeWind( layer_name , form_name ) {
	if ( document.all[form_name].chkbox.checked ){
		main_setCookie( layer_name, "done" , 1 );
	}
	document.all[layer_name].style.visibility = "hidden";
}


'use strict';

try {
	//제이쿼리가 있으면
	this.jQuery = this.jQuery || undefined;

	//제이쿼리가 있으면
	if(jQuery) {
		//$ 중복방지
		(function($) {
			//태그객체
			var $window = $(window),
				$wrapper = $('#wrapper');
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
				//사이드아이콘효과
				var $scrollcontent = $('.rowgroup'),
					$sideBox =  $scrollcontent.siblings('.side_menu_box'),
					$sideBoxItem = $sideBox.find('.side_menu_item');
				$window.on('scroll', function(event) {
					var scrollPosition = $(this).scrollTop();
					var targetElement = $('#wrapper');

					if (scrollPosition > 400) { // 스크롤 위치가 50px을 넘을 때
						targetElement.addClass('scrolled');
					} else {
						targetElement.removeClass('scrolled');
					}
					$scrollcontent.each(function(){
						var $this = $(this),
							rowIndex = $this.index(),
							scrollTop = $window.scrollTop(),
							scrollBottom = scrollTop + $window.height(),
							contentOffset = $this.offset().top;
						if(scrollBottom > (contentOffset + 500)) {
							$this.addClass('active');
							setTimeout(function () {
								$sideBoxItem.eq(rowIndex).addClass('active').siblings().removeClass('active');
							}, 500);

						}else{
							$this.removeClass('active');
						}
					});
				});

				//비주얼 슬라이드
				var $visual = $('.main_visual'),
					$visualSlide = $visual.find('.visual_slide'),
					$visualCtrl = $visual.find('.visual_ctrl'),
					barCounter = 5;

				$('.video_wrap').each(function(){
					var $thisIndex = $(this).index()
					$(this).find('video').on("timeupdate", function(){
						$('.visual_slide .visual_item').eq($thisIndex).attr('data-duration',this.duration);
					});
				});
				function setVisualSlide() {
					var name = [];
					$visualSlide.find('.visual_item').each(function(){
						name.push($(this).attr('data-name'));
						var $this = $(this),
							ExistVideo = $this.find('video').length;
						if(ExistVideo){
							$this.addClass('video');
						}
					});
					$visualSlide.slick({
						swipe: false,
						draggable: false,
						slidesToShow: 1,
						slidesToScroll: 1,
						autoplaySpeed: (barCounter * 1000),
						speed: 500,
						fade: true,
						autoplay: false,
						infinite: true,
						arrows: false,
						dots: true,
						pauseOnFocus: false,
						pauseOnHover: false,
						appendDots: $visualCtrl,
						customPaging: function (slide, i) {
							return '<button type="button" class="dotsbtn"><span class="progress">\n' +
								'    <svg class="bar"><circle class="circle" cx="25" cy="25" r="25" /></svg>\n' +
								'</span></button>\n<button type="button" class="auto" data-auto="pause">' +
								'</button>';
						}
					});
				}
				$window.on('screen:wide screen:web screen:tablet', function(event) {
					$('.main_visual .visual_ctrl .slick-dots li .progress .bar .circle').attr({
						cx: '25',
						cy: '25',
						r: '25'
					});
				});
				$window.on('screen:phone', function(event) {
					$('.main_visual .visual_ctrl .slick-dots li .progress .bar .circle').attr({
						cx: '15',
						cy: '15',
						r: '15'
					});
				});
				setVisualSlide();
				$window.resize(setVisualSlide);

				var $visualProgress = $visualCtrl.find('.progress'),
					$visualProgressBar = $visualProgress.find('.bar');

				$('.visual_slide .slick-slide.slick-active').addClass('active');
				$visualProgressBar.addClass('run').css({'animation-duration': barCounter + 's'});
				var $visualItem = $visualSlide.find('.visual_item');
				var visualNextTimer;

				//타이머 초기화
				$(document).on('click', '.slick-dots .auto', function () {
					clearTimeout(visualNextTimer);
				});
				//비디오 처리(슬릭 스크립트가 실행된 이후에 실행)
				$visualItem.each(function () {
					var $this = $(this),
						$thisVideo = $this.find('video');
					if ($this.hasClass('video_inner')) {
						$('.visual_ctrl li').eq($this.index()).find('.bar').css('animation-play-state', 'paused');
						$thisVideo.on("timeupdate", function(){
							$('.visual_ctrl li').eq($this.index()).find('.bar').css({
								'animation-duration': this.duration + 's',
								'animation-play-state' : 'running'
							});
						});
					} else {
						$('.visual_ctrl li').eq($this.index()).find('.bar').css('animation-duration', barCounter + 's');
					}
					$thisVideo.on('ended', function () {
						if ($(this).closest('.slick-slide').hasClass('slick-current')) {
							function slickMove() {
								$visualSlide.slick('slickNext');
							}
							setTimeout(slickMove, 1000);
						}
					});
				});

				//비디오 제어버튼 실행(play)
				$('.visual_ctrl .auto').on('click', function () {
					var $this = $(this),
						$thisParent = $this.closest('.visual_ctrl'),
						$parentS = $thisParent.siblings('.visual_slide'),
						$thisItem = $parentS.find('.visual_item'),
						thisIndex = $thisItem.index(),
						$thisVideo = $thisItem.find('video');
					if ($this.attr('data-auto') === 'pause') {
						$this.attr('data-auto', 'play').html('비디오 재생');
						$thisVideo.get(0).pause();
						$('.bar.run').addClass('paused').removeClass('played');
					} else if ($this.attr('data-auto') === 'play') {
						$this.attr('data-auto', 'pause').html('비디오 멈춤');
						$thisVideo.get(0).play();
						$('.bar.run').addClass('played').removeClass('paused');
					}
				});

				$visualSlide
					.on('afterChange', function (event, slick, currentSlide, nextSlide) {
						$visualProgressBar.addClass('run');
						$('.visual_slide .slick-slide').removeClass('active');
						$('.visual_slide .slick-slide.slick-active').addClass('active');
						$visualItem.each(function () {
							var $this = $(this),
								thisDuration = $this.attr('data-duration'),
								aniDuration = thisDuration !== undefined ? thisDuration : barCounter;
							if ($this.hasClass('slick-current') && thisDuration == undefined) {
								function playNext() {
									$visualSlide.slick('slickNext');
								}
								visualNextTimer = setTimeout(playNext, aniDuration * 1000);
							}
						})
					})
					.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
						$visualProgressBar.removeClass('run');
						var $currentslide = $(slick.$slides[currentSlide]),
							$currentslideVideo = $currentslide.find('video'),
							IsVideo = $currentslide.is('.video');
						$visualCtrl.find('.slick-dots li').each(function(){
							var $this = $(this),
								thisIndex = $(this).index();
							var duration = $visualItem.eq(thisIndex).attr('data-duration') === undefined ? barCounter : $visualItem.eq(thisIndex).attr('data-duration');
							$this.find('.bar').removeClass('paused played');
							$this.find('.progress .bar').css('animation-duration',duration + 's');
							if(IsVideo) {
								$currentslideVideo.get(0).pause();
								$currentslideVideo.get(0).muted = true;
								$currentslide.find('.visual_player').find('.auto').attr('data-auto','pause').text('비디오 재생');
							} else {
								$('.visual_player .sound').attr('data-sound', 'muted').html('소리 켜기');
							}
						});
						$('.visual_item video').load();
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

				var boardSlideCount = null;
				$boardSlide.on('init', function (event, slick){
					boardSlideCount = slick.slideCount; //10
					setboardSlideCount();
					setboardSlideCurrentSlideNumber(slick.currentSlide);
				});
				$boardSlide.on('beforeChange', function(event, slick, currentSlide, nextSlide){
					setboardSlideCurrentSlideNumber(nextSlide);
				});
				function setboardSlideCount() {
					var $boardStateBar = $boardBox.find('.barbox'),
						ThumbnaiWidth = (100 / ItemLength);
					$boardStateBar.attr('data-total', ItemLength);
					$boardBox.find('.thumbnailbox').find('li').css('width', ThumbnaiWidth+'%');
				}
				function setboardSlideCurrentSlideNumber(currentSlide) {
					var $boardStateBar = $boardBox.find('.statebar'),
						StateBarWidth = 0,
						current = currentSlide + 1;
					StateBarWidth = (100 / boardSlideCount) * current;
					$boardStateBar.attr('data-current', currentSlide + 1).css('width', StateBarWidth+'%');
				}

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

				//통합의 역사
				var $cjHsty = $('.cj_history'),
					$hstySlideList = $cjHsty.find('.history_slide_list');

				$hstySlideList.slick({
					autoplay : false,
					dots:true,
					slidesToShow: 4,
					slidesToScroll: 4,
					infinite: false,
					prevArrow : false,
					nextArrow : false,
					swipe:false,
					draggable:false,
					responsive: [
						{
							breakpoint: 1401,
							settings: {
								swipe:true,
								draggable:true,
								slidesToShow  : 2,
								slidesToScroll: 2
							}
						},
						{
							breakpoint: 641,
							settings: {
								swipe:true,
								draggable:true,
								slidesToShow  : 1,
								slidesToScroll: 1
							}
						}
					]
				});
				$window.on('screen:tablet screen:phone', function(event) {
					//기념행사 일정 달력 접어두기
					$('.table_btn').on('click', function() {
						var $this = $(this),
							$Title = $this.parent('.sch_table_control'),
							$Item = $Title.parent('.sch_table_box'),
							$Layer = $Title.find('.sch_table'),
							IsActive = $Item.is('.active');
						if(!IsActive){
							$this.addClass('active').attr("title","일정 닫기").text('기념행사 일정 달력 접어두기');
							$Item.addClass('active');
							$Layer.slideDown(slow);
						} else {
							$this.removeClass('active').attr("title","일정 열기").text('기념행사 일정 달력 펼쳐보기');
							$Item.removeClass('active');
							$Layer.slideUp(slow);
						}
					});
				});
			});
		})(jQuery);
	}
}catch(e) {
	console.error(e);
}