
var myLatLng = { lat: 0.0, lng: 0.0 };
var mapOptions = {
    center: myLatLng,
    zoom: 1,
    mapTypeId: google.maps.MapTypeId.ROADMAP
};

// Hide result box
document.getElementById("output").style.display = "none";

// Create/Init map
var map = new google.maps.Map(document.getElementById('google-map'), mapOptions);

// Create a DirectionsService object to use the route method and get a result for our request
var directionsService = new google.maps.DirectionsService();

// Create a DirectionsRenderer object which we will use to display the route
var directionsDisplay = new google.maps.DirectionsRenderer();

// Bind the DirectionsRenderer to the map
directionsDisplay.setMap(map);


// Define calcRoute function
function calcRoute() {
    //create request
    var request = {
        origin: document.getElementById("location-1").value,
        destination: document.getElementById("location-2").value,
        travelMode: google.maps.TravelMode.DRIVING,
        unitSystem: google.maps.UnitSystem.METRIC
    }

    // Routing
    directionsService.route(request, function (result, status) {
        if (status == google.maps.DirectionsStatus.OK) {

            //Get distance and time            
            
            $("#output").html("<div class='result-table'> Driving distance: " + result.routes[0].legs[0].distance.text + ".<br />Duration: " + result.routes[0].legs[0].duration.text + ".</div>");
            document.getElementById("output").style.display = "block";

            //display route
            directionsDisplay.setDirections(result);
        } else {
            //delete route from map
            directionsDisplay.setDirections({ routes: [] });
            //center map in London
            map.setCenter(myLatLng);

            //Show error message           
           
            alert("Can't find road! Please try again!");
            clearRoute();
        }
    });

}

// Clear results

function clearRoute(){
    document.getElementById("output").style.display = "none";
    document.getElementById("location-1").value = "";
    document.getElementById("location-2").value = "";
    directionsDisplay.setDirections({ routes: [] });
    
}

// Create autocomplete objects for all inputs

var options = {
    types: ['(cities)']
}


var input1 = document.getElementById("location-1");
var autocomplete1 = new google.maps.places.Autocomplete(input1, options);

var input2 = document.getElementById("location-2");
var autocomplete2 = new google.maps.places.Autocomplete(input2, options);
////////////////////////////////////////////////////////
//global map variable;
//global map variable;
$(window).ready(function () {
    initialize();
    $('#calculateform .submitbtn').on({
        click: getPriceAndDistance
    });    
    });
    
    function getPriceAndDistance(event) { 
    event.preventDefault();
    
    //validating Input
    var state = 1;
    var form = $('#calculateform');
    var validateable = form.find('input');
    validateable.each(function () {
        elem = $(this);
        $(elem).removeClass('invalid');
        if (elem.val().length < 2) {
            $(elem).addClass('invalid');
            state = 0;
        }
    })
    
    //doing the actual stuff
    if(state == 1)
    {
        var from = form.find('#from').val().trim().replace(/[^a-z0-9\s]/gi, '');
        var to = form.find('#to').val().trim().replace(/[^a-z0-9\s]/gi, '');
        var travelMode = form.find('#travelMode option:selected').val();
        var travelModeText = form.find('#travelMode option:selected').text();
        var price = Number(form.find('#travelMode option:selected').attr('price')).valueOf();
    
        var err = '';
        var locationFrom;
        var locationTo;
    
    
        $('#map-canvas').html('');                
        var mapOptions = {
            center: new google.maps.LatLng(-11659.99, 36490.01),
            zoom: 5,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"),
        mapOptions);
    
        $(form).find('p.msg').remove();
        $(form).find('p.loading').remove();
        loading = '<p class="loading">Loading Please Wait...<p>';
        $(form).append(loading);
    
    
        //initiate gecoder
        geocoder = new google.maps.Geocoder();
    
        if(geocoder)
        {
    
    
            geocoder.geocode({ 'address': from }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    locationFrom = results[0].geometry.location;
                    if (locationFrom) 
                    {
                        geocoder.geocode({ 'address': to }, function (results, status) {
                            if (status == google.maps.GeocoderStatus.OK) {
    
                                locationTo = results[0].geometry.location;
                                if (locationTo) {
                                    updateMap();
                                }
                                else {
                                    err = '<p class="invalid msg">Destination location is not found.<p>';
                                    $(form).append(err);                        
                                }
    
                            }
                            else {
                                $(form).find('.loading').remove();
                                err = '<p class="invalid msg">Geocoding failed due to following reasons ' + status + '.<p>';
                                $(form).append(err);
                            }
                        });
    
                    }
                    else{
                        err = '<p class="invalid msg">Starting location is not found.<p>';
                        $(form).append(err);                        
                    }
                }
                else {
                    //err = '<p class="invalid msg">Geocoding failed due to following reasons ' + status + '.<p>';
                    err = '<p class="invalid msg">Sorry there seems to be some problem.<p>';
                    errmsg = '<p class="invalid msg">Please check the location that you entered and try again.<p>';
                    $(form).append(err);
                    $(form).append(errmsg);
                }
            });
    
    
    
    
            function updateMap()
            {
    
                latlngCen = new google.maps.LatLng((locationFrom.lat()+locationTo.lat())/2,(locationFrom.lng()+locationTo.lng())/2);                
                map.panTo(latlngCen);
                map.setZoom(1);
    
                directionsService = new google.maps.DirectionsService();
                directionsDisplay = new google.maps.DirectionsRenderer();                
                directionsDisplay.setMap(map);
    
                var req = {
                    origin:locationFrom,
                    destination:locationTo
                }
                if (travelMode == 'driving')
                {
                    req.travelMode = google.maps.DirectionsTravelMode.DRIVING;
                }
                else if (travelMode == 'transit')
                {
                    req.travelMode = google.maps.DirectionsTravelMode.TRANSIT;
                }
    
                directionsService.route(req, function (response, status) {
                    if (status == google.maps.DirectionsStatus.OK) {                        
                        directionsDisplay.setDirections(response);
                        if (response.routes[0].legs[0].distance) {
                            console.log('here');
                            var d = response.routes[0].legs[0].distance.value / 1609;
    
                            var estTotal = d * price;
    
                            $(form).find('.loading').remove();
                            dText = "The distance between <strong>" + from + "</strong> and <strong>" + to + "</strong> is <strong>" + d.toFixed(2) + " miles</strong>";
                            pText = "The estimated price via <strong>" + travelModeText + "</strong> is KE <strong> " + estTotal.toFixed(2) + "</strong>";
                            $(form).prepend('<p class="valid msg">' + pText + '.</p>');
                            $(form).prepend('<p class="valid msg">' + dText + '.</p>');
    
                            $('html, body').animate({
                                scrollTop: 240
                            }, 200);
    
                        }
                        else {
                            $(form).find('.loading').remove();
                            err = '<p class="invalid msg">Sorry there seems to be some problem. You can contact us <a href="contact.html">here</a>.</p>'
                            $(form).append(err);
                        }
                    }
                });
    
    
    
            }
    
        }
    }
    
    
    };
    
    function initialize() {
    // declaring map variable;
    var mapOptions = {
      center: new google.maps.LatLng(-11659.99, 36490.01),
      zoom: 5,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map;
    map = new google.maps.Map(document.getElementById("map-canvas"),
        mapOptions);
    };
    
    //google.maps.event.addDomListener(window, 'load', initialize);