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

    };



function ShowImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#image')
                    .attr('src', e.target.result)
                    .height(50);
            };
            reader.readAsDataURL(input.files[0]);
        }
    };

function hanyaAngka(evt) {
	var charCode = (evt.which) ? evt.which : event.keyCode
	 if (charCode > 31 && (charCode < 48 || charCode > 57))
			return false;
		return true;
		};
</script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

