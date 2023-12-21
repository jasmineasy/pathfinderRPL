<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class internship extends Model
{
    protected $table = 'internship';
    public $timestamps = false;
    protected $fillable = [
        'idInternship',
        'perusahaan',
        'role',
        'durasi',
        'lokasi'
    ];
}