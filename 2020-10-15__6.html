<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
	<title>이벤트를 발생시켜서 데이터를 통신하는 방법</title>
	<style>
		body {
			font-family: 'Noto Sans KR', sans-serif;
		}
	</style>
</head>
<body>
	<div id="app">
		<h3>이벤트</h3>
		<!--  -->
		<child-cmp v-on:show-txt="printText"></child-cmp>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script>

		// 전역 컴포넌트, 어떤 인스턴스에서든 호출 가능
		Vue.component('child-cmp', { 
			template : "<button v-on:click='showLog'>클릭~!</button>",
			methods : {
				// 화살표 함수로 메소드를 정의하는 것은 피해야 한다.
				// 메소드로 정의한 화살표 함수 내부의 this는 메소드를 소유한 객체, 
				// 즉 메소드를 호출한 객체를 가리키지 않고 상위 컨택스트인 전역 객체 window를 가리킨다.
				showLog: function() { this.$emit('show-txt'); }	
			}
		});
		
		// new Vue 안에 들어가는 것들은 거의다 s가 붙는다. => components, methods .. etc 
		new Vue({
			el: "#app",
			data: {
				message: "propsdata"
			},
			methods: {
				printText: () =>  
					console.log("이벤트 전달~!")
			}
		});


	</script>
</body>
</html>