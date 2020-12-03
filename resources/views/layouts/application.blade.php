<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="google-site-verification" content="1UteIioJVEhKlpneIW7xll5k4OyHtgB-PHsDbnhzFeQ" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{ asset('assets/style/all-reset.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/style/home.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/style/user.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/style/post.css') }}" rel="stylesheet">
  <title>@yield('title')</title>
</head>
<body>
  @yield('content')
</body>
</html>

{{-- <link href="{{ asset('assets/style/all-reset.css') }}" rel="stylesheet">
<link href="{{ asset('assets/style/home.css') }}" rel="stylesheet">
<link href="{{ asset('assets/style/user.css') }}" rel="stylesheet">
<link href="{{ asset('assets/style/post.css') }}" rel="stylesheet">

<link href="{{ mix('assets/style/all-reset.css') }}" rel="stylesheet">
<link href="{{ mix('assets/style/home.css') }}" rel="stylesheet">
<link href="{{ mix('assets/style/user.css') }}" rel="stylesheet">
<link href="{{ mix('assets/style/post.css') }}" rel="stylesheet"> --}}