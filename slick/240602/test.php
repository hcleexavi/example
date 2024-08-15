<?/*
	https://kimyang-sun.tistory.com/entry/HTML-CSS-jQuery-slick-슬라이더-transition-적용-예제
    https://codepen.io/kimyangsun/pen/RwPomGv
    https://www.inflearn.com/blogs/3749 - 슬릭 슬라이더(Slick Slider) 옵션 한글 정리
    https://kenwheeler.github.io/slick/


	2024-06-02, hclee, 
		테스트 이미지 폴더
			slick/240602/
			src='img/xx.gif'

		최종 상용 이미지 폴더
			www/img/main, common, contents, test
			src='/img/main/xxx.gif'
	



*/?>
<!doctype html>
<html lang="ko">
<head>
<title>(주)인페이스 슬라이드 테스트</title>
<!-- 모바일에서 화면배율을 디바이스 크기 기준으로 설정 -->
<!-- 이게 안되면 pc에서의 100px과 모바일에서의 100px이 디바이스 성능에 따라 달라집니다. -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" type="image/x-icon" href="http://infaith.localhost/uploads/favicon/d2f4e4927e52a50700b910ef8375458f.ico" />

<!-- 제이쿼리 불러오기 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- slick 불러오기 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">

<!-- XEIcon 폰트 불러오기 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">

<link rel="stylesheet" href="style.css">
</head>
<body>
<!-- 메인 슬라이더 -->
<div class="main-visual">
    <div class="main-slider">
        <div class="slider-visual slider-visual-1">
            <div class="visual-pc img-box only-pc">
                <div class="img" style="background-image:url('img/main_visual01.jpg');"></div>
            </div>
            <div class="visual-m img-box only-mobile">
                <img src="img/main_visual01.jpg" alt="">
            </div>
            <div class="visual-txt">
                <div class="inner-txt-con">
                    <strong class="inner-txt inner-txt-1">무 선</strong>
                    <p class="inner-txt inner-txt-2  white-txt">
                        <b>와이파이</b> 무선 3축 진동 및 온도 모니터링
                    </p>
                    <p class="inner-txt inner-txt-3  white-txt">
                        <b>클라우드 플랫폼</b> 사용
                        <br class="only-mobile">
                        <b>기존 시스템</b> 인터페이스
                    </p>
                </div>
            </div>
        </div>
        
        <div class="slider-visual slider-visual-2">
            <div class="visual-pc img-box only-pc">
                <div class="img" style="background-image:url('img/main_visual02.jpg');"></div>
            </div>
            <div class="visual-m img-box only-mobile">
                <img src="img/main_visual02.jpg" alt="">
            </div>
            <div class="visual-txt">
                <div class="inner-txt-con">
                    <strong class="inner-txt inner-txt-1">센 서</strong>
                    <p class="inner-txt inner-txt-2">
                        <b>실시간 진동 감시용</b> 통합 진동 센서
                    </p>
                    <p class="inner-txt inner-txt-3">
                        <b>원격 센서 파라미터</b> 설정 변경
                        <br class="only-mobile">
                        <b>원격 Self-Test, Watchdog</b>등 센서 자가 시험
                    </p>
                </div>
            </div>
        </div>
        
        <div class="slider-visual slider-visual-3">
            <div class="visual-pc img-box only-pc">
                <div class="img" style="background-image:url('img/main_visual03.jpg');"></div>
            </div>
            <div class="visual-m img-box only-mobile">
                <img src="img/main_visual03.jpg" alt="">
            </div>
            <div class="visual-txt">
                <div class="inner-txt-con">
                    <strong class="inner-txt inner-txt-1">시각화</strong>
                    <p class="inner-txt inner-txt-2 white-txt">
                        <b>보이지 않는 진동을</b> 눈으로 본다 !
                    </p>
                    <p class="inner-txt inner-txt-3 white-txt">
                        <b>동영상</b> & <b>시간파형</b> & <b>스펙트럼</b> 
                        <br class="only-mobile">
                        <b>센서 설치</b> 없이 <b>무한정 측정</b>
                    </p>
                </div>
            </div>
        </div>
        
        <div class="slider-visual slider-visual-3">
            <div class="visual-pc img-box only-pc">
                <div class="img" style="background-image:url('img/main_visual02.jpg');"></div>
            </div>
            <div class="visual-m img-box only-mobile">
                <img src="img/main_visual02.jpg" alt="">
            </div>
            <div class="visual-txt">
                <div class="inner-txt-con">
                    <strong class="inner-txt inner-txt-1">정밀측정</strong>
                    <p class="inner-txt inner-txt-2 white-txt">
                        <b>보이지 않는 진동을</b> 눈으로 본다 !
                    </p>
                    <p class="inner-txt inner-txt-3 white-txt">
                        <b>동영상</b> & <b>시간파형</b> & <b>스펙트럼</b> 
                        <br class="only-mobile">
                        <b>센서 설치</b> 없이 <b>무한정 측정</b>
                    </p>
                </div>
            </div>
        </div>
       
    </div>
    <div class="arrow-con">
        <div class="arrows"></div>
    </div>
</div>

<script src="script.js?001"></script>
</body>