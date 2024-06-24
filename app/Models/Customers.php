<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $primaryKey = 'CustomerID';

    protected $table = 'customers';

    protected $fillable = [
        'Nama', 'Alamat', 'NomorTelepon', 'Email'
    ];

    public $timestamps = false;

    public function itemRequests()
    {
        return $this->hasMany(ItemRequests::class, 'CustomerID', 'CustomerID');
    }

    public function salesTransactions()
    {
        return $this->hasMany(SalesTransactions::class, 'CustomerID', 'CustomerID');
    }
}
