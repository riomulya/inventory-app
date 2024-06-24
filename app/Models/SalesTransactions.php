<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesTransactions extends Model
{
    use HasFactory;
    protected $primaryKey = 'TransaksiID';

    protected $table = 'salestransactions';

    protected $fillable = [
        'Tanggal', 'TotalHarga', 'CustomerID'
    ];

    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo(Customers::class, 'CustomerID', 'CustomerID');
    }

    public function salesTransactionDetails()
    {
        return $this->hasMany(SalesTransactionDetails::class, 'TransaksiID', 'TransaksiID');
    }

    public function incomingItems()
    {
        return $this->hasMany(IncomingItems::class, 'SalesTransaksiID', 'TransaksiID');
    }

    public function outgoingItems()
    {
        return $this->hasMany(OutgoingItems::class, 'SalesTransaksiID', 'TransaksiID');
    }
}
