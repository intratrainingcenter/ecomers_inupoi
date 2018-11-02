  <div class="panel-body">
      <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th class="column-title">No</th>
          <th class="column-title">Nama</th>
          <th class="column-title">Email</th>
          <th class="column-title">Position</th>
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
                @if ($users->jabatan == 'member')
                <a href="{{Route('user.edit', $users->id)}}" type="button" class="btn btn-info"><i class="fa fa-info">nfo</i></a>
                @else
                  <a href="{{Route('user.edit', $users->id)}}" type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                @endif
                @if ($users->jabatan == 'owner')
                <p>=====</p>
                @elseif ($users->jabatan == 'member')
                <p>=====</p>
                @else
                <form action="{{route('user.destroy',$users->id,$users->foto)}}" method="post" enctype="multipart/form-data">
                  <button  type="submit" onclick=" return confirm('Do you really want to delete it')" name="submit" class="btn btn-danger">
                      <i class="fa fa-trash-o"></i>
                  </button>
                   {{ csrf_field() }}
                    <input type="hidden" name="image" value="{{$users->foto}}">
                    <input type="hidden" name="_method" class="btn btn-danger" value="DELETE">
                </form>
                @endif
              </td>
              @elseif (Auth::guard('web')->user()->jabatan == 'superadmin')
              <td>Only the owner can change</td>
              @elseif (Auth::guard('web')->user()->jabatan == 'petugas')
              <td>Only the owner can change</td>
           @endif
           @endif
    		</tr>
        @endforeach
    	</tbody>
     </table>
     </div>
