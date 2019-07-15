<?php

namespace App\Http\Controllers;

use App\tbl_produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TblProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = tbl_produk::all();
        return view ('layouts.produk',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('layouts.tbhproduk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('tbl_produks')->insert([
        'nama' => $request->nama,
        'kategori' => $request->kategori,
        'harga' => $request->harga,
        'stok' => $request->stok,
        'supplier' => $request->supplier
        ]);

        return redirect('/produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tbl_produk  $tbl_produk
     * @return \Illuminate\Http\Response
     */
    public function show(tbl_produk $tbl_produk)
    {
        $id = tbl_produks::find()->id;
        $tbl_produk = tbl_produk::where('id', $id)->get();
        return view('showEvent', ['tbl_produk' => $tbl_produk]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tbl_produk  $tbl_produk
     * @return \Illuminate\Http\Response
     */
    public function edit(tbl_produk $id)
    {
       $data = tbl_produk::find($id)->first();
        return view('layouts.editproduk',['tbl_produk' => $data]);
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tbl_produk  $tbl_produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tbl_produk $tbl_produk)
    {
        DB::table('tbl_produks')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'supplier' => $request->supplier
        ]);

        return redirect('/produk')->with('alert-success','Kamu berhasil update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tbl_produk  $tbl_produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbl_produk $tbl_produk)
    {
        //
    }

    public function hapus($id)
    {
        $data = tbl_produk::find($id);
        $data->delete();

        return redirect('/produk')->with('alert-success','kamu berhasil menghapus');
    }
}
