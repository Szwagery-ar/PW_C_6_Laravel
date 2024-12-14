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
        //
        Schema::create(
            'obat',
            function (Blueprint $table) {
                $table->id('id_obat');
                $table->string('deskripsi_obat');
                $table->string('nama_obat');
                $table->integer('stok');
                $table->float('harga_obat');
                $table->string('jenis_obat');
                $table->string('image');
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('obat');
    }
};
