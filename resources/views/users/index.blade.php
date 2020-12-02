{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('layouts.logged')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('main')
<div class="pc-wrap">
  <div class="users-index-wrapper">
    <div class="users-index-container">
      {{-- <p>有効会員数：<%=@users_activated.count%></p> --}}
      {{-- <p>総会員数(非認証を含む)：<%=@users.count%></p> --}}

      @foreach ($users as $user)
        <div class="users">
          <div class="posts-index-name">
            <h2>ユーザ名：{{$user->name}}</h2>
            <h2>e-mail：{{$user->email}}</h2>
            {{-- <h2>有効化：
              <% if user.activated %>
                済
              <% else %>
                未
              <% end %>
            </h2> --}}
          </div>
        </div>
        @endforeach
    </div>
  </div>  

</div>
@endsection