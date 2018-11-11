<div class="container">
    <div class="row">
        <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
            <div class="m-l-25 m-r--38 m-lr-0-xl">
                <div class="wrap-table-shopping-cart">
                    <table class="table-shopping-cart">
                        <tr class="table_head">
                            <th class="column-1">Product</th>
                            <th class="column-2"></th>
                            <th class="column-3">Price</th>
                            <th class="column-4">Quantity</th>
                            <th class="column-5">Total</th>
                        </tr>
                        
                        @foreach ($cart as $item)
                        <tr class="table_row">
                            <td class="column-1">
                                    <form action="{{Route('ftrans.destroy',['id'=>$item->kode_produk])}}" method="POST">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="fa fa-close">
                                            </button>
                                            </form>		
                                <div class="how-itemcart1">
                                    <img src="{{Storage::url($item->gambar)}}" alt="IMG">
                                </div>
                            </td>
                            <td class="column-2">{{$item->nama_produk}}</td>
                            <td class="column-3">{{"$.".number_format($item->hpp)}}</td>
                            <td class="column-4" >
                                    <form action="{{Route('ftrans.update',['id'=>$item->id])}}" method="POST">
                                            
                                            <input type="hidden" name="kode_produk" value="{{$item->kode_produk}}">
                                            <input type="hidden" name="nama_produk" value="{{$item->nama_produk}}">
                                            <input type="hidden" name="harga" value="{{$item->harga}}">
                                            <input type="hidden" name="ukuran" value="{{$item->ukuran}}">
                                            <input type="hidden" name="hpp" value="{{$item->hpp}}">
                                            <input type="hidden" name="user" value="{{Auth::user()->id}}">
                                            <div class="input-group">
                                                <input type="text" class="input-group" style="vertical-align : middle;text-align:center;" type="number" id="total" name="total" value="{{$item->jumlah}}">
                                                <button type="submit" class="input-group-addon"><i class="fa fa-check"></i></button>
                                            </div>
                                   @csrf @method('PUT')    
                                    </form>
                            </td>
                            <td class="column-5">{{"$. ".number_format($item->harga)}}</td> 
                        </tr>
                        @endforeach
                        
                    </table>
                </div>
                
            </div>
        </div>
        
        <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
            <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                <h4 class="mtext-109 cl2 p-b-30">
                    Cart Totals
                </h4>
                
                <div class="flex-w flex-t bor12 p-b-13">
                    <div class="size-208">
                        <span class="stext-110 cl2">
                            Total:
                        </span>
                    </div>
                    
                    <div class="size-209">
                        <span class="mtext-110 cl2">
                            {{"$. ".number_format($purchases)}}
                        </span>
                    </div>
                </div>
                
                <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                    <div class="size-208 w-full-ssm">
                        <span class="stext-110 cl2">
                            Potongan:
                        </span>
                    </div>
                    
                    <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                        <span class="mtext-110 cl2">
                            {{"$. ".number_format($data)}}
                        </span>
                    </div>
                </div>
                
                <div class="flex-w flex-t p-t-27 p-b-33">
                    <div class="size-208">
                        <span class="mtext-101 cl2">
                            Subtotal:
                        </span>
                    </div>
                    
                    <div class="size-209 p-t-1">
                        <span class="mtext-110 cl2">
                            {{"$. ".number_format($purchases-$data)}}                                
                        </span>
                    </div>
                </div>
                                
                <div class ="w3-container">
                
                    <form class="w3-container w3-display-middle w3-card-4" method="POST" id="payment-form"  action="{!! URL::to('paypal') !!}">
                        {{ csrf_field() }} 
                        @foreach ($cart as $item)
                        <input class="w3-input w3-border" name="kode_transaksi" type="hidden" value="{{$number}}">
                        <input class="w3-input w3-border" name="sub_total"      type="hidden" value="{{$purchases}}">
                        <input class="w3-input w3-border" name="amount"         type="hidden" value="{{($purchases-$data)}}">
                        <input class="w3-input w3-border" name="hpp"            type="hidden" value="{{$item->hpp}}">
                        <input class="w3-input w3-border" name="nominal"        type="hidden" value="{{$item->nomi_diskon}}">
                        <input class="w3-input w3-border" name="kode_produk"    type="hidden" value="{{$item->kode_produk}}">
                        <input class="w3-input w3-border" name="nama_produk"    type="hidden" value="{{($item->nama_produk)}}">
                        <input class="w3-input w3-border" name="qty"            type="hidden" value="{{($item->jumlah)}}">
                        <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
                        @endforeach

                            <button type="submit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                                Proses to Checkout
                            </button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
 