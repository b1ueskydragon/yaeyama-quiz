<!DOCTYPE html>
<html lang="ja">
	<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta property="og:site_name" content="" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="">
		<meta property="og:description" content="">
		<meta property="og:url" content="">
		<meta property="og:image" content="">
		<meta name="twitter:card" content="summary_large_image">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<title>クイズ</title>
	</head>
	<body>
		<!-- header -->
		<header>
			<h1><a href="">八重山クイズ</a></h1>
			<div class="sp-menu js-toggle-nav">
				<span></span>
				<span></span>
				<span></span>
			</div>

			<nav class="top-nav">
				<ul>
					<li><a href="#" id="food">食べ物</a></li>
					<li><a href="#" id="creature">生物</a></li>
					<li><a href="#" id="history">文化・歴史</a></li>
					<li><a href="#" id="knowledge">雑学</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" href="#" id="region" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							地域
						</a>
						<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="region">
							<li><a class="dropdown-item" href="#" id="island1">石垣島</a></li>
							<li><a class="dropdown-item" href="#" id="island2">与那国島</a>	</li>
							<li><a class="dropdown-item" href="#" id="island3">小浜島</a></li>
							<li><a class="dropdown-item" href="#" id="island4">西表島</a></li>
						</ul>
					</li>
					<li id="accordion_menu">
						<a data-toggle="collapse" href="#sp-region" aria-controls="sp-region" aria-expanded="false">
							地域
						</a>
						<ul id="sp-region" class="collapse" data-parent="#accordion_menu">
							<li><a href="#" id="island1">石垣島</a></li>
							<li><a href="#" id="island2">与那国島</a>	</li>
							<li><a href="#" id="island3">小浜島</a></li>
							<li><a href="#" id="island4">西表島</a></li>
						</ul>
					</li>
					<li><a href="#" id="all">すべて</a></li>
				</ul>
			</nav>
		</header>

		<!-- main -->
		<main class="cantainer">
			<article>
				<section id="question">
					<h1>問題1. 与那国の方言で「ありがとう」はなんという？</h1>
					<!-- <div class="img-wrap">
						<img src="images/uma.jpg">
					</div> -->
				</section>
				<section id="answer_option">
					<ul>
						<li class="answer_item">
							ふがらっさ
						</li>
						<li class="answer_item">
							かむさ
						</li>
						<li class="answer_item">
							てんきゅー
						</li>
					</ul>
				</section>
		</main>

		<!-- footer -->
		<footer>
			Copyright <a href="https://yonaguni-media.com" target="_blank">どなんメディア</a>.
		</footer>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>
