<!DOCTYPE html>
<html>
<head>
    <title>My App</title>
    @include('layouts.bootstrap')
</head>
<body>
    @include('layouts.header')
    <div class="jumbotron">
        <div class="container">
            <h1>Hello, world!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
        </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
    <div id="footer">
        @include('layouts.footer')
    </div>
</body>
</html>