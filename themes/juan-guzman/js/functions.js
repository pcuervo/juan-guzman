var $=jQuery.noConflict();

/*------------------------------------*\
	#GENERAL FUNCTIONS
\*------------------------------------*/

/**
 * Estilo personalizado para InfoWindow de GMap
**/
function styleInfoWindow(){
    var iwOuter = $('.gm-style-iw');
    var iwBackground = iwOuter.prev();
    iwBackground.children(':nth-child(2)').css({'display' : 'none'});
    iwBackground.children(':nth-child(4)').css({'display' : 'none'});
    iwBackground.children(':nth-child(3)').find('div').children().css({'box-shadow': 'rgba(72, 181, 233, 0.6) 0px 1px 6px', 'z-index' : '1'});

}// styleInfoWindow



/*------------------------------------*\
    #MAP FUNCTIONS
\*------------------------------------*/

/**
 * Crea mapa sin marcadores
 * @param bool isSatellite
 * @return obj map
**/
function createEmptyMap( isSatellite ){

    var map = new google.maps.Map(document.getElementById('mapa'), {
        zoom: 18,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControl: false,
        streetViewControl: false,
        panControl: false,
        scrollwheel: false,
        zoomControlOptions: {
            position: google.maps.ControlPosition.RIGHT_BOTTOM
        }
    });

    if( isSatellite ) {
        map.setMapTypeId(google.maps.MapTypeId.SATELLITE);
        return map;
    }

    var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#dcdcdc"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#dcdcdc"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];
    var styledMap = new google.maps.StyledMapType( styles, { name: "Styled Map" } );
    map.mapTypes.set('map_style', styledMap);
    map.setMapTypeId('map_style');

    return map;

}// createEmptyMap

function createMarker( mapa, lat, lng, decada ){

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng( lat, lng ),
        map: mapa,
        category: decada,
        icon: themepath + 'img/marker-' + decada + '.png'
    });

    return marker;

}// createMarker

function addAllMarkers(){

    var mapa = createEmptyMap( false );
    var markers = [];
    // allPhotosInfo viene de WP con wp_localize_script
    var photosInfo = $.parseJSON( allPhotosInfo );
    $.each( photosInfo, function( photoSlug, info ){

        // Saltar foto si no tiene ubicación
        if( info.lat === '' ) return true;

        var marker = createMarker( mapa, info.lat, info.lng, info.decada );
        createInfoWindow( mapa, marker, info.permalink, info.img_url );
        markers.push( marker );
    });

    addDecadaFilter( mapa, markers );
    autoCenter( mapa, markers );

}// addAllMarkers

function showSingleMap( lat, lng, heading, isAerial, decada ){

    var mapa = createEmptyMap( isAerial );
    var markers = [ createMarker( mapa, lat, lng, decada ) ];
    autoCenter( mapa, markers );

    if ( 1 != isAerial ) displayStreetViewImage( '.street-view-img', lat, lng, 640, 320, heading );

}// showSingleMap

function addDecadaFilter( mapa, markers ){

    $('.filtro-decada a').click(function(){
        var decada = $(this).data('decada');
        $('.filtro-decada a').removeClass('active');
        $(this).addClass('active');
        filterMarkersDecada( mapa, markers, decada );
    });

}// addDecadaFilter

function filterMarkersDecada( mapa, markers, decada ){

    if( decada == 'todas' ){
        showAllMarkers( mapa, markers );
        return;
    }
    var filteredResult = markers.filter(function(obj) {
        return ( obj.category == decada );
    });
    $.each( markers, function ( index, marker ) {
        marker.setVisible(false);
    });
    var visible_markers = [];
    $.each(filteredResult, function ( index, marker ) {
        marker.setVisible(true);
        visible_markers.push(marker);
    });
    autoCenter( mapa, visible_markers );

}// filterMarkersDecada

function showAllMarkers( mapa, markers ){

    $.each(markers, function (index, marker) {
        marker.setVisible(true);
    });
    autoCenter( mapa, markers );

}// showAllMarkers

function autoCenter( map, markers ) {

    var bounds = new google.maps.LatLngBounds();
    $.each(markers, function (index, marker) { bounds.extend(marker.position); });
    map.fitBounds(bounds);

    var listener = google.maps.event.addListener(map, "idle", function() {
        if (map.getZoom() > 16) map.setZoom(16);
        google.maps.event.removeListener(listener);
    });

} // autoCenter

function createInfoWindow( mapa, marker, permalink, imgUrl ){

    var infoWindows = new google.maps.InfoWindow({ maxWidth: 200 });
    infoWindows.setContent( '<a class="[ text-center block ]" href="' + permalink + '"><img class="[ info-window__img ]" src="' + imgUrl + '">Ver foto<a/>' );

    google.maps.event.addListener( marker, 'click', function() {

        infoWindows.open( mapa, this );
        styleInfoWindow();

     });

}// createInfoWindow

function displayStreetViewImage( el, lat, lng, w, h, heading ){

    var streeViewImg = '<img class="[ img-responsive center-block ]"" src="https://maps.googleapis.com/maps/api/streetview?size=' + w + 'x' + h + '&location=' + lat + ',' + lng + '&heading=' + heading + '&fov=120&pitch=-0.76&key=AIzaSyAJU0RHKbqFVKa02obBkEMlaMnCu1gndDo">';
    $( el ).html( streeViewImg );

}// displayStreetViewImage

/*------------------------------------*\
	#AJAX FUNCTIONS
\*------------------------------------*/





/*------------------------------------*\
	#GET / SET FUNCTIONS
\*------------------------------------*/

/**
 * Get header's height
 */
function getElementHeight(element){
    return $(element).outerHeight();
}// getHeaderHeight

/**
 * Get the scrolled pixels in Y axis
 */
function getScrollY() {
    return $(window).scrollTop();
}// getScrollY



/*------------------------------------*\
    #TOGGLE FUNCTIONS
\*------------------------------------*/

/**
 * Toggle action buttons
 */
 function toggleElementOnSscroll(elementTrigger, elementToToggle){
    var elementHeight = getElementHeight(elementTrigger);
    console.log(elementHeight);
    //Scrolled pixels in Y axis
    var sy = getScrollY();
    //Compare the two numbers, when they are the same or less
    //add fixed class to the element.
    if ( sy >= elementHeight ) {
        $(elementToToggle).addClass('toggled');
    } else {
        $(elementToToggle).removeClass('toggled');
    }
}// toggleActionButtons