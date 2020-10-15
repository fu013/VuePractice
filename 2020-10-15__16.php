<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
	<title> 뷰 갤러리 리스트 </title>
	<style>
		body {
			font-family: 'Noto Sans KR', sans-serif;
		}
		a {
			text-decoration: none;
			color: coral;
		}
		h1 { text-align: center; padding: 50px 0; }
		ul { list-style: none; text-align: center; }
		ul li { 
				display: inline-block; width: 30%; margin: 0 10px 40px; padding: 10px; 
				vertical-align: top; box-sizing: border-box; border: 5px solid #ddd; transition: all 0.5s; 
			}
		ul li h2 { font-size: 30px; text-align: center; }
		ul li .imgbox { overflow: hidden; }
		ul li .imgbox:hover img { transform: scale(1.2); }
		ul li .imgbox img { width: 100%; transition: all 0.5s; }
		ul li p { padding: 10px; color: #555; }
	</style>
</head>
<body>
	<h1>상품 갤러리</h1>
	<div id="app">
		<ul>
			<template v-for="item in items">
				<li v-bind:class="item.class">
					<h2>{{ item.title }}</h2>
					<div class="imgbox">
						<img v-bind:src="item.img">
						<p> {{ item.txt }}</p>
					</div>
				</li>
			</template>
		</ul>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	
	<script>
		new Vue({
			el: '#app',
			data() {
				return {
					items : [
						{ class: 'p01', title: '배너 01', img: 'https://source.unsplash.com/200x200/?cloth', txt: '오늘의 할인 상품01' },
						{ class: 'p02', title: '배너 02', img: 'https://source.unsplash.com/200x200/?beef', txt: '오늘의 할인 상품02' },
						{ class: 'p03', title: '배너 03', img: 'https://source.unsplash.com/200x200/?shoes', txt: '오늘의 할인 상품03' },
						{ class: 'p04', title: '배너 04', img: 'https://source.unsplash.com/200x200/?beverage', txt: '오늘의 할인 상품04' },
						{ class: 'p05', title: '배너 05', img: 'https://source.unsplash.com/200x200/?coffee', txt: '오늘의 할인 상품05' },
						{ class: 'p06', title: '배너 06', img: 'https://source.unsplash.com/200x200/?beer', txt: '오늘의 할인 상품06' }
					]
				}
			}
		});
	</script>
</body>
</html>