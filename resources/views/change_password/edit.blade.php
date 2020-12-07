@extends('layouts.logged')

@section('title', ' ')

@section('main')
<div class="users-new-wrapper">
  <div class="users-new-container">
    <form action="{{ route('change_password.update', ['user' => $user ]) }}" method="post">
      @method('PUT')
      {{ csrf_field() }}
      <div class="users-new-title">
        <h1>パスワード変更</h1>
      </div>
      {{-- <%= render 'shared/error_messages' %> --}}
      <input type="text" name="email" placeholder="メールアドレス" >
      <input type="text" name="current_password" placeholder="現在のパスワード">
      <input type="text" name="password" placeholder="新しいパスワード">
      <input type="text" name="password_confirmation" placeholder="新しいパスワード（確認）">
      <input type="submit" name="submit" value="変更する" class="btn-square-shadow">
    </form>
  </div>
</div>

@endsection
