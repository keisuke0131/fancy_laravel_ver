@extends('layouts.logged')

@section('title', ' ')

@section('main')
<div class="users-new-wrapper">
  <div class="users-new-container">
    <form action="{{ url('posts') }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      @method('POST')
    <div class="users-new-title">
      <h1>新規投稿</h1>
    </div>
      <input type="text" name="title" placeholder="タイトル" id="user_name" >
      <input type="file" name="image">
      <textarea name="content" placeholder="コンテンツ" id="post_content"></textarea>
      <input type="submit" name="submit" value="投稿する" class="btn-square-shadow">
  </form>
  </div>
</div>

@endsection