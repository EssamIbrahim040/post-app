@extends('layout.app')

@section('content')
  <div class="container ">
    <h3 class="text-center border py-3 my-2">{{$post->title}}</h3>
    <div class="row ">
    
        <div class="col-12 mb-3">
            <div class="card">
                <h5 class="card-header">
                  {{$post->user_id}} / {{$post->created_at->format('Y-m-d')}}
                </h5>
                <div class="card-body">
                  <p class="card-text">{{($post->description )}}</p>
                  {{-- <a href="#" class="btn btn-primary">Show Post</a> --}}
                </div>
              </div>
        </div>

       
    </div>
   
  </div>
@endsection