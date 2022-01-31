<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf–8">
    <meta name="viewport" content="width=device–width, initial–scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Larabook</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/app.js') }}">
    </script>
</head>
<!––/head ––>
<body>
@section('menu')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Larabook</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarNav" class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item" role="presentation">
                    <a class="{{$page == 'Main page' ? 'active' : ''}} nav-link" href="{{url('index')}}">Main Page</a></li>
                <li class="nav-item" role="presentation">
                    <a class="{{$page == 'Forms' ? 'active' : ''}} nav-link" href="{{url('create')}}">Content Control</a></li>
            </ul>
        </div>
    </div>
</nav>
@show
<div class="container col-sm-12 col-md–12 col-lg-12">
    @yield('content')
</div>
</body>
</html>
