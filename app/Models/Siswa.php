<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{

    use HasFactory;

    protected $table = "siswas";
    protected $primaryKey = "id";

    protected $fillable = [
        'nis',
        'nama',
        'kelas',
        'jurusan',
        'alamat',
    ]; 

    public $timestamps = false;

}
