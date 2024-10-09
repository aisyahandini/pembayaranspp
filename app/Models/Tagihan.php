<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    use HasFactory;

    protected $table = "tagihans";
    protected $primaryKey = "id";

    protected $fillable = [
        'bulan',
        'jatuh tempo',
        'jumlah',

    ];

    public $timestamps = false;
}
