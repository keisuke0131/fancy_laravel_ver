{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('layouts.logged')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}

@section('title', ' ')

@section('content')
<div class="pc-wrap">
  <div class="posts-show-thumbnail">
    <a href="{{ action('PostController@index') }}" class="left">
      <span class="material-icons">navigate_before</span>
    </a>
    
    <a href="{{ action('PostController@edit', $post->id) }}" class="right">
      <span class="material-icons">create</span>
    </a>
  
    @if ($post->image_path)
      <img src="{{ $post->image_path }}">
    @else  
      <img src="{{ asset('/assets/image/thumbnail.png') }}" alt="">
    @endif 
  
    <h1>{{$post->title}}</h1>
  </div>
  <?= $post->content;?>
  
  <nav class="bottom-nav">
    <ul>
      <li>
        <a href="{{ action('PostController@index') }}">
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
          <a href="{{ action('UserController@admin') }}">
            <span class="material-icons">settings</span>
            <p>管理画面</p>
          </a>
        </li>
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