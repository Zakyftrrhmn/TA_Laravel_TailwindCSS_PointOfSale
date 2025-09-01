<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use Illuminate\Http\Request;

class KategoriProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Mendapatkan nilai 'show_data' dari request, default-nya 10
        $perPage = $request->input('show_data', 10);

        // Mendapatkan nilai 'search' dari request
        $search = $request->input('search');

        // Membangun query untuk KategoriProduk
        $query = KategoriProduk::query();

        // Jika ada input pencarian, tambahkan kondisi pencarian
        if ($search) {
            $query->where('nama_kategori', 'like', '%' . $search . '%');
        }

        // Terapkan paginasi pada query
        $kategori_produk = $query->paginate($perPage)->withQueryString();

        return view('pages.kategori-produk.index', compact('kategori_produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.kategori-produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_kategori' => 'required|max:25|string|unique:kategori_produks,nama_kategori'
            ],
        );

        KategoriProduk::create($request->all());

        return redirect()->route('admin.kategori_produk.index')->with('success', 'Selamat data kategori berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('404');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KategoriProduk $kategori_produk)
    {
        return view('pages.kategori-produk.edit', compact('kategori_produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriProduk $kategori_produk)
    {
        $request->validate([
            'nama_kategori' => 'required|max:25|string|unique:kategori_produks,nama_kategori,' . $kategori_produk->id,
        ]);

        $kategori_produk->update($request->all());

        return redirect()->route('admin.kategori_produk.index')->with('success', 'Selamat data kategori berhasil diubah');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriProduk $kategori_produk)
    {
        $kategori_produk->delete();
        return redirect()->route('admin.kategori_produk.index')->with('success', 'Selamat data kategori berhasil dihapus');
    }
}
