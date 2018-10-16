<link href="{{ asset('assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">
<style>

</style>
@section('someJS')
    
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

<script>
    
setTimeout(function(){ $('.notif').hide(1000)},3000);

function bersih() {
    $('#kode_produk').val('');
	$('#kode_kategori').val('');
	$('#kode_diskon').val('');
	$('#nama_produk').val('');
	$('#ukuran').val('');
	$('#harga').val('');
	$('#stok').val('');
	$('#deskripsi').val('');
	$('#images').val('');
	$('#images2').val('');

    }

$(function() {
  $('#example').DataTable();
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
});


</script>

@endsection