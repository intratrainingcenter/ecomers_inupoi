{{-- modal create --}}
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
          <br>
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
  <div class="modal modal-danger fade" id="modal-danger{{$diskon->kode_diskon}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Hapus Data Diskon</h4>
        </div>
        <form  action="{{route('diskon.destroy',$diskon->id)}}" method="post">
        @method('delete') @csrf()
        <div class="modal-body">
          <input type="hidden" name="id" value="{{$diskon->id}}">
          <p>Apakah anda yakin ingin menghapus data ini ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Tidak</button>
          <button type="submit" class="btn btn-outline">Iya</button>
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
              <input type="text" class="form-control" name='nominal' id="nominal" placeholder="Nominal" value="{{$diskon->nominal}}">
            </div>
          </div>
          <br>
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
  @extends('content.diskon.disc')
  @endforeach
