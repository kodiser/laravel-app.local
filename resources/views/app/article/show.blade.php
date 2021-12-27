@extends('layouts.app')
@section('content')
@php
    use app\Models\Comment;
    /* @var Comment $createdAtForHumans */
@endphp
<div id="app">
{{--    {{dd($article)}}--}}
   <article-component>
       <div class="row mt-5">
           <h5>{{$article->title}}</h5>
           <p>{{$article->id}}</p>
           <img src="{{$article->img}}" alt="">
           <p>
               @foreach($article->tags as $tag)
                   @if($loop->last)
                       <span>{{$tag->label}}</span>
                   @else
                       <span>{{$tag->label}} | </span>
                   @endif
               @endforeach
           </p>
           <p>{{$article->body}}</p>
           <p>Опубликовано <i>{{$article->createdAtForHumans()}}</i></p>
       </div>
   </article-component>
   <hr>
{{--    {{dump('here')}}--}}
   <comments-component>
       <div class="row">
           <form action="">
               <div class="mb-3">
                   <label for="">Комментарий</label>
                   <textarea name="" id="" cols="30" rows="10"></textarea>
                   <button>Отправить</button>
               </div>
           </form>
           <div class="toast-container pb-5 mt-5 mx-auto">
               {{--           {{dump($article->comments)}}--}}
               @foreach($article->comments as $comment)
                   {{--               {{dd($comment)}}--}}
                   <div class="toast showing" style="width: 100%">
                       <div class="toast-header">
                           <img src="https://via.placeholder.com/600/5F113B/FFFFFF/?text=USER" class="rounded me-2" alt="">
                           <strong>{{$comment->subject}}</strong>
                           <small class="text-muted">{{$comment->createdAtForHumans()}}</small>
                       </div>
                       <div class="toast-body">
                           {{$comment->body}}
                       </div>
                   </div>
               @endforeach
           </div>
       </div>

   </comments-component>
</div>

@endsection
@section('vue')
    <script src="{{ mix('/js/app.js') }}"></script>
@endsection
