<!-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
<!-- <script data-main="{{url(dirTemaToko().'celebandco/assets/js/app-main')}}" src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.1.22/require.min.js"></script>  -->
<script src="{{url(dirTemaToko().'celebandco/assets/js/jquery.2.2.3.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready( function(){ 
        $(".bingoSearchTop").each( function(){
            $(".searchBoxTop").hover(function(){
                $("#bingoSearchbox .bingoSearch").focus();
            });
            $(".bingoSearchIcon").click( function(){
                $(".searchBoxTop").toggleClass("active");
                $(".searchClose").toggleClass("active");
                $(".searchOverLayer").toggleClass("active");
            });
            $(".searchClose").click( function(){
                var hasClass = $(this).hasClass('active');
                if(hasClass){
                    $(".searchBoxTop").removeClass("active");
                    $(".searchClose").removeClass("active");
                    $(".searchOverLayer").removeClass("active");
                }
            });
            $(".searchOverLayer").click( function(){
                var hasClass = $(this).hasClass('active');
                if(hasClass){
                    $(".searchBoxTop").removeClass("active");
                    $(".searchClose").removeClass("active");
                    $(".searchOverLayer").removeClass("active");
                }
            });
        });
        $(".bingoSearchTop").each( function(){
            $('#btnMenuMobile').on("click", function (e) {
                e.preventDefault();
                $('body').toggleClass("menuMobileActive");
            });
            $('.btnMenuClose').on("click", function (e) {
                e.preventDefault();
                $('body').removeClass("menuMobileActive");
            });
            $('.menuMobileOverlay').on("click", function (e) {
                e.preventDefault();
                $('body').removeClass("menuMobileActive");
            });
        }); 
    });
</script>

<script async="" src="//cdn.shopify.com/s/assets/shop_events_listener-4c5801cae3452eff0ededa0ac07d432c1240b78b7e11282cceb3c3213951104b.js"></script>

<style type="text/css">.fancybox-margin{margin-right:17px;}</style>
<!-- <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/30/1a/intl/id_ALL/common.js"></script>
<script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/30/1a/intl/id_ALL/util.js"></script>
<script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/30/1a/intl/id_ALL/stats.js"></script> -->
<script src="//cdn.shopify.com/s/assets/themes_support/option_selection-ea4f4a242e299f2227b2b8038152223f741e90780c0c766883939e8902542bda.js" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/assets/themes_support/api.jquery-0ea851da22ae87c0290f4eeb24bc8b513ca182f3eb721d147c009ae0f5ce14f9.js" type="text/javascript"></script>
<script src="{{url(dirTemaToko().'celebandco/assets/js/bootstrap.js')}}" type="text/javascript"></script>
<script src="{{url(dirTemaToko().'celebandco/assets/js/vendor.js')}}" type="text/javascript"></script>
<!-- <script src="//cdn.shopify.com/s/files/1/2027/9309/t/12/assets/vendor.js?14124462035515045251" type="text/javascript"></script> -->
<script src="{{url(dirTemaToko().'celebandco/assets/js/handlebars.js')}}" type="text/javascript"></script>
<script src="{{url(dirTemaToko().'celebandco/assets/js/fastclick.js')}}" type="text/javascript"></script>
<script src="{{url(dirTemaToko().'celebandco/assets/js/fancybox.js')}}" type="text/javascript"></script>
<script src="{{url(dirTemaToko().'celebandco/assets/js/scrollto.js')}}" type="text/javascript"></script>
<script src="{{url(dirTemaToko().'celebandco/assets/js/history.js')}}" type="text/javascript"></script>
<script src="{{url(dirTemaToko().'celebandco/assets/js/countdown.js')}}" type="text/javascript"></script>
<script src="{{url(dirTemaToko().'celebandco/assets/js/ion.rangeslider.js')}}" type="text/javascript"></script>
<script src="{{url(dirTemaToko().'celebandco/assets/js/master.js')}}" type="text/javascript"></script>
<script src="{{url(dirTemaToko().'celebandco/assets/js/bingo.js')}}" type="text/javascript"></script>
<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQxR9btB02y_hWZqtAt6BTh6kHDtWNdbs&callback=initMap"></script> -->
