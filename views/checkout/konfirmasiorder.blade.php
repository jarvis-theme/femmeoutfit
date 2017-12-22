<article class="page-body">

    <!--Breadcrumb Section Start-->
    <section class="breadcrumb-bg-2">                
        <div class="container">
            <div class="site-breadcumb">                        
                <h1 class="title-1"> My Order </h1> 
                <ol class="breadcrumb breadcrumb-menubar">
                    <li> <a href="/"> Home </a> Order Confirmation </li>                             
                </ol>
            </div>  
        </div>
    </section>
    <!--Breadcrumb Section End-->

    <section class="wrapper sec-space my-account">                  
        <div class="container">
            <!-- My Account Starts -->
                <div class="cart-table">
                    
                    <table class="product-table">
                        <thead class="font-2">
                            <tr>
                                <th><span>Order ID</span></th>
                                <th><span>Order Date</span></th>
                                <th><span>Product</span></th>
                                <th><span>Total</span></th>
                                <th><span>Air Waybill Number</span></th>
                                <th><span>Status</span></th>
                            </tr>
                        </thead>
                        <tbody>  
                            <tr>
                                <td>{{ $checkouttype==1 ? prefixOrder().$order->kodeOrder : prefixOrder().$order->kodePreorder }}</td>
                                <td>{{ $checkouttype==1 ? waktu($order->tanggalOrder) : waktu($order->tanggalPreorder) }}</td>
                                <td>
                                    <ul>
                                    @if ($checkouttype==1)
                                        @foreach ($order->detailorder as $detail)
                                        <li class="detailorder">{{ $detail->produk->nama }} {{ $detail->opsiSkuId !=0 ? '('.$detail->opsisku['opsi1'].($detail->opsisku['opsi2'] != '' ? ' / '.$detail->opsisku['opsi2']:'').($detail->opsisku['opsi3'] !='' ? ' / '.$detail->opsisku['opsi3']:'').')':'' }} - {{ $detail->qty }}</li>
                                        @endforeach
                                    @else
                                        <li class="detailorder">{{ $order->preorderdata->produk->nama }} ({{ $order->opsiSkuId==0 ? 'No Opsi' : $order->opsisku['opsi1'].($order->opsisku['opsi2']!='' ? ' / '.$order->opsisku['opsi2']:'').($order->opsisku['opsi3']!='' ? ' / '.$order->opsisku['opsi3']:'') }})
                                         - {{ $order->jumlah }}</li>
                                    @endif
                                    </ul>
                                </td>
                                <td class="quantity">
                                    @if($checkouttype==1)
                                    {{ price($order->total) }}
                                    
                                    @else 
                                        @if($order->status < 2)
                                            {{ price($order->total) }}
                                        @elseif(($order->status > 1 && $order->status < 4) || $order->status==7)
                                            {{ price($order->total - $order->dp) }}
                                        @else
                                            0
                                        @endif
                                    @endif
                                </td>
                                <td class="sub-price">{{ $order->noResi }}</td>
                                <td class="total-price">
                                    @if($checkouttype==1)
                                        @if($order->status==0)
                                        <span class="label label-warning">Pending</span>
                                        @elseif($order->status==1)
                                        <span class="label label-danger">Konfirmasi diterima</span>
                                        @elseif($order->status==2)
                                        <span class="label label-success">Pembayaran diterima</span>
                                        @elseif($order->status==3)
                                        <span class="label label-info">Terkirim</span>
                                        @elseif($order->status==4)
                                        <span class="label label-default">Batal</span>
                                        @endif
                                    @else 
                                        @if($order->status==0)
                                        <span class="label label-warning">Pending</span>
                                        @elseif($order->status==1)
                                        <span class="label label-danger">Konfirmasi DP diterima</span>
                                        @elseif($order->status==2)
                                        <span class="label label-info">DP terbayar</span>
                                        @elseif($order->status==3)
                                        <span class="label label-info">Menunggu pelunasan</span>
                                        @elseif($order->status==4)
                                        <span class="label label-success">Pembayaran lunas</span>
                                        @elseif($order->status==5)
                                        <span class="label label-info">Terkirim</span>
                                        @elseif($order->status==6)
                                        <span class="label label-default">Batal</span>
                                        @elseif($order->status==7)
                                        <span class="label label-info">Konfirmasi Pelunasan diterima</span>
                                        @endif
                                    @endif  
                                </td>
                            </tr>    
                        </tbody>                               
                    </table>

                    <div class="continue-shopping text-center">
                        <div class="row">
                                @if($order->jenisPembayaran==1 && $order->status == 0)
                                <div class="col-md-6 col-md-offset-3">
                                    <h3 class="align-center"><b>{{trans('content.step5.confirm_btn')." ".trans('content.step3.transfer')}}</b></h3>
                                    {{-- */ $checkouttype==1 ? $url = 'konfirmasiorder/' : $url = 'konfirmasipreorder/' /* --}}

                                    {{ Form::open(array('url'=> $url.$order->id, 'method'=>'put')) }}
                                        <div class="form-group">
                                            <label  class="control-label"> Nama Pengirim:</label>
                                            <input type="text" class="form-control" placeholder="Bank Account" name="nama" required>
                                        </div>
                                        <div class="form-group">
                                            <label  class="control-label"> No Rekening:</label>
                                            <input type="text" class="form-control" placeholder="No Account" name="noRekPengirim" required>
                                        </div>
                                        <div class="form-group">
                                            <label  class="control-label"> Rekening Tujuan:</label>
                                            <select name="bank" class="form-control">
                                                <option value="">-- Pilih Bank Tujuan --</option>
                                                @foreach ($banktrans as $bank)
                                                <option value="{{$bank->id}}">{{ $bank->bankdefault->nama }} - {{ $bank->noRekening }} - A/n {{ $bank->atasNama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label  class="control-label"> Jumlah:</label>
                                            @if($checkouttype==1) 
                                            <input type="text" class="form-control" placeholder="Total Transfer" name="jumlah" value="{{ $order->status==0 ? $order->total : '' }}" required>
                                            @else
                                                @if($order->status < 2)
                                                <input class="form-control" placeholder="Jumlah Transfer" type="text" name="jumlah" value="{{ $order->dp }}" required>
                                                @elseif(($order->status > 1 && $order->status < 4) || $order->status==7)
                                                <input class="form-control" placeholder="Jumlah Transfer" type="text" name="jumlah" value="{{ $order->total - $order->dp }}" required>
                                                @endif
                                            @endif
                                        </div>
                                        <button type="submit" class="btn small-btn theme-btn-1"> {{ trans('content.step5.confirm_btn') }} </button>  
                                    {{ Form::close() }}
                                    <br>
                                </div>
                                @endif
                        </div>

                        @if($paymentinfo!=null)
                        <h3><center>Paypal Payment Details</center></h3><br>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <td>Payment Status</td><td>:</td><td>{{$paymentinfo['payment_status']}}</td>
                                </tr>
                                <tr>
                                    <td>Payment Date</td><td>:</td><td>{{$paymentinfo['payment_date']}}</td>
                                </tr>
                                <tr>
                                    <td>Address Name</td><td>:</td><td>{{$paymentinfo['address_name']}}</td>
                                </tr>
                                <tr>
                                    <td>Payer Email</td><td>:</td><td>{{$paymentinfo['payer_email']}}</td>
                                </tr>
                                <tr>
                                    <td>Item Name</td><td>:</td><td>{{$paymentinfo['item_name1']}}</td>
                                </tr>
                                <tr>
                                    <td>Receiver Email</td><td>:</td><td>{{$paymentinfo['receiver_email']}}</td>
                                </tr>
                                <tr>
                                    <td>Total Payment</td><td>:</td><td>{{$paymentinfo['payment_gross']}} {{$paymentinfo['mc_currency']}}</td>
                                </tr>
                            </table>
                        </div>
                        <p>Thanks you for your order.</p><br>
                        @endif 
                      
                        @if($order->jenisPembayaran==2)
                        <div class="customerReviews text-center">
                            <h3><b>{{ trans('content.step5.confirm_btn') }} Paypal</b></h3><br>
                            <p>{{ trans('content.step5.paypal') }}</p>
                            <div id="paypal">{{ $paypalbutton }}</div>
                        </div>
                        @elseif($order->jenisPembayaran==4) 
                            @if(($checkouttype==1 && $order->status < 2) || ($checkouttype==3 && ($order->status!=6)))
                            <div class="customerReviews text-center">
                                <h4><b>{{ trans('content.step5.confirm_btn') }} iPaymu</b></h4><br>
                                <p>{{ trans('content.step5.ipaymu') }}</p>
                                <a id="ipaymu" class="btn" href="{{ url('ipaymu/'.$order->id) }}" target="_blank">{{trans('content.step5.ipaymu_btn')}}</a>
                            </div>
                            @endif
                        @elseif($order->jenisPembayaran==5 && $order->status == 0)
                        <div class="customerReviews text-center">
                            <h4><strong>{{ trans('content.step5.confirm_btn') }} DOKU MyShortCart</strong></h4><br>
                            <p>{{ trans('content.step5.doku') }}</p>
                            <div id="doku">{{ $doku_button }}</div>
                        </div>
                        @elseif($order->jenisPembayaran==6 && $order->status == 0)
                        <div class="customerReviews text-center">
                            <h3><b>{{ trans('content.step5.confirm_btn') }} Bitcoin</b></h3><br>
                            <p>{{ trans('content.step5.bitcoin') }}</p>
                            {{ $bitcoinbutton }}
                        </div>
                        @elseif($order->jenisPembayaran == 8 && $order->status == 0)
                        <div class="customerReviews text-center">
                            <h3><b>{{ trans('content.step5.confirm_btn') }} Veritrans</b></h3><br>
                            <p>{{ trans('content.step5.veritrans') }}</p>
                            <button id="veritrans" class="btn" onclick="location.href='{{ $veritrans_payment_url }}'">{{ trans('content.step5.veritrans_btn') }}</button>
                        </div>
                        @endif
                    </div>

                </div>
            <!-- / My Account Ends -->
        </div>

    </section>

</article>