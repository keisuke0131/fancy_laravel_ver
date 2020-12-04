@extends('layouts.logged')

@section('main')
<div class="users-new-wrapper">
  <div class="users-new-container">
    <form method="POST" action="{{ route('contact.confirm') }}">
      {{ csrf_field() }}

      <div class="users-new-title">
        <h1>お問い合わせ</h1>
      </div>
      @if ($errors->has('name'))
        <p class="error-message">{{ $errors->first('name') }}</p>
      @endif
      @if ($errors->has('email'))
        <p class="error-message">{{ $errors->first('email') }}</p>
      @endif  
      @if ($errors->has('content'))
        <p class="error-message">{{ $errors->first('content') }}</p>
      @endif

      <input name="name" value="{{ old('name') }}" type="text" placeholder="氏名" />
      <input name="email" value="{{ old('email') }}" type="text" placeholder="メールアドレス" />
      <textarea name="content" placeholder="お問い合わせ内容">{{ old('content') }}</textarea>
      <input type="submit" value="内容確認" class="btn-square-shadow">
    </form> 
  </div>
</div>
@endsection
