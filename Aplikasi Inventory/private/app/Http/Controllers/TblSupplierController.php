<?php

namespace App\Http\Controllers;

use App\tbl_supplier;
use Illuminate\Http\Request;

class TblSupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = tbl_supplier::all();
        return view ('layouts.supplier',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tbl_supplier  $tbl_supplier
     * @return \Illuminate\Http\Response
     */
    public function show(tbl_supplier $tbl_supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tbl_supplier  $tbl_supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(tbl_supplier $tbl_supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tbl_supplier  $tbl_supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tbl_supplier $tbl_supplier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tbl_supplier  $tbl_supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbl_supplier $tbl_supplier)
    {
        //
    }
}
