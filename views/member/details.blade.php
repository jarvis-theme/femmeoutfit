<article class="page-body">

    <!--Breadcrumb Section Start-->
    <section class="breadcrumb-bg-2">                
        <div class="container">
            <div class="site-breadcumb">                        
                <h1 class="title-1"> My Account </h1> 
                <ol class="breadcrumb breadcrumb-menubar">
                    <li> <a href="/"> Home </a> Order History </li>                             
                </ol>
            </div>  
        </div>
    </section>
    <!--Breadcrumb Section End-->

    <section class="wrapper sec-space my-account">                  
        <div class="container">
            <!-- My Account Starts -->
            @if($pengaturan->checkoutType!=2)
                @if($order->count() != 0)
                <div class="cart-table">
                    <form class="cart-form">
                        <table class="product-table">
                            <thead class="font-2">
                                <tr>
                                    <th>Order Code</th>                                
                                    <th>date</th> 
                                    <th>product name</th>  
                                    <th>total</th>
                                    <th>shipping id</th>
                                    <th>status</th> 
                                    <th>Confirmation</th> 
                                </tr>
                            </thead>
                            <tbody>  
                                @foreach (list_order() as $item)
                                    <tr>
                                        <td>{{$pengaturan->checkoutType==3 ? prefixOrder().$item->kodePreorder : prefixOrder().$item->kodeOrder}}</td>
                                        <td>{{$pengaturan->checkoutType==3 ? waktu($item->tanggalPreorder) : waktu($item->tanggalOrder)}}</td>
                                        <td class="description">
                                            <ul>
                                            @if($pengaturan->checkoutType==3) 
                                                <li>{{$item->preorderdata->produk->nama}} ({{$item->opsiSkuId==0 ? 'No Opsi' : $item->opsisku->opsi1.($item->opsisku->opsi2!='' ? ' / '.$item->opsisku->opsi2:'').($item->opsisku->opsi3!='' ? ' / '.$item->opsisku->opsi3:'')}}) - {{$item->jumlah}}<li>
                                            @else 
                                                @foreach ($item->detailorder as $detail)
                                                
                                                <a>{{$detail->produk->nama}} ( {{$detail->qty}} )</a>
                                                    @if($detail->opsiSkuId !=0)
                                                    <ul>
                                                        <li> <i class="arrow_carrot-right"></i> {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku["opsi1"].($detail->opsisku["opsi2"] != '' ? ' / '.$detail->opsisku["opsi2"]:'').($detail->opsisku["opsi3"] !='' ? ' / '.$detail->opsisku["opsi3"]:'').')':''}}  
                                                    </ul>
                                                    @endif
                                                @endforeach 
                                            @endif
                                            </ul>
                                        </td>
                                        <td class="price">{{ price($item->total) }}</td>
                                        <td class="price">{{ $item->noResi }}</td>
                                        <td class="order-status">
                                            @if($pengaturan->checkoutType==1) 
                                                @if($item->status==0)
                                                <span class="label label-warning">Pending</span>
                                                @elseif($item->status==1)
                                                <span class="label label-info">Konfirmasi diterima</span>
                                                @elseif($item->status==2)
                                                <span class="label label-success">Pembayaran diterima</span>
                                                @elseif($item->status==3)
                                                <span class="label label-success">Terkirim</span>
                                                @elseif($item->status==4)
                                                <span class="label label-danger">Batal</span>
                                                @endif 
                                            @else 
                                                @if($item->status==0)
                                                <span class="label label-warning">Pending</span>
                                                @elseif($item->status==1)
                                                <span class="label label-info">Konfirmasi DP diterima</span>
                                                @elseif($item->status==2)
                                                <span class="label label-success">DP terbayar</span>
                                                @elseif($item->status==3)
                                                <span class="label label-info">Menunggu pelunasan</span>
                                                @elseif($item->status==4)
                                                <span class="label label-success">Pembayaran lunas</span>
                                                @elseif($item->status==5)
                                                <span class="label label-success">Terkirim</span>
                                                @elseif($item->status==6)
                                                <span class="label label-danger">Batal</span>
                                                @elseif($item->status==7)
                                                <span class="label label-info">Konfirmasi Pelunasan diterima</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td class="align-center">
                                        @if($pengaturan->checkoutType==1) 
                                            @if($item->status <= 1)
                                            <a href="{{url('konfirmasiorder/'.$item->id)}}" target="_blank" class="btn small-btn theme-btn"> Payment Confirmation </a>  
                                            <!-- <button onclick="window.open('{{url('konfirmasiorder/'.$item->id)}}','_blank')" class="btnbingoOne" data-title="Edit" data-placement="top" data-tip="tooltip"><i class="fa fa-eye"></i></button> -->
                                            @endif 
                                        @endif
                                        </td>
                                    </tr>
                                @endforeach
                                 <!-- <td class="order-status">
                                    <a href="#" class="btn small-btn theme-btn-1">Return Order</a>
                                    <a href="#" class="btn small-btn theme-btn"> Re Order </a>  
                                </td> -->     
                            </tbody>                               
                        </table>

                        <div class="continue-shopping text-center">
                            <a href="{{url('produk')}}" class="btn btn-black"> Back to Shopping </a>
                        </div>

                    </form>
                </div>
                @else
                <div class="continue-shopping text-center">
                    <h1>No Orders History</h1><br><br>
                    <a href="{{url('produk')}}" class="btn btn-black"> Back to Shopping </a>
                </div>
                @endif
            @endif
            <!-- / My Account Ends -->
        </div>

    </section>

</article>