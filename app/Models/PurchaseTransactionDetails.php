<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseTransactionDetails extends Model
{
    use HasFactory;
    protected $primaryKey = 'DetailID';

    protected $table = 'purchasetransactiondetails';

    protected $fillable = [
        'TransaksiID', 'ItemID', 'Jumlah', 'HargaPerItem'
    ];

    public $timestamps = false;

    public function purchaseTransaction()
    {
        return $this->belongsTo(PurchaseTransactions::class, 'TransaksiID', 'TransaksiID');
    }

    public function item()
    {
        return $this->belongsTo(Items::class, 'ItemID', 'ItemID');
    }
}
