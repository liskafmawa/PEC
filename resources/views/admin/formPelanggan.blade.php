@extends('templates/header')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ empty($result) ? 'Tambah' : 'Edit' }} Data Pelanggan
        <small>LS Furniture</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/pelanggan') }}"><i class="fa fa-dashboard"></i> Data Pelanggan</a></li>
        <li class="active">{{ empty($result) ? 'Tambah' : 'Edit' }} Pelanggan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('/pelanggan') }}" class="btn bg-purple"><i class="fa 
      fa-chevron-left"></i> Kembali</a>
      </div>
        <div class="box-body">
          <form action="{{ empty($result) ? url('pelanggan/add') : url("pelanggan/$result->id_login/edit") }}" class="form-horizontal" method="POST">
        {{ csrf_field() }}

        @if (!empty($result))
          {{ method_field('patch') }}
        @endif
      <div class="form-group">
        <label class="control-label col-sm-2">Nama Pelanggan</label>
        <div class="col-sm-10">
          <input type="text" name="nama_user" class="form-control" placeholder=
          "Masukkan Nama Pelanggan" value="{{ @$result->nama_user }}" />
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2">Username</label>
        <div class="col-sm-10">
          <input type="text" name="username" class="form-control" placeholder=
          "Username" value="{{ @$result->username }}" />
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2">Password</label>
        <div class="col-sm-10">
          <input type="text" name="password" class="form-control" placeholder=
          "Password" value="{{ @$result->password }}" />
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