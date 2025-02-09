<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        "name",
        "NIP"
    ];

    public function inventories()
        {
    return $this->hasMany(Inventory::class, 'employee_id');
        }
}
