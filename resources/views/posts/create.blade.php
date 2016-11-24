@extends('layout.backend')




@section('content')
<h3>Add New Post</h3>
<form action="/post" method="post">
	{{csrf_field()}}
<div class="form-group">
<input type="text" class="form-control" name="title">
</div>
<div class="form-group">
<textarea rows="10" class="form-control" name="editor1"></textarea>
  <script>
            CKEDITOR.replace( 'editor1' );
        </script>
</div>

<input type="submit" class="btn btn-success">
<a href="/home" class="btn btn-primary">Back</a>
</form>



@endsection