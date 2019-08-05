@extends('templates/header')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Transaksi
        <small>LS Furniture</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Daftar Transaksi</a></li>
        <li><a href="#"> Data Barang</a></li>
        <li><a href="#"> Data Pelanggan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a></a>
        </div>
        <div class="box-body">
          <table class="table table-stripped">
            <thead>
              <tr>
                <th>No Transaksi</th>
                <th>Nama Barang</th>
                <th>QTY</th>
                <th>Harga</th>
                <th>Total Harga</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($result as $row)
              <tr>
                <td>TR00{{ !empty($i) ? ++$i : $i = 1 }}</td>
                <td>{{ $row->nama_barang }}</td>
                <td>{{ $row->qty }}</td>
                <td>Rp. {{ $row->harga }}</td>
                <td>Rp. {{ $row->tot_harga }}</td>
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