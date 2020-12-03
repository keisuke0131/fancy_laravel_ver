@extends('layouts.logged')

@section('main')

<div class="users-setting-wrapper">
  <div class="users-setting-container">
    <ul>
      <a href="{{ action('PostController@create') }}">
        <li>
          新規投稿
          <span class="material-icons">navigate_next</span>
        </li>
      </a>
      <a href="{{ action('UserController@index') }}">
        <li>
          会員情報
          <span class="material-icons">navigate_next</span>
        </li>
      </a>
    </ul>
  </div>
</div>

@endsection