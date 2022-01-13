<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Kategori;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $itemproduk = Produk::orderBy('created_at', 'desc')->paginate(20);
        $data = array('title' => 'Produk',
                    'itemproduk' => $itemproduk);
        return view('produk.index', $data)->with('no', ($request->input('page', 1) - 1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $itemkategori = Kategori::orderBy('nama_kategori', 'asc')->get();
        $data = array('title' => 'Form Tambah Produk Baru',
                    'itemkategori' => $itemkategori);
        return view('produk.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_produk' => 'required|unique:produk',
            'nama_produk' => 'required',
            'slug_produk' => 'required',
            'deskripsi_produk' => 'required',
            'kategori_id' => 'required',
            'qty' => 'required|numeric',
            'satuan' => 'required',
            'harga' => 'required|numeric'
        ]);
        $itemuser = $request->user(); //ambil data user yang login
        $slug = \Str::slug($request->slug_produk); //buat slug dari input slug produk
        $inputan = $request->all();
        $inputan['slug_produk'] = $slug;
        $inputan['user_id'] = $itemuser->id;
        $inputan['status'] = 'publish';
        $itemproduk = Produk::create($inputan);
        return redirect()->route('produk.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array('title' => 'Foto Produk');
        return view('produk.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array('title' => 'Form Edit Produk');
        return view('produk.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
