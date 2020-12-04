@extends('layouts.logged')

@section('main')
<div class="users-new-wrapper">
  <div class="users-new-container">
    <form method="POST" action="{{ route('contact.send') }}">
      {{ csrf_field() }}
      
      <div class="contact-confirm">
        <label>氏名：</label>
        {{ $inputs['name'] }}
        <input name="name" value="{{ $inputs['name'] }}" type="hidden">
      </div>

      <div class="contact-confirm column">
        <label>メールアドレス：</label>
        {{ $inputs['email'] }}
        <input name="email" value="{{ $inputs['email'] }}" type="hidden">
      </div>

      <div class="contact-confirm column">
        <label>お問い合わせ内容</label>
        {!! nl2br(e($inputs['content'])) !!}
        <input name="content" value="{{ $inputs['content'] }}" type="hidden">
      </div>

      <div class="contact-confirm contact-confirm-button">
        <button type="submit" name="action" value="submit" class="btn-square">
          送信する
        </button>

        <button type="submit" name="action" value="back" class="btn-square">
          入力内容修正
        </button>
      </div>
  </form> 
  </div>
</div>
@endsection
