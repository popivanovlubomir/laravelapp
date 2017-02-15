<!DOCTYPE html>
<html>
<head>
    <title>My App | Administration</title>

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
    @include('shared.bootstrap')
</head>
<body>
    @include('admin.layouts.header')
    <div class="container">
        @yield('content')
    </div>
    <div id="footer">
        @include('admin.layouts.footer')
    </div>
</body>
</html>