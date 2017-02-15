<!DOCTYPE html>
<html>
<head>
    <title>My App</title>

    <script type="text/css">
        body {
            padding-top: 50px;
        }
        .starter-template {
            padding: 40px 15px;
            text-align: center;
        }

    </script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    @include('layouts.bootstrap')
</head>
<body>
    @include('layouts.header')
    <div class="container">
        <div class="starter-template">
        @yield('content')
        </div>
    </div>
    <div id="footer">
        @include('layouts.footer')
    </div>
</body>
</html>