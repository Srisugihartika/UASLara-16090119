<?php

namespace App\Http\Controllers;

use App\tbl_checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TblCheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = tbl_checkout::all();
        return view ('layouts.checkout',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('layouts.tbhcheckout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('tbl_checkouts')->insert([
        'nama' => $request->nama,
        'jumlah' => $request->jumlah,
        'kategori' => $request->kategori,
        ]);

        return redirect('/checkout');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tbl_checkout  $tbl_checkout
     * @return \Illuminate\Http\Response
     */
    public function show(tbl_checkout $tbl_checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tbl_checkout  $tbl_checkout
     * @return \Illuminate\Http\Response
     */
    public function edit(tbl_checkout $tbl_checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tbl_checkout  $tbl_checkout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tbl_checkout $tbl_checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tbl_checkout  $tbl_checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbl_checkout $tbl_checkout)
    {
        //
    }
}
