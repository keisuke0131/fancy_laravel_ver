@extends('layouts.application')

@section('title', ' ')

@section('content')
<div class="pc-wrap">
  <header class="logged">
    <div class="header-icon">
      <img src="{{ asset('/assets/image/Fancy_logo_black.png') }}" alt="ロゴ">
    </div>
  </header>

  @if (session('flash_message'))
      <div class="flash">
          {{ session('flash_message') }}
      </div>
  @endif

  @yield('main')
  <nav class="bottom-nav">
    <ul>
      <li>
        <a href="{{ action('PostController@index') }}">
          <span class="material-icons">home</span>
          <p>ホーム</p>
        </a>
      </li>
      <li>
        <a href="{{ action('PostController@like') }}">
          <span class="material-icons">star</span>
          <p>お気に入り</p>
        </a> 
      </li>
      @if(Auth::user()->admin)
        <li>
          <a href="{{ action('UserController@admin') }}">
            <span class="material-icons">settings</span>
            <p>管理画面</p>
          </a>
        </li>
      @endif
      <li>
        <a href="{{ action('UserController@setting') }}">
          <span class="material-icons">app_settings_alt</span>
          <p>設定</p>
        </a>
      </li>
    </ul>
  </nav>
</div>
@endsection