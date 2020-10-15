<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
	<title>이벤트 등록</title>
	<style>
		body {
			font-family: 'Noto Sans KR', sans-serif;
		}
	</style>
</head>
<body>

	<div id="app">
		<p>{{ message }}</p>
		<button v-on:click="reverseM">문자열 뒤집기~!</button>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script>

		new Vue({
			el : "#app",
			data: {
				message: "Hello Vue.js"
			},
			methods: {
				reverseM: function(){
					this.message = this.message.split("").reverse().join("");
					return this.message;
				} 
			}
		});

	</script>

</body>
</html>