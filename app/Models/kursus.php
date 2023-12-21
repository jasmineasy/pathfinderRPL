<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kursus extends Model
{
    use HasFactory;
    protected $fillable = ['id_course','course_name','rating','durasi','topik'];
    protected $table = 'kursus';
    public $timestamps = false;
}
