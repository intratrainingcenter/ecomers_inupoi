@extends('index')@section('title', 'Laporan Keuangan')
@section('judul','Header')
@section('sub','Laporan Keuangan')
@section('someCSS')
<link rel="stylesheet" href="{{ asset('css/print.css') }}">
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
<script> 
$(document).ready(function() {
  $('.print').click(function(){
    $('#example').DataTable();
      'paging'      : false,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
  });
});
</script>
@endsection

@section('content')
<section class="content container-fluid">
  <div class="x_panel">
    <div class="x_content">
      @include('content.LapKeuangan.notif')

 
<div class="panel panel-default">
<form action="{{route('Filter.laporankeuangan')}}">
  <div class="panel-heading">
      <label>Dari :</label>
      <input type="date" name="dari">
      <label>Sampai :</label>
      <input type="date" name="sampai">
      <button type="submit" class="btn btn-info">Cari</button>
      <button type="button" class="btn btn-primary pull-right print" onclick="window.print()"><li class="fa fa-print"> Print</li></button>
  </div>
</form>
  <div class="panel-body hasil">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
      <tr>
        <th class="column-title">No</th>
        <th class="column-title">Kode Transaksi</th>
        <th class="column-title">Tanggal Transaksi</th>
        <th class="column-title">Total Biaya</th>
      </tr>
    </thead>
  	<tbody>
      @foreach($data as $uang)
  		<tr>
  			<td>{{$loop->iteration}}</td>
  			<td>{{$uang->kode_transaksi}}</td>
        <td>{{$uang->tgl_transaksi}}</td>
        <td>{{$uang->total_biaya}}</td>
  		</tr>
      @endforeach
  	</tbody>
    <tfoot>
          <td colspan="2"></td>
          <td><b>Total Keuangan</b></td>
          <td></td>
    </tfoot>
   </table>
  </div>
</div>
</section>

@endsection

