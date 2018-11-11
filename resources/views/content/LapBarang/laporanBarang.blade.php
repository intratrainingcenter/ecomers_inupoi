@extends('index')@section('title', 'Laporan Barang')
@section('judul','Header')
@section('sub','Laporan Barang')
@section('someCSS')
<link href="{{ asset('assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('someJS')
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

@endsection

@section('content')
<section class="content container-fluid">
  <div class="x_panel">
    <div class="x_content">
@if ($message = Session::get('success'))
    <div class="alert alert-success alert alert-success alert-dismissible fade in" role="alert" >
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button>
        <p>{{ $message }}</p>
    </div>
    @elseif ($message = Session::get('edit'))
    <div class="alert alert-warning alert alert-warning alert-dismissible fade in" role="alert" >
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button>
        <p>{{ $message }}</p>
    </div>
    @elseif ($message = Session::get('delete'))
    <div class="alert alert-danger alert alert-danger alert-dismissible fade in" role="alert" >
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button>
        <p>{{ $message }}</p>
    </div>
    @elseif ($message = Session::get('not_success'))
    <div class="alert alert-danger alert alert-danger alert-dismissible fade in" role="alert" >
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button>
        <p>{{ $message }}</p>
    </div>
@endif


    <div class="panel panel-default">
    <div class="panel-heading">
      <button type="button" class="btn btn-primary" onclick="window.print();"><li class="fa fa-print"> Print</li></button>
    </div>
    <div class="panel-body">
      <table id="example" class="table table-bordered" style="width:100%">
      <thead>
        <tr>
          <th class="column-title">No</th>
          <th class="column-title">Kode Barang</th>
          <th class="column-title">Barang Keluar</th>
          <th class="column-title">Stok Akhir</th>
          <th class="column-title">Favorite</th>
        </tr>
      </thead>
    	<tbody>
        @foreach($barang as $produk)
    		<tr>
    			<td>{{$loop->iteration}}</td>
          <td>{{$produk->kode_produk}}</td>
          <td>{{@$produk->detail_transaksi[0]->qty}}</td>
          <td>{{$produk->stok}}</td>
    		</tr>
        @endforeach
    	</tbody>
     </table>
     </div>
     </div>
</section>

@endsection
