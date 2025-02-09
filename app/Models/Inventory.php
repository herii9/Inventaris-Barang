<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $guarded = [];

    public function employee()
    {
    return $this->belongsTo(Employee::class, 'employee_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($inventories) {
            $lastKodeBarang = self::latest('kode_barang')->first();
            $nextNumber = $lastKodeBarang ? $lastKodeBarang->id + 1 : 1;

            $inventories->kode_barang = 'P-' . str_pad($nextNumber, 4, '0', STR_PAD_LEFT);
        });
    }
}
