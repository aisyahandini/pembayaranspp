<?php

namespace Database\Seeders;

use App\Models\Jenispembayaran;
use App\Models\Pembayaran;
use App\Models\rekening;
use App\Models\Siswa;
use App\Models\Tagihan;
use App\Models\User;
use App\Models\Walikelas;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // seeder untuk login admin//
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

         //seeder untuk login petugas//
        User::factory()->create([
            'name' => 'Petugas',
            'email' => 'petugas@gmail.com',
            'password' => Hash::make('petugas123'),
            'role' => 'petugas',
        ]);

        // seeader untuk siswa//

        $siswa = new Siswa();
        $siswa->nis = '123';
        $siswa->nama = 'asiyah';
        $siswa->kelas = '12';
        $siswa->jurusan = 'pplg';
        $siswa->alamat = 'blbla';

        $siswa->save();

        //seeder walikelas//

        $walikelas = new Walikelas();
        $walikelas-> kelas = 'x';
        $walikelas-> nama = 'cahjaya';

        $walikelas->save();

        //seeder jenispembayaran//

        $jenispembayaran = new Jenispembayaran();
        $jenispembayaran->nama ='cahjaya';

        $jenispembayaran->save();

        //seeder tagihan//

        $tagihan = new Tagihan();
        $tagihan-> bulan = 'x';
        $tagihan-> jatuhtempo = 'cahjaya';
        $tagihan-> jumlah ='200';
        $tagihan->id_jenis = 1;

        $tagihan->save();



        //pembayaran//
        $pembayaran = new Pembayaran();
        $pembayaran->tgl_pembayaran = 12;
        $pembayaran->bukti_pembayaran ='cetak';
        $pembayaran->tgl_buktipembayaran = 12;
        $pembayaran->status_pembayaran ='lunas';
        $pembayaran->bulan_tagihan = 1;
        $pembayaran->tahun_tagihan = 2024;
        $pembayaran->jumlah_tagihan = 3;
        $pembayaran->useracc = 'cahjay';
        $pembayaran->tgl_acc = 3;
        $pembayaran->keterangan = 'lunas';


        $pembayaran->save();

        //rekening//
        $rekening = new Rekening();
        $rekening->namabnk ='bri';
        $rekening->namapemilik ='cahjaya';

        $rekening->save();














    }
}

