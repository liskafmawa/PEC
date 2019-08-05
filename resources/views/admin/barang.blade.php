@extends('templates/header')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Barang
        <small>LS Furniture</small>
      </h1>
      <form action="{{ url('barang/cari') }}" method="GET" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="cari" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Daftar Transaksi</a></li>
        <li class="active">Data Barang</a></li>
        <li><a href="#"> Data Pelanggan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('barang/add') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah</a>
        </div>
        <div class="box-body">
          <table class="table table-stripped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Gambar</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($result as $row)
              <tr>
                <td>{{ !empty($i) ? ++$i : $i = 1 }}</td>
                <td>{{ $row->nama_barang }}</td>
                <td>Rp. {{ $row->harga }}</td>
                <td><img width="80px" src="{{ url('/data_file/'.$row->gambar) }}" class="img"</td>
                <td>
                  <a href="{{ url("barang/$row->id_barang/edit") }}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                  <form action="{{ url("barang/$row->id_barang/delete") }}" method="POST" style="display:inline;">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <center> Syafira(10516135) & Liska (10516123) &copy; 2019 </center>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
    @endsection