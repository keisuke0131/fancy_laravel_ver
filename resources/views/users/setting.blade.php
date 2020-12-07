@extends('layouts.logged')

@section('main')
<div class="users-setting-wrapper">
  <div class="users-setting-container">
    <ul>
      <a href="{{ action('ChangeEmailController@edit') }}">
        <li>
          メールアドレス変更
          <span class="material-icons">navigate_next</span>
        </li>
      </a>
      <a href="{{ action('ChangePasswordController@edit') }}">
        <li>
          パスワード変更
          <span class="material-icons">navigate_next</span>
        </li> 
      </a>
    </ul>
    <ul>
      <a href="{{ action('ContactController@privacy_policy') }}">
        <li>
          プライバシーポリシー
          <span class="material-icons">navigate_next</span>
        </li>
      </a>
      <a href="{{ action('ContactController@question') }}">
        <li>
          よくあるご質問
          <span class="material-icons">navigate_next</span>
        </li>
      </a>
      <a href="{{ action('ContactController@index') }}">
        <li>
          お問い合わせ
          <span class="material-icons">navigate_next</span>
        </li>
      </a>
    </ul>
    <ul>
      <a class="logout-btn">
        <li class="logout-btn">
          <form action="/logout" method="POST">
            {{ csrf_field() }}
            <input type="submit" value="ログアウト" style="color:red;">
          </form>
          <span class="material-icons">navigate_next</span>
        </li>
      </a>
    </ul>
  </div>
</div>

@endsection