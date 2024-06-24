<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomingItems extends Model
{
    use HasFactory;
    protected $primaryKey = 'IncomingID';

    protected $table = 'incomingitems';

    protected $fillable = [
        'TransaksiID', 'SalesTransaksiID', 'Tanggal', 'ItemID', 'Jumlah', 'HargaPerItem'
    ];

    public $timestamps = false;

    public function purchaseTransaction()
    {
        return $this->belongsTo(PurchaseTransactions::class, 'TransaksiID', 'TransaksiID');
    }

    public function salesTransaction()
    {
        return $this->belongsTo(SalesTransactions::class, 'SalesTransaksiID', 'TransaksiID');
    }

    public function item()
    {
        return $this->belongsTo(Items::class, 'ItemID', 'ItemID');
    }
}
