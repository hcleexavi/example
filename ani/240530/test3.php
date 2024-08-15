<?/*
	https://ctrlcccv.github.io//ctrlcccv-demo/2023-11-22-scroll-text/
*/?>

<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<title>jQuery - 스크롤 내리면 나타나는 텍스트 | 컨트롤 + CCCV</title>
<meta name="description" content="jQuery - 스크롤 내리면 나타나는 텍스트 | 컨트롤 + CCCV" />
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

.top {height: 100vh;display: flex;align-items: center;justify-content: center;font-size: 20px;font-weight: 500;}
.content {overflow: hidden;}
.content2 {overflow: hidden;padding-bottom: 140px;margin-bottom: -140px;}
.scroll_txt {text-align: center;font-size: 24px;font-weight: 700;padding:50px 0; }
</style>
</head>

<body>
<div class="top">스크롤을 내려보세요!</div>
<div class="content">
    <p class="scroll_txt type_fade" style="background-color: #faa;opacity:.5">스크롤을 내리면 텍스트가 나타납니다.A-1</p>
    <p class="scroll_txt type_fade">스크롤을 내리면 텍스트가 나타납니다.A-2</p>
    <p class="scroll_txt type_fade">스크롤을 내리면 텍스트가 나타납니다.A-3</p>

    <p class="scroll_txt type_size" style="background-color: #faa;opacity:.5">스크롤을 내리면 텍스트의 크기가 변경됩니다.B-1</p>
    <p class="scroll_txt type_size">스크롤을 내리면 텍스트의 크기가 변경됩니다.B-2</p>
    <p class="scroll_txt type_size">스크롤을 내리면 텍스트의 크기가 변경됩니다.B-3</p>

    <p class="scroll_txt type_right" style="background-color: #faa;opacity:.5">스크롤을 내리면 텍스트가 오른쪽에서 왼쪽으로 이동합니다.C-1</p>
    <p class="scroll_txt type_right">스크롤을 내리면 텍스트가 오른쪽에서 왼쪽으로 이동합니다.C-2</p>
    <p class="scroll_txt type_right">스크롤을 내리면 텍스트가 오른쪽에서 왼쪽으로 이동합니다.C-3</p>
</div>

<div class="content">
    <div class="scroll_txt type_size" style="text-align:center">
        <img src="http://www.infaith.kr/html/_skin/seil/images/main/main_bg_company02.png" title="스크롤을 내리면 텍스트의 크기가 변경됩니다.B-2"/>
    </div>
</div>
<div class="content2">
    <p class="scroll_txt type_bottom" style="background-color: #faa;opacity:.5">스크롤을 내리면 텍스트가 아래에서 위로 이동합니다.D-1</p>
    <p class="scroll_txt type_bottom">스크롤을 내리면 텍스트가 아래에서 위로 이동합니다.D-2</p>
    <p class="scroll_txt type_bottom">스크롤을 내리면 텍스트가 아래에서 위로 이동합니다.D-3</p>
</div>
<div class="top"></div>

<a href="https://ctrlcccv.github.io/code/2023-11-22-scroll-text/" class="blog" target="_blank">컨트롤 + CCCV</a>

<script>
// elements 배열을 정의합니다.
// 이 배열에는 여러 HTML 요소와 그에 대한 스타일 변화의 정보가 담겨 있습니다.
const elements = [
    // 첫 번째 요소: 페이드 효과가 있는 스크롤 텍스트
    {
        $element: $('.scroll_txt.type_fade'),
        opacity: 60, // 불투명도 전환 위치 설정 (%) => 요소가 화면의 60% 이상 올라가면 opacity 속성의 값이 1로 설정되어 완전히 보이게 됩니다.
    },
    // 두 번째 요소: 크기 변화가 있는 스크롤 텍스트
    {
        $element: $('.scroll_txt.type_size'),
        initScale: 200, // 초기 크기 비율 (%)
        finalScale: 100, // 최종 크기 비율 (%)
    },
    // 세 번째 요소: 오른쪽에서 왼쪽으로 이동하는 스크롤 텍스트
    {
        $element: $('.scroll_txt.type_right'),
        initTranslateX: 100, // 초기 X축 이동 거리 (px)
        finalTranslateX: 0, // 최종 X축 이동 거리 (px)
    },
    // 네 번째 요소: 아래에서 위로 이동하는 스크롤 텍스트
    {
        $element: $('.scroll_txt.type_bottom'),
        initTranslateY: 140, // 초기 Y축 이동 거리 (px)
        finalTranslateY: 0, // 최종 Y축 이동 거리 (px)
    },
];

// 기본값 설정: 속성이 정의되지 않은 경우 기본값을 할당합니다.
elements.forEach(element => {
    element.opacity = element.opacity || 40;
    element.initScale = element.initScale || 100;
    element.finalScale = element.finalScale || 100;
    element.initTranslateX = element.initTranslateX || 0;
    element.finalTranslateX = element.finalTranslateX || 0;
    element.initTranslateY = element.initTranslateY || 0;
    element.finalTranslateY = element.finalTranslateY || 0;
});

$(window).scroll(() => {
    const windowHeight = window.innerHeight; // 브라우저 창의 높이
    const scrollHeight = document.documentElement.scrollHeight; // 문서 전체의 높이
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop; // 현재 스크롤 위치

    // elements 배열의 각 요소에 대해 스크롤에 따른 스타일 변화를 적용합니다.
    elements.forEach(({ $element, opacity, finalScale, initScale, initTranslateX, finalTranslateX, initTranslateY, finalTranslateY }) => {
        const opacityThreshold = windowHeight * opacity / 100; // 불투명도 적용 임곗값 계산

        $element.each(function() {
            const elemTop = this.getBoundingClientRect().top; // 요소의 상단 위치
            const distance = Math.max(0, windowHeight - elemTop); // 요소와 창 하단 사이의 거리
            let opacity, scale, translateX, translateY;

            // 스크롤 위치에 따라 스타일을 조정합니다.
            if (distance >= opacityThreshold || scrollTop + windowHeight >= scrollHeight) {
                // 불투명도와 변환을 최종값으로 설정
                opacity = 1;
                scale = finalScale / 100;
                translateX = finalTranslateX;
                translateY = finalTranslateY;
            } else if (distance > 0) {
                // 거리에 따라 불투명도와 변환을 점진적으로 조정
                const distanceRatio = distance / opacityThreshold;
                opacity = distanceRatio;
                scale = (distanceRatio * (finalScale - initScale) + initScale) / 100;
                translateX = distanceRatio * (finalTranslateX - initTranslateX) + initTranslateX;
                translateY = distanceRatio * (finalTranslateY - initTranslateY) + initTranslateY;
            } else {
                return;
            }

            // 계산된 스타일을 적용합니다.
console.log($(this)[0].className);            
console.log(`${translateX}px, ${translateY}px, ${scale.toFixed(2)}`);           
            $(this).css({
                opacity: opacity.toFixed(2),
                transform: `translateX(${translateX}px) translateY(${translateY}px) scale(${scale.toFixed(2)})`
            });
        });
    });
});


</script>
</body>
</html>
