@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <button type="button" class="btn btn-primary ml-auto">Tambah Data</button> --}}
    <a href="{{route('add')}}" class="btn btn-primary ml-auto">Tambah Data</a>
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Nama</h5>
          <p class="card-text">Lainnya.</p>
          <a href="#" class="btn btn-primary">Edit</a>
          <a href="#" class="btn btn-danger">Hapus</a>
        </div>
      </div>
</div>
@endsection
