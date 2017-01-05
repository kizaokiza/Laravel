<!doctype html>
<html lang="en">
    <head>
        <meta charset = "UTF-8">
        <title>@yield('title')</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">    
         <link rel="stylesheet" href="{{ URL::to('css/custom.css') }}">
        @yield('styles')    
    </head>
    <body>
        @yield('header')
        <div class="main">
            @yield('content')
            
        </div>
    </body>
</html>