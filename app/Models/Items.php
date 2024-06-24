<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;
    protected $primaryKey = 'ItemID';

    protected $table = 'items';

    protected $fillable = [
        'Nama', 'Deskripsi', 'Harga', 'JumlahStok', 'SupplierID', 'KategoriID'
    ];

    public $timestamps = true;

    public function supplier()
    {
        return $this->belongsTo(Suppliers::class, 'SupplierID', 'SupplierID');
    }

    public function category()
    {
        return $this->belongsTo(ItemCategories::class, 'KategoriID', 'KategoriID');
    }

    public function incomingItems()
    {
        return $this->hasMany(IncomingItems::class, 'ItemID', 'ItemID');
    }

    public function outgoingItems()
    {
        return $this->hasMany(OutgoingItems::class, 'ItemID', 'ItemID');
    }

    public function purchaseTransactionDetails()
    {
        return $this->hasMany(PurchaseTransactionDetails::class, 'ItemID', 'ItemID');
    }

    public function salesTransactionDetails()
    {
        return $this->hasMany(SalesTransactionDetails::class, 'ItemID', 'ItemID');
    }
}
