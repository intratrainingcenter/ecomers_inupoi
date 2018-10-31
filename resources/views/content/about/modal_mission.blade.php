<script>
    var loadFile2 = function(event) {
    var output2 = document.getElementById('output2');
        output2.src = URL.createObjectURL(event.target.files[0]);
                      };
</script>
{{-- modal delete --}}
  @foreach($data as $our)
  <div class="modal modal-danger fade" id="modal-danger_mission{{$our->id}}">
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
<div class="modal fade fade" id="modal-edit_mission{{$our->id}}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Update Data About</h4>
      </div>
      <form  action="{{route('about.update_mission',$our->id)}}" method="post"  enctype="multipart/form-data">
      @method('PUT') @csrf()
      <div class="modal-body">
        <input type="hidden" name="id" value="{{$our->id}}">
        <div class="box-body">
          <div class="form-group">
            <label for="nama_kategori" class="col-sm-4 control-label">Image</label>
            <div class="col-sm-8">
              <img src="{{ asset('image/'. $our->image_mission) }}" id="output2" alt="..." class="img-thumbnail" width="200px" height="200px">
              <h6>==========================================</h6>
              <input type="file"  name="image_mission"  accept="image/*" onchange="loadFile2(event)" class="text-center center-block well well-sm" value="{{$our->image_mission}}">
            </div>
          </div>
          <br><br>
          <div class="form-group">
            <label for="kode_kategori" class="col-sm-4 control-label">Deskripsi</label>
            <div class="col-sm-8">
              <textarea class="form-control" name="deskripsi_mission" id="deskripsi" rows="8" cols="80">
                {{$our->deskripsi_mission}}
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
