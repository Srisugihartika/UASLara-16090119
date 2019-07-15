@extends('layouts.app')

@section('main')
    <div id="form">
        <h2>Form User</h2>
        <p>#</p>
    </div>

    {{-- 'route' => 'user.create', --}}
    {!! Form::open(array('method'=>'POST')) !!}
        <table >
            <tr><td>Kode Barang</td><td>{{ Form::text('kode_barang',null,array('placeholder'=>'Kode Barang'))}}</td></tr>
            <tr><td>Nama Barang</td><td>{{ Form::text('nama_barang',null,array('placeholder'=>'Nama Barang'))}}</td></tr>
            <tr><td>Harga</td><td>{{ Form::text('harga',null,array('placeholder'=>'harga'))}}</td></tr>
            <tr><td colspan="2">{{ Form::submit('Simpan')}}</td></tr>
        </table>
        {{ Form::close()}}
@stop

@section('footer')
    <div id="footer">
            <p>&copy; 2019 | Hisyam Maulana</p>
    </div>
@stop
