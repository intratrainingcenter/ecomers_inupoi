@extends('index')@section('title', 'Produk')@section('judul','Header')@section('sub','Produk')
@extends('content.produk.aditional')@extends('content.produk.modalproduk')@section('home')
<div class="panel panel-default">           
  <div class="panel-heading">
    <button type="button" onclick="white()" class="btn btn-success btn-flat fa fa-plus-square" data-toggle="modal" data-target="#modal-success">Add Product</button>
  </div>
    <div class="panel-body">
      <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th class="column-title">#</th>
          <th class="column-title">Code Product</th>
          <th class="column-title">Name Product</th>
          <th class="column-title">Front Image</th>
          <th class="column-title">Size</th>          
          <th class="column-title">Price</th>
          <th class="column-title">Stock</th>
          <th class="column-title">Opsi</th>
        </tr>
      </thead> 
    	<tbody>
        @foreach ($item as $items)
    		<tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$items->kode_produk}}</td>
          <td>{{$items->nama_produk}}</td>
          <td>
              <img src="{{Storage::url($items->gambar)}}" width="100px" alt="">
          </td>   
          <td>{{$items->ukuran}}</td>         
    			<td>{{"$.".number_format($items->harga)}}</td>
          <td>{{$items->stok}}</td>
          <td>
            <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#modal-detail{{$items->kode_produk}}" title="Detail data"><i class="fa fa-search"></i></button>
            <button type="button" onclick="bersih()" id="btnedit" class="btn btn-warning"  data-toggle="modal" data-target="#modal-edit{{$items->kode_produk}}" title="Edit data"><i class="fa fa-pencil"></i></button>
          <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#modal-hapus{{$items->kode_produk}}" title="Delete data"><i class="fa fa-trash-o"></i></button>
          </td>
        </tr>
        @endforeach
    	</tbody>
     </table>
     </div>
     </div>
</section>

@endsection
