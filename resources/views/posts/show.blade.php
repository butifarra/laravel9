{{--//pongo la navegación encerrando el contenido. El : hace que ejecutemos PHP dentro del x-algo--}}
<x-layouts.app :title="$post->title" :meta-description="$post->body">
    <h1>{{$post->title}}</h1> //esto funciona porque recibe la variable Post
    <p>{{$post->body}}</p>
    <a href="{{route('posts.index')}}">Regresar</a>
</x-layouts.app>