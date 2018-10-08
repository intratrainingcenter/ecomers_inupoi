@extends('index')@section('title', 'Produk')@section('judul','Header')@section('sub','Produk')@extends('content.produk.aditional')
@extends('content.produk.modalproduk')@section('home')
<div class="panel panel-default">           
  <div class="panel-heading"><button type="button" class="btn btn-success btn-flat fa fa-plus-square" data-toggle="modal" data-target="#modal-success">Add Produk</button></div>
    <div class="panel-body">
      <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th class="column-title">No</th>
          <th class="column-title">Nis Siswa</th>
          <th class="column-title">Nama Siswa</th>
          <th class="column-title">Absensi</th>
          <th class="column-title">Keterangan</th>
          <th class="column-title">Action</th>
        </tr>
      </thead>@php$no= 1;@endphp
    	<tbody>
    		<tr>
    			<td>data-dismissq</td>
    			<td>dsdfsdfs</td>
          <td>cdzsasdasw</td>
          <td>faa</td>
          <td>awgaanklfa</td>
          <td>
              <button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#modal-edit" title="Edit data"><i class="fa fa-pencil"></i></button>
              <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#modal-hapus" title="Delete data"><i class="fa fa-trash-o"></i></button>
          </td>
    		</tr>
    	</tbody>
     </table>
     </div>
     </div>
</section>
@endsection
