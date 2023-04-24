<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            // Creates table posts
            $table->id();
            // id is by default primary, but we can add primary method
            // first method makes column first in table
            $table->string('title')->unique();
            // Unique method defines that this will be unique
            $table->text('excerpt')->nullable();
            // Allows null values to be inserted into columns
            $table->text('body');
            $table->text('image_path');
            // Path to an image
            $table->boolean('is_published');
            $table->integer('min_to_read')->default(1);
            // This default method sets default value
            // Show user how long time it takes to read a post
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
};
