<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Flip Up Effect</title>
    <link rel="stylesheet" href="styles.css">
</head>
    <div class="card-container">
        <div class="card">
            <div class="card-inner">
                <div class="card-front">
                    <img src="/html/img/old/intro/intro01.jpg" alt="Front Image">
                </div>
                <div class="card-back">
                    <img src="/html/img/old/intro/intro_hover.jpg" alt="Back Image">
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-inner">
                <div class="card-front">
                    <img src="/html/img/old/intro/intro03.jpg" alt="Front Image">
                </div>
                <div class="card-back">
                    <img src="/html/img/old/intro/intro_hover.jpg" alt="Back Image">
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-inner">
                <div class="card-front">
                    <img src="/html/img/old/intro/intro04.jpg" alt="Front Image">
                </div>
                <div class="card-back">
                    <img src="/html/img/old/intro/intro_hover.jpg" alt="Back Image">
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-inner">
                <div class="card-front">
                    <img src="/html/img/old/intro/intro05.jpg" alt="Front Image">
                </div>
                <div class="card-back">
                    <img src="/html/img/old/intro/intro_hover.jpg" alt="Back Image">
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
<style type="text/css">
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 200vh; /* 높이를 늘려서 스크롤 가능하게 설정 */
    background-color: #f0f0f0;
}

.card-container {
    display: flex;
    margin-top: 100vh; /* 스크롤해야 보이도록 설정 */
    gap: 20px; /* 카드 간격 조절 */
}

.card {
    width: 300px;
    height: 400px;
    perspective: 1000px;
}

.card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    transition: transform 3s, opacity 3s; /* 3초 동안 변환 효과와 투명도 적용 */
    transform-style: preserve-3d;
    transform: rotateX(180deg); /* 초기 상태는 뒷면이 보이도록 설정 */
    opacity: 1;
}

.card.show-front .card-inner {
    transform: rotateX(0deg); /* 요소가 보일 때 앞면이 보이도록 설정 */
}

.card:hover .card-inner {
    transform: rotateX(180deg) translateY(-200px); /* 마우스를 올리면 위로 이동하며 뒷면이 보이도록 설정 */
    opacity: 0; /* 마우스를 올리면 카드가 점점 투명해지도록 설정 */
}

.card-front, .card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
}

.card-front {
    background-color: #fff;
}

.card-back {
    background-color: #fff;
    transform: rotateX(180deg);
}

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