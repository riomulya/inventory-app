<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $primaryKey = 'CustomerID';


    protected $fillable = [
        'Nama', 'Alamat', 'NomorTelepon', 'Email'
    ];

    public $timestamps = false;

    protected $table = 'Customers';
}
