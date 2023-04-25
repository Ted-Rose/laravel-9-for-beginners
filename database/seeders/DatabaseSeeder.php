<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(PostsTableSeeder::class);
        Post::factory(100)->create();
        // Generate 100 records in db
        Post::factory(100)->create([
            'body'=> 'Overriding the body of our post'
        ]);
        // This will override the records we just made

    }
}
