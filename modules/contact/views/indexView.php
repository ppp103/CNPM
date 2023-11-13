<?php
get_header();
?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtwbVkFNzmNR5HJHz32aiH0F5Fu3pZyQc"></script>
<link href="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.css" rel="stylesheet" />
<script src="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.js"></script>
<style>
    body {
        margin: 0;
        padding: 0;
    }

    #map {
        position: relative;
        top: 0;
        bottom: 0;
        width: 100%;
    }

    #buttons {
        width: 70%;
        margin: 0 auto;
    }

    .form-group,
    .tg-contactdetail {
        margin-left: 100px;
    }

    .button {
        display: inline-block;
        position: relative;
        cursor: pointer;
        width: 20%;
        padding: 8px;
        border-radius: 3px;
        margin-top: 10px;
        font-size: 12px;
        text-align: center;
        color: #fff;
        background: #77B748;
        font-family: sans-serif;
        font-weight: bold;
    }
</style>

<div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="../User/images/parallax/bgparallax-07.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-innerbannercontent">
                    <h1>Liên hệ</h1>
                    <ol class="tg-breadcrumb">
                        <li><a href="javascript:void(0);">Trang chủ</a></li>
                        <li class="tg-active">Liên hệ</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tg-sectionspace tg-haslayout">
    <div class="container">
        <div class="row">
            <div class="tg-contactus">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-sectionhead">
                        <h2><span>Xin chào!</span>Liên hệ với chúng tôi</h2>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js"></script>
                    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css" type="text/css" />
                    <div id="map" style="width: 600px; height: 750px"></div>

                    <div id="map"></div>
                    <ul id="buttons">
                        <li id="button-vi" class="button">Tiếng Việt</li>
                        <li id="button-ru" class="button">Tiếng Nga</li>
                        <li id="button-de" class="button">Tiếng Đức</li>
                        <li id="button-es" class="button">Tiếng TBN</li>
                    </ul>
                    <script>
                        mapboxgl.accessToken = "pk.eyJ1IjoicGh1Y2ZhMiIsImEiOiJjbGZ2dGVhdGYwYXFsM2pwZnFuNHA4Z2Q2In0.Bbsw7rB-ua1Wrb8srhP3LQ";
                        const map = new mapboxgl.Map({
                            container: "map",
                            // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
                            style: "mapbox://styles/mapbox/streets-v11",
                            center: [16.05, 48],
                            zoom: 2.9,
                        });
                        var marker = new mapboxgl.Marker({
                            color: "red", //Màu của Marker là đỏ
                            draggable: true,
                            anchor: "bottom",
                        });
                        marker.setLngLat([105.85, 21.0]); //Thiết lập Marker tại hà Nội
                        marker.addTo(map);
                        //Thêm popup
                        //   var popup = new mapboxgl.Popup({
                        //     closeButton: true,
                        //     closeOnClick: false,
                        //     anchor: "right",
                        //   })
                        //     .setLngLat([105.85, 21.0])
                        //     .setHTML("<h1>Chao HN!</h1>")
                        //     .addTo(map);
                        //Thêm nút zoom
                        map.addControl(
                            new mapboxgl.NavigationControl({
                                showCompass: true,
                                showZoom: true,
                            })
                        );
                        //
                        //thêm nút xác định vị trí của tôi
                        let geolocate = new mapboxgl.GeolocateControl({
                            positionOptions: {
                                enableHighAccuracy: true,
                            },
                            trackUserLocation: true,
                        });
                        map.addControl(geolocate);
                        //thêm nút fullScreen
                        map.addControl(new mapboxgl.FullscreenControl());

                        //////ScaleControl
                        ////var scale = new mapboxgl.ScaleControl({
                        ////    maxWidth: 80,
                        ////    unit: 'imperial'
                        ////})
                        ////map.addControl(scale);

                        //////   scale.setUnit('metric');

                        //Xử lý sự kiện dblClick vào map
                        var markerdbl = new mapboxgl.Marker({
                            color: "red",
                            draggable: true,
                        });
                        map.on("dblclick", function(e) {
                            markerdbl.setLngLat([e.lngLat.lng, e.lngLat.lat]);
                            markerdbl.addTo(map);
                        });
                        map.addControl(
                            new MapboxDirections({
                                accessToken: mapboxgl.accessToken,
                            }),
                            "bottom-left"
                        );

                        document.getElementById("buttons").addEventListener("click", (event) => {
                            const language = event.target.id.substr("button-".length);
                            map.setLayoutProperty("country-label", "text-field", [
                                "get",
                                `name_${language}`,
                            ]);
                        });

                        map.on("load", function() {
                            geolocate.trigger(); // add this if you want to fire it by code instead of the button
                        });
                        geolocate.on("geolocate", locateUser);

                        function locateUser(e) {
                            //console.log("A geolocate event has occurred.");
                            //console.log("lng:" + e.coords.longitude + ", lat:" + e.coords.latitude);
                            marker.setLngLat([e.coords.longitude, e.coords.latitude])
                        }

                        function getlocate() {
                            var A = {
                                lat: e.coords.longitude,
                                lng: e.coords.latitude
                            };
                            var B = {
                                lat: 105.80292,
                                lng: 21.02801
                            };
                        }
                    </script>


                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <form class="tg-formtheme tg-formcontactus">
                        <fieldset>
                            <div class="form-group">
                                <input type="text" name="first-name" class="form-control" placeholder="Họ *">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Tên *">
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control" placeholder="Chủ đề">
                            </div>
                            <div class="form-group tg-hastextarea">
                                <textarea placeholder="Nội dung ..."></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="tg-btn tg-active">Gửi</button>
                            </div>
                        </fieldset>
                    </form>
                    <div class="tg-contactdetail">
                        <div class="tg-sectionhead">
                            <h2>Liên hệ với chúng tôi</h2>
                        </div>
                        <ul class="tg-contactinfo">
                            <li>
                                <i class="icon-apartment"></i>
                                <address> Lô # 07,Tòa Rose world, Phố # 02, AT246T Hà Nội</address>
                            </li>
                            <li>
                                <i class="icon-phone-handset"></i>
                                <span>
                                    <em>0800 12345 - 678 - 89</em>
                                    <em>+4 1234 - 4567 - 67</em>
                                </span>
                            </li>
                            <li>
                                <i class="icon-clock"></i>
                                <span>Làm việc 7 ngày một tuần từ 9am - 5pm</span>
                            </li>
                            <li>
                                <i class="icon-envelope"></i>
                                <span>
                                    <em><a href="mailto:support@domain.com">support@domain.com</a></em>
                                    <em><a href="mailto:info@domain.com">info@domain.com</a></em>
                                </span>
                            </li>
                        </ul>
                        <ul class="tg-socialicons">
                            <li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                            <li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                            <li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                            <li class="tg-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
                            <li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
<script>
    function initMap() {
        var myLatLng = {
            lat: 37.7749,
            lng: -122.4194
        };

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'San Francisco, CA'
        });
    }
</script>