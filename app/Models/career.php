<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class career extends Model
{
    protected $table = 'career';
    public $timestamps = false;
    protected $primaryKey = 'idKarir';
    protected $fillable = [
        'idKarir',
        'stream',
        'namaKarir',
        'level1',
        'level2',
        'level3',
        'level4',
        'level5'
    ];
}

