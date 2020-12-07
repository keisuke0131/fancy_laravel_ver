<?php 
use App\Models\Like;
?>

@extends('layouts.logged')

@section('main')
<div class="pc-wrap">
  <div class="posts-index-wrapper">
    <div class="posts-index-container">
      @foreach ($posts as $post)
        @if (Like::where('post_id', $post->id)->where('user_id', $id)->exists())
          <div class="posts">
            <a href="{{ url('posts/'.$post->id) }}" class="post_show_btn">
              <div class="posts-index-image">
                @if ($post->image_path)
                  <img src="{{ $post->image_path }}">
                @else  
                  <img src="{{ asset('/assets/image/thumbnail.png') }}" alt="">
                @endif            
              </div>
              <div class="posts-index-title">
                <h2><a href="#">{{$post->title}}</a></h2>
                <div class="like-btn">
                  @if($like_model->like_exist(Auth::user()->id,$post->id))
                  <a class="js-like-toggle loved" href="" data-postid="{{ $post->id }}"><span class="material-icons">star</span></i></a>
                  @else
                  <a class="js-like-toggle" href="" data-postid="{{ $post->id }}"><span class="material-icons">star_border</span></a>
                  @endif​
                </div>
              </div>
            </a>
          </div> 
        @endif  
      @endforeach
    </div>
  </div>
</div>
@endsection
