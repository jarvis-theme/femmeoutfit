<footer class="footer-one">             
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3 footer-widget">
                <a href="#" class="footer-logo"> 
                    {{ HTML::image(logo_image_url(), 'logo '.strtolower(Theme::place('title')), array('class'=>'img-responsive', 'style'=>'margin: -38px 0 0;', 'itemprop'=>'logo', 'srcset'=>logo_image_url())) }}
                </a>
                <div class="address" style="margin-top: -20px;">
                    <div class="ft-line" style="margin: 8px 0;"><i class="icon_house_alt"> </i> <span class="ft-line-txt">{{ ucwords(@$kontak->alamat) }}</span></div>
                    <div class="ft-line" style="margin: 8px 0;"><i class="icon_mobile"> </i> <span class="ft-line-txt"> {{ $kontak->telepon }}<br>{{ $kontak->hp }}</span></div>
                    <div class="ft-line" style="margin: 8px 0;"><i class="icon_mail_alt"> </i> <span class="ft-line-txt">{{ @$kontak->email }}</span></div>
                </div>
            </div>
            <div class="col-sm-hidden col-lg-1 footer-widget">
            </div>
            @foreach(other_menu() as $key=>$menu)
                @if($key!=2)
                <div class="col-sm-6 col-lg-2 footer-widget">
                <h2 class="widget-title"> {{$menu->nama}}</h2>
                    <ul>
                        @foreach($menu->link as $key=>$link)
                        <li>
                            <a href="{{ menu_url($link) }}"> {{ $link->nama }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>    
                @endif    
            @endforeach
            <div class="col-sm-6 col-lg-4 footer-widget">
                <h2 class="widget-title"> Method Payment </h2>
                <div class="list-inline">
                    @foreach(list_banks() as $value)
                        @if($value->status == 1)
                        <img src="{{bank_logo($value)}}" alt="{{$value->name}}" class="bank-logo" />
                        @endif
                    @endforeach
                    @foreach(list_payments() as $pay)
                        @if($pay->nama == 'paypal' && $pay->aktif == 1)
                        <img src="{{url(Config::get('aws.cdn2.endpoint').'/img/bank/paypal.png')}}" alt="support paypal" class="bank-logo" />
                        @endif
                        @if($pay->nama == 'ipaymu' && $pay->aktif == 1)
                        <img src="{{url(Config::get('aws.cdn2.endpoint').'/img/bank/ipaymu.png')}}" alt="support ipaymu" class="bank-logo" />
                        @endif
                        @if($pay->nama == 'bitcoin' && $pay->aktif == 1)
                        <img src="{{url(Config::get('aws.cdn2.endpoint').'/img/bank/bitcoin.png')}}" alt="support bitcoin" class="bank-logo" />
                        @endif
                    @endforeach
                    @if(count(list_dokus()) > 0 && list_dokus()->status == 1)
                        <img src="{{url(Config::get('aws.cdn2.endpoint').'/img/bank/doku.jpg')}}" alt="support doku myshortcart" class="bank-logo" />
                    @endif
                    @if(count(list_veritrans()) > 0 && list_veritrans()->status == 1 && list_veritrans()->type == 1)
                        <img src="{{url(Config::get('aws.cdn2.endpoint').'/img/bank/veritrans.jpg')}}" alt="support veritrans" class="bank-logo" />
                    @endif
                </div>
                <div class="clearfix"></div><br>
                <h2 class="widget-title"> Follow Us </h2>
                <div class="social-link">
                    <div class="list-inline social-link">
                        <span style="margin: 10px;color: #ddd;font-size: 16px;"><a target="_blank"  href="http://line.me/ti/p/%40femmeoutfit "><img src="https://s3-ap-southeast-1.amazonaws.com/cdn.jarvis-store.com/femme-outfit-upload/20180102-194933.png"></a> </span>
                        <span style="margin: 10px;color: #ddd;font-size: 16px;"><a target="_blank"  href="https://www.youtube.com/c/FemmeOutfit "><img src="https://s3-ap-southeast-1.amazonaws.com/cdn.jarvis-store.com/femme-outfit-upload/20180102-194942.png"></a> </span>
                        <span style="margin: 10px;color: #ddd;font-size: 16px;"><a target="_blank"  href="https://www.instagram.com/femmeoutfit/?hl=en"><img src="https://s3-ap-southeast-1.amazonaws.com/cdn.jarvis-store.com/femme-outfit-upload/20180102-194930.png"></a></span>
                        <span style="margin: 10px;color: #ddd;font-size: 16px;"><a target="_blank"  href="https://twitter.com/femmeoutfit?lang=en"><img src="https://s3-ap-southeast-1.amazonaws.com/cdn.jarvis-store.com/femme-outfit-upload/20180102-194938.png"></a></span>
                        <span style="margin: 10px;color: #ddd;font-size: 16px;"><a target="_blank"  href="https://www.facebook.com/femme.outfit/"><img src="https://s3-ap-southeast-1.amazonaws.com/cdn.jarvis-store.com/femme-outfit-upload/20180102-194919.png"></a> </span>
                        <!--<span style="margin: 10px;color: #ddd;font-size: 16px;"><a target="_blank"  href="#"><i class="fa fa-google-plus"></i></a> </span>-->
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!--<hr class="divider-1" />-->
        <p class="copy-rights">
            © 2018 <a href="#"> <b> {{ Theme::place('title') }} </b> </a>. All Rights Reserved                        
        </p>
    </div>
</footer>

{{ pluginPowerup() }} 