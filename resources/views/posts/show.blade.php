{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('layouts.logged')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('main')
<div class="posts-show-thumbnail">
  <a href="{{ action('PostController@index') }}" class="left">
    <span class="material-icons">navigate_before</span>
  </a>
  
  <a href="{{ action('PostController@edit', $post->id) }}" class="right">
    <span class="material-icons">create</span>
  </a>

  <img src="{{ asset('/assets/image/thumbnail.png') }}" alt="">

  <h1>{{$post->title}}</h1>
</div>
<?= $post->content;?>
@endsection
