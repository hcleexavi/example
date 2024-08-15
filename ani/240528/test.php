<?/*
	https://co-natus.tistory.com/entry/Text-Reveal-Animation 
		텍스트 등장 애니메이션 구현하기(Text Reveal Animation on Scroll using HTML, CSS, JavaScript)
*/?>
<!doctype html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="Generator"content="이홍칠">
	<meta name="Author" content="">
	<meta name="Keywords" content="">
	<meta name="Description" content="">
	
	<meta http-equiv="X-UA-Compatible">
	<meta name='viewport' content="width=device-width,initial-scale=1.0">
<title>Text-Reveal-Animation</title>
<style>
* { font-family:"nanumsquare"; }

body {
  margin:0;
  height: 2000px;
}

div.test-reveal {
	background:#aaf;
	width:500px;height:200px;
	margin:0 auto;
	opacity:.5;
}
h2.content {
  word-spacing: 2px;
  	overflow: hidden;
		text-align:center;
		margin-top:0;
}

h2.content span.letter {
  display: inline-block;
	height: 30px;
}


h2.content1 span.letter {
  animation: reveal 1.5s cubic-bezier(0.77, 0, 0.175, 1) forwards;
  margin-top:30px;
}

h2.content2 span.letter {
  animation: reveal 3s cubic-bezier(0.77, 0, 0.175, 1) forwards;
}

h2.content3 span.letter {
  animation: reveal 4.5s cubic-bezier(0.77, 0, 0.175, 1) forwards;
}

.content2 span:before {content:''; position:absolute; top:50%; right:100%; margin-right: 12px;; width:353px; height:1px; background: #efecea;}
.content2 span:after {content:''; position:absolute; top:50%; left:100%; margin-left: 12px;; width:353px; height:1px; background: #efecea;}


@keyframes reveal {
  0% {
    transform: translateY(100%);
  }
  100% {
    transform: translateY(0);
  }
}

@keyframes disapear {
  0% { /* from */
    transform: translateY(0);
  }
  100% { /* to */
    transform: translateY(100%);
  }
}
</style>
</head>
<body>
	<div style="background:#faa">
		test

	</div>

	<div class='test-reveal'>
		<h2 class="title content content1">
			<span class="letter">Plant Maintenance Solution #1</span>
		</h2>
		<h2 class="title content content2">
			<span class="letter">&amp;</span>
		</h2>
		<h2 class="title content content3">
			<span class="letter">Technical Service Provider</span>
		</h2>
	</div>
</body>
<script>
let mainText = document.querySelector("h2.content1");
let mainText2 = document.querySelector("h2.content2");
let mainText3 = document.querySelector("h2.content3");
console.log(mainText);

window.addEventListener('scroll', function () {
  let value = window.scrollY;
  console.log('scrollY', value);

  if(value > 200) {
    mainText.style.animation = 'disapear 1s ease-out forwards';
		mainText2.style.animation = 'disapear 2s ease-out forwards';
		mainText3.style.animation = 'disapear 3s ease-out forwards';
  } else {
    mainText.style.animation = 'reveal 1s ease-out forwards';
		mainText2.style.animation = 'reveal 2s ease-out forwards';
		mainText3.style.animation = 'reveal 3s ease-out forwards';
  }

})
</script>
</html>
<?php /*
<h1>Plant Maintenance Solution #1</h1>
						<h2>&amp;</h2>
						<h3>Technical Service Provider</h3>
*/?>