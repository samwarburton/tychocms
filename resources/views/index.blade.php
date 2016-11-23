@extends('layout.frontend')
@section('content')



	



@foreach($posts as $post)


<div class="post col-md-12">
<h3>{{$post->title}}</h3>
<small>{{$post->created_at->format('d-m-Y')}}  <a href="">{{$post->user->name}}</a></small>
<p>{{$post->body}}</p>
<a href="/post/{{$post->id}}">Read more</a>
</div>


@endforeach


@endsection