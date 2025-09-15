<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $table = 'tbcourse';
    protected $fillable = [ 
        'name',
        'description',
    ];
}
