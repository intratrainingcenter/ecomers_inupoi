@foreach($data as $komen)
  <div class="modal fade" id="modal-danger{{$komentar->id}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Hapus Komentar</h4>
        </div>
        <form  action="{{route('komentar.destroy',$komen->)}}" method="post">
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
      </div>
      @endforeach