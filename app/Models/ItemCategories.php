<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemCategories extends Model
{
    use HasFactory;
    protected $primaryKey = 'KategoriID';

    protected $table = 'itemcategories';

    protected $fillable = [
        'NamaKategori'
    ];

    public $timestamps = false;

    public function items()
    {
        return $this->hasMany(Items::class, 'KategoriID', 'KategoriID');
    }
}
