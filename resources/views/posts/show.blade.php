@extends('layout.frontend')

@section('content')

<div class="post col-md-8">
<h3>{!! $post->title !!}</h3>
<small>{{$post->created_at->format('d-m-Y')}}  <a href="">{{$post->user->name}}</a></small>
{!! $post->body !!}
</div>


@endsection 