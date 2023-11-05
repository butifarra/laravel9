{{--//ESTE ESTE NO SE USA, lo usó al principio como ejemplo, se usa componentes/layouts/app.blade.php--}}
{{--Yo lo dejo porque no quise cambiarlo en About y Contact--}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    {{--<title>Denis - @yield('title')</title>--}}
    <meta name="description" content="@yield('meta-description', 'Default value')" />

</head>

<body>
    <x-layouts.navigation />
    @if(session('status'))
    <div>
        {{session('status')}} {{--muestro el mensaje solo una vez, por eso se llama flash--}}
    </div>
    @endif

    @yield('content')
</body>

</html>
