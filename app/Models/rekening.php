<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rekening extends Model
{
    use HasFactory;

    protected $tabel = "rekenings";
    protected $primaryker = "id";

    protected $filtebel = [
           'namabnk',
           'namapemilik',

    ];

    public $timestamps = false;

}
