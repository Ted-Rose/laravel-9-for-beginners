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
        dd($request->all());
        exit;

        $post = new Post();
        $post->title = $request->title;
        $post->excerpt = $request->excerpt;
        $post->body = $request->body;
        $post->image_path = 'temporary';
        $post->is_published = $request->is_published === 'on';
        // is_published is an eternity operator (checkbox in form).
        // If is_published = '' then it will return 'on' upon submit
        $post->min_to_reat = $request->min_to_read;
        $post->save();
        // Call save method of our post which was created behind scene

        return redirect(route('blog.index'));
        // Unless we return a redirect then after form submit we will be
        // redirected to empty page

        // Trough Post object we can access all properties/columns in
        // our DB

        // dd($request->all())
        // // With the property request and ->all
        // // it shows all values including token.
        // // If we use ($request->title); then only title is returned

        // dd('Redirected to the store method');
        // // A quick way to check if our application flow works correctly
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
