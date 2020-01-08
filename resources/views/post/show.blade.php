@extends('layouts.app')
@section('content')

<div class="card mt-4">
    <div class="card-header">
      {{$post->title}}
    </div>
    <div class="card-body">
      <img class="card-img-top" src="{{asset('storage/coverImages/'.$post->image)}}" alt="Card image cap">
      <h5 class="card-title">{{$post->title}}</h5>
      <p class="card-text">{{$post->body}}</p>
    <p class="text-muted">{{$post->created_at}}</p>
     @auth
     @if(auth()->user()->id == $post->user_id)
      <a href="/post/{{$post->id}}/edit" class="btn btn-success float-left mr-2">Edit</a>
    <form action={{ route('post.destroy', ['id'=>$post->id]) }} method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger float-left">Delete</button>
    </form>
    @endif
    @endauth
    </div>
  </div>
@endsection
