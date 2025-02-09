<?php

namespace Database\Seeders;

use App\Models\Inventory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Inventory::create([
            "kode_barang"=> "B001",
            "nama_barang" => "Laptop",
            "merk_tipe" => "Dell",
            "no_sertifikat_pabrik_chasis_mesin" => 1234567890,
            "no_polisi" => 1234567890,
            "no_rangka" => 1234567890,
            "asal_perolehan" => "Pembelian",
            "tahun_pembelian" => 2022,
            "keadaan_barang_status" => "Baik",
            "jumlah_barang" => 1,
            "harga_barang" => 1000000,
            "employee_id" => 1,
        ]);
    }
}
