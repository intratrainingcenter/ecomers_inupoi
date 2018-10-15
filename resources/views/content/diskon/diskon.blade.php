@extends('index')@section('title', 'Diskon')
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
@if ($message = Session::get('success'))
    <div class="alert alert-success alert alert-success alert-dismissible fade in notif" role="alert" >
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button>
        <p>{{ $message }}</p>
    </div>
    @elseif ($message = Session::get('edit'))
    <div class="alert alert-warning alert alert-warning alert-dismissible fade in notif" role="alert" >
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button>
        <p>{{ $message }}</p>
    </div>
    @elseif ($message = Session::get('delete'))
    <div class="alert alert-danger alert alert-danger alert-dismissible fade in notif" role="alert" >
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button>
        <p>{{ $message }}</p>
    </div>
    @elseif ($message = Session::get('not_success'))
    <div class="alert alert-danger alert alert-danger alert-dismissible fade in notif" role="alert" >
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button>
        <p>{{ $message }}</p>
    </div>
@endif

 
    <div class="panel panel-default">
    <div class="panel-heading">
      <button type="button" class="btn btn-success btn-flat" data-toggle="modal" data-target="#modal-success"><li class="fa fa-plus-square"></li> Add Diskon</button>
    </div>
    <div class="panel-body">
      <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th class="column-title">No</th>
          <th class="column-title">Kode Diskon</th>
          <th class="column-title">Nominal</th>
          <th class="column-title">Action</th>
        </tr>
      </thead>
    	<tbody>
        @foreach($data as $diskon)
    		<tr>
    			<td>{{$loop->iteration}}</td>
    			<td>{{$diskon->kode_diskon}}</td>
          <td>{{$diskon->nominal}}</td>
          <td>
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-edit"><li class="fa fa-pencil"></li></button>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger"><li class="fa fa-trash-o"></li></button>
          </td>
    		</tr>
        @endforeach
    	</tbody>
     </table>
     </div>
     </div>
</section>

{{-- modal create --}}
<div class="modal modal-success fade" id="modal-success">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data Diskon</h4>
      </div>
      <form  action="{{route('diskon.store')}}" method="post">
      @method('POST') @csrf()
      <div class="modal-body">
        <div class="box-body">
          <div class="form-group">
            <label for="kode_diskon" class="col-sm-4 control-label">Kode Diskon</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="kode_diskon" id="kode_diskon" placeholder="Kode Diskon">
            </div>
          </div>
          <br><br>
          <div class="form-group">
            <label for="nominal" class="col-sm-4 control-label">Nominal</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name='nominal' id="nominal" placeholder="Nominal">
            </div>
          </div>
          <br>
        </div>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left batal" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
@endsection

