<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classes extends Model
{
    //
    protected $table = 'tbclasses';
    use HasFactory;
     protected $fillable = [
        'teacher_id',
        'name',
        'description',
    ];

     public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
}
