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
            {{-- <div class="posts-index-image">
              <% if post.image.attached? %>
                <%= image_tag post.image %>
              <% else %>
                <%= image_tag 'thumbnail.png' %>
              <% end %> --}}
            </div>
          </a>
          <div class="posts-index-title">
          <h2><a href="#">{{$post->title}}</a></h2>
            {{-- <div id="like-btn-<%= post.id %>" class="like-btn">
              <%= render 'likes/like', post: post %>
            </div> --}}
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
