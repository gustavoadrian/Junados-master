<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('modulos/head')
    </head>
    <body>
        
        <section class="fondo-cabecera" id="fondo-cabecera">
            <div class="container">
                @include('modulos/cabecera')
            </div>
        </section>

        <section class="text-center fondo-contenido" id="contenido">
            <div class="container">
                @yield('content')
            </div>
        </section>

        <section class="fondo-pie" id="fondo-pie">
            <div class="container">
                @include('modulos/pie')
            </div>
        </section>

        @include('modulos/script')

    </body>
</html>
