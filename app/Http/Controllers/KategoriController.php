<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Mengambil data kategori per halaman 20 data dan (paginate(20))
        // Mengurutkan yang terakhir diiput ke paling atas (orderBy)
        $itemkategori = Kategori::orderBy('created_at', 'desc')->paginate(20);
        $data = array('title' => 'Kategori Produk',
                    'itemkategori' => $itemkategori);
        return view('kategori.index', $data)->with('no', ($request->input('page', 1) - 1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array('title' => 'Form Kategori');
        return view('kategori.create', $data);
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
            'kode_kategori' => 'required|unique:kategori',
            'nama_kategori'=>'required',
            'slug_kategori' => 'required',
            'deskripsi_kategori' => 'required',
        ]);
        $itemuser = $request->user(); //memanggil data user yang sedang login
        $inputan = $request->all(); //memasukkan semua variabel data yang diinput ke variabel $inputan
        $inputan['user_id'] = $itemuser->id;
        $inputan['slug_kategori'] = \Str::slug($request->slug_kategori); //membuat slug biar pemisahnya menjadi strip (-)
        //slug yang digunakan nanti pas buka produk per kategori
        $inputan['status'] = 'publish'; //status set langsung publish saja
        $itemkategori = Kategori::create($inputan);
        return redirect()->route('kategori.index')->with('success', 'Data kategori berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array('title' => 'Form Edit Kategori');
        return view('kategori.edit', $data);
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
