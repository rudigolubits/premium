<footer>

                            <div class="footer">
                                <div class="container">
                                     <div class="row">

                                <div class="footer footer_info">
                                    <div class="footer_text">
                                        <h2 class="footer_em">
                                           PREMIUMWEIN.AT
                                        </h2>
                                        <p>Unsere Weinprofis haben Ihnen hier die Hochkaräter unter den Weinen zu einem einzigartigen Sortiment zusammengestellt. Profitieren Sie von unseren Angeboten und lassen Sie sich von der Welt der Premiumweine verführen.
                                        </p>
                                    </div>

                                <div class="footer_width"></div>
                                    <div class="footer_links">
                                        <div class="">
                                            <ul class="">
                                                <li class="footer_em">INFORMATIONEN</li>
                                                <li><a href="#">Impressum</a></li>
                                                <li><a href="#">Versandkosten</a></li>
                                                <li><a href="#">Rückgaberecht</a></li>
                                                <li><a href="#">Haftungsausschluß</a></li>
                                            </ul>
                                        </div>

                                        <div class="">
                                            <ul>
                                                <li class="footer_em">SUPPORT</li>
                                                <li><a href="#">Login</a></li>
                                                <li><a href="#">Registrierung</a></li>
                                                <li><a href="#">Datenschutz</a></li>
                                                <li><a href="#">AGB</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>


                                </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </footer>

            </div>
        </div>

        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJZW9_L-DI5FGVR6YBHPBZUiZRFQQ_wAU"></script>
        <script type="text/javascript">
            var map;

            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // Disable mouse scroll
                    scrollwheel: false,

                    // How zoomed in you want the map to start at (always required)
                    zoom: 12,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(47.981251, 16.848130),

                    // How you would like to style the map.
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [[{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"color":"#f7f1df"}]},{"featureType":"landscape.natural","elementType":"geometry","stylers":[{"color":"#d0e3b4"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.medical","elementType":"geometry","stylers":[{"color":"#fbd3da"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#bde6ab"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffe15f"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#efd151"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"black"}]},{"featureType":"transit.station.airport","elementType":"geometry.fill","stylers":[{"color":"#cfb2db"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#a2daf2"}]}]]
                };

                // Get the HTML DOM element that will contain your map
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(47.967270, 16.794662),

                    map: map,
                    title: 'Snazzy!'
                });
            }

            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);

            // Keep the map centered when resize
            google.maps.event.addDomListener(window, 'resize', function() {
            var center = map.getCenter();
            google.maps.event.trigger(map, 'resize');
            map.setCenter(center);
            });

        </script>
