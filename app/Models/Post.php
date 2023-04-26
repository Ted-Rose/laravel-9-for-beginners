<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Here you can modify your table

    // Change table name, because name of migration is posts not post
    // protected $table = 'posts';

    // Change primary key of table if id is not needed as PK
    // has to match a table column name
    // protected $primaryKey = 'title';

    // Non increment primary key
    // protected $incrementing = false;

    // Disable timestamps - alternative to deleting the column
    // public $timestamps = false;

    // Change format. U - only store seconds of timestamps
    // protected $dateFormat = 'U';

    // Change driver for model
    // protected $connection = 'sqlite';

    // Default values for attributes
    // protected $attributes = [
    //    'is_published' => true
    // ];

}
