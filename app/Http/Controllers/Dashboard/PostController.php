<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PutRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Post\StoreRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd(Category::find(1)->posts);
        $posts = Post::paginate(2);
        return view('dashboard.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('id', 'title');
        $post = new Post();
        return view('dashboard.post.create', compact('categories', 'post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        //$request->validate(StoreRequest::myRules());
        //$validated = Validator::make($request->all(), StoreRequest::myRules());
        // dd($validated->errors());
        // dd($validated->fails());
        
        // $data = $request->validated();
        // $data['slug'] = Str::slug($data['title'], '-');
        // dd($data);

        //$data = array_merge($request->all(), ['image' => '']);
        Post::create($request->all());
        return to_route('post.index')->with('status', 'Registro creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

        $categories = Category::pluck('id', 'title');
        return view('dashboard.post.edit', compact('categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PutRequest $request, Post $post)
    {   
        $data = $request->validated();
        if( isset($data["image"]) ){
            $data["image"] = $fillename = time() . "." . $data['image']->extension();
            $request->image->move(public_path("image"), $fillename);
        }
        $post->update($data);
        //$request->session()->flash('status', 'Registro actualizado');
        return to_route('post.index')->with('status', 'Registro actualizado');

        // $data = $request->all();
        // $filename = time();
        // $guessExtension = $request->file('image')->guessExtension();
        // $file = $request->file('image')->storeAs('public/image', $filename.'.'.$guessExtension  ,'local');



        // //return Storage::download('public\image\PDnEoaqEWZyhVa4ytuEWRAiJWIBlPCiBwdMFwEX5.png');

        // //php artisan storage:link
        // //dd($request->image->store('public/image', 'pablo.png'));

        //===== Storage subir archivo ======//
            // $filename = time();
            // $extension = $request->file('image')->guessExtension();
            // dd($request->file('image')->storeAs('public/images', $filename . '.' . $extension, 'local'));
        
        //===== Storage descargar archivo ======//
        //return Storage::download('public/images/1655259924.png');

        ////===== Storage url archivo ======//
        // $url = Storage::url('public/images/1655259924.png');
        // return  $_SERVER['SERVER_NAME'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('post.index')->with('status', 'Registro eliminado');
    }
}
