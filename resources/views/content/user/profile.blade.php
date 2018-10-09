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
<section class="content-header">
  <h1>
    Profile
    <small>Data Profile</small>
  </h1>
</section>
<section class="content container-fluid">
  <div class="x_panel">
    <div class="x_content">
       @include('content.user.profile_in_1')
    <div class="panel panel-default">
    <div class="panel-heading">
      <center>
    <h2> Data Profile</h2>
      </center>
      <br>
    </div>
     @include('content.user.profile_table')
     </div>
</section>
@endsection
