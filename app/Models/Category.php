<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['kategori_id'];

    //Apabila timestamps tidak ingin diaktifkan
    // public $timestamps = false;

    protected $primaryKey = 'kategori_id';

    public function products()
    {
        return $this->hasMany(Product::class, 'produk_kategori', 'kategori_id');

        // return DB::table('categories')
        //     ->join('products', 'products.produk_kategori', ' = ', 'categories.kategori_id')
        //     ->whereIntegerInRaw('kategori_id', 1)
        //     ->get();
    }

    // public function getRouteKeyName()
    // {
    //     return 'kategori_id';
    // }
}
