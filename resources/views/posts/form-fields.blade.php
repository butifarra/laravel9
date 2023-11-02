<label>
    Title <br>
    <input name="title" type="text" value="{{old('title', $post->title)}}">//pongo el title solo para normalizar
    //con el método edit
    @error('title')
    <br>
    <small style="color: red">{{$message}}</small>
    @enderror

</label>
<label>
    Body <br>
    <textarea name="body">{{old('body', $post->body)}}</textarea> <br>
    @error('body')
    <br>
    <small style="color: red">{{$message}}</small>
    @enderror
</label>
