<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->integer('tgl_pembayaran');
            $table->string('bukti_pembayaran');
            $table->integer('tgl_buktipembayaran');
            $table->string('status_pembayaran');
            $table->string('bulan_tagihan');
            $table->integer('tahun_tagihan');
            $table->integer('jumlah_tagihan');
            $table->string('useracc');
            $table->integer('tgl_acc');
            $table->string('keterangan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
