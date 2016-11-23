@extends('layout.backend')

@section('content')

<div class="container">
<div class="col-md-10 recent-posts">
    <h3>Recent posts</h3>
    <table class="table table-striped">
  <thead>
    <tr>
      <th>Title</th>
      <th>Author</th>
      <th>Date Created</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($posts as $post)
    <tr>
      <th>{{$post->title}}</th>
      <td>{{$post->user->name}}</td>
      <td>{{$post->created_at}}</td>
      <td><a class="btn btn-primary" href="/post/{{$post->id}}/edit">Edit</a></td>
      <td><form action="/post/{{$post->id}}" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" value="Delete" class="btn btn-danger">
      </form></td>
    </tr>
    @endforeach
  
  </tbody>
</table>
</div>
<div class="col-md-2 options">
    <h4>Options</h4>

        <a href="/post/create">Create new post</a><br>
        <a>View all posts</a><br>
        <a>View Blog</a>
        <a>Add new author</a><br>
        <a>Settings</a>




</div>
</div>
@endsection
