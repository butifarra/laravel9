{{--//pongo la navegación encerrando el contenido. El : hace que ejecutemos PHP dentro del x-algo--}}
<x-layouts.app :title="$post->title" :meta-description="$post->body">
    <h1>Edit form</h1>
    <form action="{{route('posts.update', $post)}}" method="POST">
        @csrf @method('PATCH')
        @include('posts.form-fields')
        <button type="submit">Enviar</button>
    </form>
    <br>
    <a href="{{route('posts.index')}}">Regresar</a>
</x-layouts.app>
