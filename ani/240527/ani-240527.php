<?
/*
	2024-05-27, hclee,
		https://www.youtube.com/watch?v=e4Afka5IOZ8 - 애플코딩


*/

?>
<!doctype html>
<htmllang="ko">
<head>
<metacharset="UTF-8">
	<metaname="Generator"content="이홍칠">
	<metaname="Author"content="">
	<metaname="Keywords"content="">
	<metaname="Description"content="">
	
	<metahttp-equiv="X-UA-Compatible">
	<meta name='viewport'content="width=device-width,initial-scale=1.0">
<title>Document</title>
<style>
body {
	background:black;
	height:6000px;
	font-family:"nanumsquare";

}

div {
	margin-top:1000px;
	color:white;
	text-align:center;
	opacity: 0;
	transition: all 1s;
}

</style>
</head>
<body>

<div><h1>iPhone 15 출시</h1></div>
<div><h1>충전포트를 USB-C타입으로 바꾸어 주세요.</h1></div>
<div><h1>그래서 충전포트를 제거했습니다.</h1></div>
<div><img src='_skin/seil/images/sub/company/greet03.png'></div>

</body>


<script>
	let observer = new IntersectionObserver((e) => {
		e.forEach( (box) => {
			if(box.isIntersecting) {
				box.target.style.opacity = 1;
				box.target.style.transform = 'rotate(0deg)';

				console.log('intersectionRatio : '+  box.intersectionRatio);
			} else {
		//		box.target.style.opacity = 0;
			}
			
			//console.log(박스);

		} )

	});

	let div = document.querySelectorAll('div');
//	console.log(div);
	observer.observe(div[0]); // html 요소를 감시해줌
	observer.observe(div[1]);
	observer.observe(div[2]);
	observer.observe(div[3]);
</script>

</html>
