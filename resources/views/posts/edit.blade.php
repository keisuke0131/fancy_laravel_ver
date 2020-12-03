{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('layouts.logged')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', ' ')

@section('main')
<div class="users-new-wrapper">
  <div class="users-new-container">
    <form action="{{ route('posts.update', ['post' => $post ]) }}" method="post">
      @method('PUT')
      {{ csrf_field() }}
    <div class="users-new-title">
      <h1>投稿編集</h1>
    </div>
      {{-- <%= render 'shared/error_messages' %> --}}
      <input type="text" name="title" placeholder="タイトル" id="user_name" >
      <textarea name="content" placeholder="コンテンツ" id="post_content"></textarea>
      <input type="submit" name="submit" value="登録する" class="btn-square-shadow">
    </form>
    <div class="users-new-btn">
      <form method="post" action="{{ route('posts.destroy', ['post' => $post ]) }}">
        @method('DELETE')
        {{ csrf_field() }}
        <input type="submit" value="削除" class="delete-btn"onclick='return confirm("君は本当に削除するつもりかい？");'>
      </form>
    </div>
  </div>
</div>

@endsection