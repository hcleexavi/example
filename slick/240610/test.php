<!doctype html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<title>CSS</title>
		<style>
#main {
width: 100%; 
margin:0 auto;
animation: fadein 5s ease 3s infinite;
}
#main img{
  width: 100%;
}
@keyframes fadein {
	0% {
        opacity: 0;
    }
    50% {
        opacity: 1;
    }
    100% {
        opacity: 0;
    }
}


		</style>
	</head>
	<body>
<div id="main">
	<img src="https://images.unsplash.com/photo-1627328714377-dd9f50ebc7d6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=701&q=80" alt="" style='width:500px'>
</div>
	</body>
</html>