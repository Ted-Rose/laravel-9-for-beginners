<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
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


        $posts = Post::sum('min_to_read');

        dd($posts);

        return view ('blog.index');
        // Retrieves sum of min_to_read column
        // Also we can use:
            // avg - returns average min to read


        $posts = Post::get()->count();

        dd($posts);

        return view ('blog.index');
        // Retrieves 202 rows


        Post::chunk(25, function ($posts) {
            foreach($posts as $post) {
                echo $post->title . '<br>'
            }
        });

        return view ('blog.index');
        // Chunks 25 rows and calls callback function that echos
        // titles of posts


        $posts = Post::where('min_to_read', '!=', 2)->get();

        dd($posts);

        return view ('blog.index');
        // Returns rows of posts that don't take 2 min to read


        $posts = Post::where('min_to_read', 2)->get();

        dd($posts);

        return view ('blog.index');
        // Returns 25 rows of posts that take 2 min to read


        $posts = Post::orderBy('id', 'desc')->take(10)->get();

        dd($posts);

        return view ('blog.index');
        // Returns 10 rows in desc order.


        $posts = Post::get();

        dd($posts);

        return view ('blog.index');
        // Returns 202 rows. Difference between all is that you can't
        // use method chaining


        $posts = Post::all();

        dd($posts);

        return view ('blog.index');
        // Returns 202 rows
    }

    /**`
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @return Application|Factory|View
     * Optional route parameter needs to have a default value eg: $id = 1
     */
    public function show($id)
    {
        // Shows 1 single post based on id as parameter

        ;
        return view('blog.show', [
            'post' => Post::findOrFail($id)
        ]);
        // Returns one row with the id number in blog/id url

        // $post = Post::findOrFail($id);
        // dd($posts);
        // go to blog/150 to see post with id 150
        // if we go to blog/205 we get error

        // $post = Post::find($id);
        // dd($posts);
        // go to blog/150 to see post with id 150
        // if we go to blog/205 we get null
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
