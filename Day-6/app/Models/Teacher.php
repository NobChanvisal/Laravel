<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    //
    protected $table = 'tbteachers';
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id'); 
    }
    
    public function classes()
    {
        return $this->hasMany(Classes::class, 'teacher_id');
    }
}
