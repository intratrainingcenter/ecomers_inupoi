<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Inupoi</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/skins/skin-blue.min.css')}}">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="{{asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <style>
  hr
{
    display: block;
		margin-top: 1%;
		margin-bottom: 1%;
		margin-left: 1%;
		margin-right: 1%;
		border-style: solid;
		border-width: 2px;


}
  </style>
  <script type="text/javascript">
    setTimeout(function(){ $('.notif').hide(1000)},3000);
  </script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <script type="text/javascript">
      setTimeout(function(){ $('.notif').hide(1000)},3000);
    </Script>
<div class="wrapper">
  @include('header.header')
  @include('sidebar.sidebar')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        @yield('judul')
        <small>@yield('sub')</small>
      </h1>
    </section>
    <section class="content container-fluid">
      @yield('dashboard')
      @yield('content')
    </section>
  </div>
  <footer class="main-footer">
    @include('footer.footer')
  </footer>
  <div class="control-sidebar-bg"></div>
</div>
<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script>
$(function() {
  $('#example').DataTable();
 
});
</script>

@yield('jsku')
     

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
</body>
</html>
