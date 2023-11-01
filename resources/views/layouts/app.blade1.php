<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>Denis - @yield('title')</title>
    <meta name="description" content="@yield('meta-description', 'Default value')" />
</head>

<body>
    @include('partials.navigation')
    @yield('content')
</body>

</html>