<?/*
https://kimyang-sun.tistory.com/entry/HTML-CSS-jQuery-slick-슬라이더-transition-적용-예제

*/?>

<!doctype html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<title>CSS</title>
		<style>
/*  폰트 적용 */
@import url('https://fonts.googleapis.com/css?family=Noto+Sans+KR:300,400&display=swap&subset=korean');

@import url('https://fonts.googleapis.com/css?family=Poppins:300,400&display=swap');

html {
    font-family: "Noto Sans KR", sans-serif;
}

/* 노말라이즈 */
body, ul, li, dl, dt, dd, h1, h2, h3, h4, h5, p, figure {
    margin:0;
    padding:0;
    list-style:none;
}

h1, h2, h3, h4, strong, th {
    font-weight:normal;
    font-family:inherit;
    color:inherit;
}

a {
    color:inherit;
    text-decoration:none;
}

/* 라이브러리 */
.img-box > img {
    width:100%;
    display:block;
}

.row::after {
    content:"";
    display:block;
    clear:both;
}

.cell {
    float:left;
    box-sizing:border-box;
}

.cell-right {
    float:right;
    box-sizing:border-box;
}

.margin-0-auto {
    margin:0 auto;
}

.block {
    display:block;
}

.inline-block {
    display:inline-block;
}

.text-align-center {
    text-align:center;
}

.line-height-0-ch-only {
    line-height:0;
}

.line-height-0-ch-only > * {
    line-height:normal;
}

.relative {
    position:relative;
}

.absolute-left {
    position:absolute;
    left:0;
}

.absolute-right {
    position:absolute;
    right:0;
}

.absolute-middle {
    position:absolute;
    top:50%;
    transform:translateY(-50%);
}

.table {
    display:table;
}

.table-cell {
    display:table-cell;
}

input, button, select, fieldset {
    -webkit-border-radius: 0;
    border-radius: 0;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border:0;
    background-color:transparent;
}

fieldset {
    padding:0;
    margin:0;
}

.blind, legend {
    overflow: hidden;
    position: absolute;
    width: 1px;
    height: 1px;
    font-size: 12px;
    clip: rect(1px, 1px, 1px, 1px);
}

button {
    cursor:pointer;
    padding:0;
}

.font-poppins {
    font-family: 'Poppins';
}

/* 커스텀 */
html, body {
    overflow-x:hidden;
    background-color:#afafaf;
}

body {
    height:2000px;
}

/* 메인 슬라이더 */
.main-visual {
    width:100%;
    height:calc(100vh - 83px);
    position:relative;
}

.main-visual .main-slider {
    font-size:0;
    position:relative;
    width:100%;
    height:100%;
}

.main-visual > .main-slider .slick-list,
.main-visual > .main-slider .slick-track {
    height:100%;
}

/* 이 코드는 옆으로 넘어가는 슬라이더일 경우 이미지가 background css 로 되어 있으면 absolute 의 집인 relative 를 따로 주어야함. 기존의 상위에 relative 는 너무 가로 길이가 김 (옆으로 넘어가는 슬라이더이기 때문) 거기에 추가적으로 슬라이더 트랜지션에 scale 이 들어가 있다면 옆으로 침범하기 때문에 overflow:hidden 도 주어야 한다 */
.main-visual > .main-slider .slick-slide {
    position:relative;
    overflow:hidden;
}

.main-visual .main-slider .slider-visual > .img-box > .img {
    background-repeat:no-repeat;
    background-position:center top;
    background-size:cover;
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    transform:scale(1.15);
    transition:transform 0s 4s;
}

/* 메인 슬라이더 배너 애니메이션 */
.main-visual .main-slider .slick-active .img-box > .img {
    transform:scale(1);
    transition:transform 9s;
}

/* 슬라이더 이동 버튼 */
.main-visual > .arrow-con {
    position:absolute;
    bottom:67px;
    width:100%;
}

.main-visual > .arrow-con > .arrows {
    max-width:1645px;
    margin:0 auto;
}

.main-visual > .arrow-con > .arrows::after {
    content:"";
    display:block;
    clear:both;
}

.main-visual > .arrow-con > .arrows > .slick-arrow {
    position:static;
    font-size:15px;
    color:#fff;
    width:auto;
    height:auto;
    line-height:normal;
}

.main-visual > .arrow-con > .arrows > .slick-arrow::before {
    display:none;
}

.main-visual > .arrow-con > .arrows > .slick-prev {
    float:left;
}

.main-visual > .arrow-con > .arrows > .slick-next {
    float:right;
}

.main-visual > .arrow-con > .arrows > .slick-arrow > i {
    font-size:24px;
}

.main-visual > .arrow-con > .arrows > .slick-arrow > i,
.main-visual > .arrow-con > .arrows > .slick-arrow > span {
    display:inline-block;
    vertical-align:middle;
}

/* 슬라이더 내부 텍스트 */
.main-visual .main-slider .slider-visual > .visual-txt {
    position:absolute;
    left:0;
    bottom:150px;
    width:100%;
    box-sizing:border-box;
}

.main-visual .main-slider .slider-visual > .visual-txt > .inner-txt-con {
    max-width:1645px;
    margin:0 auto;
}

.main-visual .main-slider .slider-visual > .visual-txt > .inner-txt-con > .inner-txt-1 {
    display:inline-block;
    font-size:14px;
    color:#fff;
    padding:10px;
    margin-bottom:15px;
    border-radius:5px;
    background-color:#3a75bf;
    letter-spacing:1px;
    line-height:1;
}

.main-visual .main-slider .slider-visual > .visual-txt > .inner-txt-con > .inner-txt-2 {
    font-size:50px;
    font-weight:300;
    color:#1c2939;
    letter-spacing:-2px;
    line-height:65px;
    margin-bottom:15px;
}

.main-visual .main-slider .slider-visual > .visual-txt > .inner-txt-con > .inner-txt-2 > b {
    color:#286abd;
}

.main-visual .main-slider .slider-visual > .visual-txt > .inner-txt-con > .inner-txt-3 {
    font-size:20px;
    color:#303030;
    letter-spacing:1px;
    opacity:.9;
    line-height:35px;
}

.main-visual .main-slider .slider-visual-3 > .visual-txt > .inner-txt-con > .white-txt,
.main-visual .main-slider .slider-visual-4 > .visual-txt > .inner-txt-con > .white-txt {
    color:#fff;
}

/* 메인 슬라이더 내부 텍스트 애니메이션 */
.main-visual .main-slider .slider-visual > .visual-txt > .inner-txt-con > .inner-txt {
    transform:translateX(-50px);
    opacity:0;
    transition:opacity 0s 3s, transform 0s 3s;
}

.main-visual .main-slider .slick-active .visual-txt > .inner-txt-con > .inner-txt {
    transform:translateX(0);
    opacity:1;
    transition:opacity 2s, transform 2s;
}

.main-visual .main-slider .slick-active .visual-txt > .inner-txt-con > .inner-txt-1 {
    transition-delay:2s;
}

.main-visual .main-slider .slick-active .visual-txt > .inner-txt-con > .inner-txt-2 {
    transition-delay:2.3s;
}

.main-visual .main-slider .slick-active .visual-txt > .inner-txt-con > .inner-txt-3 {
    transition-delay:2.5s;
}

.main-visual .main-slider .reset-animation .visual-txt > .inner-txt-con > .inner-txt {
    transform:translateX(-50px);
    opacity:0;
    transition:all 0s;
}


/* 메인 슬라이더 반응형 */
@media (max-width:1220px){
    .main-visual {
        height:calc(100vh - 56px);
    }
}

/* 메인 슬라이더 내부 텍스트 반응형 */
@media (max-width:1620px){
    .main-visual .main-slider .slider-visual > .visual-txt {
        padding:0 15px;
    }
}

@media (max-width:800px){
    .main-visual,
    .main-visual > .main-slider .slick-list,
    .main-visual > .main-slider .slick-track {
        height:auto;
    }
    
    /* 슬라이더 이동 버튼 반응형 */
    .main-visual > .arrow-con {
        bottom:25px;
    }
    
    .main-visual > .arrow-con > .arrows > .slick-arrow {
        font-size:13px;
    }
    
    /* 슬라이더 내부 텍스트 반응형 */
    .main-visual .main-slider .slider-visual > .visual-txt {
        top:16.18%;
        bottom:auto;
        text-align:center;
    }
    
    .main-visual .main-slider .slider-visual > .visual-txt > .inner-txt-con > .inner-txt-1 {
        font-size:11px;
        margin-bottom:8px;
        padding:4.5px 17.5px;
    }
    
    .main-visual .main-slider .slider-visual > .visual-txt > .inner-txt-con > .inner-txt-2 {
        font-size:20px;
        margin-bottom:10px;
        line-height:1.18em;
    }
    
    .main-visual .main-slider .slider-visual > .visual-txt > .inner-txt-con > .inner-txt-3 {
        font-size:13px;
        line-height:18px;
    }
}

/* 반응형 라이브러리 */
@media (min-width:801px){
    .only-mobile {
        display:none;
    }
}

@media (max-width:800px){
    .only-pc {
        display:none;
    }
}

		</style>
	</head>
	<body>
<!-- 모바일에서 화면배율을 디바이스 크기 기준으로 설정 -->
<!-- 이게 안되면 pc에서의 100px과 모바일에서의 100px이 디바이스 성능에 따라 달라집니다. -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- 제이쿼리 불러오기 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- slick 불러오기 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">

<!-- XEIcon 폰트 불러오기 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">

<!-- 메인 슬라이더 -->
<div class="main-visual">
    <div class="main-slider">
        <div class="slider-visual slider-visual-1">
            <div class="visual-pc img-box only-pc">
                <div class="img" style="background-image:url('/html/slick/240602/img/main_visual02.jpg');"></div>
            </div>
            <div class="visual-m img-box only-mobile">
                <img src="/html/slick/240602/img/main_visual02.jpg" alt="">
            </div>
            <div class="visual-txt">
                <div class="inner-txt-con">
                    <strong class="inner-txt inner-txt-1">DEVELOPMENT</strong>
                    <p class="inner-txt inner-txt-2">
                        <b>고객 맞춤형</b> 제품 개발
                    </p>
                    <p class="inner-txt inner-txt-3">
                        <b>고객의 니즈를 충족하여 </b>
                        <br class="only-mobile">
                        <b>글로벌 시장을 선도</b>하겠습니다.
                    </p>
                </div>
            </div>
        </div>
        <div class="slider-visual slider-visual-2">
            <div class="visual-pc img-box only-pc">
                <div class="img" style="background-image:url('/html/slick/240602/img/main_visual01.jpg');"></div>
            </div>
            <div class="visual-m img-box only-mobile">
                <img src="/html/slick/240602/img/main_visual01.jpg" alt="">
            </div>
            <div class="visual-txt">
                <div class="inner-txt-con">
                    <strong class="inner-txt inner-txt-1">QUALITY</strong>
                    <p class="inner-txt inner-txt-2">
                        <b>엄격한</b> 품질 관리
                    </p>
                    <p class="inner-txt inner-txt-3">
                        <b>고객사의 품질기준을 </b>
                        <br class="only-mobile">
                        <b>완벽히 만족</b> 시켜 드리겠습니다
                    </p>
                </div>
            </div>
        </div>
        <div class="slider-visual slider-visual-3">
            <div class="visual-pc img-box only-pc">
                <div class="img" style="background-image:url('/html/slick/240602/img/main_visual02.jpg');"></div>
            </div>
            <div class="visual-m img-box only-mobile">
                <img src="/html/slick/240602/img/main_visual02.jpg" alt="">
            </div>
            <div class="visual-txt">
                <div class="inner-txt-con">
                    <strong class="inner-txt inner-txt-1">INNOVATION</strong>
                    <p class="inner-txt inner-txt-2 white-txt">
                        <b>신기술로</b> 새로운 가치 창출
                    </p>
                    <p class="inner-txt inner-txt-3 white-txt">
                        <b>R&D투자</b>와 <b>창의적인 아이디어</b>로 
                        <br class="only-mobile">
                        끊임없이 <b>신기술에 도전</b>합니다
                    </p>
                </div>
            </div>
        </div>
        <div class="slider-visual slider-visual-4">
            <div class="visual-pc img-box only-pc">
                <div class="img" style="background-image:url('/html/slick/240602/img/main_visual03.jpg');"></div>
            </div>
            <div class="visual-m img-box only-mobile">
                <img src="/html/slick/240602/img/main_visual03.jpg" alt="">
            </div>
            <div class="visual-txt">
                <div class="inner-txt-con">
                    <strong class="inner-txt inner-txt-1">CUSTOMER IMPRESSION </strong>
                    <p class="inner-txt inner-txt-2 white-txt">
                        <b>고객과의</b> 약속 이행
                    </p>
                    <p class="inner-txt inner-txt-3 white-txt">
                        어떤 상황에서도
                        <br class="only-mobile">
                        <b>고객감동을 실현</b>하겠습니다
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="arrow-con">
        <div class="arrows"></div>
    </div>
</div>

	</body>
<script>
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
    fade:true,
    slidesToShow: 1,
    draggable:false,
    speed:4000,
    lazyLoad: 'progressive',
    //autoplay:true,
    autoplaySpeed:9000,
    pauseOnFocus:false,
    pauseOnHover:false,
    appendArrows:$('.arrow-con > .arrows'),
    prevArrow:'<button type="button" class="slick-prev"><i class="xi-angle-left-min"></i><span class="font-poppins">PREV</span></button>',
    nextArrow:'<button type="button" class="slick-next"><span class="font-poppins">NEXT</span><i class="xi-angle-right-min"></i></button>',
});
</script>
</html>