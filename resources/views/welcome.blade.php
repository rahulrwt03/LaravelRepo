<!DOCTYPE html>
<html>
<head>
    <!-- Common HTML head elements -->
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <!-- Content section that can be overridden by child views -->
    <div class="container">
        @yield('content')
    </div>
    </body>
</html>
