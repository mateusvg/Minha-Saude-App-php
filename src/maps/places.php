<!DOCTYPE html>
<html>

<head>
    <title>Place Search Pagination</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script src="./index.js"></script>
    <style>
        /* Optional: Makes the sample page fill the window. */
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        #container {
            height: 100%;
            display: flex;
        }

        #sidebar {
            flex-basis: 5rem;
            flex-grow: 1;
            padding: 1rem;
            max-width: 30rem;
            height: 100%;
            box-sizing: border-box;
            overflow: auto;
        }

        #map {
            flex-basis: 0;
            flex-grow: 4;
            height: 100%;
        }

        #sidebar {
            display: flex;
            flex-direction: column;
        }

        h2 {
            font-size: 1.5rem;
            margin: 0 0 5px 0;
            flex-grow: 0;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            overflow-y: scroll;
            flex-grow: 1;
        }

        li {
            background-color: #f1f1f1;
            padding: 10px;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            font-size: 1.25rem;
            cursor: pointer;
        }

        li:nth-child(odd) {
            background-color: #fcfcfc;
        }

        button {
            width: 100%;
            padding: 1rem;
            flex-grow: 0;
            cursor: pointer;
            background: #1a73e8;
            font-size: 1.5rem;
            color: white;
            border: none;
        }

        button:hover {
            color: #c5d4f0;
        }

        button:disabled {
            background-color: #9fc1ee;
            color: #c5d4f0;
            cursor: auto;
        }
    </style>
</head>

<body>
    <div id="container">
        <div id="map"></div>
        <div id="sidebar">
            <h2>Resultados</h2>
            <ul id="places"></ul>
            <button id="more">Ver mais</button>
        </div>
    </div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDu8gwDYdD61W3MJLSzXNoOGCSK5SA6kYo&callback=initMap&libraries=places&v=weekly" async></script>


    <!--GEOLOCALIZAÇÃO  HTML5-->
    <p>Clique para buscar sua localização</p>

    <button onclick="getLocation()">Localização</button>

    <p id="demo"></p>

    <script>
        var x = document.getElementById("demo");

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {
            x.innerHTML = "Latitude: " + position.coords.latitude +
                "<br>Longitude: " + position.coords.longitude;
        }
    </script>




</body>


<script>
    // This example requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
    function initMap() {
        // Create the map.
        let pyrmont = {
            lat: -19.912998,
            lng: -43.940933
        };
        const map = new google.maps.Map(document.getElementById("map"), {
            center: pyrmont,
            zoom: 17,
            mapId: "8d193001f940fde3",
        });
        // Create the places service.
        const service = new google.maps.places.PlacesService(map);
        let getNextPage;
        const moreButton = document.getElementById("more");

        moreButton.onclick = function() {
            moreButton.disabled = true;
            if (getNextPage) {
                getNextPage();
            }
        };

        // Perform a nearby search.
        service.nearbySearch({
                location: pyrmont,
                radius: 500,
                type: "farmacias"
            },
            (results, status, pagination) => {
                if (status !== "OK" || !results) return;

                addPlaces(results, map);
                moreButton.disabled = !pagination || !pagination.hasNextPage;
                if (pagination && pagination.hasNextPage) {
                    getNextPage = () => {
                        // Note: nextPage will call the same handler function as the initial call
                        pagination.nextPage();
                    };
                }
            }
        );
    }

    function addPlaces(places, map) {
        const placesList = document.getElementById("places");

        for (const place of places) {
            if (place.geometry && place.geometry.location) {
                const image = {
                    url: place.icon,
                    size: new google.maps.Size(71, 71),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(25, 25),
                };

                new google.maps.Marker({
                    map,
                    icon: image,
                    title: place.name,
                    position: place.geometry.location,
                });

                const li = document.createElement("li");

                li.textContent = place.name;
                placesList.appendChild(li);
                li.addEventListener("click", () => {
                    map.setCenter(place.geometry.location);
                });
            }
        }
    }
</script>

</html>