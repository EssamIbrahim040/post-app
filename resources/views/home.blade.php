@extends('layout.app')

@section('content')
  <div class="container ">
    <h3 class="text-center border py-3 my-2">Home Page</h3>
    <div class="row ">
      @foreach ( $posts as $post )
        <div class="col-12 mb-3">
            <div class="card">
                <h5 class="card-header">
                  {{$post->user_id}} / {{$post->created_at->format('Y-m-d')}}
                </h5>
                <div class="card-body">
                  <h5 class="card-title">{{$post->title}}</h5>
                  <p class="card-text">{{\Str::limit($post->description ,50)}}</p>
                  <a href="{{url('show/' . $post->id)}}" class="btn btn-primary">Show Post</a>
                </div>
              </div>
        </div>

        @endforeach
    </div>
   
  </div>
@endsection