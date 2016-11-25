<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script src="//cdn.ckeditor.com/4.6.0/standard/ckeditor.js"></script>

</head>
<body>

<nav class="navbar navbar-inverse">

</nav>	
<div class="container-fluid">

<div class="row">
<div class="col-md-2 col-sm-2 col-xsm-2 sidebar">

<ul class="nav nav-sidebar">
            <li><a href="/home"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
            <li><a href="/post/create"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Create Post</a></li>
            <li><a href=""><i class="fa fa-eye" aria-hidden="true"></i>View/Edit Posts</a></li>
            <li><a href=""><i class="fa fa-user-o" aria-hidden="true"></i>
Users</a></li>
             <li><a href=""><i class="fa fa-folder-open" aria-hidden="true"></i>Catagories</a></li>
            <li><a href=""><i class="fa fa-cogs" aria-hidden="true"></i>Settings</a></li>
            <li><a href=""><i class="fa fa-power-off" aria-hidden="true"></i>Log out</a></li>
</ul>



</div>

<div class="col-md-9 dashboard">

	@yield('content')

</div>

</div>
</div>
</body>
</html>