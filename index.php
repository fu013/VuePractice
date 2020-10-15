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
		h1 { text-align: center; margin: 40px 0 0 0; padding: 0; }
		ul { list-style: none; display: flex; flex-direction: row; flex-wrap: wrap; justify-content: space-between; margin: 0; padding: 0;
			width: 80%; margin: 50px auto; min-width: 400px;
		}
		ul li { 
				width: 350px; padding: 10px; vertical-align: top; box-sizing: border-box; 
				border: 5px solid #FE7773; transition: all 0.5s; flex-basis: 20%; flex-grow: 3;
			}
		ul li h2 { font-size: 30px; text-align: center; }
		ul li .imgbox { overflow: hidden; }
		ul li .imgbox:hover img { transform: scale(1.2); }
		ul li .imgbox img { width: 100%; transition: all 0.5s; }
		ul li p { padding: 5px; color: #555; font-weight: 600; }
	</style>
</head>
<body>
	<h1>이탈리아 음식 갤러리</h1>
	<div id="app">
		<ul>
			<template v-for="item in items">
				<li v-bind:class="item.class">
					<h2>{{ item.title }}</h2>
					<hr>
					<div class="imgbox">
						<img v-bind:src="item.img">
						<hr>
						<p> 설명 : {{ item.txt }}</p>
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
						{ class: 'p01', title: 'Arancini', img: 'https://source.unsplash.com/200x200/?Arancini', txt: '고기, 토마토, 모짜렐라, 버섯, 파스타치 등을 골프공 크기로 만들어 빵가루를 묻혀 튀겨내는 요리' },
						{ class: 'p02', title: 'Lasagne', img: 'https://source.unsplash.com/200x200/?Lasagne', txt: '납작하고 큰 파스타 면에 야채, 치즈, 베샤멜 소스, 토마토 소스, 다진 고기를 겹겹이 쌓고 오븐에 구워내는 요리' },
						{ class: 'p03', title: 'Ossobuco', img: 'https://source.unsplash.com/200x200/?Ossobuco', txt: '송아리의 뒷다리 정강이 부위에 화이트 와인을 붓고 푹 고아 낸 찜 요리' },
						{ class: 'p04', title: 'Prosciutto', img: 'https://source.unsplash.com/200x200/?Prosciutto', txt: '바싹 말려서 수분이 증발한 이탈리아식 햄요리' },
						{ class: 'p05', title: 'Ribollita', img: 'https://source.unsplash.com/200x200/?Ribollita', txt: '빵과 야채 등으로 진하게 끓인 토스카나 주의 수프 요리'},
						{ class: 'p06', title: 'Saltimbocca', img: 'https://source.unsplash.com/200x200/?Saltimbocca', txt: '얇게 썬 송아지 고기에 프로슈토, 세이지를 넣고 말아서 와인과 버터로 조리한 요리' },
						{ class: 'p07', title: 'Gelato', img: 'https://source.unsplash.com/200x200/?Gelato', txt: '과일, 우유, 설탕에 향료나 커피, 견과류, 퓌레 등을 섞어 얼린 아이스크림'},
						{ class: 'p08', title: 'pizza', img: 'https://source.unsplash.com/200x200/?pizza', txt: '밀가루로 된 얇고 납작한 반죽에 토마토 소스와 치즈 등을 얹어서 구워내는 이탈리아 요리'},
						{ class: 'p09', title: 'spagetti', img: 'https://source.unsplash.com/200x200/?spagetti', txt: '국수 모양의 이탈리아 요리' },
						{ class: 'p10', title: 'torrone', img: 'https://source.unsplash.com/200x200/?torrone', txt: '설탕이나 꿀, 구운 견과류, 휘저은 계란, 간혹 잘게 썬, 설탕에 조린 과일로 만들어진 당과류'}
					]
				}
			}
		});
	</script>
</body>
</html>