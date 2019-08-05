@extends('templates/header')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pelanggan
        <small>LS Furniture</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Daftar Transaksi</a></li>
        <li><a href="{{ url('/barang') }}">Data Barang</a></li>
        <li class="active"> Data Pelanggan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('pelanggan/add') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah</a>
        </div>
        <div class="box-body">
          <table class="table table-stripped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($result as $row)
              <tr>
                <td>{{ !empty($i) ? ++$i : $i = 1 }}</td>
                <td>{{ $row->nama_user }}</td>
                <td>{{ $row->username }}</td>
                <td>{{ $row->password }}</td>
                <td>
                  <a href="{{ url("pelanggan/$row->id_login/edit") }}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                  <form action="{{ url("pelanggan/$row->id_login/delete") }}" method="POST" style="display:inline;">
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