@section('content')
<section class="content container-fluid">
  <div class="x_panel">
    <div class="x_content">
@if ($message = Session::get('success'))
    <div class="alert alert-success alert alert-success alert-dismissible fade in" role="alert" >
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button>
        <p>{{ $message }}</p>
    </div>
    @elseif ($message = Session::get('edit'))
    <div class="alert alert-warning alert alert-warning alert-dismissible fade in" role="alert" >
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button>
        <p>{{ $message }}</p>
    </div>
    @elseif ($message = Session::get('delete'))
    <div class="alert alert-danger alert alert-danger alert-dismissible fade in" role="alert" >
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button>
        <p>{{ $message }}</p>
    </div>
    @elseif ($message = Session::get('not_success'))
    <div class="alert alert-danger alert alert-danger alert-dismissible fade in" role="alert" >
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button>
        <p>{{ $message }}</p>
    </div>
@endif

<div class="modal modal-success fade" id="modal-success">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Produk</h4>
            </div>
            <form  action="{{Route('barang.store')}}" method="post">
                {{-- {!! Form::open(['route' => 'barang.store' , 'method' => 'post'])!!} --}}
            <div class="modal-body">
                <div class="box-body">
                    <div class="form-group">
                      <label for="kode_produk" class="col-sm-4 control-label">Kode Produk</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="kode_produk" id="kode_produk" placeholder="Kode Produk">
                      </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label for="" class="col-sm-4 control-label">Kode Kategori</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name='kode_kategori' id="kode_kategori" placeholder="Kode Kategori">
                        </div>
                      </div>
                      <br><br>
                      <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Kode Diskon</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name='kode_diskon' id="kode_diskon" placeholder="Kode Diskon">
                            </div>
                        </div>
                    <br><br>
                    <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Nama Produk</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name='nama_produk' id="nama_produk" placeholder="Nama Produk">
                            </div>
                          </div>
                    <br><br>
                    <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Harga</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name='harga' id="harga" placeholder="Harga">
                            </div>
                          </div>
                    <br><br>
                    <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Stock</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name='stok' id="stok" placeholder="Stok Yang Tersedia">
                            </div>
                          </div>
                    <br><br>
                    <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Deskripsi</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name='deskripsi' id="deskripsi" placeholder="Deskripsi">
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
          {{-- {!! Form::close() !!} --}}
          </div>
        </div>
      </div>
      
      <!-- /.modal-HAPUS -->
     
      <div class="modal fade" id="modal-hapus">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">delete Mapel</h4>
                    </div>
                    {{-- {!! Form::open(['route' => 'sekolah.delete',$item->kode_mapel, 'method' => 'delete' ]) !!} --}}
                    <div class="modal-body">
                    <input type="hidden" name="kode" value="">
                    <p>Apakah anda yakin ingin menghapus mapel :</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    {{-- {!! Form::close() !!} --}}
                  </div>
                </div>
              </div>
      
      <!-- /.modal-EDIT -->
      
              <div class="modal fade" id="modal-edit">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Edit Mapel - </h4>
                      </div>
                      {{-- {!! Form::open(['route' => 'sekolah.edit',$item->id_mapel, 'method' => 'PUT' ]) !!} --}}
                      <div class="modal-body">
                      <input type="hidden" name="id" value="">
                      <div class="box-body">
                         
                        isi
            
                       </div>  
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                      {{-- {!! Form::close() !!} --}}
                    </div>
                  </div>
                </div>     


@yield('home')
@endsection