<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    {{--<title>Denis - @yield('title')</title>--}}
    {{--<title>Denis - {{$title}} ?? 'Default value' </title>--}}
    {{--<meta name="description" content="@yield('meta-description', 'Default value')" />--}}
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

<body class="antialiased bg-slate-100 dark:bg-slate-900">
    {{--@include('partials.navigation')--}}
    <x-layouts.navigation />
    @if(session('status'))
    <div class="max-w-screen-xl px-3 py-2 mx-auto font-bold text-white sm:px-6 lg:px-8 bg-emerald-500 dark:bg-emerald-700">
        {{ session('status') }}
    </div>
    @endif

    {{--<pre>{{$sum}}</pre>--}}
    {{--@yield('content')--}}
    {{$slot}}
</body>

</html>
