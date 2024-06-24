<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesTransactionDetails extends Model
{
    use HasFactory;
    protected $primaryKey = 'DetailID';

    protected $table = 'salestransactiondetails';

    protected $fillable = [
        'TransaksiID', 'ItemID', 'Jumlah', 'HargaPerItem'
    ];

    public $timestamps = false;

    public function salesTransaction()
    {
        return $this->belongsTo(SalesTransactions::class, 'TransaksiID', 'TransaksiID');
    }

    public function item()
    {
        return $this->belongsTo(Items::class, 'ItemID', 'ItemID');
    }
}
