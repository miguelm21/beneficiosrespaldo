<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Club de Beneficios </title>
        <meta name="description" content="This is an example of a meta description. This will often show up in search results.">
        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Styles -->
        
    </head>
    <body>
        
        <div class="container">
            
            @yield('content')

        </div>



        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
