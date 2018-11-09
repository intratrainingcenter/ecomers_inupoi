@if ($message = Session::get('success'))
<div class="alert swal-overlay swal-overlay--show-modal" tabindex="-1" role="alert">
    <div class="swal-modal"><div class="swal-icon swal-icon--success">
    <span class="swal-icon--success__line swal-icon--success__line--long"></span>
    <span class="swal-icon--success__line swal-icon--success__line--tip"></span>

    <div class="swal-icon--success__ring"></div>
    <div class="swal-icon--success__hide-corners"></div>
    </div><div class="swal-title" style="">
                        @foreach ($cart as $item)
                        @endforeach                                     
    </div><div class="swal-text" style="">{{$message}}</div><div class="swal-footer"><div class="swal-button-container">
                    <form  action="{{Route('ftrans.store')}}" method="post">
                      
                            <input name="kode_transaksi" type="hidden" value="{{$number}}">
                            <input name="sub_total"      type="hidden" value="{{$purchases}}">
                            <input name="amount"         type="hidden" value="{{($purchases-$data)}}">
                            <input name="hpp"            type="hidden" value="{{$item->hpp}}">
                            <input name="nominal"        type="hidden" value="{{$item->nomi_diskon}}">
                            <input name="kode_produk"    type="hidden" value="{{$item->kode_produk}}">
                            <input name="nama_produk"    type="hidden" value="{{($item->nama_produk)}}">
                            <input name="qty"            type="hidden" value="{{($item->jumlah)}}">
                            <input type="hidden" name="id_user" value="{{Auth::user()->id}}">

                            <button type="submit" ><span class="btn btn-primary">OK</span></button>            
                       {{ csrf_field() }}
                        
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