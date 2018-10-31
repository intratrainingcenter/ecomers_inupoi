<script>
    var loadFile = function(event) {
    var output = document.getElementById('output1');
        output.src = URL.createObjectURL(event.target.files[0]);
                      };
</script>
{{-- modal delete --}}
  @foreach($data as $our)
  <div class="modal modal-danger fade" id="modal-danger{{$our->id}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Hapus Data About</h4>
        </div>
        <form  action="{{route('kategori.destroy',$our->id)}}" method="post">
        @method('delete') @csrf()
        <div class="modal-body">
          <input type="hidden" name="id" value="{{$our->id}}">
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
<div class="modal fade fade" id="modal-edit{{$our->id}}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Update Data About</h4>
      </div>
      <form  action="{{route('about.update',$our->id)}}" method="post"  enctype="multipart/form-data">
      @method('PUT') @csrf()
      <div class="modal-body">
        <input type="hidden" name="id" value="{{$our->id}}">
        <div class="box-body">
          <div class="form-group">
            <label for="nama_kategori" class="col-sm-4 control-label">Image</label>
            <div class="col-sm-8">
              <img src="{{ asset('image/'. $our->image) }}" id="output1" value="{{$our->image}}" alt="..." class="img-thumbnail" width="200px" height="200px">
              <h6>==========================================</h6>
              <input type="file"  name="image"  accept="image/*" onchange="loadFile(event)" class="text-center center-block well well-sm" required="">
            </div>
          </div>
          <br><br>
          <div class="form-group">
            <label for="kode_kategori" class="col-sm-4 control-label">Deskripsi</label>
            <div class="col-sm-8">
              <textarea class="form-control" name="deskripsi" id="deskripsi" rows="8" cols="80">
                {{$our->deskripsi}}
              </textarea>
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
