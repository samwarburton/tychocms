<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-inverse">

</nav>	
<div class="container">
@yield('content')

@yield('sidebar')
</div>




</body>
</html>