<div class="tab-pane fade" id="reviews" role="tabpanel">
        <div class="row">
            <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
                <div class="p-b-30 m-lr-15-sm">

                      @foreach($comment as $coments)

                        <div class="row">
                            <div class="col-md-12">

                            <i class="fa fa-user"> </i>   {{ $coments->user ? $coments->user->name : 'Anonymous'}}
                            <i class="fa fa-star"></i>{{$coments->rating}}
                            <i class="fa fa-clock-o"></i> {{date('H: i', strtotime($item->created_at))}}
                            <i class="fa fa-calendar-o"></i> {{date('F j, Y', strtotime($item->created_at))}}


                            <h5><p>{{$coments->deskripsi}}</p></h5>

                            <br />
                            </div>
                        </div>
                      @endforeach

                      <br />

                      <br />
                    <form action="{{ route('fcoment.store') }}" method="POST" class="w-full">
                    @csrf
                        <h5 class="mtext-108 cl2 p-b-7">
                            Add a review
                        </h5>

                        <p class="stext-102 cl6">
                            Your email address will not be published. Required fields are marked *
                        </p>
                        <div class="flex-w flex-m p-t-50 p-b-23">
                            <span class="stext-102 cl3 m-r-16">
                                Your Rating
                            </span>


                            <select class="wrap-rating fs-18 cl11 pointer" name="rating">
                                <option value="1"> 1 </option>
                                <option value="2"> 2 </option>
                                <option value="3"> 3 </option>
                                <option value="4"> 4 </option>
                                <option value="5"> 5 </option>
                            </select>
                        </div>


                        <div class="row p-b-25">

                            <div class="col-12 p-b-5">
                                <label class="stext-102 cl3" for="review">Your review</label>
                                <textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="review"></textarea>
                            </div>

                    @if(Auth::guard('web')->check())
                            <div class="col-sm-6 p-b-5">
                                <label class="stext-102 cl3" for="name">Name</label>
                                <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name" type="text" name="name" value="{{Auth::user()->name}}">
                            </div>

                            <div class="col-sm-6 p-b-5">
                                <label class="stext-102 cl3" for="email">Email</label>
                                <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="email" type="text" name="email"  value="{{Auth::user()->email}}">
                            </div>

                        </div>
                            <input type="hidden" name="kode_produk" value="{{$item->kode_produk}}">
                        <button class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10" type="sumbit">
                            Submit
                        </button>
                    </form>
                    @else
                    <div class="col-sm-6 p-b-5">
                                <label class="stext-102 cl3" for="name">Name</label>
                                <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name" type="text" name="name" value="">
                            </div>

                            <div class="col-sm-6 p-b-5">
                                <label class="stext-102 cl3" for="email">Email</label>
                                <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="email" type="text" name="email">
                            </div>

                        </div>

                        <a href="{{ url('Inupoi/google') }}" class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10" type="sumbit">
                            Submit
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
