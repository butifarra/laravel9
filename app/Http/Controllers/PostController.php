<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\http\Requests\SavePostRequest; //este es mi request
use App\Models\Post;
use PhpParser\Node\Stmt\Return_;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    public function index()
    {
        $posts1 = [
            ['title' => 'First Post'],
            ['title' => 'Second Post'],
            ['title' => 'Third Post'],
            ['title' => 'Fourth Post'],
        ];
        $posts = Post::get();
        return view('posts.index', ['posts' => $posts]);
    }
    public function show(Post $post)
    {
        //return Post::findOrFail($post); //El Fail devuelve 404 si no lo encuentra. Pero al poner type hint en el método show, Laravel automáticamente
        //busca ese id y lo devuelve.
        return view('posts.show', ['post' => $post]);
    }
    public function create()
    {
        return view('posts.create', ['post' => new Post]);
    }
    public function store(SavePostRequest $request)
    {
        //Esto lo comento TODO porque ese SavePostRequest es casero mío, ahí se valida todo.

        /*  $validated = $request->validate([
            'title' => ['required', 'min:4'],
            'body' => ['required'],
        ]); */
        /* $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save(); */ //no enviamos el ID del post
        //acá creo el mensaje, pero lo muestro en posts.index.blade.php o en layouts.app para que esté en todos lados disponible

        /*  Post::create([
            'title' => $request->input('title'),
            'body' => $request->input('body')
        ]); */
        Post::create($request->validated());
        //session()->flash('status', 'Post created!');

        //return redirect()->route('posts.index');
        //lo anterior se abrevia en este helper

        return to_route('posts.index')->with('status', 'Post created');
    }
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }
    public function update(SavePostRequest $request, Post $post) //El parámetro request lo manda Laravel solo
    {
        /*  $validated = $request->validate([
            'title' => ['required', 'min:4'],
            'body' => ['required'],
        ]); */
        //$post =  Post::find($post); No precisamos esto porque Laravel lo busca solo cuando lo recibe
        /* $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save(); */ //no enviamos el ID del post
        //acá creo el mensaje, pero lo muestro en posts.index.blade.php o en layouts.app para que esté en todos lados disponible
        /* $post->update([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
        ]); */
        $post->update($request->validated());
        //session()->flash('status', 'Post updated!');


        //return redirect()->route('posts.index');
        //lo anterior se abrevia en este helper

        return to_route('posts.show', $post)->with('status', 'Post updated!');
    }
    public function destroy(Post $post) //le digo que es de tipo modelo Post
    {
        $post->delete();
        return to_route('posts.index')->with('status', 'Post deleted!');
    }
}
