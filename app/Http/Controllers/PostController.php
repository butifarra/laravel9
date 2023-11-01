<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;
use PhpParser\Node\Stmt\Return_;

class PostController extends Controller
{
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
        return view('posts.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'min:4'],
            'body' => ['required'],
        ]);
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save(); //no enviamos el ID del post
        //acá creo el mensaje, pero lo muestro en posts.index.blade.php o en layouts.app para que esté en todos lados disponible
        session()->flash('status', 'Post created!');

        //return redirect()->route('posts.index');
        //lo anterior se abrevia en este helper

        return to_route('posts.index');
    }
}
