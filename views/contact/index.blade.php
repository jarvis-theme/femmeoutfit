    <section id="bingoBreadcrumbs">
        <div id="section-bingo-breacrumb-image">
            <div class="bingoBreadcrumbImage">
                <img class="img-responsive" alt="breadcrumb" src="{{ url(dirTemaToko().'celebandco/assets/img/breadcrumb.jpg') }}">
            </div>
            <div class="container">
                <nav class="bingoBreadcrumbWrap">
                    <div class="breadcrumbTitle">
                        <h3>Contact Us</h3>
                    </div>
                    <ol class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <a href="/" title="Back to the frontpage" itemprop="item">
                                <span itemprop="name">Home</span>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li class="active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <span itemprop="item"><span itemprop="name">Contact us</span></span>
                            <meta itemprop="position" content="2">
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section id="pageContent">
        <div class="container">
            <div class="pageContainer">
                <div id="shopify-section-bingo-template-contact" class="shopify-section">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="contactInformation">
                                <div class="boxInformation one">
                                    <div class="boxInformationImage">
                                        <img class="img-responsive" alt="address" src="{{ url(dirTemaToko().'celebandco/assets/img/contact_icon1.png') }}">
                                    </div>
                                    <div class="boxInformationContent">
                                        <h3 class="infoTitle">Address</h3>
                                        <div class="infoDesc">{{ ucwords($kontak->alamat) }}</div>
                                    </div>
                                </div>
                                <div class="boxInformation two">
                                    <div class="boxInformationImage">
                                        <img class="img-responsive" alt="phone" src="{{ url(dirTemaToko().'celebandco/assets/img/contact_icon2.png') }}">
                                    </div>
                                    <div class="boxInformationContent">
                                        <h3 class="infoTitle">Phone</h3>
                                        <div class="infoDesc">
                                            <p>Phone: {{ !empty($kontak->telepon) ? $kontak->telepon : '-' }}</p>
                                            <p>Mobile: {{ !empty($kontak->hp) ? $kontak->hp : '-' }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="boxInformation three">
                                    <div class="boxInformationImage">
                                        <img class="img-responsive" alt="email" src="{{ url(dirTemaToko().'celebandco/assets/img/contact_icon3.png') }}">
                                    </div>
                                    <div class="boxInformationContent">
                                        <h3 class="infoTitle">Email</h3>
                                        <div class="infoDesc">
                                            <p>{{ @$kontak->email }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="contactMap bingoGoogleMap">
                                <div id="googleMapContact" class="contactGoogleMap">
                                    @if($kontak->lat!='0' || $kontak->lat!='0')
                                        <!-- <iframe class="maplocation" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->lat.','.$kontak->lng }}&amp;aq=&amp;sll={{ $kontak->lat.','.$kontak->lng }}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;t=m&amp;z=14&amp;output=embed"></iframe><br /> -->
                                    @else
                                        <!-- <iframe class="maplocation" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->alamat }}&amp;aq=0&amp;oq={{ $kontak->alamat }}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;hq=&amp;hnear={{ $kontak->alamat }}&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /> -->
                                    @endif
                                </div>
                                <div class="googleOverPlay"></div>
                            </div>
                            
                        </div>
                        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <div class="pageContact">
                                <h1 class="bingoContactTitle">Contact us</h1>
                                <div class="pageContent">
                                    <div class="rte">
                                        
                                    </div>
                                    <div class="formContactUs">
                                        <form method="post" action="{{ url('kontak') }}" id="contact_form" class="contact-form" accept-charset="UTF-8">
                                            <div class="formContent">
                                                <div class="form-group">
                                                    <label for="ContactFormName" class="hidden-label">Name</label>
                                                    <input type="text" id="ContactFormName" class="form-control" name="name" placeholder="Name" value="{{ Input::old('name') }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="ContactFormEmail" class="hidden-label">Email</label>
                                                    <input type="email" id="ContactFormEmail" class="form-control" name="email" placeholder="Email" value="{{ Input::old('email') }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="ContactFormMessage" class="hidden-label">Message</label>
                                                    <textarea rows="10" id="ContactFormMessage" class="form-control" name="messageKontak" placeholder="Message">{{ Input::old('messageKontak') }}</textarea>
                                                </div>
                                                <div class="form-button">
                                                    <input type="submit" class="btn btnbingoOne" value="Send Message">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>