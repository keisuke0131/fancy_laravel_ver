@extends('layouts.logged')

@section('title', ' ')

@section('main')
<div class="users-new-wrapper">
  <div class="users-new-container">
    <form action="{{ route('change_email.update', ['user' => $user ]) }}" method="post">
      @method('PUT')
      {{ csrf_field() }}
      <div class="users-new-title">
        <h1>メールアドレス変更</h1>
      </div>
      <input type="text" name="current_email" placeholder="現在のメールアドレス" id="user_email" >
      <input type="text" name="new_email" placeholder="新しいメールアドレス" id="user_email" >
      <input type="text" name="password" placeholder="パスワード" id="user_password" >
      <input type="submit" name="submit" value="変更する" class="btn-square-shadow">
    </form>
  </div>
</div>

@endsection
