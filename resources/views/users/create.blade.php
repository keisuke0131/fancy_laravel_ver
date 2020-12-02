{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('layouts.application')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', ' ')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
<div class="users-new-wrapper">
  <img src="{{ asset('/assets/image/Fancy_logo_black.png') }}" alt="ロゴ">
  <div class="users-new-container">
    <form action="{{ url('users') }}" method="post">
      {{ csrf_field() }}
      @method('POST')
    <div class="users-new-title">
      <h1>新規登録</h1>
    </div>
      {{-- <%= render 'shared/error_messages' %> --}}
      <input type="text" name="name" placeholder="氏名" id="user_name" >
      <input type="text" name="email" placeholder="メールアドレス" id="user_email" >
      <input type="text" name="password" placeholder="パスワード" id="user_password" >
      <input type="text" name="password_confirmation" placeholder="パスワード（確認）" id="user_password_confirmation" >
      <input type="submit" name="submit" value="登録する" class="btn-square-shadow">
  </form>
  </div>
  <div class="users-new-btn">
    <a href="#">トップページ</a>
  </div>
</div>
@endsection