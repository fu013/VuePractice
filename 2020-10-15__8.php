<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
	<title> 사용 안되는 것들 / computed 사용 </title>
	<style>
		body {
			font-family: 'Noto Sans KR', sans-serif;
		}
	</style>
</head>
<body>

	<div id="app">
	<!-- 	
		{{ const a = 10; }} 선언문 사용불가
		{{ if(true) { return 100 }}}  사용불가
		{{ true ? 100 : 0 }} 삼항 연산 사용 가능
		
		{{ message.split('').reverse().join('')}} 
		=> 되기는 하지만 복잡한 연산 추천하지 X, computed에다가 function을 만들어서 쓰는걸 추천
	ㄴ-->
	{{ reverseMessage }} 
	</div>

	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script>

		new Vue({
			el : "#app",
			data : {
				message: "안녕하세요~!"
			},
			computed: {
				reverseMessage: function() { return this.message.split("").reverse().join(""); }
			}
		});

	</script>

</body>
</html>