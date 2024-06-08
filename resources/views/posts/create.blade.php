@extends('layout.app')
@section('content')
<div class="container">
    <h2 class="text-center">Add New Post</h2>
<div class="row">
    <div class="col-12">
        <form action="{{url('posts')}}" method="POST" class="form-control  my-3 py-3 border">
          @csrf  
          @if ($errors->any())
            <div class="alert alert-danger p-1">
              @foreach ($errors->all() as $error )
               <ul>
                <li>{{$error}}</li>
               </ul>
              @endforeach
              </div>      
                 @endif
                 @if (session()->get('success') != null)
                   <h3 class="alert alert-success p-2">{{session()->get('success')}}</h3>
                 @endif
          <div class="mb-3">
                <label class="form-label">Post title</label>
                <input type="text" class="form-control" value="{{old('title')}}" name="title" placeholder="enter the post title ">
              </div>
              <div class="mb-3">
                <label  class="form-label">Post Description</label>
                <textarea class="form-control" name="description" rows="3">{{old('description')}}</textarea>
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