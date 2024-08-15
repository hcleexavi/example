<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Scroll</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            overflow-y: scroll;
            scroll-behavior: smooth;
        }
        .image-container {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .image-container img {
            max-height: 80%;
            max-width: 80%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 image-container">
                <img src="https://via.placeholder.com/600x800" alt="Image 1">
            </div>
            <div class="col-xs-12 image-container">
                <img src="https://via.placeholder.com/600x800" alt="Image 2">
            </div>
            <div class="col-xs-12 image-container">
                <img src="https://via.placeholder.com/600x800" alt="Image 3">
            </div>
            <div class="col-xs-12 image-container">
                <img src="https://via.placeholder.com/600x800" alt="Image 4">
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('scroll', () => {
            const containers = document.querySelectorAll('.image-container');
            containers.forEach(container => {
                const rect = container.getBoundingClientRect();
                if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
                    container.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            });
        });
    </script>
</body>
</html>
