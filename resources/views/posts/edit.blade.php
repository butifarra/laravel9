{{--//pongo la navegación encerrando el contenido. El : hace que ejecutemos PHP dentro del x-algo--}}
<x-layouts.app :title="$post->title" :meta-description="$post->body">
    <h1>Edit form</h1>
    <form action="{{route('posts.update', $post)}}" method="POST">
        @csrf
        <label>
            Title <br>
            <input name="title" type="text" value="{{old('title', $post->title)}}">
            <br>
            @error('title')
            <br>
            <small style="color: red">{{$message}}</small>
            @enderror

        </label>
        <label>
            Body <br>
            <textarea name="body">{{old('body',$post->body)}}</textarea>
            <br>
            @error('body')
            <br>
            <small style="color: red">{{$message}}</small>
            @enderror
        </label>

        <button type="submit">Enviar</button>
    </form>
    <br>
    <a href="{{route('posts.index')}}">Regresar</a>
</x-layouts.app>