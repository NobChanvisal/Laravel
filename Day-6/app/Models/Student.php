<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table = 'tbstudent';
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'DOB',
        'gender',
        'score',
        'image',
    ];
    
    public function users()
    {
        return $this->belongsTo(User::class, 'users_id'); // 'user_id' is the foreign key in students table
    }

}
