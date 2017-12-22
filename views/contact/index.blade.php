<article class="page-body">

    <!--Breadcrumb Section Start-->
    <section class="breadcrumb-bg mask-overlay bg-img-3">                
        <div class="container">
            <div class="site-breadcumb">                        
                <h1 class="title-1">Contact Us</h1> 
                <ol class="breadcrumb breadcrumb-menubar">
                    <li> <a href="#"> Home </a> Contact Us </li>                             
                </ol>
            </div>  
        </div>
    </section>
    <!--Breadcrumb Section End-->

    <section class="wrapper sec-space about-us">
        <!-- About Us Starts -->
        <div class="container">
            <!-- Contact Starts -->
            <div class="row">
                <div class="col-sm-4 contact-box text-center">
                    <div class="ptb-50">
                        <i class="icon_mobile"></i>
                        <h3 class="title-1">Phone</h3>
                        <p>Phone 01: {{ !empty($kontak->telepon) ? $kontak->telepon : '-' }}</p>
                        <p>Phone 02: {{ !empty($kontak->hp) ? $kontak->hp : '-' }}</p>
                    </div>
                </div>
                <div class="col-sm-4 contact-box text-center">
                    <div class="ptb-50">
                        <i class="icon_pin_alt"></i>
                        <h3 class="title-1">address</h3>
                        <p>{{ ucwords($kontak->alamat) }}</p>
                    </div>
                </div>
                <div class="col-sm-4 contact-box text-center">
                    <div class="ptb-50">
                        <i class="icon_mail_alt"></i>
                        <h3 class="title-1">email</h3>
                        <a href="mailto:hello@femmeoutfit.com"><small>For Information : </small>hello@yourdomain.com</a><br>
                        <a href="mailto:help@femmeoutfit.com"><small>For Orders : </small>help@yourdomain.com</a>
                    </div>
                </div>
            </div>
            <!-- / Contact Ends -->

            <!-- Contact Form Starts -->
            <div class="contact-form-wrap text-center ptb-70 row">                       
                <form class="contact-form col-md-8 col-md-offset-2" method="post" action="{{ url('kontak') }}" accept-charset="UTF-8">
                    <h2 class="section-title pb-20">  <span> If you got any questions </span> <span> please do not hesitate to send us a message. </span> </h2>
                    <div class="form-group col-sm-12 form-alert"></div>
                    <div class="">
                        <div class="form-group col-sm-12">
                            <input required="" type="text" title="" data-placement="bottom" data-toggle="tooltip" value="" id="cf_name" name="name" placeholder="Your Name" class="form-control name input-your-name" data-original-title="Name is required">
                        </div>
                        <div class="form-group col-sm-12">
                            <input required="" type="text" title="" data-placement="bottom" data-toggle="tooltip" value="" id="cf_email" name="email" placeholder="Your Email" class="form-control email input-email" data-original-title="Email is required">
                        </div>
                        <div class="form-group col-sm-12">
                            <input type="text" title="" data-placement="bottom" data-toggle="tooltip" value="" id="cf_website" name="subject" placeholder="Subject" class="form-control website input-website">
                        </div>
                        <div class="form-group col-sm-12">
                            <textarea title="" data-placement="top" data-toggle="tooltip" id="cf_message" name="messageKontak" placeholder="Message" cols="10" rows="3" class="form-control message input-message" data-original-title="Message is required"></textarea>
                        </div>
                        <div class="form-group col-sm-12">
                            <button class="btn-black btn submit-btn" type="submit"> <b> Send Message </b> </button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Contact Form Ends -->

            <!-- Map Starts-->
            <div class="">
                <div class="google-map">
                    @if($kontak->lat!='0' || $kontak->lat!='0')
                        <iframe class="maplocation" width="1170" height="470" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->lat.','.$kontak->lng }}&amp;aq=&amp;sll={{ $kontak->lat.','.$kontak->lng }}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;t=m&amp;z=14&amp;output=embed"></iframe><br />
                    @else
                        <iframe class="maplocation" width="1170"  height="470" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->alamat }}&amp;aq=0&amp;oq={{ $kontak->alamat }}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;hq=&amp;hnear={{ $kontak->alamat }}&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
                    @endif
                </div>
            </div>
            <!-- / Map Ends -->
        </div>
        <!-- / About Us Ends -->
    </section>

</article>