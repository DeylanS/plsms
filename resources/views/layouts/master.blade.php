<html>
    <head>
        @if ($title)
                <title>{{ $title }}</title>
        @else
                <title>Example Laravel App</title>
        @endif
    </head>
    <body>
        <div><a href="/home">Home</a> | <a href="/home">Profile Manager</a> | <a href="/home">Expert Domain</a> | <a href="/home">Publications</a> | <a href="/home">Progress Monitor</a>
        <hr/>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>