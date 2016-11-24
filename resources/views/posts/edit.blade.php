@extends('layout.backend')




@section('content')
<h3>Edit Post</h3>
<form action="/post/{{$post->id}}" method="POST">
<div class="form-group">
	 <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="text" name="title" class="form-control" value="{{$post->title}}">
</div>
<div class="form-group">
<textarea rows="10" name="editor1" class="form-control">{{$post->body}}</textarea>
<script>
            CKEDITOR.replace( 'editor1' );
        </script>
</div>

<input type="submit" class="btn btn-success">
<a href="/home" class="btn btn-primary">Back</a>
</form>



@endsection