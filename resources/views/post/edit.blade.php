@extends('layouts.app')
@section('content')

<form action={{'/post/'.$post->id}} method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label >Title</label>
    <input type="text" name="title" id="title"  class="form-control" value={{$post->title}}   placeholder="Enter title">
    </div>
    <div class="form-group">
      <label >Body</label>
    <textarea name="body" cols="30" rows="10" class="form-control" >{{$post->body}}</textarea>  
      </div>
    <button type="submit" class="btn btn-primary">UPDATE</button>
  </form>
  
  @endsection