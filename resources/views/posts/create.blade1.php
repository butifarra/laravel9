<x-layouts.app title="Crear" meta-description="Jodete algo">
    <h1>Create new post</h1>
    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <label>
            Title <br>
            <input name="title" type="text">
        </label>
        <label> <br>
            Cuerpo <br>
            <textarea name="body"></textarea> <br>
        </label>

        <button type="submit">Enviar</button>
    </form>
    <br>
    <br>
    <a href=" {{route('posts.index')}}">Regresar</a>
</x-layouts.app>