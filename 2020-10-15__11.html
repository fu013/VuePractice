<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
	<title>이벤트 버스</title>
	<style>
		body {
			font-family: 'Noto Sans KR', sans-serif;
		}
	</style>
</head>
<body>
	<div id="app">
		<child-com></child-com>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script>

		const eventBus = new Vue();

		// 이벤트 발생하는 부분
		Vue.component("child-com", {
			template: '<div>하위 컴포넌트 영역입니다.<button v-on:click="showLog">보이기</button></div>',
			methods: {
				showLog: function() {
					eventBus.$emit("triggerEventBus", 100);
				}
			}
		});

		// 이벤트 수신하는 부분
		const app = new Vue({
			el : "#app",
			created: function() {
				eventBus.$on("triggerEventBus", (value) => {
					console.log("전달받은 값 : ", value);
				});
			}
		});

	</script>

</body>
</html>