<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    use HasFactory;
    protected $primaryKey = 'SupplierID';

    protected $table = 'suppliers';

    protected $fillable = [
        'Nama', 'Alamat', 'NomorTelepon', 'Email'
    ];

    public $timestamps = false;

    public function purchaseTransactions()
    {
        return $this->hasMany(PurchaseTransactions::class, 'SupplierID', "SupplierID");
    }

    public function items()
    {
        return $this->hasMany(Items::class, 'SupplierID', 'SupplierID');
    }

    
}
