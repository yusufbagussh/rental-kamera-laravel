<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\User;

class ProductController extends Controller
{
    public function index(Product $product)
    {
        //Untuk Judul
        $tittle = '';
        if (request('category')) {
            $category = Category::firstWhere('kategori_id', request('category'));
            $title = ' in ' . $category->kategori_nama;
        }

        if (request('author')) {
            $user = User::firstWhere('user_id', request('user'));
            $title = ' by ' . $user->user_nama;
        }

        // if (!auth()->check()) {
        //     abort(403);
        // }

        // dd($product);

        $data = [
            "title" => "Daftar Produk $title",
            "active" => "produk",
            // "produk" =>  Product::all(),
            // "produk" =>  Product::latest()->get()
            //Menampilkan seluruh post atau blog dari post terakhir atau terbaru
            "products" =>  $product->filter(request(['search', 'category', 'user']))->paginate(8)->withQueryString()
        ];
        // dd($data['products']);
        return view('product.index', $data);
    }

    public function show(Product $product)
    {
        $data = [
            'title' => 'Detail Produk',
            'product' => $product
        ];
        return view('product.product', $data);
    }
}
