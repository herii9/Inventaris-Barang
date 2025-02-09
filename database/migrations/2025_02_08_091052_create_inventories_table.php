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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang')->unique();
            $table->string('nama_barang');
            $table->string('merk_tipe');
            $table->string('no_sertifikat_pabrik_chasis_mesin')-> nullable();
            $table->string('no_polisi')->nullable();
            $table->string('no_rangka')->nullable();
            $table->string('asal_perolehan');
            $table->year('tahun_pembelian');
            $table->string('keadaan_barang_status');
            $table->integer('jumlah_barang');
            $table->decimal('harga_barang', 15, 2);
            $table->unsignedBigInteger('employee_id');
            $table->timestamps();

            $table->foreign('employee_id')->references('id')->on('employees')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
