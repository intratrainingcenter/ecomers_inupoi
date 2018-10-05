@extends('index')@section('title', 'Kategori')
@section('judul','Header')
@section('sub','Kategori')
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
<script>
$(function() {
  $('#example').DataTable();
  // $('#example2').DataTable({
  //   ''
  // });
});
</script>
@endsection

@section('content')
<section class="content container-fluid">
  <div class="x_panel">
    <div class="x_content">
    @include('content.kategori.notif')
  <div class="panel panel-default">
    <div class="panel-heading">
      <button type="button" class="btn btn-success btn-flat" data-toggle="modal" data-target="#modal-success"><li class="fa fa-plus-square"></li> Add Kategori</button>
    </div>
  <div class="panel-body">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th class="column-title">No</th>
          <th class="column-title">Kode Kategori</th>
          <th class="column-title">Nama Kategori</th>
          <th class="column-title">Action</th>
        </tr>
      </thead>
    	<tbody>
        @foreach($data as $kategori)
    		<tr>
    			<td>{{$loop->iteration}}</td>
    			<td>{{$kategori->kode_kategori}}</td>
          <td>{{$kategori->nama_kategori}}</td>
          <td>
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-edit{{$kategori->id}}"><li class="fa fa-pencil"></li></button>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger{{$kategori->id}}"><li class="fa fa-trash-o"></li></button>
          </td>
    		</tr>
        @endforeach
    	</tbody>
    </table>
  </div>
  </div>
</section>
@include('content.kategori.modal')
@endsection