{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('layouts.logged')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('main')
<div class="pc-wrap">
  <div class="posts-index-wrapper">
    <div class="posts-index-container">
      @foreach ($posts as $post)
        <div class="posts">
          <a href="#" class="post_show_btn">
            <div class="posts-index-image">
              <img src="{{ asset('/assets/image/thumbnail.png') }}" alt="">
            </div>
          </div>
          <div class="posts-index-title">
            <h2><a href="#">{{$post->title}}</a></h2>
          </div>
        </a>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection