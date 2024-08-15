<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slide-Up on Scroll</title>
<style type='text/css'>
body, html {
    height: 100%;
    margin: 0;
    font-family: Arial, sans-serif;
}

.container {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.spacer {
    height: 100vh; /* 페이지에 스크롤을 위한 공간 확보 */
}

.slide-up-image {
    opacity: 0;
    transform: translateY(100%);
    transition: transform 2s ease-out, opacity 2s ease-out;
}

.slide-up-image.visible {
    opacity: 1;
    transform: translateY(0);
}

</style>
</head>
<body>
    <div class="container">
        <div class="spacer"></div>
        <img src="http://bm.localhost/season/24/13/img/box04_slow.gif" alt="Sample Image" class="slide-up-image" id="slideImage">
        <div class="spacer"></div>
    </div>
<script>
document.addEventListener('scroll', function() {
    const image = document.getElementById('slideImage');
    const imagePosition = image.getBoundingClientRect().top;
    const windowHeight = window.innerHeight;

    if (imagePosition < windowHeight - 100) {
        image.classList.add('visible');
    }
});

</script>
</body>
</html>
