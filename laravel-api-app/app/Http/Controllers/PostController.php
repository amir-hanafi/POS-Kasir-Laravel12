<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller implements HasMiddleware
{
    public static function middleware()
    {
        return [
            new Middleware('auth:sanctum', except: ['index', 'show'])
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return post::with('user')->latest()->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $fields = $request->validate([
            'title' => 'required|max:225',
            'body' => 'required|'
        ]);

        $post = $request->user()->posts()->create($fields);

        return ['post' => $post, 'user' => $post->user];
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        //
        return ['post' => $post, 'user' => $post->user];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post $post)
    {
        //
        Gate::authorize('modify' , $post);

        $fields = $request->validate([
            'title' => 'required|max:225',
            'body' => 'required|'
        ]);

        $post->update($fields);

        return ['post' => $post, 'user' => $post->user];
    }

    /** 
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        //
        Gate::authorize('modify' , $post);
        
        $post->delete();

        return ['messege' => 'the post was deleted'];
    }
}
