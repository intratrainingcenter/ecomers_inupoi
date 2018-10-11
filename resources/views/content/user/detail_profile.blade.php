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
@if ($message = Session::get('gagal'))
<div class="alert alert-danger alert alert-danger alert-dismissible fade in notif" role="alert" >
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
  </button>
    <p>{{ $message }}</p>
</div>
@endif
<div class="container" style="padding-top: 60px;">
  <h1 class="page-header">Edit Profile</h1>
  <div class="row">
    @include('content.user.detail_profile_in_1')
    </div>
  </div>
</div>

@endsection
