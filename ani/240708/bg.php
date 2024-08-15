<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background Image Transition</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            overflow: hidden; /* 스크롤바 제거 */
        }

        .background {
            width: 100%;
            height: 100%;
            background-image: url('http://bm.localhost/season/24/13/img/title_bg.jpg'); /* 여기에 이미지 경로를 넣으세요 */
            background-size: 120%;
            background-position: center;
            transition: background-size 3s ease-in-out;
        }

        .background.shrink {
            background-size: 100%;
        }
    </style>
</head>
<body>
    <div class="background" id="bg"></div>
    <script>
        window.onload = function() {
       //     document.getElementById('bg').classList.add('shrink');
        }
    </script>
</body>
</html>
