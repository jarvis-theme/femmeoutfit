<div id="section-bingo-footer">
    <footer id="footer">
        <div class="bingoFooterContainer">
            <div class="footerCenter">
                <div class="container">
                    <div class="footerCenterWrap">
                        <div class="footerContact">
                            <div class="row">
                                <div class="col-xs-12 col-md-4 col-lg-3">
                                    <div class="boxContact address">
                                        <div class="icon">
                                            <i class="icofont icofont-location-pin"></i>
                                        </div>
                                        <div class="desc">{{ ucwords(@$kontak->alamat) }}</div>
                                    </div>
                                </div>
                                @if(!empty($kontak->email))
                                <div class="col-xs-12 col-md-4 col-lg-3">
                                    <div class="boxContact email">
                                        <div class="icon">
                                            <i class="icofont icofont-envelope"></i>
                                        </div>
                                        <div class="desc">
                                            <a href="mailto:{{ @$kontak->email }}" target="_blank">{{ @$kontak->email }}</a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if(!empty($kontak->telepon) && !empty($kontak->hp))
                                <div class="col-xs-12 col-md-4 col-lg-3">
                                    <div class="boxContact phone">
                                        <div class="icon">
                                            <i class="icofont icofont-phone"></i>
                                        </div>
                                        <div class="desc">{{ $kontak->telepon }} <br>{{ $kontak->hp }}</div>
                                    </div>
                                </div>
                                @endif
                                <div class="col-xs-12 col-lg-3">
                                    <div class="boxFooterSocial social">
                                        <div class="footerSocial">
                                            <div class="bingoSocial">
                                                <h4 class="bingoTitle">Follow us</h4>
                                                <div class="bingoContent">
                                                    <ul class="bingolistSocial list-unstyled">
                                                        @if($kontak->fb)
                                                        <li class="facebook">
                                                            <a target="_blank" href="{{ url($kontak->fb) }}" title="Facebook" class="btn-social" data-original-title="Facebook">
                                                                <i class="icofont icofont-social-facebook"></i>
                                                                <span>Facebook</span>
                                                            </a>
                                                        </li>
                                                        @endif
                                                        @if($kontak->tw)
                                                        <li class="twitter">
                                                            <a target="_blank" href="{{ url($kontak->tw) }}" title="Twitter" class="btn-social" data-original-title="Twitter">
                                                                <i class="icofont icofont-social-twitter"></i>
                                                                <span>Twitter</span>
                                                            </a>
                                                        </li>
                                                        @endif
                                                        @if($kontak->ig)
                                                        <li class="instagram">
                                                            <a target="_blank" href="{{ url($kontak->ig) }}" title="Instagram" class="btn-social" data-original-title="Instagram">
                                                                <i class="icofont icofont-social-instagram"></i>
                                                                <span>Instagram</span>
                                                            </a>
                                                        </li>
                                                        @endif
                                                        @if($kontak->gp)
                                                        <li class="google-plus">
                                                            <a target="_blank" href="{{ url($kontak->gp) }}" title="Google Plus" class="btn-social" data-original-title="Google Plus">
                                                                <i class="icofont icofont-social-google-plus"></i>
                                                                <span>Google Plus</span>
                                                            </a>
                                                        </li>
                                                        @endif
                                                        @if($kontak->pt)
                                                        <li class="pinterest">
                                                            <a target="_blank" href="{{ url($kontak->pt) }}" title="Pinterest" class="btn-social" data-original-title="Pinterest">
                                                                <i class="icofont icofont-social-pinterest"></i>
                                                                <span>Pinterest</span>
                                                            </a>
                                                        </li>
                                                        @endif
                                                        @if($kontak->tl)
                                                        <li class="tumblr">
                                                            <a target="_blank" href="{{ url($kontak->tl) }}" title="Tumblr" class="btn-social" data-original-title="Pinterest">
                                                                <i class="icofont icofont-social-tumblr"></i>
                                                                <span>Tumblr</span>
                                                            </a>
                                                        </li>
                                                        @endif
                                                        @if($kontak->picmix)
                                                        <li>
                                                            <a target="_blank" href="{{url($kontak->picmix)}}" title="Picmix">
                                                                <img class="picmix" src="//d3kamn3rg2loz7.cloudfront.net/blogs/event/icon-picmix.png">
                                                            </a>
                                                        </li>
                                                        @endif 
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-4">
                                <div class="footerHTML">
                                    <div class="footerLogo">
                                        <a href="/">
                                            {{ HTML::image(logo_image_url(),'logo '.strtolower(Theme::place('title')), array('class'=>'img-responsive', 'style'=>'max-height: 100px')) }}
                                        </a>
                                    </div>
                                    <div class="footerHTMLDesc">
                                        {{ short_description(about_us()->isi,150) }}
                                    </div>
                                    <!-- <div class="footerHTMLBtn">
                                        <a href="#" title="Read more">Read more</a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-8">
                                {{ Theme::partial('subscribe') }}
                                
                                <div class="bingoFooterMenus">
                                    <div class="bingoContent">
                                        <ul class="bingoFooterLinks list-unstyled">
                                        @foreach(other_menu() as $key=>$menu)
                                            @if($key == '0' || $key == '1')
                                                @foreach($menu->link as $link_menu)
                                                    @if($menu->id == $link_menu->tautanId)
                                                    <li>
                                                        <a href="{{ menu_url($link_menu) }}" title="{{ $link_menu->nama }}">{{ $link_menu->nama }}</a>
                                                    </li>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footerCopyRight">
                <div class="container">
                    <div class="footerCopyRightWrap">
                        <div class="row">
                            <div class="col-xs-12 col-md-5">
                                <div class="bingoCopyRight">&copy; 2017 {{ Theme::place('title') }} - All Rights Reserved.</div>
                            </div>
                            <div class="col-xs-12 col-md-7">
                                <div class="bingoPayment">
                                    @foreach(list_banks() as $value)
                                        @if($value->status == 1)
                                        <a>{{$value->bankdefault->nama}}</a>
                                        @endif
                                    @endforeach
                                    @foreach(list_payments() as $pay)
                                        @if($pay->nama == 'paypal' && $pay->aktif == 1)
                                        <a>Paypal</a>
                                        @endif
                                        @if($pay->nama == 'ipaymu' && $pay->aktif == 1)
                                        <a>Ipaymu</a>
                                        @endif
                                        @if($pay->nama == 'bitcoin' && $pay->aktif == 1)
                                        <a>Bitcoin</a>
                                        @endif
                                    @endforeach
                                    @if(count(list_dokus()) > 0 && list_dokus()->status == 1)
                                        <a>Doku</a>
                                    @endif
                                    @if(count(list_veritrans()) > 0 && list_veritrans()->status == 1 && list_veritrans()->type == 1)
                                    <a>Midtrans</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
{{ pluginPowerup() }} 