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
  @if (Auth::guard('web')->check())
     @if (Auth::guard('web')->user()->jabatan == 'owner')
  <h1 class="page-header">Profile {{$user->name}}</h1>
  @else
  <h1 class="page-header">Profile {{$user->name}}</h1>
  @endif
  @endif
  <div class="row">
    <form action="{{route('user.update',['id' => $id])}}"  method="post" id="demo-form2" data-parsley-validate method="post"  class="form-horizontal form-label-left" enctype="multipart/form-data">
    <!-- left column -->
               <div class="col-md-4 col-sm-6 col-xs-12">
                 <div class="text-center">
                   <img src="{{ asset('image/'. $user->foto) }}" id="output" alt="..." class="img-thumbnail" width="200px" height="200px">
                 </div>
               </div>
               <!-- edit form column -->
               <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
                 <div class="alert alert-info alert-dismissable">
                   <a class="panel-close close" data-dismiss="alert">×</a>
                   <i class="fa fa-user"></i>
                    Halaman <strong>Profil</strong> Data User
                 </div>
                 <h3>Informasi Pribadi  {{Auth::user()->name}}</h3>
                                <input type="hidden" name="id" value="{{$user->id}}" class="form-control"/>
                   <div class="form-group">
                     <label class="col-lg-3 control-label">Nama:</label>
                     <div class="col-lg-8">
                       <input class="form-control" name="name" value="{{$user->name}}" type="text" disabled>
                     </div>
                   </div>
                   <div class="form-group">
                     <label class="col-md-3 control-label">Email:</label>
                     <div class="col-md-8">
                       <input class="form-control" name="email" value="{{$user->email}}" type="text" disabled>
                     </div>
                   </div>
                   <div class="form-group">
                     <label class="col-lg-3 control-label">Jabatan:</label>
                     <div class="col-lg-8">
                       <input class="form-control" name="jabatan" value="{{$user->jabatan}}" type="text" disabled>

                     </div>
                   </div>
      </form>
    </div>
  </div>
</div>

@endsection
