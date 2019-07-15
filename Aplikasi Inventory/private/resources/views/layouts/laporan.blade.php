@extends('layouts.app')

@section('content')

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{url('public/adminlte/dist/img/user3-128x128.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="#">
          <a href="{{ route('admin.dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         
          <li class="#">
          <a href="{{ url('produk', []) }}">
            <i class="fa fa-edit"></i> <span>Produk</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>

        
        <li class="#">
          <a href="{{ url('checkin', []) }}">
            <i class="fa fa-edit"></i> <span>Check In</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="#">
          <a href="{{ url('checkout', []) }}">
            <i class="fa fa-edit"></i> <span>Check Out</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
         <li class="#">
          <a href="{{ url('supplier', []) }}">
            <i class="fa fa-edit"></i> <span>Supplier</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="active treeview">
          <a href="{{ url('laporan', []) }}">
            <i class="fa fa-edit"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        




</section>
    <!-- /.sidebar -->
  </aside>

<div class="px-content">

    <div class="row">
        <div class="col-sm-12">
        <div class="panel">
            <div id="judul_form" class="panel-title"><h3>Data Laporan</h3></div>
                <div class="panel-body">
                    
                    <a class="btn btn-primary" href="#"> Tambah Data</a>
                   <br /><br />
                   <button id="btn-add" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-form">Cetak</button>
                    <br /><br />
                    <div class="table-success">
                        <table id="table-daftar" class="table table-bordered table-condensed table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nama Barang</th>
                                    <th>Jumlah</th>
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="body-table-daftar">
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div> <!-- end row -->

</div>
<!-- content -->

@endsection