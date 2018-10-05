@extends('index')

@section('title', 'AdminLTE')
@section('someCSS')
<link href="{{ asset('css/image.css') }}">
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
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Profile
    <small>Data Profile</small>
  </h1>
</section>

<!-- Main content -->
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
    @elseif ($message = Session::get('gagal'))
    <div class="alert alert-danger alert alert-danger alert-dismissible fade in" role="alert" >
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button>
        <p>{{ $message }}</p>
    </div>
@endif
<br>
<br>
    <div class="panel panel-default">
    <div class="panel-heading">
      <center>
    <h2> Data Profile</h2>
      </center>
      <br>
    </div>
    <div class="panel-body">
      <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th class="column-title">No</th>
          <th class="column-title">Nama</th>
          <th class="column-title">Email</th>
          <th class="column-title">Jabatan</th>
          <th class="column-title">Foto</th>
          <th class="column-title">Action</th>
        </tr>
      </thead>
    	@php
    	$no= 1;
    	@endphp
    	<tbody>
        @foreach($user as $users)
    		<tr>
    			<td>{{$no++}}</td>
    			<td>{{$users->name}}</td>
    			<td>{{$users->email}}</td>
    			<td>{{$users->jabatan}}</td>
    			<td><img src="{{ asset('image/' . $users->foto) }}"  width="80px"/></td>
           @if (Auth::guard('web')->check())
              @if (Auth::guard('web')->user()->jabatan == 'owner')
              <td>
                <a href="{{Route('user.edit', $users->id)}}" type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                <a href="{{Route('user.destroy', $users->id)}}"><button  onclick=" return confirm('Anda Yakin Menghapus Profile')" type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
              </td>
              @elseif (Auth::guard('web')->user()->jabatan == 'superadmin')
              <td>Hanya Owner Yang Dapat Mengganti</td>
              @elseif (Auth::guard('web')->user()->jabatan == 'petugas')
              <td>Hanya Owner Yang Dapat Mengganti</td>
           @endif
           @endif
    		</tr>
        @endforeach
    	</tbody>
     </table>
     </div>
     </div>
</section>
@endsection
