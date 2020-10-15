<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
	<title> 뷰 라우터 3 </title>
	<style>
		body {
			font-family: 'Noto Sans KR', sans-serif;
		}
		a {
			text-decoration: none;
			color: coral;
		}
	</style>
</head>
<body>
	<div id="app">
		<h1>뷰 라우터 3</h1>
		<button v-on:click="getJson">제이슨 목록 데이터 출력하기</button>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue-resource@1.3.4"></script>
	<script src="https://unpkg.com/vue-router@3.0.1/dist/vue-router.js"></script>
	<script>
		new Vue({
			el: '#app',
			methods: {
				getJson: function(){
					this.$http.get(`https://raw.githubusercontent.com/joshua1988/doit-vuejs/master/data/demo.json`)
					.then(function(res){
						console.log(res);
						console.log(JSON.parse(res.data));
					});
				}
			}
		});
	</script>
</body>
</html>