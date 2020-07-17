

var hMap = (function () {
    let geocoder, gMap;

    function initMap () {
        console.log('map init');
        let blockMap = document.getElementById('map'),
            address = 'Bilbao, Spain',
            countries = hCountries ? hCountries : ['New York', 'Italy', 'Latvia', 'Moscow', 'Belarus', 'Ukraine', 'Germany', 'Paris', 'Austria', 'India', 'Litva', 'Estonia'],

            styles = [
                {
                    "featureType": "water",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        { hue: "#aaaaaa" },
                        { saturation: -100 }
                    ]
                },
                {
                    "stylers": [
                        { hue: "#aaaaaa" },
                        { saturation: -100 }
                    ]
                }
            ],

            mapOptions = {
                zoom: 2.9,
                disableDefaultUI: true,
                zoomControl: true,
                scrollwheel: false,
                panControl: false,
                streetViewControl: false,
                overviewMapControl: false,
                mapTypeControl: false,
                styles: styles
            };

        geocoder = new google.maps.Geocoder();

        geocoder.geocode({"address": address}, function(results, status) {
            if (status == "OK"){
                center = results[0].geometry.location;
                center = { lat: center.lat(), lng: center.lng() };
                mapOptions.center = { lat: center.lat, lng: center.lng };
                gMap = new google.maps.Map(blockMap, mapOptions);
                
                $.each(countries, function(index, item) {               
                    geocode(item, function(center) {
                        let infowindow = new google.maps.InfoWindow(),
                            marker = new google.maps.Marker({
                                position: center,
                                map: gMap
                            });
                        
                        switch (item) {
                            case 'Нью-Йорк': item = 'Америка'; break;
                            case 'Москва': item = 'Россия'; break;
                            case 'New York': item = 'United States'; break;
                            case 'Moscow': item = 'Russia'; break;

                        }

                        google.maps.event.addListener(marker, "click", function() {
                            infowindow.setContent(
                                `<div>
                                    <strong>${item}</strong>
                                </diV>`
                            );
                            infowindow.open(map, this);
                        });
                    
                    });
                });
            }
        });
    }

    function geocode(address, callback) {
        geocoder.geocode({"address": address}, function(results, status) {
            if (status == "OK"){
                center = results[0].geometry.location;
                center = { lat: center.lat(), lng: center.lng() };
                callback(center);
                console.log(results[0]);
            }
        })
    }

    return {
        initMap: initMap
    }
})();

