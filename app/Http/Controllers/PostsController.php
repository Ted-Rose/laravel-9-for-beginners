<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
// Injects instance of Illuminate Http object Request
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('blog.index', [
            'posts' =>  Post::orderBy('updated_at', 'desc')->get()
        ]);
    }

    /**`
     * Show the form for creating a new resource
     * and calls store function on submit. 
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        Post::create([
            // We have to pass in key that is the property name inside
            // our post model while value will be the actual value from
            // the request
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
            'image_path' => 'temporary',
            'is_published' => $request->is_published === 'on',
            'min_to_read' => $request->min_to_read,
            // You don't have to call save method, because it is
            // automatically called in the Post model itself.
            // But when you want to use create, make, update method in
            // eloquent you have to approve properties for mass assignment
        ]);
        return redirect(route('blog.index'));
    }

    /**
     * Display the specified resource.
     *
     * @return Application|Factory|View
     * Optional route parameter needs to have a default value eg: $id = 1
     */
    public function show($id)
    {
        return view('blog.show', [
            'post' => Post::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $post = Post::where('id', $id)->get();

        dd($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
