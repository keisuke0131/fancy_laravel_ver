{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('layouts.application')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', ' ')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
<div class="pc-wrap">
  <header class="logged">
    <div class="header-icon">
      <img src="{{ asset('/assets/image/Fancy_logo_black.png') }}" alt="ロゴ">
    </div>
  </header>
  @yield('main')
  <nav class="bottom-nav">
    <ul>
      <li>
        <a href="#">
          <span class="material-icons">home</span>
          <p>ホーム</p>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="material-icons">star</span>
          <p>お気に入り</p>
        </a> 
      </li>
        <li>
          <a href="#">
            <span class="material-icons">settings</span>
            <p>管理画面</p>
          </a>
        </li>
      <li>
        <a href="#">
          <span class="material-icons">app_settings_alt</span>
          <p>設定</p>
        </a>
      </li>
    </ul>
  </nav>
</div>
@endsection