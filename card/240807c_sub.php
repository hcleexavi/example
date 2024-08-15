<div class="card-flex-box">
    <ul class="card-container">
        <li class="card" link="/doc/wireless-vibration-sensor">
            <div class="card-inner">
                <div class="card-front">
                    <img src="/img/main/main_4box_01.jpg" alt="Front Image" title="">
                </div>
                <div class="card-back">
                    <img src="/img/main/main_4box_01_o.jpg" alt="Back Image" title="">
                </div>
            </div>
        </li>
        <li class="card" link="/doc/motorized-visualization-system">
            <div class="card-inner">
                <div class="card-front">
                    <img src="/img/main/main_4box_02.jpg" alt="Front Image" title="">
                </div>
                <div class="card-back">
                    <img src="/img/main/main_4box_02_o.jpg" alt="Back Image" title="">
                </div>
            </div>
        </li>
        <li class="card" link="/doc/laser">
            <div class="card-inner">
                <div class="card-front">
                    <img src="/img/main/main_4box_03.jpg" alt="Front Image" title="">
                </div>
                <div class="card-back">
                    <img src="/img/main/main_4box_03_o.jpg" alt="Back Image" title="">
                </div>
            </div>
        </li>
        <li class="card" link="/doc/improvement">
            <div class="card-inner">
                 <div class="card-front">
                    <img src="/img/main/main_4box_04.jpg" alt="Front Image" title="">
                </div>
                <div class="card-back">
                    <img src="/img/main/main_4box_04_o.jpg" alt="Back Image" title="">
                </div>
            </div>
        </li>
    </ul>
</div>


<style type="text/css">

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {

    height: 200vh; /* 높이를 늘려서 스크롤 가능하게 설정 */
    background-color: #f0f0f0;
}

ul {list-style: none;}

.wrap {width:100%}
/* 이하만 실코드에 장착 */



.card-flex-box {display: flex;justify-content: center;align-items: center;background-image: url("/img/main/main_4box_bg.jpg");background-repeat: no-repeat;height:600px;
    margin-top: 100vh; /* 스크롤해야 보이도록 설정 */
}
.card-flex-box .card-container {display: flex;gap: 12px; /* 카드 간격 조절 */}
.card-flex-box .card {width: 340px;height: 481px;perspective: 1000px;}
.card-flex-box .card-inner {position: relative;width: 100%;height: 100%;
transition: transform 3s; /* 3초 동안 변환 효과 적용 */
transform-style: preserve-3d;
transform: rotateY(180deg); /* 초기 상태는 뒷면이 보이도록 설정 */
}
.card-flex-box .card.show-front .card-inner {transform: rotateY(0deg); /* 요소가 보일 때 앞면이 보이도록 설정 */}
.card-flex-box .card:hover .card-inner {transform: rotateY(180deg); /* 마우스를 올리면 뒷면이 보이도록 설정 */}
.card-flex-box .card-front, .card-flex-box .card-back {position: absolute;width: 100%;height: 100%;backface-visibility: hidden;}
.card-flex-box .card-back {transform: rotateY(180deg);}
.card-flex-box .card-front > img, .card-back > img {width:100%;border-radius: 15px;}

</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.card');

    function checkVisibility() {
        const viewHeight = window.innerHeight || document.documentElement.clientHeight;
        
        cards.forEach(card => {
            const rect = card.getBoundingClientRect();
            if (rect.top <= viewHeight && rect.bottom >= 0) {
                card.classList.add('show-front');
            }
        });
    }

    window.addEventListener('scroll', checkVisibility);
    checkVisibility();
});

</script>