<?/* 
	https://ctrlcccv.github.io/ctrlcccv-demo/2023-10-30-scroll-show/

*/?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<title>jQuery - 스크롤 내리면 나타나는 애니메이션 | 컨트롤 + CCCV</title>
<meta name="description" content="jQuery - 스크롤 내리면 나타나는 애니메이션 | 컨트롤 + CCCV" />
<meta name="robots" content="noindex">
<link rel="shortcut icon" href="https://ctrlcccv.github.io/favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;500;700&amp;display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<style>
* {margin: 0;padding: 0;font-family: 'Noto Sans KR', sans-serif;box-sizing: border-box;box-sizing: border-box;}
.blog { display: flex; justify-content: center; align-items: center; position: fixed; bottom:50px; left: 50%; width: 160px; height: 46px; background-size: 300% 100%; border-radius:23px; font-size: 16px; font-weight: 500; color: #fff; z-index: 100; background-image: linear-gradient(to right, #29323c, #485563, #2b5876, #4e4376); transform: translate(-50%,0); text-decoration: none; transition: all .4s ease-in-out; } 
.blog:hover { background-position: 100% 0; box-shadow: 0 2px 8px 0 rgba(45, 54, 65, 0.65); } 

.con {height: 100vh;background: #8ab4f8;}
.scroll_wrap {overflow: hidden;}
.scroll_on {padding:50px 0;font-size: 24px;font-weight:700;text-align: center;opacity: 0;transition: all 1s;}
.scroll_on.active {opacity: 1 !important;transform: translate(0, 0) !important;}
.scroll_on.type_top {transform: translate(0, -100px); background-color: red;}
.scroll_on.type_bottom {transform: translate(0, 100px);}
.scroll_on.type_left {transform: translate(-100px, 0);}
.scroll_on.type_right {transform: translate(100px, 0);background-color: green;}
</style>

</head>
<body>
<div class="con"></div>
<div class="scroll_wrap">
    <div class="scroll_on">제자리에서 나타납니다.</div>
    <div class="scroll_on type_top">위에서 나타납니다.</div>
    <div class="scroll_on type_left">왼쪽에서 나타납니다.</div>
    <div class="scroll_on type_right">오른쪽에서 나타납니다.</div>
    <div class="scroll_on type_bottom">밑에서 나타납니다.</div>
</div>
<div class="con"></div>

<a href="https://ctrlcccv.github.io/code/2023-10-30-scroll-show/" class="blog" target="_blank">컨트롤 + CCCV</a>

<script>
$(document).ready(function() {
    // 클래스가 "scroll_on"인 모든 요소를 선택합니다.
    const $counters = $(".scroll_on");
    
    // 노출 비율(%)과 애니메이션 반복 여부(true/false)를 설정합니다.
    const exposurePercentage = 100; // ex) 스크롤 했을 때 $counters 컨텐츠가 화면에 100% 노출되면 숫자가 올라갑니다.
    const loop = true; // 애니메이션 반복 여부를 설정합니다. (true로 설정할 경우, 요소가 화면에서 사라질 때 다시 숨겨집니다.)

    // 윈도우의 스크롤 이벤트를 모니터링합니다.
    $(window).on('scroll', function() {
        // 각 "scroll_on" 클래스를 가진 요소에 대해 반복합니다.
        $counters.each(function() {
            const $el = $(this);
    
            // 요소의 위치 정보를 가져옵니다.
            const rect = $el[0].getBoundingClientRect();

            const winHeight = window.innerHeight; // 현재 브라우저 창의 높이
            const contentHeight = rect.bottom - rect.top; // 요소의 높이
            
            // 요소가 화면에 특정 비율만큼 노출될 때 처리합니다.
            if (rect.top <= winHeight - (contentHeight * exposurePercentage / 100) && rect.bottom >= (contentHeight * exposurePercentage / 100)) {
                $el.addClass('active');
            }
            // 요소가 화면에서 완전히 사라졌을 때 처리합니다.
            if (loop && (rect.bottom <= 0 || rect.top >= window.innerHeight)) {
                $el.removeClass('active');
            }
        });
    }).scroll();
});
</script>
</body>
</html>