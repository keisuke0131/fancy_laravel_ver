{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('layouts.application')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', ' ')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
<header class="logged">
    <div class="header-icon">
        <img src="{{ asset('/assets/image/Fancy_logo_black.png') }}" alt="ロゴ">
    </div>
</header>
<div class="thankx-wrapper">
    <div class="thanx-title">
      <h1>Thank You!</h1>
    </div>
    <div class="thanx-content">
      <p>仮登録していただきありがとうございます。</p>
      <p>指定のE-mailアドレスの方から本登録の方宜しくお願い致します。</p>
    </div>
    <div class="home-button">
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="resubmit-btn">{{ __('再送信') }}</button>.
        </form>
    </div>
  </div>
@endsection

