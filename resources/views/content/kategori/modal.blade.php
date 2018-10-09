{{-- modal create --}}
<div class="modal modal-success fade" id="modal-success">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data Kategori</h4>
      </div>
      <form  action="{{route('kategori.store')}}" method="post">
      @method('POST') @csrf()
      <div class="modal-body">
        <div class="box-body">
          <div class="form-group">
            <label for="kode_kategori" class="col-sm-4 control-label">Kode Kategori</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="kode_kategori" id="kode_kategori" placeholder="Kode Kategori">
            </div>
          </div>
          <br><br>
          <div class="form-group">
            <label for="nama_kategori" class="col-sm-4 control-label">Nama Kategori</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name='nama_kategori' id="nama_kategori" placeholder="Nama Kategori">
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
  @foreach($data as $kategori)
  <div class="modal modal-danger fade" id="modal-danger{{$kategori->id}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Hapus Data Kategori</h4>
        </div>
        <form  action="{{route('kategori.destroy',$kategori->id)}}" method="post">
        @method('delete') @csrf()
        <div class="modal-body">
          <input type="hidden" name="id" value="{{$kategori->id}}">
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
<div class="modal fade fade" id="modal-edit{{$kategori->id}}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Update Data Kategori</h4>
      </div>
      <form  action="{{route('kategori.update',$kategori->id)}}" method="post">
      @method('PUT') @csrf()
      <div class="modal-body">
        <input type="hidden" name="id" value="{{$kategori->id}}">
        <div class="box-body">
          <div class="form-group">
            <label for="kode_kategori" class="col-sm-4 control-label">Kode Kategori</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="kode_kategori" id="kode_kategori" placeholder="Kode Kategori" value="{{$kategori->kode_kategori}}" readonly="readonly">
            </div>
          </div>
          <br><br>
          <div class="form-group">
            <label for="nama_kategori" class="col-sm-4 control-label">Nama Kategori</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name='nama_kategori' id="nama_kategori" placeholder="Nama Kategori" value="{{$kategori->nama_kategori}}">
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
  @endforeach