<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;


    protected $tabel = "pembayaranas";
    protected $primerkey = "id";

    protected $filtabel =[
        'tgl_pembayaran',
        'bukti_pembayaran',
       'tgl_buktipembayaran',
       'status_pembayaran',
       'bulan_tagihan',
       'tahun_tagihan',
        'jumlah_tagihan',
        'useracc',
        'tgl_acc',
        'keterang',

    ];

    public $timestamps = false;
}
