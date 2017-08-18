<!-- <script data-main="{{url(dirTemaToko().'celebandco/assets/js/app-main')}}" src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.1.22/require.min.js"></script>  -->
<script src="//cdn.shopify.com/s/files/1/2027/9309/t/12/assets/jquery.2.2.3.js?14124462035515045251" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/assets/themes_support/api.jquery-0ea851da22ae87c0290f4eeb24bc8b513ca182f3eb721d147c009ae0f5ce14f9.js" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/2027/9309/t/12/assets/vendor.js?14124462035515045251" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/assets/themes_support/option_selection-ea4f4a242e299f2227b2b8038152223f741e90780c0c766883939e8902542bda.js" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/2027/9309/t/12/assets/bootstrap.js?14124462035515045251" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/2027/9309/t/12/assets/handlebars.js?14124462035515045251" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/2027/9309/t/12/assets/fastclick.js?14124462035515045251" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/2027/9309/t/12/assets/fancybox.js?14124462035515045251" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/2027/9309/t/12/assets/scrollto.js?14124462035515045251" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/2027/9309/t/12/assets/history.js?14124462035515045251" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/2027/9309/t/12/assets/countdown.js?14124462035515045251" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/2027/9309/t/12/assets/ion.rangeslider.js?14124462035515045251" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/2027/9309/t/12/assets/master.js?14124462035515045251" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/2027/9309/t/12/assets/bingo.js?14124462035515045251" type="text/javascript"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQxR9btB02y_hWZqtAt6BTh6kHDtWNdbs&callback=initMap"></script>

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
    });
</script>
<script type="text/javascript">
    function initMap() {
        var uluru = {lat: 45.420469, lng: -75.692782};
        var map = new google.maps.Map(document.getElementById('googleMapContact'), {
            zoom: 12,
            center: uluru,
            zoomControlOptions: {
                position: google.maps.ControlPosition.LEFT_BOTTOM
            },
            styles: [
                {elementType: 'geometry', stylers: [{color: '#edeae2'}]},
                {elementType: 'labels.text.fill', stylers: [{color: '#252525'}]},
                {
                    featureType: 'poi.park',
                    elementType: 'geometry',
                    stylers: [{color: '#d2dfc5'}]
                },
                {
                    featureType: 'road',
                    elementType: 'geometry',
                    stylers: [{color: '#a0a0a0'}]
                },
                {
                    featureType: 'water',
                    elementType: 'geometry',
                    stylers: [{color: '#99b3cc'}]
                }
            ],
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
    </script>