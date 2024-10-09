<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Walikelas extends Model
{
    use HasFactory;

    protected $table = "walikelass";
    protected $primaryKey = "id";

    protected $fillable =[
        'kelas',
        'nama',
    ];

    public $timestamps = false;
}
