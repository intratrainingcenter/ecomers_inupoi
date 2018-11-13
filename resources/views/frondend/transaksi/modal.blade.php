@if ($message = Session::get('success'))
<div class="alert swal-overlay swal-overlay--show-modal" tabindex="-1" role="alert">
    <div class="swal-modal"><div class="swal-icon swal-icon--success">
    <span class="swal-icon--success__line swal-icon--success__line--long"></span>
    <span class="swal-icon--success__line swal-icon--success__line--tip"></span>

    <div class="swal-icon--success__ring"></div>
    <div class="swal-icon--success__hide-corners"></div>
    </div><div class="swal-title" style="">
                                                           
    </div><div class="swal-text" style="">{{$message}}</div><div class="swal-footer"><div class="swal-button-container">
        @foreach ($cart as $item)
                    <form  action="{{Route('ftrans.store')}}" method="post">
                            {{ csrf_field() }}
                            <input name="kode_transaksi" type="hidden" value="{{$number}}">
                            <input name="sub_total"      type="hidden" value="{{$purchases}}">
                            <input name="amount"         type="hidden" value="{{($purchases-$data)}}">
                            <input name="hpp"            type="hidden" value="{{$item->hpp}}">
                            <input name="nominal"        type="hidden" value="{{$item->nomi_diskon}}">
                            <input name="kode_produk"    type="text" value="{{$item->kode_produk}}">
                            <input name="nama_produk"    type="hidden" value="{{($item->nama_produk)}}">
                            <input name="qty"            type="hidden" value="{{($item->jumlah)}}">
                            <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
                            
                            @endforeach 
                            <button type="submit" ><span class="btn btn-primary">OK</span></button>            
                            
                        </form>
    
    <div class="swal-button__loader">
        <div></div>
        <div></div>
        <div></div>
    </div>

    </div></div></div></div>
    <?php Session::forget('success');?>

@elseif ($message = Session::get('update'))
<div class="alert swal-overlay swal-overlay--show-modal notif" tabindex="-1" role="alert">
    <div class="swal-modal"><div class="swal-icon swal-icon--success">
    <span class="swal-icon--success__line swal-icon--success__line--long"></span>
    <span class="swal-icon--success__line swal-icon--success__line--tip"></span>

    <div class="swal-icon--success__ring"></div>
    <div class="swal-icon--success__hide-corners"></div>
    </div><div class="swal-title" style="">
                                     
    </div><div class="swal-text" style="">{{$message}}</div><div class="swal-footer"><div class="swal-button-container">

    <button type="button" class="close--confirm" data-dismiss="alert" aria-label="Close"><span class="btn btn-primary">OK</span></button>            
    
    <div class="swal-button__loader">
        <div></div>
        <div></div>
        <div></div>
    </div>

    </div></div></div></div>
    <?php Session::forget('update');?>

@elseif ($message = Session::get('error'))
<div class="alert swal-overlay swal-overlay--show-modal notif" tabindex="-1" role="alert">
    <div class="swal-modal">
    <div class="swal-title" style="">
         FAIL !!                            
    </div>
    <div class="swal-text" style="color:red">{{$message}}</div><div class="swal-footer"><div class="swal-button-container">

    <button type="button" class="close--confirm" data-dismiss="alert" aria-label="Close"><span class="btn btn-primary">OK</span></button>
    
    <div class="swal-button__loader">
        <div></div>
        <div></div>
        <div></div>
    </div>

    </div>
     </div>
    </div>
</div>
<?php Session::forget('error');?>

@endif

<div class="modal modal-success fade" style="margin-top:120px" id="modal-address" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Address</h4>
            </div>
            <form  action="{{Route('fmember.update',['id'=>Auth::user()->id])}}" method="POST">
                    @csrf @method('PUT')

            <div class="modal-body">
                <div class="box-body">
                
                    <div class="input-group">
                            <label for="kode_produk" class="col-sm-2 control-label">Name</label>
                            <input type="text" class="form-control" id="nama_penerima"  name="nama_penerima" value="{{Auth::user()->nickname}}">
                    </div>
                    <br>
                    <div class="input-group">
                    <label for="kode_produk" class="col-sm-2 control-label">Phone</label>
                            <span class="input-group-addon">+62</span>
                            <input type="number" class="form-control total" id="no_tele" name="no_tele" value="{{Auth::user()->no_telp}}">
                    </div>
                    <br>
                    <div class="input-group">
                    <label for="kode_produk" class="col-sm-2 control-label">Address</label>  
                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{Auth::user()->alamat}}">
                        
                        </div>
                        <br>
                        <p style="text-align:center;font-size:13px;">
                           
                            Ex: jl.inpres,ruko 27 g no 6,kedoya utara,kb.jerul,kota jkt barat daerah khusus ibukota jkarta 11520
                        
                        </p> 
                        <br>
                        
                 </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger pull-left batal" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Confirm</button>
            </div>
          </form>
          </div>
        </div>
      </div>