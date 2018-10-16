@extends('index')@section('title', 'Setting')@section('judul','Header')@section('sub','Setting')
@extends('content.setting.modalsetting')@extends('content.setting.aditional')
@section('home') 
<div class="panel panel-default">
    <div class="panel-heading">
    <button type="button" class="btn btn-success btn-flat fa fa-plus-square" data-toggle="modal" data-target="#modal-success">Add First Setting</button>
    </div>
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
      </thead>
    	@php
    	$no= 1;
    	@endphp
    	<tbody>
    		<tr>
    			<td>data-dismissq</td>
    			<td>dsdfsdfs</td>
          <td>cdzsasdasw</td>
          <td>faa</td>
          <td>awgaanklfa</td>
          <td>
              <a href="" type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></a>

              <a><button  onclick=" return confirm('Anda Yakin Menghapus Absensi')" type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>

          </td>
    		</tr>
    	</tbody>
     </table>
     </div>
     </div>
</section>

@endsection

