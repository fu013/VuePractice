<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
	<title>전역 & 지역 컴포넌트</title>
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
		<my-area></my-area>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script>
		Vue.component("my-global", {
			template: "<div> 전역 컴포넌트 등록 되었음 </div>"
		});

		const cmp = {  template: "<div> 지역 컴포넌트가 등록 되었음 </div>" } // 컴포넌트 내용
		
		new Vue ({ // Vue 생성자를 이용하여 인스턴스 생성
			el: '#app', // 데이터가 들어갈 위치를 잡는다. -> DomElement 기준으로 잡음

			components: {
				'my-area': cmp
			}
		});
	</script>
</body>
</html>