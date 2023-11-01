<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    {{--<title>Denis - @yield('title')</title>--}}
    {{--<title>Denis - {{$title}} ?? 'Default value' </title>--}}
    {{--<meta name="description" content="@yield('meta-description', 'Default value')" />--}}
</head>

<body>
    {{--@include('partials.navigation')--}}
    <x-layouts.navigation />
    {{--<pre>{{$sum}}</pre>--}}
    {{--@yield('content')--}}
    {{$slot}}
</body>

</html>