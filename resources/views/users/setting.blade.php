@extends('layouts.logged')

@section('main')
<div class="users-setting-wrapper">
  <div class="users-setting-container">
    <ul>
      <a href="#">
        <li>
          メールアドレス変更
          <span class="material-icons">navigate_next</span>
        </li>
      </a>
      <a href="#">
        <li>
          パスワード変更
          <span class="material-icons">navigate_next</span>
        </li>
      </a>
    </ul>
    <ul>
      <a href="#">
        <li>
          プライバシーポリシー
          <span class="material-icons">navigate_next</span>
        </li>
      </a>
      <a href="">
        <li>
          特商法表記
          <span class="material-icons">navigate_next</span>
        </li>
      </a>
      <a href="#">
        <li>
          よくあるご質問
          <span class="material-icons">navigate_next</span>
        </li>
      </a>
      <a href="#">
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