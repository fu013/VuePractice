<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
	<title> 디렉티브 v- / 코스형 </title>
	<style>
		body {
			font-family: 'Noto Sans KR', sans-serif;
		}
	</style>
</head>
<body>

	<div id="app">
		<h3> 디렉티브 v- </h3>
		<p v-bind:id="idA">테스트 1</p>
		<p v-bind:class="classA">테스트 2</p>
		<p v-bind:style="styleA">테스트 3</p>

		<h3> 코스형 </h3>
		<p> {{ message }} </p>
		<p> {{ message + " " + "좋은하루 되세요~!" }}</p>
		<p> {{ message.split("").reverse().join("")}} </p>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script>

		new Vue({
			el : "#app",
			data : {
				idA : 10,
				classA : 'content',
				styleA : 'color: red',
				message: "안녕하세요~!"
			}
		});

	</script>

</body>
</html>