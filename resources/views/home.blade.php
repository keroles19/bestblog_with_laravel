@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">title</th>
                            <th scope="col">body</th>
                            <th scope="col">Setting</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                    <th scope="row">{{$post->id}}</th>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->body}}</td>
                            <td><a class="btn btn-sm btn-info" href="post/{{$post->id}}">Show post</a></td>
                                  </tr>  
                            @endforeach
                         
                       
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
