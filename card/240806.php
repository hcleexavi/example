<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Flip Effect</title>
    <link rel="stylesheet" href="style_240806.css">
</head>
<body>
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
  height: 100vh;
  background-color: #f0f0f0;
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
  transition: transform 3s; /* 3초 동안 변환 효과 적용 */
  transform-style: preserve-3d;
}

.card:hover .card-inner {
  transform: rotateY(180deg);
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
  transform: rotateY(180deg);
}

</style>
