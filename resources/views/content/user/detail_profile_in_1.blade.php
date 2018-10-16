    <form action="{{route('user.update',['id' => $id])}}"  method="post" id="demo-form2" data-parsley-validate method="post"  class="form-horizontal form-label-left" enctype="multipart/form-data">
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
        @if ($user->jabatan == 'member')
        <img src="{{ $user->avatar }}" id="output" alt="..." class="img-thumbnail" width="120px" height="180px">
        <h6>==========================================</h6>
        @else
        <img src="{{ asset('image/'. $user->foto) }}" id="output" alt="..." class="img-thumbnail" width="120px" height="180px">
        <h6>==========================================</h6>
        <input type="file"  name="foto"  accept="image/*" onchange="loadFile(event)" class="text-center center-block well well-sm" required="">
        @endif
      </div>
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      <div class="alert alert-info alert-dismissable">
        <a class="panel-close close" data-dismiss="alert">×</a>
        <i class="fa fa-user"></i>
        @if ($user->jabatan == 'member')
        Halaman <strong>Profil</strong> Data Member
        @else
         Halaman <strong>Edit Profil</strong> Ubah Data User
         @endif
      </div>
      <h3>Informasi Pribadi  {{Auth::user()->name}}</h3>
                     <input type="hidden" name="id" value="{{$user->id}}" class="form-control"/>
        <div class="form-group">
          <label class="col-lg-3 control-label">Nama:</label>
          <div class="col-lg-8">
              @if ($user->jabatan == 'member')
              <input class="form-control" name="name" value="{{$user->name}}" type="text" disabled>
              @else
              <input class="form-control" name="name" value="{{$user->name}}" type="text">
            @endif
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Email:</label>
          <div class="col-md-8">
            @if ($user->jabatan == 'member')
              <input class="form-control" name="email" value="{{$user->email}}" type="text" disabled>
              @else
              <input class="form-control" name="email" value="{{$user->email}}" type="text">
            @endif
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Jabatan:</label>
          <div class="col-lg-8">
            @if ($user->jabatan == 'member')
              <input class="form-control" name="jabatan" value="{{$user->jabatan}}" type="text" disabled>
              @else
            <select class="form-control" name="jabatan" required="">
              <option value="{{$user->jabatan}}">{{$user->jabatan}}</option>
              <option value="" disabled>=============Pilih Jabatan============</option>
              <option value="owner">Owner</option>
              <option value="superadmin">Super Admin</option>
              <option value="petugas">Petugas</option>
            </select>
            @endif
          </div>
        </div>
        @if ($user->jabatan == 'member')
        <a href="{{ route('user.index')}}" type="button" class="btn btn-default">Back</a>
        @else
        <div class="form-group">
          <label class="col-md-3 control-label">Password Lama</label>
          <div class="col-md-8">
            <input class="form-control" name="password_lama"  type="password">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Password Baru</label>
          <div class="col-md-8">
            <input class="form-control" name="password" type="password">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            <input class="btn btn-warning" value="Save Change" type="submit">
            <span></span>
            <a href="{{ route('user.index')}}" type="button" class="btn btn-default">Cancel</a>
          </div>
        </div>
        @endif
        {{ csrf_field() }}
               <input type="hidden" name="_method" value="PUT">
      </form>
