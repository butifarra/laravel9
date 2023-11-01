{{--@extends('layouts.app')-}}
{{--@section('title','Home')--}}
{{--@section('meta-description', 'Home meta')--}}
{{--@section('content')--}}

{{--esto es con componentes en vez de layouts--}}

{{--@component('components.layout') Esto se sustituye por x-algo, x- apunta a la carpeta components --}}

<x-layouts.app title="Home" :sum="2+2">
    <x-slot name="title">
        Home Title
    </x-slot>
    <h1>Home</h1>
    <p>Acá va cualquier cosa HTML</p>
</x-layouts.app>
{{--@endcomponent--}}

{{--@endsection--}}