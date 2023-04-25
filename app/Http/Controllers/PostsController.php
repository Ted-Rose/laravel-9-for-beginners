<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = DB::statement('SELECT * FROM posts');
        // // Accessing method from facade
        // // by pointing to it using "::"
        // // This show "True" on browser meaning that it is
        // // possible to access all these entries
        // dd($posts);
        
        // $posts = DB::select('SELECT * FROM posts');
        // dd($posts);
        // // Prints out all entries from posts in browser
        
        // $posts = DB::select('SELECT * FROM posts WHERE id = 1');
        // var_dump($posts);
        // Prints out dump value for entry in browser with id 1
        
        // $posts = DB::select('SELECT * FROM posts WHERE id = ?', [1]);
        // dd($posts);
        // Parameter binding / prepared statements is the correct way
        // how to specify things
        
        // $posts = DB::select('SELECT * FROM posts WHERE id = :id', ['id' => 1]);
        // dd($posts);
        // This way you can assign value so that it is easier to work with multiple
        // variables
        
        // $posts = DB::insert('INSERT INTO posts (title, excerpt, body, image_path,
        // is_published, min_to_read)') VALUES(?, ?, ?, ?, ?, ?)', [
        //     'Test', 'Test', "Test", "Test", true, 1
        // ]);
        // dd($posts);
        // Inserts the data into posts table
        
        // $posts = DB::update('UPDATE posts SET body = ? WHERE id = ?' [
            // 'Body 2', 203
        // ]);
        // Edits one row in db with id 203
        // dd($posts);
        
        // $posts = DB::update('DELETE FROM posts WHERE id = ?' [203]);
        // Deletes record with id 203
        // dd($posts);


        // $posts = DB::table('posts');
        // Doesn't post real data in table, because we are not
        // triggering execution of the current query. We need to add get
        // method to it
        // dd($posts);
        
        // $posts = DB::table('posts')
        //     ->get();
        // Collection with 202 items have been returned to browser
        // dd($posts);
        
        // $posts = DB::table('posts')
        //     ->select('title', 'body')
        // Show only title and body
        //     ->where('id', '>', 50)
        // Gets value where id greater than 50
        //      ->where('is_published', true)
        // if we use '=' sign than Laravel recognizes if booleans
        // are true or false
        //     ->whereBetween('min_to_read', [2, 6] )
        // Gets value that are between 2 and 6
        //     ->whereNotBetween('min_to_read', [2, 6] )
        // Gets value that aren't between 2 and 6
        //     ->whereIn('min_to_read', [2, 6] )
        // Gets value where min to read are specifically 2 and 6
        //     ->whereNull('excerpt')
        // Gets value where excerpt is null
        // Also whereNotNull works
        //     ->select('min_to_read')
        //     ->distinct()
        // We use distinct with select together because by default
        // distinct will
        // look for primary key in the table meaning it will return all
        // values, but select makes it point to unique min_to_read values
        //     ->orderBy('id', 'desc')
        //
        //      ->skip(30)
        //      ->take(10)
        // Skips first 30 rows and takes the next 10 (rows 31-40)
        //      ->inRandomOrder()
        // Gets rows in random order (random by primary key)
        //     ->get();
        // Get or other methods have to be at end because otherwise
        // this query won't work
        // ALTERNATIVES TO GET:
        //      ->first()
        // Gets first method, but if you put in where before it it 
        // brings the first in the where clause 
        // dd($posts);


        // $posts = DB::table('posts')
        //     ->find(100);
        // // Gets id 100 row
        // dd($posts);

        // $posts = DB::table('posts')
        //     ->where('id', 100)
        //     ->value('body');
        // // Gets body of id 100
        // dd($posts);

        // $posts = DB::table('posts')
        //     ->count();
        //     // Shows a count of all rows
        // dd($posts);

        $posts = DB::table('posts')
            ->min('minutes_to_read');
            // Shows min value
            // Also works with max, sum, avg
        dd($posts);

        return view('blog.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * Optional route parameter needs to have a default value eg: $id = 1
     */
    public function show($id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
