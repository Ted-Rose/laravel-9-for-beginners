<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'excerpt',
        'body',
        'image_path',
        'is_published',
        'min_to_read',
        // Passing in columns we want to add in the assignment
    ];
//     Laravel's main focus is preventing you from hijaks by
        // accidentally setting values on fields that you
        // don't want to change.

    // Change table name
    // protected $table = 'posts';

    // Change primary key of table
    // protected $primaryKey = 'title';

    // Non increment primary key
    // protected $incrementing = false;

    // Disable timestamps
    // public $timestamps = false;

    // Change format
    // protected $dateFormat = 'U';

    // Change driver for model
    // protected $connection = 'sqlite';

    // Default values for attributes
    // protected $attributes = [
    //    'is_published' => true
    // ];

}
