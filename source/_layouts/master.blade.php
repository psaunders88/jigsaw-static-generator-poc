<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <meta http-equiv="Content-Security-Policy"
              content="script-src 'self' http://localhost https://reports.realrates.com 'unsafe-eval'">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body>
        <div id="app">
            <p>@{{testing}}</p>
            @yield('body')
        </div>
        @section('scripts')
            <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
        @show
    </body>
</html>
