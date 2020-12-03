{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('layouts.application')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', ' ')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
<div class="users-new-wrapper">
  <img src="{{ asset('/assets/image/Fancy_logo_black.png') }}" alt="ロゴ">
  <div class="users-new-container">
    <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="users-new-title">
        　 <h1>ログイン</h1>
        </div>

        <input id="email" type="email" placeholder="メールアドレス" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        <input id="password" type="password" placeholder="パスワード" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        {{-- <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> --}}
        <input type="submit" name="submit" value="ログイン" class="btn-square-shadow">
        {{-- <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </div> --}}
    </form>
  </div>
  <div class="users-new-btn">
    <a href="{{ action('HomeController@top') }}">トップページ</a>
    <a href="{{ url('register/') }}">新規登録はこちら</a>
  </div>
</div>
@endsection
