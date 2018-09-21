<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Repositories\PostsRepository;
use Carbon\Carbon;

class PostsController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except(['index','show']);
    }

    public function index(){
        return view('posts.index');
    }

    public function show(Post $post){
        return view('posts.show', compact('post'));
    }

    public function showAll(PostsRepository $postsRepository){
        // $posts = Post::latest()
        //             ->filter(request(['month', 'year']))
        //             ->get();

        $posts = $postsRepository->all('desc');

        return view('posts.showAll', compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        /*
        $post = new Post;
        $post->title = request('title');
        $post->body = request('body');

        $post->save(); // method from the Eloquent/Model class
        */
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        auth()->user()->publish(
            new Post(request(['title','body']))
        );

        session()->flash('message', 'Post successfully created');

        // Post::create([
        //     'title' => request('title'),
        //     'body' => request('body'),
        //     'user_id' => auth()->id()
        // ]);
        return redirect('/');
    }
}
