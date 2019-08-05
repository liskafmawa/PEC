@extends('templates/header')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ empty($result) ? 'Tambah' : 'Edit' }} Data Barang
        <small>LS Furniture</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/barang') }}"><i class="fa fa-dashboard"></i> Data Barang</a></li>
        <li class="active">{{ empty($result) ? 'Tambah' : 'Edit' }} barang</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('/barang') }}" class="btn bg-purple"><i class="fa 
      fa-chevron-left"></i> Kembali</a>
      </div>
        <div class="box-body">
          <form action="{{ empty($result) ? url('barang/add') : url("barang/$result->id_barang/edit") }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

        @if (!empty($result))
          {{ method_field('patch') }}
        @endif
      <div class="form-group">
        <label class="control-label col-sm-2">Nama Barang</label>
        <div class="col-sm-10">
          <input type="text" name="nama_barang" class="form-control" placeholder=
          "Masukkan Nama Barang" value="{{ @$result->nama_barang }}" />
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2">Harga</label>
        <div class="col-sm-10">
          <input type="text" name="harga" class="form-control" placeholder=
          "Masukan Harga" value="{{ @$result->harga }}" />
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2">Gambar</label>
        <div class="col-sm-10">
          <input type="file" name="gambar" value="{{ @$result->gambar }}" />
        </div>
      </div>
      
      <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
          <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
        </div>
      </div>
      </form>
        </div>
        <!-- /.box-body -->

      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection