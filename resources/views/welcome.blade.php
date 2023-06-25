    <!-- @extends('layouts.app')
    @section('title','Home')
    @section('meta-desciption', 'Home meta-description') -->
        
    <!-- @section('content') -->
    <x-layout><!-- esta sintaxis ya asume que el componente esta en la carpeta components en resources/views -->
    @component('components.layout') <!-- con esta sintaxis tambien se puede usar componentes-->
    <h1>Inicio</h1>
    <!-- @endcomponent   recordar cerrar el componente-->
    </x-layout> <!-- solo hay que agregarle el archivo donde se va a imprimir ese componente-->
    <!-- @endsection -->
  