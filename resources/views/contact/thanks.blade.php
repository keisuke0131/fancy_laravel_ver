@extends('layouts.logged')

@section('main')
<div class="thankx-wrapper">
  <div class="thanx-title">
    <h1>Thank You!</h1>
  </div>
  <div class="thanx-content">
    <p>ご連絡頂きありがとうございました。</p>
    <p>数日以内に指定のE-mailアドレスの方にご連絡させて頂きます。</p>
  </div>
  <div class="home-button">
    <a href="{{ action('PostController@index') }}">ホーム</a>
  </div>
</div>
@endsection