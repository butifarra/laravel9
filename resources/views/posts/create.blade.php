<x-layouts.app title="Crear" meta-description="Jodete algo">
    <h1>Create new post</h1>
    {{--@foreach ($errors->all() as $error )
    <p>{{$error}}</p>
    @endforeach--}}
    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <label>
            Title <br>
            <input name="title" type="text" value="{{old('title')}}">
            @error('title')
            <br>
            <small style="color: red">{{$message}}</small>
            @enderror

        </label>
        <label>
            Body <br>
            <textarea name="body">{{old('body')}}</textarea> <br>
            @error('body')
            <br>
            <small style="color: red">{{$message}}</small>
            @enderror
        </label>

        <button type="submit">Enviar</button>
    </form>
    <br>
    <br>
    <a href=" {{route('posts.index')}}">Regresar</a>
</x-layouts.app>