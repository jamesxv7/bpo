<!doctypehtml>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <title>Busca Precios</title>
    <!-- load bootstrap from a cdn -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    @yield('title-section')
    @yield('body-section')
    </div>
</body>
</html>