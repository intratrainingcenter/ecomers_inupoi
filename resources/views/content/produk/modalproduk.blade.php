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
              <h4 class="modal-title">Tambah Produk</h4>
            </div>
            <form  action="{{Route('barang.store')}}" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="box-body">
                    <div class="form-group">
                      <label for="kode_produk" class="col-sm-4 control-label">Kode Produk</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="kode_produk" id="kode_produk" placeholder="Kode Produk" required>
                      </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label for="" class="col-sm-4 control-label">Kode Kategori</label>
                        <div class="col-sm-8">
                          <select class="form-control" name="kode_kategori"id="kode_kategori" required>
                                <option value="" disabled selected>Kategori</option>
                                @foreach($kategori as $in)
                              <option value="{{$in->kode_kategori}}">{{$in->kode_kategori}} - {{$in->nama_kategori}}</option>
                                @endforeach
                              </select>
                        </div>
                      </div>
                      <br><br>
                      <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Kode Diskon</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name='kode_diskon' id="kode_diskon" placeholder="Kode Diskon" required>
                            </div>
                        </div>
                    <br><br>
                    <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Nama Produk</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name='nama_produk' id="nama_produk" placeholder="Nama Produk" required>
                            </div>
                          </div>
                    <br><br>
                    <div class="form-group">
                      <label for="" class="col-sm-4 control-label">Ukuran</label>
                      <div class="col-sm-8">
                        <select name="ukuran" class="form-control" id="ukuran" required>
                          <option value="" disabled selected>Ukuran</option>
                          <option value="S">Ukuran - S</option>
                          <option value="M">Ukuran - M</option>
                          <option value="L">Ukuran - L</option>
                          <option value="XL">Ukuran - XL</option>
                        </select>
                      </div>
                    </div>
              <br><br>
                    <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Harga</label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control" name='harga' id="harga" placeholder="Harga" required>
                            </div>
                          </div>
                    <br><br>
                    <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Stock</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name='stok' id="stok" placeholder="Stok Yang Tersedia" required>
                            </div>
                          </div>
                    <br><br>
                    <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Deskripsi</label>
                            <div class="col-sm-8">
                              <textarea type="text" class="form-control" name='deskripsi_produk' id="deskripsi" placeholder="Deskripsi" required></textarea>
                            </div>
                          </div>
                    <br><br><br>
                    <div class="form-group">
                            <label for="exampleInputFile" class="col-sm-4 control-label">Image Depan</label>
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
                    <p> <center> Apakah anda yakin ingin menghapus Produk : {{$items->kode_produk}} ??</center></p>
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
                      <h4 class="modal-title">Edit - {{$items->kode_produk}}</h4>
                      </div>
                     <form action="{{Route('barang.update',['id'=> $items->kode_produk])}}" method="POST" enctype="multipart/form-data">
                        @csrf @method('PUT')
                      <div class="modal-body">
                      <div class="box-body">
                        <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Kode Kategori</label>
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
                                <label for="" class="col-sm-4 control-label">Kode Diskon</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name='kode_diskon' id="kode_diskon" value="{{$items->kode_diskon}}">
                                </div>
                            </div>
                        <br><br>
                        <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Nama Produk</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name='nama_produk' id="nama_produk" value="{{$items->nama_produk}}">
                                </div>
                              </div>
                        <br><br>
                        <div class="form-group">
                          <label for="" class="col-sm-4 control-label">Ukuran</label>
                          <div class="col-sm-8">
                            <select name="ukuran" class="form-control" id="" required>
                            <option value="{{$items->ukuran}}"selected>{{$items->ukuran}}</option>
                                <hr>
                              <option value="" disabled>Ukuran Lain :</option>
                              <option value="S">Ukuran - S</option>
                              <option value="M">Ukuran - M</option>
                              <option value="L">Ukuran - L</option>
                              <option value="XL">Ukuran - XL</option>
                            </select>
                          </div>
                        </div>
                  <br><br>
                        <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Harga</label>
                                <div class="col-sm-8">
                                  <input type="number" class="form-control" name='harga' id="hargaedit" value="{{$items->harga}}">
                                </div>
                              </div>
                        <br><br>
                        <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Stock</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name='stok' id="stok"  value="{{$items->stok}}">
                                </div>
                              </div>
                        <br><br>
                        <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Deskripsi</label>
                                <div class="col-sm-8">
                                  <textarea type="text" class="form-control" name='deskripsi_produk' id="deskripsi" value="{{$items->deskripsi_produk}}">{{$items->deskripsi_produk}}</textarea>
                                </div>
                              </div>
                        <br><br><br>
                        <div class="form-group">
                            <label for="exampleInputFile" class="col-sm-2 control-label">Image Depan</label>
                            <div class="col-sm-8">
                            <input type="file" class="" id="images" name="gambar" value="{{$items->gambar}}" >

                            </div>
                          </div>
                    <br>
                    <div class="form-group">
                            <label for="exampleInputFile" class="col-sm-4 control-label">Image Belakang</label>
                            <div class="col-sm-8">
                                <input type="file" class="" id="image2" name="gambar_belakang" >
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
                              <h4 class="modal-title">Detail Produk</h4>
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
                                          <td><label for="">Kode Produk</label></td><td>:</td><td>{{$items->kode_produk}}</td>
                                      </tr>
                                      <tr>
                                          <td><label for="">Kode Kategori</label></td><td>:</td><td>{{$items->kode_kategori}}</td>
                                      </tr>
                                      <tr>
                                          <td><label for="">Kode Diskon</label></td><td>:</td><td>{{$items->kode_diskon}}</td>
                                      </tr>
                                      <tr>
                                          <td><label for="">Nama Produk</label></td><td>:</td><td>{{$items->nama_produk}}</td>
                                      </tr>
                                      <tr>
                                          <td><label for="">Kategori</label></td><td>:</td><td>{{$items->kode_kategori}}</td>
                                      </tr>
                                      <tr>
                                          <td><label for="">Ukuran</label></td><td>:</td><td>{{$items->ukuran}}</td>
                                      </tr>
                                      <tr>
                                          <td><label for="">Harga</label></td><td>:</td><td>{{$items->harga}}</td>
                                      </tr>
                                      <tr>
                                          <td><label for="">Rate</label></td><td>:</td><td>{{$items->rating}}</td>
                                      </tr>
                                      <tr>
                                          <td><label for="">Stok</label></td><td>:</td><td>{{$items->stok}}</td>
                                      </tr>
                                          <td><label for="">Deskripsi</label></td><td>:</td><td>{{$items->deskripsi_produk}}</td>
                                       </tr>
                                  </tbody>
                              </table>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
                          </div>
                      </div>
                      <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->
      
                
                @endforeach
@yield('home')
@endsection