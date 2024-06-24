<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemRequests extends Model
{
    use HasFactory;
    protected $primaryKey = 'RequestID';

    protected $table = 'itemrequests';

    protected $fillable = [
        'Tanggal', 'CustomerID', 'ItemID', 'Jumlah'
    ];

    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo(Customers::class, 'CustomerID', 'CustomerID');
    }

    public function item()
    {
        return $this->belongsTo(Items::class, 'ItemID', 'ItemID');
    }
}
