<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $posts = Post::where('user_id', $user->id)->get();
        return view('pages.posts.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'thumbnail' => 'required',
            'excerpt' => 'required',
            'content' => 'required',
            'slug' => 'required',
            'published_date' => 'required'
        ]);

        $fileName = 'nofile.png'; // You can customize the file name as needed
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $fileName = time() . '_' . $file->getClientOriginalName(); // You can customize the file name as needed
            $file->move(public_path('uploads'), $fileName); // Move the file to a public directory, adjust as needed
        }

        $user = Auth::user();
        Post::create([
            'title' => $request->title,
            'thumbnail' => $fileName,
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'slug' => $request->slug,
            'published_at' => $request->published_date,
            'user_id' => $user->id
        ]);

        $user = Auth::user();
        $posts = Post::where('user_id', $user->id)->get();
        return view('pages.posts.index', [
            'posts' => $posts
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        return view('pages.posts.view', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('pages.posts.update', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'excerpt' => 'required',
            'content' => 'required',
            'slug' => 'required',
            'published_date' => 'required'
        ]);
        $user = Auth::user();
        $payload = [
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'slug' => $request->slug,
            'published_at' => $request->published_date,
            'user_id' => $user->id
        ];

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $fileName = time() . '_' . $file->getClientOriginalName(); // You can customize the file name as needed
            $file->move(public_path('uploads'), $fileName); // Move the file to a public directory, adjust as needed
            $payload->thubmnail = $fileName;
        }

        $post = Post::find($id);
        $post->update($payload);

        $user = Auth::user();
        $posts = Post::where('user_id', $user->id)->get();
        return view('pages.posts.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();

        $posts = Post::all();
        return view('pages.posts.index', [
            'posts' => $posts
        ]);
    }

    
}
