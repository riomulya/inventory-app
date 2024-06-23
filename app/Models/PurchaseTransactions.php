<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseTransactions extends Model
{
    use HasFactory;

    protected $table = 'PurchaseTransactions';

    // Definisikan relasi ke model Supplier
    public function suppliers()
    {
        return $this->belongsTo(Suppliers::class, 'SupplierID', "SupplierID");
    }
}
