<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class magang extends Model
{
    use HasFactory;
    protected $fillable = ['id_internship','perusahaan','role','durasi','lokasi','stream'];
    protected $table = 'intern';
    public $timestamps = false;
}


