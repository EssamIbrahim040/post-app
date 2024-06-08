@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row">
           <div class="col-12">
            <a href="{{route('add-post')}}" class="btn btn-primary my-3">Add New Post</a>
           </div>
            <div class="col-md-12 my-3 border py-2">
               
                <h2 class="text-center">All Post</h2>
            </div>
            <div class="col-12">
                @if (session()->get('success') != null)
                <h3 class="alert alert-success p-2">{{session()->get('success')}}</h3>
              @endif
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Descriptions</th>
                            <th>Writer</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $posts as $post )
                            
                        
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->description}} </td>
                            <td>{{$post->user_id}}</td>
                            <td><a href="{{url('posts/'. $post->id.'/edit')}}" class="btn btn-info">Edit</a></td>
                            <td>
                                <form action="{{url('posts/'. $post->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection