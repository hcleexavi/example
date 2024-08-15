<!DOCTYPE html>
<html lang="ko">
<head>
  <base href="https://www.cheongju.go.kr/cj10th/index.do">
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0, user-scalable=yes" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta property="og:title" content="청주시 통합10주년 사이트" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.cheongju.go.kr/cj10th/index.do" />
  <meta property="og:image" content="https://www.cheongju.go.kr/site/cj10th/images/main/img_meta.jpg" />
  <link rel="stylesheet" type="text/css" href="/site/cj10th/css/font.css" />
  <link rel="stylesheet" type="text/css" href="/site/cj10th/css/main.css" />
  <script src="/common_2018/js/jquery-1.12.4.HS-20200709.min.js"></script>
  <script src="/site/cj10th/common/js/jquery.easing.1.3.min.js"></script>
  <script src="/site/cj10th/common/js/plugins.js"></script>
  <script src="/site/cj10th/common/js/layout.js"></script>
  <script src="/site/cj10th/js/jquery.waypoints.min.js"></script>
  <script src="/site/cj10th/js/jquery.responsive.min.js"></script>
  <script src="/site/cj10th/js/plugins.js"></script>
  <script src="/site/cj10th/js/common.js"></script>
  <script src="/site/cj10th/js/main.js"></script>
  <title>청주시 통합10주년 사이트</title>

  <script>
        //<![CDATA[
	 function clickFrame(obj_id, obj_url){
		$.ajax({
			url : obj_url,
			method : 'get',
			dataType : 'html',
			success : function(data){
				$("#"+obj_id).html(data);
			}
		});
	}

        function getCookie(name) {
            var nameOfCookie = name + "=";
            var x = 0
            while ( x <= document.cookie.length ) {
                var y = (x+nameOfCookie.length);
                if ( document.cookie.substring( x, y ) == nameOfCookie ) {
                    if ( (endOfCookie=document.cookie.indexOf( ";",y )) == -1 )
                        endOfCookie = document.cookie.length;
                    return unescape( document.cookie.substring(y, endOfCookie ) );
                }
                x = document.cookie.indexOf( " ", x ) + 1;
                if ( x == 0 )
                    break;
            }
            return "";
        }

        //팝업
        function openWin() {
            if(getCookie("popElection") != "done") {
                var sdate= new Date("2024/03/30 00:00:00");
                var edate= new Date("2024/04/10 17:59:59");
                if(Date.now() >= sdate && Date.now() <= edate){
                  

                }
	    }

        }
		

        function changeIframeUrl(obj_id,l_url) {

            var obj_src = document.getElementById(obj_id).src;
            var str = "";
            if(obj_id == 'latest1'){
                str = "https://www.cheongju.go.kr/site/www_2019/iframe/iframe2.html";
            }
            if(obj_id == 'latest2'){
                str = "https://www.cheongju.go.kr/site/www_2019/iframe/iframe3.html";
            }

            if(obj_src.indexOf('https') < 0){
                str = str.replace('https','http');
            }

            if(obj_src === str) {
                $("#"+obj_id).prop("src",l_url);
            }

        }
        //]]>
    </script>


    <style type="text/css">
        #divpopup1 {position:absolute; left:100px; top:200px; max-width:500px; margin-left:auto; margin-right:auto; z-index:999;}
        #divpopup1 img {border:1px solid #d5dae2; box-sizing:border-box;}
        #divpopup1 .divpopup_form {padding-top:3px; padding-bottom:3px; background:#000;}
        #divpopup1 .divpopup_form input {vertical-align:middle; margin-left:5px;}
        #divpopup1 .divpopup_form label {vertical-align:middle; margin-left:5px;}
        #divpopup1 .divpopup_chk {color:#fff; float:left; vertical-align:middle;}
        #divpopup1 .divpopup_close {float:right; margin-right:5px;}
        #divpopup1 .divpopup_close a {text-decoration:none;}
        #divpopup1 .divpopup_close span {color:#fff333; font-size:14px; line-height:20px; font-weight:600; vertical-align:middle;}
        #divpopup1 .img_area {height:500px; overflow-y:scroll;}
        #divpopup1 .m_img {display:none;}

        #divpopup2 {position:absolute; right:100px; top:200px; max-width:500px; margin-left:auto; margin-right:auto; z-index:1000;}
        #divpopup2 img { box-sizing:border-box;}
        #divpopup2 .divpopup_form {padding-top:3px; padding-bottom:3px; background:#000; display:inline-block; width:100%;}
        #divpopup2 .divpopup_form input {vertical-align:middle; margin-left:5px;}
        #divpopup2 .divpopup_form label {vertical-align:middle; margin-left:5px;}
        #divpopup2 .divpopup_chk {color:#fff; float:left; vertical-align:middle;}
        #divpopup2 .divpopup_close {float:right; margin-right:5px;}
        #divpopup2 .divpopup_close a {text-decoration:none;}
        #divpopup2 .divpopup_close span {color:#fff333; font-size:14px; line-height:20px; font-weight:600; vertical-align:middle;}
        #divpopup2 .img_area {height:500px; overflow-y:scroll;}
        #divpopup2 .m_img {display:none;}
        
        #divpopup3 {position:absolute; right:35%; top:200px; max-width:500px; margin-left:auto; margin-right:auto; z-index:1000;}
        #divpopup3 img { box-sizing:border-box;}
        #divpopup3 .divpopup_form {padding-top:3px; padding-bottom:3px; background:#000; display:inline-block; width:100%;}
        #divpopup3 .divpopup_form input {vertical-align:middle; margin-left:5px;}
        #divpopup3 .divpopup_form label {vertical-align:middle; margin-left:5px;}
        #divpopup3 .divpopup_chk {color:#fff; float:left; vertical-align:middle;}
        #divpopup3 .divpopup_close {float:right; margin-right:5px;}
        #divpopup3 .divpopup_close a {text-decoration:none;}
        #divpopup3 .divpopup_close span {color:#fff333; font-size:14px; line-height:20px; font-weight:600; vertical-align:middle;}
        #divpopup3 .img_area {height:500px; overflow-y:scroll;}
        #divpopup3 .m_img {display:none;}
        @media screen and (max-width:800px){
            #divpopup1 {top:5%; left:0; right:0;}
            #divpopup2 {top:5%; left:0; right:0;}
            #divpopup3 {top:5%; left:0; right:0;}
        }
        @media screen and (max-width:640px){
            #divpopup1 {width:94%;}
            #divpopup1 img {max-width:100%;}
            /*#divpopup1 {width:300px;}*/
            #divpopup1 .w_img {display:none;}
            #divpopup1 .m_img {display:block;}

            #divpopup2 {width:94%;}
            #divpopup2 img {max-width:100%;}
            /*#divpopup2 {width:300px;}*/
            #divpopup2 .w_img {display:none;}
            #divpopup2 .m_img {display:block;}
            
            #divpopup3 {width:94%;}
            #divpopup3 img {max-width:100%;}
            /*#divpopup3 {width:300px;}*/
            #divpopup3 .w_img {display:none;}
            #divpopup3 .m_img {display:block;}
        }
    </style>
   
    <style>
        a:link {
            color : white;
        }
        a:visited {
            color : white;
        }
        a:hover {
            color : green;
        }
        a:active {
            color : green;
        }
    </style>

<!--<div id="divpopup1">-->
<!--    <form name="notice_form1" action="javascript:main_closeWind()">-->
<!--        <div class="divpopup_form clearfix">-->
<!--            <div class="divpopup_chk"><input type="checkbox" name="chkbox" id="chkbox1" value="checkbox"><label for="chkbox1">오늘 하루 동안 안 보기</label></div>-->
<!--            <div class="divpopup_close"><a href="#n" onclick="main_closeWind('divpopup1', 'notice_form1');"><span>[닫기]</span></a></div>-->
<!--        </div>-->
<!--    </form>-->
<!--    <a href="https://youtube.com/live/YQhKDy0mohw?feature=share" target="_blank" title="새창열림"><img src="/site/cj10th/images/main/popup_img6.png" alt="제 9회 청주시 시민의 날 통합 청주시 출범 10주년 기념식 응원댓글 이벤트 youtube LIVE 청주시 @cj_city 검색 2024.7.1.월 오후 2시" width="100%"></div>-->
<!--</a>-->

<!--<div id="divpopup2">-->
<!--    <form name="notice_form2" action="javascript:main_closeWind()">-->
<!--        <div class="divpopup_form clearfix">-->
<!--            <div class="divpopup_chk"><input type="checkbox" name="chkbox" id="chkbox2" value="checkbox"><label for="chkbox2">오늘 하루 동안 안 보기</label></div>-->
<!--            <div class="divpopup_close"><a href="#n" onclick="main_closeWind('divpopup2', 'notice_form2');"><span>[닫기]</span></a></div>-->
<!--        </div>-->
<!--    </form>-->
<!--    <div><img src="/site/cj10th/images/main/popup_img2.jpg" alt="통합 청주시 출범 10주년 http://youtube.com/@cj_city YOUTUBE 청주시청 공식유튜브 제 9회 청주시 시민의 날 통합 청주시 출범 10주년 기념식 2024.7.1(월) 오후 2시 청주예술의전당 대공연장 진행 김병재, 박혜은 식전행사 청주시립무용단 공연 기념식 청주시 시민대상 시상 통합 10주년 기념 유공자 표창 비전 선포식 기념공연 국악 서일도와 아이들, 성악 장관석(바리톤), 한윤옥(소프라노) 특별출연:가수 손태진, 윤서령 주최 청주시 주관 청주예총 문의 청주예총 사무국 043 223 4048 cjart21.org" width="100%"></div>-->
<!--</div>-->

	
	<!--20240229 추가 스크림트-->
<script type="text/javascript">

	var date = new Date();
	var year = String(date.getFullYear());
	var month = String(date.getMonth() + 1);
	var day = String(date.getDate());

	var hours = String(date.getHours());
	var minute = String(date.getMinutes());

	if (("" + month).length == 1){
		month = "0" + month;
	}
	if (("" + day).length == 1){
		day = "0" + day;
	}
	if (("" + hours).length == 1){
		hours = "0" + hours;
	}
	if (("" + minute).length == 1){
		minute = "0" + minute;
	}

	var todatehours = year + month + day + hours + minute;
	var intdate = parseInt(todatehours);
	var todate = year + "-" + month + "-" + day;

	cookiedata = document.cookie;
	//alert(cookiedata.indexOf("divpopup2=done"));
	/**기간을 설정할때 사용 앞이 시작시간, 뒤가 종료시간 2017년04월20일11시 부터 2017년04월22일 18시00분까지 보여짐 **/
	if (intdate <= 202403181800 || intdate >= 202407231800 || (cookiedata.indexOf("divpopup1=done") >= 0)) {
			document.all['divpopup1'].style.display = "none";
	}
	/**추가하고싶으면 위에 if 부터 } 까지 복사해서 divpopup2로 변경**/

</script>
<!--20240229 추가 스크립트 끝-->
</head>
<body id="main" class="main">
<div class="accessibility">
  <a href="#contents">본문 바로가기</a>
</div>
<div id="wrapper">
  <header id="header">
    <div class="header_box">
      <div class="logo_wrap">
        <h1 class="logo"><a href="./index.do"><span class="logo_img">청주시</span> <span class="logo_title">통합 10주년</span></a></h1>
        <div class="countdown">
          <span class="count_title">D</span>
          <span class="count_slash">-</span>
          <span class="count_title">D</span>
          <span class="count_title">A</span>
          <span class="count_title">Y</span>
        </div>
      </div>
      <ul class="header_item">
        <li class="go_home">
          <a href="/www/index.do">청주시청</a>
        </li>
        <li class="site_map">
          <a href="./sitemap.do?key=23751">사이트맵</a>
        </li>
      </ul>
      <div class="menu_show">
        <button type="button" class="menu_button">메뉴열기</button>
      </div>
    </div>
    <div class="lnb">
      <div class="menu_title">
                <span>
                    통합 10년 성과를 바탕으로<br>
                    세계로 나아가는<br>
                    글로벌 명품도시 청주
                </span>
      </div>
      <div class="wrap">
        <div class="lnb_topbox">
          <!-- 모바일용 -->
          <div class="m_logo">
            <a href="./index.do"><span class="logo_img">청주시</span> <span class="logo_title">통합 10주년</span></a>
          </div>
          <div class="go_home">
            <a href="/www/index.do"><span>청주시청</span></a>
          </div>
        </div>
        <nav class="menu after pulldown">
          <h2 class="skip">메뉴</h2>
          

<div class="depth depth1"><ul class="depth_list depth1_list clearfix"><li class="depth_item depth1_item"><a href="/cj10th/contents.do?key=23726" class="depth_text depth1_text" target="_self"><span>통합의 역사</span></a><div class="depth depth2"><ul class="depth_list depth2_list clearfix"><li class="depth_item depth2_item clearfix"><a href="/cj10th/contents.do?key=23726" class="depth_text depth2_text" target="_self" ><span>청주시장 인사말</span></a></li><li class="depth_item depth2_item clearfix"><a href="/cj10th/contents.do?key=23728" class="depth_text depth2_text" target="_self" ><span>통합의 발자취</span></a></li><li class="depth_item depth2_item clearfix"><a href="/cj10th/contents.do?key=23761" class="depth_text depth2_text" target="_self" ><span>통합의 순간들</span></a></li></ul></div></li><li class="depth_item depth1_item"><a href="/cj10th/contents.do?key=23737" class="depth_text depth1_text" target="_self"><span>10주년 기념행사</span></a><div class="depth depth2"><ul class="depth_list depth2_list clearfix"><li class="depth_item depth2_item clearfix"><a href="/cj10th/contents.do?key=23737" class="depth_text depth2_text" target="_self" ><span>행사일정</span></a></li><li class="depth_item depth2_item clearfix"><a href="/cj10th/contents.do?key=23738" class="depth_text depth2_text" target="_self" ><span>기념식</span></a></li><li class="depth_item depth2_item clearfix"><a href="/cj10th/contents.do?key=23739" class="depth_text depth2_text" target="_self" ><span>공연‧전시</span></a></li><li class="depth_item depth2_item clearfix"><a href="/cj10th/contents.do?key=23740" class="depth_text depth2_text" target="_self" ><span>소통‧꿀잼</span></a></li><li class="depth_item depth2_item clearfix"><a href="/cj10th/contents.do?key=23745" class="depth_text depth2_text" target="_self" ><span>홍보 동영상</span></a></li></ul></div></li><li class="depth_item depth1_item"><a href="/cj10th/selectBbsNttList.do?bbsNo=2284&amp;key=23741" class="depth_text depth1_text" target="_self"><span>소통·공감 10주년</span></a><div class="depth depth2"><ul class="depth_list depth2_list clearfix"><li class="depth_item depth2_item clearfix"><a href="/cj10th/selectBbsNttList.do?bbsNo=2284&amp;key=23741" class="depth_text depth2_text" target="_self" ><span>축하, 응원의 글</span></a></li><li class="depth_item depth2_item clearfix"><a href="/cj10th/contents.do?key=23742" class="depth_text depth2_text" target="_self" ><span>청주 생활 수기</span></a></li></ul></div></li></ul></div>

        </nav>
        <div class="menu_hide">
          <button type="button" class="menu_button">메뉴 닫기</button>
        </div>
      </div>
    </div>
    <div class="lnb_curtain"><button type="button">메뉴 닫기</button></div>
  </header>
  <div id="container">
    <main>
      <div id="rowgroup1" class="rowgroup rowgroup1">
        <section class="main_visual">
          <h2 class="skip">메인비주얼</h2>
          <div class="visual_text">
            <span class="txt1">통합 10년 성과를 바탕으로</span><br />
            <span class="txt2">세계로 나아가는</span><br />
            <span class="txt3">글로벌 명품도시 청주</span>
          </div>
          <div class="visual_slide">
            <div class="visual_item video_inner">
              <div class="video_wrap">
                <video class="visual_video" preload="auto" id="video" muted autoplay>
                  <source src="/DATA/download/cj10th/main_visual_video.mp4" type="video/mp4">
                </video>
              </div>
            </div>
            <div class="visual_item" style="background-image: url('/site/cj10th/images/main/main_visual_img.jpg')"></div>
<!--            <div class="visual_item" style="background-image: url('/site/cj10th/images/main/main_visual_img2.jpg')"></div>-->
          </div>
          <div class="visual_ctrl"></div>
        </section>
      </div>
      <div id="rowgroup2" class="rowgroup rowgroup2">
        <section class="schedule">
          <h2 class="skip">기념행사 일정</h2>
          <div class="main_cont_wrap clearfix  ani">
            <div class="colgroup1">
              <div class="h2_title">
                <span class="sub_txt"><span>시민과 함께</span></span>
                <p class="tit_txt">기념행사 일정</p>
                <p class="sch_date">2024.6.28.(금)- 7.7.(일)</p>
                <a href="./contents.do?key=23737" class="sch_link">더보기</a>
              </div>
              <div class="sch_popup">
                <ul class="popup_list">
                  <li class="popup_item">
                    <a href="./contents.do?key=23739">
                      <i class="deco"><i class="round right"></i><i class="round left"></i></i>
                      <div class="banner_inner">
                        <div class="image">
                          <img src="/site/cj10th/images/main/popup_sch1.jpg" alt="통합 10주년 피크닉 콘서트 19:00 문화제조창 잔디광장/ 6.28.(금)시립교향악합창단 공연/6.29.(토)시립국악무용단/6.30.(일)부활,테이,박서진,케이시,요요미">
                        </div>
                        <i class="more">더보기</i>
                      </div>
                    </a>
                  </li>
                  <li class="popup_item">
                    <a href="./contents.do?key=23740">
                      <i class="deco"><i class="round right"></i><i class="round left"></i></i>
                      <div class="banner_inner">
                        <div class="image">
                          <img src="/site/cj10th/images/main/popup_sch2.jpg" alt="통합 10주년 상생 직거래 장터/6.28.(금)~6.30.(일)/문화제조창 로비">
                        </div>
                        <i class="more">더보기</i>
                      </div>
                    </a>
                  </li>
                  <li class="popup_item">
                    <a href="./contents.do?key=23739">
                      <i class="deco"><i class="round right"></i><i class="round left"></i></i>
                      <div class="banner_inner">
                        <div class="image">
                          <img src="/site/cj10th/images/main/popup_sch3.jpg" alt="통합 10주년 기록 특별 전시회 6.28.(금)~7.21.(일) 동부창고 6동">
                        </div>
                        <i class="more">더보기</i>
                      </div>
                    </a>
                  </li>
                  <li class="popup_item">
                    <a href="./contents.do?key=23739">
                      <i class="deco"><i class="round right"></i><i class="round left"></i></i>
                      <div class="banner_inner">
                        <div class="image">
                          <img src="/site/cj10th/images/main/popup_sch4.jpg" alt="통합 10주년 강익중 특별전 7.4.(목)~9.29.(일) 청주시립미술관">
                        </div>
                        <i class="more">더보기</i>
                      </div>
                    </a>
                  </li>
                  <li class="popup_item">
                    <a href="./contents.do?key=23739">
                      <i class="deco"><i class="round right"></i><i class="round left"></i></i>
                      <div class="banner_inner">
                        <div class="image">
                          <img src="/site/cj10th/images/main/popup_sch5.jpg" alt="통합 10주년 미래 빛 정원 6.6.(목)~7.7.(일) 동부창고 생태정원">
                        </div>
                        <i class="more">더보기</i>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="colgroup2">
              <div class="sch_img_zoom"><!--모바일에서 표출-->
                <a href="/site/cj10th/images/main/sch_img_240621.png" target="_blank" title="새창 기념행사 일정 달력 확대보기">기념행사 일정 달력 크게보기</a>
              </div>
              <div class="sch_table_box active">
                <div class="sch_table_control"><!--모바일에서 표출-->
                  <button type="button" class="table_btn active">기념행사 일정 달력 접어두기</button>
                </div>
                <div class="sch_table">
                  <a href="./contents.do?key=23737">
                    <div class="date_list">
                      <ul class="clearfix">
                        <li class="date_item today" data-date="2024-07-01"><span>7월 1일(월)</span></li>
                        <li class="date_item" data-date="2024-07-02"><span>7월 2일(화)</span></li>
                        <li class="date_item" data-date="2024-07-03"><span>7월 3일(수)</span></li>
                        <li class="date_item" data-date="2024-07-04"><span>7월 4일(목)</span></li>
                        <li class="date_item" data-date="2024-07-05"><span>7월 5일(금)</span></li>
                        <li class="date_item" data-date="2024-07-06"><span>7월 6일(토)</span></li>
                        <li class="date_item" data-date="2024-07-07"><span>7월 7일(일)</span></li>
                      </ul>
                    </div>
                    <div class="sch_images">
                      <img src="/site/cj10th/images/main/sch_img_240621.png" alt="기념행사 일정 달력 - 자세한 내용은 아래를 참조하세요">
                      <div class="skip">
                        <p>7월1일(월)</p>
                        <ul>
                          <li>14:00/기념식/예술의전당 대공연장</li>
                          <li>19:00/특집 다큐멘터리 CJB청주방송</li>
                        </ul>
                        <p>7월2일(화)</p>
                        <ul>
                          <li>17:00/청주시장과의 토크콘서트/동부창고38동</li>
                          <li>18:00/버스킹 공연/동부창고 잔디광장</li>
                          <li>19:00/푸드클래스/동부창고 34동</li>
                          <li>10:00~17:00/청주시-청주대 상생 협력 전시회/한국공예관 3층 5갤러리</li>
                        </ul>
                        <p>7월3일(수)</p>
                        <ul>
                          <li>10:00/전문가 세미나/동부창고 38동</li>
                          <li>18:00/버스킹공연/동부창고 잔디광장</li>
                          <li>19:00/푸드클래스/동부창고 34동</li>
                          <li>10:00~17:00/청주시-청주대 상생 협력 전시회/한국공예관 3층 5갤러리</li>
                        </ul>
                        <p>7월4일(목)</p>
                        <ul>
                          <li>19:00/푸드클래스/동부창고 34동</li>
                          <li>10:00~17:00/청주시-청주대 상생 협력 전시회/한국공예관 3층 5갤러리</li>
                        </ul>
                        <p>7월5일(금)</p>
                        <ul>
                          <li>18:00/버스킹공연/동부창고 잔디광장</li>
                          <li>19:00/예술가 토크콘서트/동부창고 38동</li>
                          <li>10:00~17:00/청주시-청주대 상생 협력 전시회/한국공예관 3층 5갤러리</li>
                        </ul>
                        <p>7월6일(토)</p>
                        <ul>
                          <li>12:00/달달한 디저트 마켓/동부창고 카페C</li>
                          <li>14:00/주말 예술창고/동부창고 38동</li>
                          <li>15:00/어린이 샌드아트 발표회/동부창고 카페C</li>
                          <li>10:00~17:00/청주시-청주대 상생 협력 전시회/한국공예관 3층 5갤러리</li>
                        </ul>
                        <p>7월7일(일)</p>
                        <ul>
                          <li>12:00/달달한 디저트 마켓/동부창고 카페C</li>
                          <li>14:00/동창생 콘서트/동부창고 카페C</li>
                          <li>10:00~17:00/청주시-청주대 상생 협력 전시회/한국공예관 3층 5갤러리</li>
                        </ul>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div id="rowgroup3" class="rowgroup rowgroup3">
        <section class="board_msg">
          <h2 class="skip">축하의 글</h2>
          <div class="main_cont_wrap ani">
            <div class="h2_title">
              <span class="sub_txt"><span>10년의 여정</span></span>
              <p class="tit_txt">축하의 글</p>
              <a href="./selectBbsNttList.do?bbsNo=2284&amp;key=23741" class="msg_link"><span>축하하러 가기</span><i>더보기</i></a>
            </div>
            <div class="board_box">
              <div class="board_list">
				
				 
				 
				 
				 			
                <div class="board_item">
                  <a href="./selectBbsNttView.do?key=23741&amp;bbsNo=2284&amp;nttNo=219309">
                    <div class="item_inner">
                      <i class="deco"><i class="round right"></i><i class="round left"></i></i>
                      <div class="item_cont">
                        <p class="tit">청주시 통합이 벌써 10주년이라니...</p>
                        <p class="txt">청원군과 청주시가 통합된 지 벌써 10년이라는 시간이 지났다니..
시간이 정말 빨리 간다는 생각을 합니다.
청주에 오래 있었지만 통합 이후 점점 발전해나가는 모습을 보면서
새삼 이전이 낯설게 느껴지는 하루입니다.
앞으로 청주시가 더 발전하면 좋겠습니다!

청주시 화이팅!</p>
                        <div class="source">
                          <span class="date">2024-07-05</span>
                          <span class="name"><!----></span>
                        </div>
                      </div>
                      <i class="more_icon">더보기</i>
                    </div>
                  </a>
                </div>
				
				 
				 
				 			
                <div class="board_item">
                  <a href="./selectBbsNttView.do?key=23741&amp;bbsNo=2284&amp;nttNo=219308">
                    <div class="item_inner">
                      <i class="deco"><i class="round right"></i><i class="round left"></i></i>
                      <div class="item_cont">
                        <p class="tit">10주년 축하합니다.</p>
                        <p class="txt">청주 토박이로서 청주시 통합 10주년을 같이 맞이하게 되어 기쁩니다. 축하합니다.</p>
                        <div class="source">
                          <span class="date">2024-07-05</span>
                          <span class="name"><!----></span>
                        </div>
                      </div>
                      <i class="more_icon">더보기</i>
                    </div>
                  </a>
                </div>
				
				 
				 
				 			
                <div class="board_item">
                  <a href="./selectBbsNttView.do?key=23741&amp;bbsNo=2284&amp;nttNo=219295">
                    <div class="item_inner">
                      <i class="deco"><i class="round right"></i><i class="round left"></i></i>
                      <div class="item_cont">
                        <p class="tit">청주시 통합 10주년 축하합니다~~</p>
                        <p class="txt">대학생 때 청주에서 잠깐 살았는데 좋았어요ㅎㅎ</p>
                        <div class="source">
                          <span class="date">2024-07-05</span>
                          <span class="name"><!----></span>
                        </div>
                      </div>
                      <i class="more_icon">더보기</i>
                    </div>
                  </a>
                </div>
				
				 
				 
				 			
                <div class="board_item">
                  <a href="./selectBbsNttView.do?key=23741&amp;bbsNo=2284&amp;nttNo=219294">
                    <div class="item_inner">
                      <i class="deco"><i class="round right"></i><i class="round left"></i></i>
                      <div class="item_cont">
                        <p class="tit">청주시 100살 가즈아~!~!~!</p>
                        <p class="txt">청주시의 10년을 축하합니다.
앞으로 20년 30년 100년 만수무강 가즈아~!~!~!~~!</p>
                        <div class="source">
                          <span class="date">2024-07-05</span>
                          <span class="name"><!----></span>
                        </div>
                      </div>
                      <i class="more_icon">더보기</i>
                    </div>
                  </a>
                </div>
				
				 
				 
				 			
                <div class="board_item">
                  <a href="./selectBbsNttView.do?key=23741&amp;bbsNo=2284&amp;nttNo=219293">
                    <div class="item_inner">
                      <i class="deco"><i class="round right"></i><i class="round left"></i></i>
                      <div class="item_cont">
                        <p class="tit">청주시 10돌을 축하합니다~</p>
                        <p class="txt">청주시 10돌을 축하합니다~</p>
                        <div class="source">
                          <span class="date">2024-07-05</span>
                          <span class="name"><!----></span>
                        </div>
                      </div>
                      <i class="more_icon">더보기</i>
                    </div>
                  </a>
                </div>
				
				 
				 
				 			
                <div class="board_item">
                  <a href="./selectBbsNttView.do?key=23741&amp;bbsNo=2284&amp;nttNo=219292">
                    <div class="item_inner">
                      <i class="deco"><i class="round right"></i><i class="round left"></i></i>
                      <div class="item_cont">
                        <p class="tit">청주시 10주년 축하합니다~~~~!!!!</p>
                        <p class="txt">투표한게 까마득하니... 벌써 10주년이네요 ^^
축하합니다 ^^</p>
                        <div class="source">
                          <span class="date">2024-07-05</span>
                          <span class="name"><!----></span>
                        </div>
                      </div>
                      <i class="more_icon">더보기</i>
                    </div>
                  </a>
                </div>
				
				 
				 
				 			
                <div class="board_item">
                  <a href="./selectBbsNttView.do?key=23741&amp;bbsNo=2284&amp;nttNo=219291">
                    <div class="item_inner">
                      <i class="deco"><i class="round right"></i><i class="round left"></i></i>
                      <div class="item_cont">
                        <p class="tit">10주년 축하합니다~</p>
                        <p class="txt">통합 청주시의 10살을 축하합니다
더큰 청주시를 기대할게요♡</p>
                        <div class="source">
                          <span class="date">2024-07-05</span>
                          <span class="name"><!----></span>
                        </div>
                      </div>
                      <i class="more_icon">더보기</i>
                    </div>
                  </a>
                </div>
				
				 
				 
				 			
                <div class="board_item">
                  <a href="./selectBbsNttView.do?key=23741&amp;bbsNo=2284&amp;nttNo=219290">
                    <div class="item_inner">
                      <i class="deco"><i class="round right"></i><i class="round left"></i></i>
                      <div class="item_cont">
                        <p class="tit">청주시 통합 10주년 축하합니다</p>
                        <p class="txt">청주시 통합 10주년 축하합니다 ^0^
앞으로 더 재미있는 청주시가 되었으면 좋겠습니다</p>
                        <div class="source">
                          <span class="date">2024-07-05</span>
                          <span class="name"><!----></span>
                        </div>
                      </div>
                      <i class="more_icon">더보기</i>
                    </div>
                  </a>
                </div>
				
				 
				 
				 			
                <div class="board_item">
                  <a href="./selectBbsNttView.do?key=23741&amp;bbsNo=2284&amp;nttNo=219289">
                    <div class="item_inner">
                      <i class="deco"><i class="round right"></i><i class="round left"></i></i>
                      <div class="item_cont">
                        <p class="tit">통합 10주년 축하합니다~~!~</p>
                        <p class="txt">청주 청원 10주년 축하합니다!
앞으로도 계속 발전하는 청주시가 되길 바랍니다~!~!</p>
                        <div class="source">
                          <span class="date">2024-07-05</span>
                          <span class="name"><!----></span>
                        </div>
                      </div>
                      <i class="more_icon">더보기</i>
                    </div>
                  </a>
                </div>
				
				 
				 
				 			
                <div class="board_item">
                  <a href="./selectBbsNttView.do?key=23741&amp;bbsNo=2284&amp;nttNo=218986">
                    <div class="item_inner">
                      <i class="deco"><i class="round right"></i><i class="round left"></i></i>
                      <div class="item_cont">
                        <p class="tit">10주년 축하합니나</p>
                        <p class="txt">청주에 온지 8 년차입니다
통합청주시출범 10 주년기념을
축하합니다
청주시에 더 나은 발전과
시민들이 행복하게 살수있는
아름다운 도시가 되길
기원합니다
청주시 홧팅입니다</p>
                        <div class="source">
                          <span class="date">2024-07-01</span>
                          <span class="name"><!----></span>
                        </div>
                      </div>
                      <i class="more_icon">더보기</i>
                    </div>
                  </a>
                </div>
				
              </div>
              <div class="board_dots"></div>
              <div class="barbox">
                <div class="statebar"></div>
                <div class="thumbnailbox"></div>
              </div>
              <div class="board_control">
                <button type="button" class="prev">이전보기</button>
                <button type="button" class="next">다음보기</button>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div id="rowgroup4" class="rowgroup rowgroup4">
        <section class="cj_history">
          <h2 class="skip">통합의 역사</h2>
          <div class="main_cont_wrap ani">
            <div class="h2_title">
              <span class="sub_txt"><span>3전 4기</span></span>
              <p class="tit_txt">통합의 역사</p>
            </div>
            <div class="history_slide">
              <div class="history_slide_list">
                <div class="history_item">
					<a href="./contents.do?key=23728">
					  <div class="his_title">
						<i class="num_icon">01</i>
						<div class="his_txt">
						  <span>통합의 길,</span>&nbsp;<span class="em_txt">서막을 열다</span>
						</div>
					  </div>
					  <div class="his_content">
						<div class="step">1차시도</div>
						<div class="step_img"><img src="/site/cj10th/images/main/history_img1.jpg" alt="01통합의 길, 서막을 열다 1차시도 이미지"></div>
					  </div>
					</a>
                </div>
                <div class="history_item">
					<a href="./contents.do?key=23729">
					  <div class="his_title">
						<i class="num_icon">02</i>
						<div class="his_txt">
						  <span>주민투표를</span>&nbsp;<span class="em_txt">이끌어내다</span>
						</div>
					  </div>
					  <div class="his_content">
						<div class="step">2차시도</div>
						<div class="step_img"><img src="/site/cj10th/images/main/history_img2.jpg" alt="02주민투표를, 이끌어내다 2차시도 이미지"></div>
					  </div>
					 </a>
                </div>
                <div class="history_item">
					<a href="./contents.do?key=23730">
					  <div class="his_title">
						<i class="num_icon">03</i>
						<div class="his_txt">
						  <span>타오르는,</span>&nbsp;<span class="em_txt">통합 염원</span>
						</div>
					  </div>
					  <div class="his_content">
						<div class="step">3차시도</div>
						<div class="step_img"><img src="/site/cj10th/images/main/history_img3.jpg" alt="03타오르는, 통합 염원 3차시도 이미지"></div>
					  </div>
					</a>
                </div>
                <div class="history_item">
					<a href="./contents.do?key=23731">
					  <div class="his_title">
						<i class="num_icon">04</i>
						<div class="his_txt">
						  <span>기나긴 여정,</span>&nbsp;<span class="em_txt">축포를 쏘다</span>
						</div>
					  </div>
					  <div class="his_content">
						<div class="step">4차성공</div>
						<div class="step_img"><img src="/site/cj10th/images/main/history_img4.jpg" alt="04기나긴 여정, 축포를 쏘다 4차성공 이미지"></div>
					  </div>
					</a>
                </div>
              </div>
              <div class="history_more">
                <a href="https://www.cheongju.go.kr/cj10th/contents.do?key=23761" class="his_link">더 알아보기</a>
              </div>
            </div>
            <!-- <div class="quick_list ani">
              <div class="quick_item">
                <a href="">
                  <p class="q_tit">비전선포영상</p>
                  <p class="q_txt">통합 10주년<br /> 비전을 선포합니다</p>
                  <i class="q_link">더보기</i>
                </a>
              </div>
              <div class="quick_item">
                <a href="">
                  <p class="q_tit">통합 성과</p>
                  <p class="q_txt">통합 10주년<br /> 성과를 보고합니다</p>
                  <i class="q_link">더보기</i>
                </a>
              </div>
              <div class="quick_item">
                <a href="">
                  <p class="q_tit">비전</p>
                  <p class="q_txt">청주시의 미래<br /> 비전과 미션</p>
                  <i class="q_link">더보기</i>
                </a>
              </div>
            </div> -->
          </div>
        </section>
      </div>
      <div class="side_menu_box">
        <ul class="side_menu_list">
          <li class="side_menu_item"><a href="#rowgroup1" class="m_link"><span class="txt">홈</span></a></li>
          <li class="side_menu_item"><a href="#rowgroup2" class="m_link"><span class="txt">기념행사 일정</span></a></li>
          <li class="side_menu_item"><a href="#rowgroup3" class="m_link"><span class="txt">축하의 글</span></a></li>
          <li class="side_menu_item"><a href="#rowgroup4" class="m_link"><span class="txt">통합의 역사</span></a></li>
          <li class="side_menu_item"><a href="#wrapper" class="m_link"><span class="txt">위로</span></a></li>
        </ul>
      </div>
    </main>
  </div>
  <!-- //#container -->
  <footer id="footer">
    <div class="wrap">
      <div class="footer_logo">
        <a href="/www/index.do">
          <img src="/site/cj10th/images/common/footer_logo.png" alt="청주시">
        </a>
      </div>
      <ul class="footer_info">
        <li class="address">
          [28527] 충청북도 청주시 상당구 상당로69번길 38, 청주시청 임시청사
        </li>
        <li class="number">
          <span>대표전화(365민원콜센터):  043-201-0001</span><em class="slash">&nbsp;&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;&nbsp;&nbsp;</em><span>문자 민원접수: 1899-1365(평일 09:00~18:00)</span>
        </li>
        <li class="coty_right">
          COPYRIGHTⓒ Cheongju City. ALL RIGHTS RESERVED.
        </li>
      </ul>
    </div>
  </footer>
</div>
<script>
function calculateDDay(targetDate) {
    const today = new Date();
    const target = new Date(targetDate);
    const differenceInTime = target.getTime() - today.getTime();
    return Math.ceil(differenceInTime / (1000 * 3600 * 24));
}

function padWithZerosManual(input, targetLength) {
    let str = input.toString();
    while (str.length < targetLength) {
        str = '0' + str;
    }
    return str;
}

const targetDate = '2024-07-01';
const dDay = padWithZerosManual(calculateDDay(targetDate), 2);

if (new Date() <= new Date(targetDate)) {
    document.getElementById('day1').textContent = dDay.charAt(0);
    document.getElementById('day2').textContent = dDay.charAt(1);
}
</script>
<!-- //#wrapper -->
</body>
</html>

