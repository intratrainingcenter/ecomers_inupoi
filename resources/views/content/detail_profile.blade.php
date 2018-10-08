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
<script>
    var loadFile = function(event) {
    var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
                      };
</script>
<div class="container" style="padding-top: 60px;">
  <h1 class="page-header">Edit Profile</h1>
  <div class="row">
    <form action="{{route('user.update',['id' => $id])}}"  method="post" id="demo-form2" data-parsley-validate method="post"  class="form-horizontal form-label-left" enctype="multipart/form-data">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
        <img src="{{ asset('image/'. $user->foto) }}" id="output" alt="..." class="img-thumbnail" width="120px" height="180px">
        <h6>==========================================</h6>

        <input type="file"  name="foto"  accept="image/*" onchange="loadFile(event)" class="text-center center-block well well-sm" required="">
      </div>
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      <div class="alert alert-info alert-dismissable">
        <a class="panel-close close" data-dismiss="alert">×</a>
        <i class="fa fa-user"></i>
         Halaman <strong>Edit Profil</strong> Ubah Data User
      </div>
      <h3>Informasi Pribadi  {{Auth::user()->name}}</h3>
                     <input type="hidden" name="id" value="{{$user->id}}" class="form-control"/>
        <div class="form-group">
          <label class="col-lg-3 control-label">Nama:</label>
          <div class="col-lg-8">
            <input class="form-control" name="name" value="{{$user->name}}" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Email:</label>
          <div class="col-md-8">
            <input class="form-control" name="email" value="{{$user->email}}" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Jabatan:</label>
          <div class="col-lg-8">
            <select class="form-control" name="jabatan" required="">
              <option value="{{$user->jabatan}}">{{$user->jabatan}}</option>
              <option value="" disabled>=============Pilih Jabatan============</option>
              <option value="owner">Owner</option>
              <option value="superadmin">Super Admin</option>
              <option value="petugas">Petugas</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Password Lama</label>
          <div class="col-md-8">
            <input class="form-control" name="password_lama"  type="password">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Password Baru</label>
          <div class="col-md-8">
            <input class="form-control" name="password" type="password">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            <input class="btn btn-warning" value="Save Change" type="submit">
            <span></span>
            <a href="{{ route('user.index')}}" type="button" class="btn btn-default">Cancel</a>
          </div>
        </div>
        {{ csrf_field() }}
               <input type="hidden" name="_method" value="PUT">
      </form>
    </div>
  </div>
</div>

@endsection
