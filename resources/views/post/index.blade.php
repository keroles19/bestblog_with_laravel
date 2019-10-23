@extends('layouts.app')
@section('content')
   <h5 class="alert alert-info text-danger">List of all  post</h5>
    <div class="row">
       <div class="col-md-10 col-12">
         <div class="row">
                  @foreach ($posts as $post)
                  <div class="col-4 mb-4">
                  {{-- <div class="card">
                      <img class="card-img-top" src=".../100px180/" alt="Card image cap">
                        <div class="card-header bg-dark text-white">
                        <h6>  {{$post->title}} <span class="float-right text-muted"> created by : 
                        @if(auth()->user()->id == $post->user_id) You   
                         @else  {{auth()->user()->name}} 
                         @endif
                        </span> </h6>
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">{{$post->title}}</h5>
                          <hr>
                          <p class="card-text">{{$post->body}}</p>
                        <a href={{'/post/'.$post->id}} class="btn btn-primary">Details</a>
                        </div>
                      </div> --}}
                      <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="{{asset('storage/coverImages/'.$post->image)}}" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text">{{$post->body}}</p>
                            <hr>
                              <span class="text-muted">created at : {{$post->created_at}}</span>
                            <a href={{'/post/'.$post->id}} class="btn btn-primary">Details</a>                          </div>
                        </div>
                      </div>
         @endforeach
      </div>
       </div>
       <div  class="col-md-2">
        <div class="card">
          <div class="card-header bg-primary text-white">
           posts Count 
          </div>
          <div class="card-body">
            <h5 class="card-title">{{$count}}</h5>
          </div>
        </div>
       </div>
    </div>
    <div  class="row">
      <div class="col-md-12 d-flex justify-content-center">
    {{$posts->links()}}
      </div>
    </div>
   
@endsection