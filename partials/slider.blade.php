
<section class="bingoSlideshow">
    <div data-section-id="1" data-section-type="bingoSlideshowSection">
      @if(slideshow())
        <div class="bingoSlideshowWrapper">
            <button type="button" class="hidden btnssPause" data-id="1">
                <span class="btnssPauseStop">
                    <i class="fa fa-play"></i>
                    <span class="iconText">Play</span>
                </span>
                <span class="btnssPausePlay">
                    <i class="fa fa-pause"></i>
                    <span class="iconText">Pause</span>
                </span>
            </button>
            <div id="bingoSlideshows1" class="bingo--slideshow {{slideshow()?'':'bingoSliderLoading'}}" 
                class="bingo--slideshow slick-initialized slick-slider" data-autoplay="true" data-speed="30000" data-navigation="true" data-pagination="true">
                  @foreach(slideshow() as $key=> $slide)
                    <div class="bingossSlide bingossSlide{{$key}}">
                      <a href="{{filter_link_url($slide->url)}}" class="bingossLink">
                          <!-- <div class="video-loader"></div> -->
                          <button type="button" class="btnssVideoControl btnssVideoControlClose" data-controls="bingossVideo{{$key}}">
                              <i class="fa fa-close"></i>
                              <span class="iconText"></span>
                          </button>
                          <!-- <div id="bingossVideo1" class="bingossVideo"
                              data-id=""
                              data-type=""
                              data-slideshow="bingoSlideshows1"></div> -->
                          <div class="bingossImage" data-image="">
                              <div class="bingossNoImagePlaceholder">
                                  {{HTML::image(slide_image_url($slide->gambar), $slide->title, array('class'=>'img-responsive'))}}
                              </div>
                          </div>

                          <div class="bingossCaption caption-left">
                              <div class="bingossCaptionContent">
                                  <div class="container">
                                          <h2 >asd</h2>
                                          <p >asd</p>
                                        <a class="btn btnbingoSlider" href="jk">op</a>
                                     
                                        <div class="btnssVideoControlPlayWrap bingossHasCaption">
                                            <button type="button" class="btnssVideoControl btnssVideoControlPlay" data-controls="bingossVideo1">
                                                <span class="iconText">l</span>
                                            </button>
                                        </div>
                                  </div>
                              </div>
                          </div>
                      </a>
                    </div>
                  @endforeach
            </div>
        </div>
      @else
        <div class="alert alert-warning text-center">
        </div>
      @endif

    </div>
</section>

<div id="shopify-section-1499055181176" class="shopify-section bingoFramework">
  <div class="maxHomeCollections">
    <div class="container">
      <div class="maxCollectionWrap" style="margin-top: -98px;">
        <div class="owlCarouselPlay">
          <div class="owl-carousel owl-theme" data-nav="true" data-autoplay="false" data-autospeed="10000" data-speed="300" data-columnone="3" data-columntwo="3" data-columnthree="2" data-columnfour="2" data-columnfive="1" style="opacity: 1; display: block;">
            <div class="owl-wrapper-outer">
              <div class="owl-wrapper" style="width: 3200px; left: 0px; display: block; transition: all 1000ms ease; transform: translate3d(0px, 0px, 0px);">
                @foreach(list_koleksi() as $key=>$koleksi)
                <div class="owl-item active" style="width: 400px;">
                  <div class="item">
                    <div class="maxBoxCollection">
                      <div class="max-collection--image">
                        <img src="{{koleksi_image_url($koleksi->gambar)}}" class="img-responsive" alt="{{$koleksi->nama}}" />
                      </div>
                      <div class="max-collection--caption">
                        <h3 class="max-collection--title">
                          <a href="{{koleksi_url($koleksi)}}">{{$koleksi->nama}}</a>
                        </h3>
                        <a class="max-collection--button" href="/collections/frontpage">Shop now <i class="icofont icofont-bubble-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach

              </div>
            </div>
                        
            <!-- <div class="owl-controls clickable">
              <div class="owl-pagination">
                <div class="owl-page active">
                  <span class=""></span>
                </div>
                <div class="owl-page">
                  <span class=""></span>
                </div>
              </div>
              <div class="owl-buttons">
                <div class="owl-prev">prev</div>
                <div class="owl-next">next</div>
              </div>
            </div> -->

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

