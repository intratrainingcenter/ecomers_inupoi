  <div class="panel-body">
      <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th class="column-title">No</th>
          <th class="column-title">Nama</th>
          <th class="column-title">Email</th>
          <th class="column-title">Jabatan</th>
          <th class="column-title">Action</th>
        </tr>
      </thead>
    	@php
    	$no= 1;
    	@endphp
    	<tbody>
        @foreach($user as $users)
    		<tr>
    			<td>{{$no++}}</td>
    			<td>{{$users->name}}</td>
    			<td>{{$users->email}}</td>
    			<td>{{$users->jabatan}}</td>
           @if (Auth::guard('web')->check())
              @if (Auth::guard('web')->user()->jabatan == 'owner')
              <td>
                <a href="{{Route('user.edit', $users->id)}}" type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                <form action="{{route('user.destroy',$users->id,$users->foto)}}" method="post" enctype="multipart/form-data">
                  <button  type="submit" onclick=" return confirm('Anda Yakin Menghapus Profile')" name="submit" class="btn btn-danger">
                      <i class="fa fa-trash-o"></i>
                  </button>
                   {{ csrf_field() }}
                    <input type="hidden" name="image" value="{{$users->foto}}">
                    <input type="hidden" name="_method" class="btn btn-danger" value="DELETE">
                </form>
              </td>
              @elseif (Auth::guard('web')->user()->jabatan == 'superadmin')
              <td>Hanya Owner Yang Dapat Mengganti</td>
              @elseif (Auth::guard('web')->user()->jabatan == 'petugas')
              <td>Hanya Owner Yang Dapat Mengganti</td>
           @endif
           @endif
    		</tr>
        @endforeach
    	</tbody>
     </table>
     </div>
