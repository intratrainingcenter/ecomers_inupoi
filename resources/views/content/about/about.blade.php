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
});
</script>
@endsection

@section('content')
<section class="content container-fluid">
  <div class="x_panel">
    <div class="x_content">
    @include('content.about.notif')
  <div class="panel panel-default">
  <div class="panel-body">
    <center>
      <h2>Our Story</h2>
    </center>
    <table class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th class="column-title">No</th>
          <th class="column-title" style="width:70%">Description</th>
          <th class="column-title" style="width:20%">Image</th>
          <th class="column-title">Action</th>
        </tr>
      </thead>
    	<tbody>
        @foreach($data as $our)
    		<tr>
    			<td>{{$loop->iteration}}</td>
    			<td>{{$our->deskripsi}}</td>
          <td><img src="{{ asset('image/'. $our->image) }}" name="image" alt="..." class="img-thumbnail" width="200px" height="200px"></td>
          <td>
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-edit{{$our->id}}"><li class="fa fa-pencil"></li></button>
          </td>
    		</tr>
        @endforeach
    	</tbody>
    </table>
  </div>
  </div>
</section>
<section class="content container-fluid">
  <div class="x_panel">
    <div class="x_content">
  <div class="panel panel-default">
  <div class="panel-body">
    <center>
      <h2>Our Mission</h2>
    </center>
    <table class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th class="column-title">No</th>
          <th class="column-title" style="width:70%">Description</th>
          <th class="column-title" style="width:20%">Image</th>
          <th class="column-title">Action</th>
        </tr>
      </thead>
    	<tbody>
        @foreach($data as $our)
    		<tr>
    			<td>{{$loop->iteration}}</td>
    			<td>{{$our->deskripsi_mission}}</td>
          <td><img src="{{ asset('image/'. $our->image_mission) }}" name="image" alt="..." class="img-thumbnail" width="200px" height="200px"></td>
          <td>
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-edit_mission{{$our->id}}"><li class="fa fa-pencil"></li></button>
    		</tr>
        @endforeach
    	</tbody>
    </table>
  </div>
  </div>
</section>

@include('content.about.modal')
@include('content.about.modal_mission')
@endsection
