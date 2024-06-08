@extends('layout.app')
@section('content')
<div class="container">
    <h2 class="text-center"> Post Edit</h2>
<div class="row">
    <div class="col-12">
      @if ($errors->any())
      <div class="alert alert-danger p-1">
        @foreach ($errors->all() as $error )
         <ul>
          <li>{{$error}}</li>
         </ul>
        @endforeach
        </div>      
           @endif
    
        <form action="{{url('posts/' . $post->id)}}" method="POST" class="form-control  my-3 py-3 border">
          @csrf
          @method('PUT')
            <div class="mb-3">
                <label class="form-label">Post title</label>
                <input type="text" class="form-control" value="{{$post->title}}" name="title" placeholder="enter the post title ">
              </div>
              <div class="mb-3">
                <label  class="form-label">Post Description</label>
                <textarea class="form-control"  name="description" rows="3">{{$post->description}}</textarea>
              </div>
              <div class="mb-3">
                <label for="">Post Witer</label>
                <select name="user_id" class="form-control" >
                    <option value="1">Essam Ibrahim</option>
                    <option value="2">Ali Mohammed</option>
                </select>
              </div>
              <div class="mb-3">
                <input type="submit" value="Save" class="form-control btn btn-success">
              </div>
        </form>
    </div>
</div>
</div>
@endsection