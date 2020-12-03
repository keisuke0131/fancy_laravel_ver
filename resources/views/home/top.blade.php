{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('layouts.application')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', ' ')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
<header>
  <div class="header-logo">
    <img src="{{ asset('/assets/image/Fancy_logo_white.png') }}" alt="ロゴ">
  </div>
  <nav class="header-nav">
    <ul>
      <li><a href=" {{ url('login/') }} ">ログイン</a></li>
    </ul>
  </nav>
</header>
<main>
  <div class="top-wrapper">
    <img src="{{ asset('/assets/image/lp.png') }}" alt="ロゴ">
    <div class="top-container">
    <div class="balloon">今なら月額料金が無料！</div>
      <button class="btn-square-shadow">
        <a href="{{ url('register/') }}">
          新規登録はこちら！
        </a>
      </button>
    </div>
  </div>
  
  <div class="about-wrapper first">
    <div class="about-container">
      <div class="about-title"> 
        <h2>彼女ができない理由は明白</h2>
      </div>
        <p>あなたにいつまで経っても彼女ができない理由は明白です。</p>
        <p>それは<span class="marker-under">「正しく行動してない」</span>からです。</p>
        <p>彼女を作るなんて正しい行動を積み重ねていけば、いとも簡単にできてしまうものです。</p>
        <p>今では日本では晩婚化とか、生涯未婚の人の割合も増えてきていますが、</p>
        <p>半世紀ほど前だと、生涯未婚の割合はたった2％だったそうです。</p>
        <p>結婚で98％だったら、<span class="marker-under">彼女を作るなんて99.9％の人はできる</span>はずです！</p>
        <p>そもそも一部の人しかできないようなことであれば、人類はここまで増えなかったはずです。</p>
        <p>とは言っても「正しい行動」が何なのかなんてわからないですよね？</p>
        <p>Googleで「彼女 欲しい」と検索しても、マッチングアプリばっか出てきて、登録しても彼女ができる気配すらない。</p>
        <p>そんな人も多いのではないでしょうか？</p>
        <p>そんな人たちのために僕はFancyを作ることを決めました。</p>
        <p>Fancyでは「正しい行動」をできるようなノウハウを徹底的に解説し、<span class="marker-under">最短経路で彼女を作るためのサポート</span>をしています。</p>
    </div>
    <div class="btn-container">
      <div class="balloon">今なら月額料金が無料！</div>
        <button class="btn-square-shadow">
          <a href="{{ url('register/') }}">
            新規登録はこちら！
          </a>
        </button>
    </div>
  </div>

  <div class="about-wrapper second">
      <div class="about-container">
        <div class="about-title">
          <h2>Fancyの3つのメリット</h2>
        </div>

        <h3>1. 再現性の高いノウハウ</h3>
        <div class="content">
          <img src="{{ asset('/assets/image/m1.png') }}" alt="ロゴ">
          <div>
          <p>1記事10～15分程度で読めて再現性の高いノウハウを提供します。
          <p>「整形してイケメンになる」みたいな非現実的なアクションは一切提示しません。</p>
          </div>
        </div>

        <h3>2. 運営にチャットで相談</h3>
        <div class="content">
          <img src="{{ asset('/assets/image/m2.png') }}" alt="ロゴ">
          <div>
            <p>実際に行動していてわからなかったことなどを運営にLINEで相談することができます</p>
            <p>デートプランの添削や、告白のタイミングの相談など是非ご相談ください。</p>
          </div>
        </div>

        <h3>3. 彼女ができてからもサポート</h3>  
        <div class="content">
          <p>彼女を作ることより、彼女ができてからのほうが遥かに大変です。Fancyでは彼女ができてからの悩みごとの相談や、彼女がいる人向けのコンテンツも現在制作中です。</p>
        </div>
      </div>
  </div>

  <div class="about-wrapper third">
    <div class="about-container">
      <div class="about-title">
        <h2>価格</h2>
      </div>
      <p class="price">1000円/月</p>
    </div>

    <div class="btn-container">
      <div class="balloon">今なら月額料金が無料！</div>
      <button class="btn-square-shadow">
        <a href="{{ url('register/') }}">
          新規登録はこちら！
        </a>
      </button>
    </div>
  </div>
    
</main>
<footer>
  <small>
    <p>&copy 2020 Fancy</p>
  </small>
</footer>
@endsection