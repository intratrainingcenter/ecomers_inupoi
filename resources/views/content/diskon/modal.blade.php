@section('content')
<section class="content container-fluid">
  <div class="x_panel">
    <div class="x_content">

@endsection

<div class="modal modal-success fade" id="modal-success">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data Diskon </h4>
      </div>
      <form  action="{{route('diskon.store')}}" method="post">
      @method('POST') @csrf()
      <div class="modal-body">
        <div class="box-body">
          <div class="form-group">
            <label for="kode_diskon" class="col-sm-4 control-label">Kode Diskon</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="kode_diskon" id="kode_diskon" placeholder="Kode Diskon" required>
            </div>
          </div>
          <br><br>
          <div class="form-group">
            <label for="nominal" class="col-sm-4 control-label">Nominal</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name='nominal' id="nominal" placeholder="Nominal" required>
            </div>
          </div>
          <br><br>
          <div class="form-group">
            <label for="nominal" class="col-sm-4 control-label">Description</label>
            <div class="col-sm-8">
              <textarea type="text" class="form-control" name='Deskripsi' id="deskripsi" placeholder="Deskripsi" required></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left batal" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

{{-- modal delete --}}
  @foreach($data as $diskon)
  <div class="modal fade" id="modal-danger{{$diskon->id}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Hapus Data Diskon</h4>
        </div>
        <form  action="{{route('diskon.destroy',$diskon->kode_diskon)}}" method="post">
        @method('delete') @csrf()
        <div class="modal-body">

          <p>Apakah anda yakin ingin menghapus {{$diskon->kode_diskon}} ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left batal" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  {{-- /.modal --}}

  {{-- modal update --}}
<div class="modal fade fade" id="modal-edit{{$diskon->id}}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Update Data Diskon - {{$diskon->kode_diskon}}</h4>
      </div>
      <form  action="{{route('diskon.update',$diskon->id)}}" method="post">
      @method('PUT') @csrf()
      <div class="modal-body">
        <input type="hidden" name="id" value="{{$diskon->id}}">
        <div class="box-body">
          <div class="form-group">
            <label for="nominal" class="col-sm-4 control-label">Nominal</label>
            <div class="col-sm-8">
              <input type="text" onclick="pure()" class="form-control" name='nominal' id="nominaledit" placeholder="Nominal" value="{{$diskon->nominal}}">
            </div>
          </div>
          <br> <br>
          <div class="form-group">
            <label for="nominal" class="col-sm-4 control-label">Description</label>
            <div class="col-sm-8">
              <textarea type="text" class="form-control" name='Deskripsi' id="deskripsi" placeholder="Deskripsi" value="{{$diskon->deskripsi}}">{{$diskon->deskripsi}}</textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left batal" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
  </div>

  @endforeach
