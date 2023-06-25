
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title ?? 'Titulo por defecto'}} </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <meta name="meta-description" content="{{ $attributes['meta-description'] ?? 'Default meta description' }}" /></head>

<body>
    
   {{-- @include('partials.navigation')     <!-- aca estoy utilizando un  comentario con el modelo de plantillas blade --> --}}
    {{$attributes['']}} {{-- asi imprimo la variable reservada para mis componentes s-->
     <!-- //aqui queremos que se imprima el contenido variable de la plantilla -->
    --}}



</body>

</html>