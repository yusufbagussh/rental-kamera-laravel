<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.products.index', [
            'title' => 'Dashboard Admin',
            'products' => Product::with(['category', 'user'])->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.products.add', [
            'title' => 'Tambah Data Produk',
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'produk_nama' => 'required | max:255',
            'produk_harga' => 'required',
            'produk_keterangan' => ['required'],
            'produk_kategori' => 'required',
            'produk_status' => 'required',
            'produk_gambar' => 'image|file|max:1024'
        ]);

        if ($request->file('produk_gambar')) {
            $validateData['produk_gambar'] = $request->file('produk_gambar')->store('img');
        }

        $validateData['produk_user'] = $request->post('produk_user');

        $validateData['created_at'] = Carbon::now()->format('Y-m-d H:i:s');

        Product::create($validateData);

        return redirect('/dashboard/products')->with('success', 'Produk baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('dashboard.products.show', [
            'title' => 'Detail Produk',
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('dashboard.products.edit', [
            'title' => 'Ubah Data Produk',
            'product' => $product,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //return $request;
        $rules = [
            'produk_nama' => 'required | max:255',
            'produk_harga' => 'required',
            'produk_keterangan' => ['required'],
            'produk_kategori' => 'required',
            'produk_status' => 'required',
            'produk_gambar' => 'image|file|max:1024'
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('produk_gambar')) {
            if ($request->gambarLama) {
                Storage::delete($request->GambarLama);
            }
            $validatedData['produk_gambar'] = $request->file('produk_gambar')->store('img');
        }

        $validateData['produk_user'] = $request->post('produk_user');

        $validateData['updated_at'] = Carbon::now()->format('Y-m-d H:i:s');

        Product::where('produk_id', $product->produk_id)
            ->update($validatedData);

        return redirect('/dashboard/products')->with('success', 'Produk berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if ($product->produk_gambar) {
            Storage::delete($product->produk_gambar);
        }

        // Product::destroy($product->produk_id);

        DB::table('products')->where('produk_id', $product->produk_id)->delete();

        return redirect('/dashboard/products')->with('success', 'Produk berhasil dihapus');
    }
}
