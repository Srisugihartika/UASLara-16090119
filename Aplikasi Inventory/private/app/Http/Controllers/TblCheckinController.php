<?php

namespace App\Http\Controllers;

use App\tbl_checkin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TblCheckinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = tbl_checkin::all();
        return view ('layouts.checkin',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('layouts.tbhcheckin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('tbl_checkins')->insert([
        'nama' => $request->nama,
        'jumlah' => $request->jumlah,
        'kategori' => $request->kategori,
        ]);

        return redirect('/checkin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tbl_checkin  $tbl_checkin
     * @return \Illuminate\Http\Response
     */
    public function show(tbl_checkin $tbl_checkin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tbl_checkin  $tbl_checkin
     * @return \Illuminate\Http\Response
     */
    public function edit(tbl_checkin $tbl_checkin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tbl_checkin  $tbl_checkin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tbl_checkin $tbl_checkin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tbl_checkin  $tbl_checkin
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbl_checkin $tbl_checkin)
    {
        //
    }
}
