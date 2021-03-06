@include('layouts.head')
<title>やいまクイズTOP</title>
</head>

<body>
  <!-- header -->
  <header class="l-header">
    <div class="p-logo"><a href="/">やいまクイズ</a></div>
    <div class="c-menu-button js-toggle-nav">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <nav class="c-top-nav">
      <ul class="c-top-nav__list">
        <li><a href="/quiz">クイズへ</a></li>
        <li><a href="#about-yaeyama">八重山とは</a></li>
        <li><a href="#can">できること</a></li>
        <li><a href="#news">お知らせ</a></li>
        @guest
        @if(Route::has('register'))
        <li><a href="/register">登録</a></li>
        @endif
        <li><a href="/login">ログイン</a></li>
        @else
        <li><a href="/mypage"><i class="fas fa-home mr-2"></i>HOME</a></li>
        @endguest
      </ul>
    </nav>
  </header>
  <main>
    <article>
      <section class="l-section__hero js-slider">
        <div class="p-hero animated" data-animate="fadeIn">
          <h1 class="p-hero__title mb-4">
            訪れるだけではわからない魅力をクイズで。
          </h1>
          <div class="p-hero__link">
            <a href="/quiz">クイズに挑戦！</a>
          </div>
        </div>
      </section>
      <section id="about-yaeyama" class="container mt-5 p-contents">
        <h2 class="p-contents__title p-contents__title--border">八重山ってなぁに？</h2>
        <div class="row mt-3">
          <div class="col-md-6 col-sm-12 p-contents--border-right">
            <p>「八重山（やえやま）」こと八重山諸島は沖縄の南西に位置する離島のことを指します。<br>
              八重山は中心となる石垣島をはじめ、竹富島、小浜島、黒島、新城島（上地島、下地島）、西表島、由布島、鳩間島、波照間島、与那国島の合計12の島から成り立っています。<br>
              同じ沖縄である沖縄本島とはまた違った独特な文化や、豊かな自然がこの八重山にはあります。<br>
              この「やいまクイズ」を通して楽しみながら八重山についての魅力や、新しい発見が生まれることでしょう。</p>
          </div>
          <div class="col-md-6 col-sm-12">
            <img class="p-contents__img" src="images/yaeyama_map.gif" alt="八重山諸島の地図">
          </div>
        </div>
      </section>
      <section id="can" class="container l-section">
        <h2 class="p-contents__title p-contents__title--border">できること</h2>
        <div class="p-can">
          <div class="p-can__head">
            <h3>01</h3>
            <p>クイズに挑戦！</p>
          </div>
          <img class="animated p-can__body" data-animate="bounce" src="images/can01.png" alt="できること01">
          <div class="p-can__text">
            <p>やいまクイズを色々なジャンルから楽しむ事ができます。<br>
              一度訪れた事がある方も八重山について知らないことがまだまだたくさんあるはず！</p>
          </div>
        </div>
        <div class="p-can">
          <div class="p-can__head">
            <h3>02</h3>
            <p>クイズを作成<span class="notice">NEW!!</span></p>
          </div>
          <img class="animated p-can__body" data-animate="bounce" src="images/can02.png" alt="できること02">
          <div class="p-can__text">
            <p>地元の人、地元以外の人、誰でも八重山に関するクイズを作成することができます。<br>
              あなたが作成したクイズをみんなに解いてもらおう！</p>
          </div>
        </div>
        <div class="p-can">
          <div class="p-can__head">
            <h3>03</h3>
            <p>クイズを管理<span class="notice">NEW!!</span></p>
          </div>
          <img class="animated p-can__body" data-animate="bounce" src=" images/can03.png" alt="できること03">
          <div class="p-can__text">
            <p>作成したクイズをマイページから管理することができます。<br>
              今まで作成したクイズを振り返ることができるよ！</p>
          </div>
        </div>
      </section>
      <section id="news" class="l-section container mb-4">
        <h2 class="p-contents__title p-contents__title--border">お知らせ</h2>
        <ul class="p-news__list">
          <li class="p-news__item"><time>2019.06.05</time>やいまクイズver2リリースしました。<br>
            <a href="/login">＊追加機能＊<br>
              クイズ作成、クイズ管理、マイページ</a></li>
          <li class="p-news__item"><time>2019.05.07</time>やいまクイズver1リリースしました。</li>
        </ul>
      </section>
    </article>
  </main>
  <!-- footer -->
  <footer class="l-footer">
    Copyright© <a href="https://yonaguni-media.com" target="_blank">どなんメディア</a>.
  </footer>
  <script src="{{ mix('js/app.js') }}"></script>
  <script src="{{ mix('js/bgswitcher.js') }}"></script>
  <script src="{{ mix('js/toppage.js') }}"></script>
</body>

</html>