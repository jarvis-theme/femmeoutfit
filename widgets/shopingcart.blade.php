<div class="header-cart">
    <a href="{{URL::to('checkout')}}"> 
        <i class="cart-icon icon-handbag icons"></i> <span class="count"> {{Shpcart::cart()->total_items()}} </span> 
    </a>
</div>
<div class="cart-popup"> 
	@if(Shpcart::cart()->total_items()>0)
    <div class="cart-box">
        <ol class="cart-list">  
            <li>
            	@foreach (Shpcart::cart()->contents() as $key => $cart)
                <div class="alert">
                    <!-- <a href="#" class="close icon_close" data-dismiss="alert" aria-label="close"></a> -->
                    <a class="img" href="#"> <img src="{{product_image_url($cart['image'],'thumb')}}" alt=""/> </a>
                    <div class="cart-title">
                        <a class="font-2" href="#">{{$cart['name']}}</a>
                        <p class="price"> 
                            <b> {{ jadiRupiah($cart['qty'] * $cart['price'])}} </b>
                        </p>
                    </div>
                </div>
                @endforeach
            </li>
        </ol>
        <div class="total">
            <span class="font-2">sub total</span> <span class="total-price">{{ jadiRupiah(Shpcart::cart()->total() )}}</span>
        </div>
        <div class="buttons">
            <div class="right"> 
                <a href="{{URL::to('checkout')}}" class="theme-btn btn small-btn"> Checkout </a>
            </div>
        </div>
    </div>
    @else
    <div class="cart-empty">
        <p>You have no items in your shopping cart.</p>
    </div>
    @endif
</div>