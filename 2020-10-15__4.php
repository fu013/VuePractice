<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
	<title>전역 & 지역 컴포넌트 데이터 함수</title>
	<style>
		body {
			font-family: 'Noto Sans KR', sans-serif;
		}
	</style>
</head>
<body>
	<div id="app">
		<h3>첫번째 인스턴스</h3>
		<my-global></my-global>
	</div>

	<div id="app2">
		<h3>두번째 인스턴스</h3>
		<my-local></my-local>
		<my-local2></my-local2>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script>

		// 전역 컴포넌트, 어떤 인스턴스에서든 호출 가능
		Vue.component('my-global', { template: "<div> 전역 컴포넌트 </div>"});
		
		// 지역 컴포넌트, 선언한 지역에서만 선언가능(따라서 여기선 #app2 에서만 사용 가능)
		const local = {  
			template: "<div> 지역 컴포넌트1: {{ com1Data }} </div>",
			data: () => {
				return {
					com1Data: 100
				}
			}
		 }

		 const local2 = {  
			template: "<div> 지역 컴포넌트2: {{ com2Data }} </div>",
			data: () => {
				return {
					com2Data: local.data.com1Data // == Null, 일반적인 지역 컴포넌트 간의 통신은 되지않는다.
				}
			}
		 }

		new Vue({
			el: "#app"		
		});

		new Vue({
			el: "#app2",
			components: {
				'my-local': local,
				'my-local2': local2
			}
		});

	</script>
</body>
</html>