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
            <form  action="{{Route('barang.store')}}" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="box-body">
                    <div class="form-group">
                      <label for="kode_produk" class="col-sm-4 control-label">Code Product</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="kode_produk" id="kode_produk" placeholder="Code Product" required>
                      </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label for="" class="col-sm-4 control-label">Code Category</label>
                        <div class="col-sm-8">
                          <select class="form-control" name="kode_kategori"id="kode_kategori" required>
                                <option value="" disabled selected>Category</option>
                                @foreach($kategori as $in)
                              <option value="{{$in->kode_kategori}}">{{$in->kode_kategori}} - {{$in->nama_kategori}}</option>
                                @endforeach
                              </select>
                        </div>
                      </div>
                      <br><br>
                      <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Code Discount</label>
                            <div class="col-sm-8">
                              <select name="kode_diskon" class="form-control" id="kode_diskon" required>
                                  <option value="" disabled selected>Code Discount</option>
                                @foreach ($diskon as $itemdiskon)
                              <option value="{{$itemdiskon->kode_diskon}}">{{$itemdiskon->kode_diskon}} - ${{$itemdiskon->nominal}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                    <br><br>
                    <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Product Name</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name='nama_produk' id="nama_produk" placeholder="Nama Produk" required>
                            </div>
                          </div>
                    <br><br>
                    <div class="form-group">
                      <label for="" class="col-sm-4 control-label">Size</label>
                      <div class="col-sm-8">
                        <select name="ukuran" class="form-control" id="ukuran" required>
                          <option class="center" value="" disabled selected>Size</option>
                          <option value="S">Size - S</option>
                          <option value="M">Size - M</option>
                          <option value="L">Size - L</option>
                          <option value="XL">Size - XL</option>
                        </select>
                      </div>
                    </div>
              <br><br>
                    <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Price</label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control" name='harga' id="harga" placeholder="Harga" required>
                            </div>
                          </div>
                    <br><br>
                    <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Stock</label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control" name='stok' id="stok" placeholder="Stok Yang Tersedia" required>
                            </div>
                          </div>
                    <br><br>
                    <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Description</label>
                            <div class="col-sm-8">
                              <textarea type="text" class="form-control" name='deskripsi_produk' id="deskripsi" placeholder="Deskripsi" required></textarea>
                            </div>
                          </div>
                    <br><br><br>
                    <div class="form-group">
                            <label for="exampleInputFile" class="col-sm-4 control-label">Image</label>
                            <div class="col-sm-4">
                                <input type="file" class="" id="images" name="images" onchange="ShowImage(this);" required>
                                <img class="center" src="" alt="" id='image'>
                            </div>
                            <div class="col-sm-4">
                                <input type="file" class="" id="image2" name="images2" onchange="ShowImagedua(this);" required>
                                <img class="center" src="" alt="" id='imagedua'>
                            </div>
                        </div>

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

     @foreach ($item as $items)

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

            <div class="modal fade" id="modal-edit{{$items->kode_produk}}" >
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                      <h4 class="modal-title">Update - {{$items->kode_produk}}</h4>
                      </div>
                     <form action="{{Route('barang.update',['id'=> $items->kode_produk])}}" method="POST" enctype="multipart/form-data">
                        @csrf @method('PUT')
                      <div class="modal-body">
                      <div class="box-body">
                        <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Code Category</label>
                            <div class="col-sm-8">
                              <select class="form-control" name="kode_kategori">
                                    @foreach($kategori as $in)
                                  <option value="{{$in->kode_kategori}}">{{$in->kode_kategori}} - {{$in->nama_kategori}}</option>
                                    @endforeach
                                  </select>
                            </div>
                          </div>
                          <br><br>
                          <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Code Discount</label>
                                <div class="col-sm-8">
                                 <select name="kode_diskon" class="form-control" id="kode_diskon" required>
                                 <option value="{{$items->kode_diskon}}" selected>{{$items->kode_diskon}}</option>
                                @foreach ($diskon as $itemdiskon)
                              <option value="{{$itemdiskon->kode_diskon}}">{{$itemdiskon->kode_diskon}} - ${{$itemdiskon->nominal}}</option>
                                @endforeach
                                </select>
                                </div>
                            </div>
                        <br><br>
                        <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Name Product</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name='nama_produk' id="nama_produk" value="{{$items->nama_produk}}">
                                </div>
                              </div>
                        <br><br>
                        <div class="form-group">
                          <label for="" class="col-sm-4 control-label">Size</label>
                          <div class="col-sm-8">
                            <select name="ukuran" class="form-control" id="" required>
                            <option value="{{$items->ukuran}}"selected>{{$items->ukuran}}</option>
                                <hr>
                              <option value="" disabled>Another Size :</option>
                              <option value="S">Size - S</option>
                              <option value="M">Size - M</option>
                              <option value="L">Size - L</option>
                              <option value="XL">Size - XL</option>
                            </select>
                          </div>
                        </div>
                  <br><br>
                        <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Price</label>
                                <div class="col-sm-8">
                                  <input type="number" class="form-control" name='harga' id="hargaedit" value="{{$items->harga}}">
                                </div>
                              </div>
                        <br><br>
                        <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Stock</label>
                                <div class="col-sm-8">
                                  <input type="number" class="form-control" name='stok' id="stokedit"  value="{{$items->stok}}">
                                </div>
                              </div>
                        <br><br>
                        <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Description</label>
                                <div class="col-sm-8">
                                  <textarea type="text" class="form-control" name='deskripsi_produk' id="deskripsi" value="{{$items->deskripsi_produk}}">{{$items->deskripsi_produk}}</textarea>
                                </div>
                              </div>
                        <br><br><br>

                          <div class="form-group">
                              <label for="exampleInputFile" class="col-sm-4 control-label">Image</label>
                              <div class="col-sm-4">
                                  <input type="file" class="" id="images" name="gambar" onchange="EditImage(this);">
                                  <img class="center" src="" alt="" id='imageedit'>
                              </div>
                              <div class="col-sm-4">
                                  <input type="file" class="" id="image2" name="gambar_belakang" onchange="EditImagedua(this);">
                                  <img class="center" src="" alt="" id='imageduaedit'>
                              </div>
                          </div>

                       </div>
                      </div>
                      <hr>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                    </div>
                  </div>
                </div>




                <div class="modal fade" id="modal-detail{{$items->kode_produk}}" data-backdrop="false">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                          <h4 class="modal-title">Detail Product : {{$items->kode_produk}}</h4>
                          </div>
                          <div class="modal-body">
                              <center><img src="{{Storage::url($items->gambar)}}" width="200px" alt=""> &nbsp;&nbsp;
                                <img src="{{Storage::url($items->gambar_belakang)}}" width="200px" alt=""></center><br><hr>
                              <table width="100%">
                                  <thead>
                                      <th width="40%"></th><th width="10%"></th><th width="40%"></th>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td><label for="">Code Product</label></td><td>:</td><td>{{$items->kode_produk}}</td>
                                      </tr>
                                      <tr>
                                          <td><label for="">Code Category</label></td><td>:</td><td>{{$items->kode_kategori}}</td>
                                      </tr>
                                      <tr>
                                          <td><label for="">Code Discount</label></td><td>:</td><td>{{$items->kode_diskon}}</td>
                                      </tr>
                                      <tr>
                                          <td><label for="">Name Product</label></td><td>:</td><td>{{$items->nama_produk}}</td>
                                      </tr>
                                      <tr>
                                          <td><label for="">Category</label></td><td>:</td><td>{{$items->kode_kategori}}</td>
                                      </tr>
                                      <tr>
                                          <td><label for="">Size</label></td><td>:</td><td>{{$items->ukuran}}</td>
                                      </tr>
                                      <tr>
                                          <td><label for="">Price</label></td><td>:</td><td>{{"$.".number_format($items->harga)}}</td>
                                      </tr>
                                      <tr>
                                          <td><label for="">Rate</label></td><td>:</td><td>{{$items->rating}}</td>
                                      </tr>
                                      <tr>
                                          <td><label for="">Stock</label></td><td>:</td><td>{{$items->stok}}</td>
                                      </tr>
                                          <td><label for="">Description</label></td><td>:</td><td>{{$items->deskripsi_produk}}</td>
                                       </tr>
                                  </tbody>
                              </table>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">close</button>
                          </div>
                      </div>
                  </div>
              </div>

                @endforeach
@yield('home')
@endsection
