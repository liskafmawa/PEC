<html>
<head>
<title></title>
<link href="{{ asset('assets') }}/css/styleUser.css" rel="stylesheet" type="text/css" />
</head>
<body>

<!--<a href="{{ url('/loginuser') }}" align="right">Logout</a>-->
<center>
    <div class="wrapper">
      <div class="logo"> LS<strong>Furniture</strong></div>
    </div>

    <div class="search">
      <form action="{{ url('/user/cari') }}" method="GET" class="sidebar-form">
        <div class="search-text">
          <input type="text" size="40" name="cari" class="form-control" placeholder="Search..."/>
        </div>
        <div style="float:left; margin-left:5px; margin-top:10px;">
          <input type="image" src="{{ url('/images/search.jpg') }}"></button>
        </div>
      </form>
      <form action="{{ url('/home') }}">
        <div style="float:right; margin-right:10px; margin-top:15px;">
        <a href="{{ url('/loginuser') }}" style="text-decoration:none" align="right">Logout</a>
        <!--<input type = "submit" value="Logout">-->

      </div></form>
    </div>


    <h1>OUR PRODUCT</h1>
    <table class="table table-stripped" width="900px" border="10">
      <thead>
      <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Gambar</th>
        <th></th>
      </tr>
      </thead>
    <tbody>
      @foreach ($result as $row)
      <tr>
        <td align="center">{{ !empty($i) ? ++$i : $i = 1 }}</td>
        <td>{{ $row->nama_barang }}</td>
        <td>Rp. {{ $row->harga }}</td>
        <td align="center"><img width="80px" src="{{ url('/data_file/'.$row->gambar) }}" class="img"></td>
        <td align="center"><a href="#">Add to Cart</a></td>
      </tr>
      @endforeach
    </tbody>
    </table>
        
</center>
        <!-- /.box-body -->
      <br>
      <br>
    <div class="box-footer">
      <center> Syafira(10516135) & Liska (10516123) &copy; 2019 </center>
    </div>
        <!-- /.box-footer-->
</body>
</html>
