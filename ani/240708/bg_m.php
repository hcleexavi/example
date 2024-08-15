<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Background Image Animation</title>
<style type='text/css'>
body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    width: 100%;
    overflow: hidden;
}

.background-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('http://bm.localhost/m/season/24/13/img/title.png'); /* 여기에 실제 이미지 URL을 입력하세요 */
    background-size: 120%; /* 초기 크기 */
    background-position: center;
	background-repeat:no-repeat;
    transition: background-size 5s ease-in-out;
}

</style>
</head>
<body>
    <div class="background-image"></div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    setTimeout(function() {
        document.querySelector('.background-image').style.backgroundSize = '100%';
    }, 5000); // 5초 후에 이미지 크기를 100%로 변경
});


</script>
</body>
</html>
