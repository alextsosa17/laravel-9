
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <meta name="description" content= @yield('meta-desciption', 'Default meta description')">
    {{--Esto porque lo haces? 
    dale que vos programas mejor que esta basura , ponele onda usa la cabeza mandale fruta--}}
</head>

<body>

    @include('partials.navigation') <!--menu de navegacion -->
    


     <!-- //aqui queremos que se imprima el contenido variable de la plantilla -->
    @yield('content')




</body>

</html>
