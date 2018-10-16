@section('content')
<section class="content container-fluid">
  <div class="x_panel">
    <div class="x_content">
@if ($message = Session::get('success'))
    <div class="alert alert-success alert alert-success alert-dismissible fade in notif" role="alert" >
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button>
        <p>{{ $message }}</p>
    </div>
    @elseif ($message = Session::get('warning'))
    <div class="alert alert-warning alert alert-warning alert-dismissible fade in notif" role="alert" >
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button>
        <p>{{ $message }}</p>
    </div>
    @elseif ($message = Session::get('delete'))
    <div class="alert alert-danger alert alert-danger alert-dismissible fade in notif" role="alert" >
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button>
        <p>{{ $message }}</p>
    </div>
    @elseif ($message = Session::get('not_success'))
    <div class="alert alert-danger alert alert-danger alert-dismissible fade in notif" role="alert" >
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button>
        <p>{{ $message }}</p>
    </div>
@endif

<div class="modal modal-success fade" id="modal-success" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Product</h4>
            </div>
            <form  action="{{Route('setting.store')}}" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="box-body">
                    <div class="form-group">
                      <label for="alamat" class="col-sm-4 control-label">Code Product</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Address" required>
                      </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Product Name</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name='contact' id="contact" placeholder="Contact" required>
                            </div>
                          </div>
                    <br><br>
                    <div class="form-group">
                      <label for="exampleInputFile" class="col-sm-4 control-label">Logo</label>
                      <div class="col-sm-4">
                          <input type="file" class="" id="logo" name="logo" onchange="ShowImage(this);" required>
                          <img class="center" src="" alt="" id='image'>
                      </div>
                  </div>
                    <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Price</label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control" name='harga' id="harga" placeholder="Harga" required>
                            </div>
                          </div>
                    <br><br>

                 </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger pull-left batal" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            {{ csrf_field() }}
          </form>
          </div>
        </div>
      </div>

     {{-- @foreach ($item as $items)

    <div class="modal fade" id="modal-hapus{{$items->kode_produk}}">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Delete - {{$items->kode_produk}} </h4>
                    </div>
                  <form action="{{Route('barang.destroy',['id'=> $items->kode_produk])}}" method="POST">
                      @csrf @method('DELETE')
                    <div class="modal-body">
                    <p> <center> Are you sure want to delete : {{$items->kode_produk}} ??</center></p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>

                  </div>
                </div>
              </div>
              @endforeach --}}
              
 @yield('home')
 @endsection