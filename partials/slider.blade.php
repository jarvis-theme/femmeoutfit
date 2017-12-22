<section class="section-one clearfix">  
    <div class="">
        <div class="single-slider-1 owl-carousel owl-dots-2 owl-nav-1">
            @if(slideshow())
               @foreach(slideshow() as $key=> $slide)
                <div class="item">
                    {{HTML::image(slide_image_url($slide->gambar), $slide->title, array('class'=>''))}}
                    <div class="slide-info">
                        <div class="caption">
                            <h2 class="main-title" data-animation-in="fadeInRight"> {{$slide->title}} </h2>
                            <p data-animation-in="fadeInRight"> {{$slide->text}}</p>
                            <div class="buttons" data-animation-in="rotateIn"><a class="btn btn-black small-btn" href="{{filter_link_url($slide->url)}}">More Details</a></div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
