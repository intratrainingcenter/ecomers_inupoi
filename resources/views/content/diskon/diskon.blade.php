@extends('index')@section('title', 'Diskon')@extends('content.diskon.modal')@extends('content.diskon.disc')
@section('judul','Header')
@section('sub','Diskon')
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
      @include('content.diskon.notif')
    <div class="panel panel-default">
    <div class="panel-heading">
      <button type="button" onclick="pure()" class="btn btn-success btn-flat" data-toggle="modal" data-target="#modal-success"><li class="fa fa-plus-square"></li> Add Diskon</button>
    </div>
    <div class="panel-body">
      <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th class="column-title">No</th>
          <th class="column-title">Kode Diskon</th>
          <th class="column-title">Deskripsi</th>
          <th class="column-title">Nominal</th>
          <th class="column-title">Action</th>
        </tr>
      </thead>
    	<tbody>
        @foreach($data as $diskon)
    		<tr>
    			<td>{{$loop->iteration}}</td>
    			<td>{{$diskon->kode_diskon}}</td>
          <td>{{$diskon->deskripsi}}</td>
          <td>{{"$.".number_format($diskon->nominal)}}</td>
          <td>
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-edit{{$diskon->id}}"><li class="fa fa-pencil"></li></button>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger{{$diskon->id}}"><li class="fa fa-trash-o"></li></button>
          </td>
    		</tr>
        @endforeach
    	</tbody>
     </table>
     </div>
     </div>
</section>
@endsection
