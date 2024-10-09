<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenispembayaran extends Model
{
    use HasFactory;

    protected $tabel = "jenispembayarans";
    protected $pirmarykey = "id";

    protected $filletabel  =[
        'nama',

    ];

    public $timestamps = false;






}
