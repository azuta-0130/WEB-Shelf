<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/style.css">
  <title>HOME</title>
</head>

<style>
            html, body {
                background-color: #eee;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
              margin: 0 auto;
                width: 50%;
                text-align: center;
                border: 1px solid #000;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            #container {
              margin: 0 auto;
              /* background-color: red; */
            }

            header {
              background-color: #fff;
              height: 15%;
              box-shadow: 1px 1px 1px 1px;
            }

            .sample_image {
              display: flex;
              justify-content: center; 
              list-style: none;
            }

            .sample_title {
              margin: 0 100px;
            }

            img {
              margin: 0 20px;
            }

            h2 {
              font-size: 45px;
            }

            h3 {
              /* margin: 0 auto; */
              padding-left: 500px;
            }

            #movie {
              margin-top: 100px;
              margin-bottom: 100px;
            }

            footer {
              text-align: center;
              background-color: #A7F1FF;
              height: 30px;
              padding: 10px;
              font-size: 15px;
            }

            .top-right a {
              font-size: 15px;
            }
        </style>

<body>
  <header>
  <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/mypage') }}">棚の作成</a>
                    @else
                        <a href="{{ route('login') }}">ログイン</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">新規登録</a>
                        @endif
                    @endauth
                </div>
            @endif
  </header>
      <div id="container">
        <div id="book">
          <h3>Sample</h3>
          <div class="content">
            <h2>タイトル名</h2>
            <ul class="sample_image">
              <li><img width="200" height="250" src="images/積み上げ力.jpg" alt="サンプル画像"></li>
              <li><img width="200" height="250" src="images/嫌われる勇気.jpg" alt="サンプル画像"></li>
              <li><img width="200" height="250" src="images/お金持ちになれる黄金の羽.jpg" alt="サンプル画像"></li>
            </ul>
            <ul class="sample_image">
              <li class="sample_title">タイトル</li>
              <li class="sample_title">タイトル</li>
              <li class="sample_title">タイトル</li>
            </ul>
          </div>
        </div>

        <div id="movie">
        <h3>Sample</h3>
          <div class="content">
            <h2>タイトル名</h2>
            <ul class="sample_image">
              <li><img width="200" height="250" src="images/積み上げ力.jpg" alt="サンプル画像"></li>
              <li><img width="200" height="250" src="images/嫌われる勇気.jpg" alt="サンプル画像"></li>
              <li><img width="200" height="250" src="images/お金持ちになれる黄金の羽.jpg" alt="サンプル画像"></li>
            </ul>
            <ul class="sample_image">
              <li class="sample_title">タイトル</li>
              <li class="sample_title">タイトル</li>
              <li class="sample_title">タイトル</li>
            </ul>
          </div>
        </div>

      <footer>
        個人開発 yuta_azuma
      </footer>
</body>
</html>