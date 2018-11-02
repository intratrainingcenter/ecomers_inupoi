
   @if ($message = Session::get('success'))
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

@elseif ($message = Session::get('Fail'))
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
@endif
