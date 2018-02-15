<!DOCTYPE html>
<html>
<head>
    <title>Oxy App</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>
<body>
<nav class="navbar navbar-toggleable-md navbar-inverse ">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Oxy App</a>
</nav>
<div class="container">
    @yield('content')
</div>

</body>
</html>