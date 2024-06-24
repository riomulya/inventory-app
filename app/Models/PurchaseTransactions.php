<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseTransactions extends Model
{
    use HasFactory;
    protected $primaryKey = 'TransaksiID';

    protected $table = 'purchasetransactions';

    protected $fillable = [
        'Tanggal', 'TotalHarga', 'SupplierID'
    ];

    public $timestamps = false;

    public function supplier()
    {
        return $this->belongsTo(Suppliers::class, 'SupplierID', 'SupplierID');
    }

    public function purchaseTransactionDetails()
    {
        return $this->hasMany(PurchaseTransactionDetails::class, 'TransaksiID', 'TransaksiID');
    }

    public function incomingItems()
    {
        return $this->hasMany(IncomingItems::class, 'TransaksiID', 'TransaksiID');
    }

    public function outgoingItems()
    {
        return $this->hasMany(OutgoingItems::class, 'TransaksiID', 'TransaksiID');
    }
}
