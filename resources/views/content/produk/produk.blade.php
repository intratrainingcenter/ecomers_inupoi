@extends('index')@section('title', 'Produk')@section('judul','Header')@section('sub','Produk')@extends('content.produk.aditional')
@extends('content.produk.modalproduk')@section('home')
<div class="panel panel-default">           
  <div class="panel-heading"><button type="button" class="btn btn-success btn-flat fa fa-plus-square" data-toggle="modal" data-target="#modal-success">Add Produk</button></div>
    <div class="panel-body">
      <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th class="column-title">#</th>
          <th class="column-title">Kode Produk</th>
          <th class="column-title">Nama Produk</th>
          <th class="column-title">Stock</th>
          <th class="column-title">Opsi</th>
        </tr>
      </thead>@php$no= 1;@endphp
    	<tbody>
        @foreach ($item as $items)
    		<tr>
          <td>{{$no++}}</td>
          <td>{{$items->kode_produk}}</td>
          <td>{{$items->nama_produk}}</td>         
    			<td>{{$items->harga}}</td>
          <td>{{$items->stok}}</td>
          <td>
              <a href="" type="button" class="btn btn-primary" title="Detail"> <i class="fa fa-search"></i> </a>
              <button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#modal-edit" title="Edit data"><i class="fa fa-pencil"></i></button>
              <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#modal-hapus" title="Delete data"><i class="fa fa-trash-o"></i></button>
          </td>
        </tr>
        @endforeach
    	</tbody>
     </table>
     </div>
     </div>
</section>
@endsection
