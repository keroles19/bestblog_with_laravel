@extends('layouts.app')
@section('content')

<form action="/post" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label >Title</label>
      <input type="text" name="title" id="title"  class="form-control"    placeholder="Enter title">
    </div>
    <div class="form-group">
      <label >Body</label>
      <textarea name="body" id="vody" cols="30" rows="10" class="form-control"></textarea>  
      </div>
      <div class="form-group">
          <label for="exampleFormControlFile1">Select image </label>
          <input type="file"name="coverImage" class="form-control-file" id="exampleFormControlFile1">
        </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection