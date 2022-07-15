<?php

namespace App\Models;

use App\Models\Category;
use App\Models\user;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'produk_id';

    protected $guarded = ['produk_id'];

    protected $with = ['category', 'user'];

    public function scopeFilter($query, array $filters)
    {
        // if (request('search')) {
        //     return $query->where('produk_nama', 'like', '%' . request('search') . '%')
        //         ->orWhere('produk_keterangan', 'like', '%' . request('search') . '%');
        // }
        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     return $query->where('produk_nama', 'like', '%' . $filters['search'] . '%')
        //         ->orWhere('produk_keterangan', 'like', '%' . $filters['search'] . '%');
        // }

        //Pencaharian menggunakan search di all produk
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('produk_nama', 'like', '%' . $search . '%')
                ->orWhere('produk_keterangan', 'like', '%' . $search . '%');
        });

        //Pencaharian menggunakan search berdasarkan id kategori tertentu
        //cek apakah ada atau terdapat di category 
        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('kategori_id', $category);
            });
        });

        //Pencaharian menggunakan search berdasarkan id user tertentu
        $query->when(
            $filters['user'] ?? false,
            fn ($query, $user) =>
            $query->whereHas(
                //cek apakah ada atau terdapat di user
                'user',
                fn ($query) =>
                $query->where('user_id', $user)
            )
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'produk_kategori', 'kategori_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'produk_user', 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'produk_id';
    }
}
