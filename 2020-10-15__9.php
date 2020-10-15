<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
	<title> 뷰 출력, 문법 </title>
	<style>
		body {
			font-family: 'Noto Sans KR', sans-serif;
		}
	</style>
</head>
<body>

	<div id="app">
		<a v-if="flag">Vue.js</a>
		<ul>
			<li v-for="test in systems">{{ test }}</li>
		</ul>
		<p v-show="flag">뷰 문법</p>
		<h5 v-bind:id="uid">뷰 예제 1번</h5>
		<button v-on:click="popAlert">경고창 출력</button>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script>

		new Vue({
			el : "#app",
			data : {
				flag: true,
				systems: [ 'a-test', 'b-test', 'c-test' ],
				uid: 10
			},
			methods: {
				popAlert: function() {
					return alert("경고창 팝업");
				}
			}
		});

	</script>

</body>
</html>