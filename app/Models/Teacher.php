<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $guarded=[];
    public $timestamps=false;
    public function courses(){
        return $this->hasMany(Course::class,'teacher_id');
    }
}
