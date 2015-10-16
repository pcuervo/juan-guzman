var $=jQuery.noConflict();

/*------------------------------------*\
	#GENERAL FUNCTIONS
\*------------------------------------*/

/**
 * This is an example description
 * @param type name
 * @return type name
**/
function exampleFunction( ){
	
}// exampleFunction



/*------------------------------------*\
    #MAP FUNCTIONS
\*------------------------------------*/

function createSingleMap(){

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

    return map;
}// initTestMap

function createSingleMarker( mapa, lat, lng ){

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng( lat, lng ),
        map: mapa
    });

    return marker;
}// createSingleMarker

function autoCenter(map, markers) {
    //  Crea un nuevo limite
    var bounds = new google.maps.LatLngBounds();
    //  Itera todos los marcadores
    $.each(markers, function (index, marker) { bounds.extend(marker.position); });
    //  Mete los límites en el mapa
    map.fitBounds(bounds);
    var listener = google.maps.event.addListener(map, "idle", function() {
    if (map.getZoom() > 17) map.setZoom(17);
        google.maps.event.removeListener(listener);
    });
} // autoCenter

function displayStreetViewImage( el, lat, lng, w, h ){
    //$.get( "https://maps.googleapis.com/maps/api/streetview?size=600x300&location=" + lat + "," + lng, function( data ) {
    // $.get( "https://maps.googleapis.com/maps/api/streetview?size=600x300&location=46.414382,10.013988&heading=151.78&pitch=-0.76&key=AIzaSyAJU0RHKbqFVKa02obBkEMlaMnCu1gndDo", function( data ) {
    //     //console.log( data )
    // });
    var streeViewImg = '<img src="https://maps.googleapis.com/maps/api/streetview?size=' + w + 'x' + h + '&location=' + lat + ',' + lng + '&heading=151.78&pitch=-0.76&key=AIzaSyAJU0RHKbqFVKa02obBkEMlaMnCu1gndDo">';
    console.log( streeViewImg );
    $( el ).html( streeViewImg );
}// displayStreetViewImage

/*------------------------------------*\
	#AJAX FUNCTIONS
\*------------------------------------*/

/*------------------------------------*\
	#GET / SET FUNCTIONS
\*------------------------------------*/

