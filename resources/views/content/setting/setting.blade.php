@extends('index')@section('title', 'Setting')@section('judul','Header')@section('sub','Setting')
@extends('content.setting.modalsetting')@extends('content.setting.aditional')
@section('home') 
<div class="panel panel-default">
    <div class="panel-heading">
    @if($cek == 0)
    <button type="button" class="btn btn-success btn-flat fa fa-plus-square" onclick="blank()" data-toggle="modal" data-target="#modal-success">Add First Setting</button>
    @endif
    </div>
    <div class="panel-body">
      <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th class="column-title">Name</th>
          <th class="column-title">Address</th>
          <th class="column-title">Contact</th>
          <th class="column-title">Min Stock</th>
          <th class="column-title">Logo</th>
          <th class="column-title">Action</th>
        </tr>
      </thead>
    	<tbody>
        @foreach ($setting as $item)
    		<tr>
        <td>{{$item->nama}}</td>
        <td>{{$item->alamat}}</td>
        <td>{{$item->contact}}</td>
        <td>{{$item->min_stock}}</td>
        <td>
            <img src="{{Storage::url($item->logo)}}" width="100px" alt="">
        </td>
          <td>
          <button type="button" class="btn btn-warning fa fa-pencil" onclick="blank()" data-toggle="modal" data-target="#modal-edit{{$item->id}}"></button>   
          </td>
    		</tr>
        @endforeach
    	</tbody>
     </table>
     </div>
     </div>
</section>

@endsection

