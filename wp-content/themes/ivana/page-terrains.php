<?php 
/*
Template name: Terrains*/
get_header();
$terrains = CTerrain::getBy();

?>
<script>
        var styles = [
            {
                "featureType": "landscape",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": 65
                    },
                    {
                        "visibility": "on"
                    },
                    {
                        "weight": 3
                    }
                ]
            },
            {
                "featureType": "poi",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": 51
                    },
                    {
                        "visibility": "simplified"
                    },
                    {
                        "weight": 3
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "visibility": "simplified"
                    },
                    {
                        "weight": 3
                    }

                ]
            },
            {
                "featureType": "road.arterial",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": 30
                    },
                    {
                        "visibility": "on"
                    },
                    {
                        "weight": 3
                    }
                ]
            },
            {
                "featureType": "road.local",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": 40
                    },
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "transit",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "administrative.province",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "labels",
                "stylers": [
                    {
                        "visibility": "on"
                    },
                    {
                        "lightness": -25
                    },
                    {
                        "saturation": -100
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                    {
                        "hue": "#ffff00"
                    },
                    {
                        "lightness": -25
                    },
                    {
                        "saturation": -97
                    }
                ]
            }
        ];

        var geocoder;
        var map;

          function gethtml_gallery(pdv){
            var _gallery = '';
            
            jQuery.each(pdv.gallery_images, function(index, value) {
					if(value ){
                        
                       var full_image_url= value.full_image_url;
                       var title = value.title;
                       _gallery +=    '<img src="'+value.full_image_url+'" alt="'+value.title+'" title="'+value.title+'">';
					}
				}); 
               
          return _gallery;
        }
     
        function render_infos_pdv(pdv){     
             
           	 var _html = '<a href="' + pdv.permalink +'" class="itemTerrain">';
			 _html = '<div class="terrainSlider">';
                        _html += gethtml_gallery(pdv);
			_html += '</div>';
			_html += '<div class="infosTerrain clearfix">';
				_html += '<span class="nom">' + pdv.title +'</span>';
				_html += '<span class="surface">' + pdv.surface +'</span>';
			_html += '</div>';
			_html += '<div class="description">';
				_html += '<p>' + pdv.content +'</p>';
			_html += '</div>';
		_html += '</a>';
            	return _html;
        }

        function geocodeAddress() {

                 var styledMap = new google.maps.StyledMapType(styles,
                    {name: "Styled Map"});

                var mapOptions = {
                    zoom: 10,
                   center: {lat: -18.906254, lng: 47.5301336},
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }

                var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                map.mapTypes.set('map_style', styledMap);
                map.setMapTypeId('map_style');


		var infowindow = new google.maps.InfoWindow();

		var geocoder = new google.maps.Geocoder();

		geocoder.geocode({'address': 'antananarivo'}, function (results, status) {
			if (status === 'OK') {

				var CurLatSearch = results[0].geometry.location.lat();
				var CurLongSearch = results[0].geometry.location.lng();

				coordonnees = JSON.parse('<?php echo get_coordonnees(); ?>');

				var bounds = new google.maps.LatLngBounds();
                                
				jQuery.each(coordonnees, function(index, value) {
					if(value.latitude && value.longitude){
						contentString = render_infos_pdv(value);

						marker = new google.maps.Marker({
							position: new google.maps.LatLng(value.latitude, value.longitude),
							map: map,
							icon: "<?php echo get_template_directory_uri() ?>" + '/images/bg-country.png'
						});

						bindInfoWindow(marker, map, infowindow, contentString);

						bounds.extend(new google.maps.LatLng(value.latitude, value.longitude));
					}
				}); 

				//map.setCenter(new google.maps.LatLng(coordonnees[0].latitude, coordonnees[0].longitude));

				map.fitBounds(bounds);

			} else {
				alert('Geocode was not successful for the following reason: ' + status);
			}
		});
        }

        function bindInfoWindow(marker, map, infowindow, description) {
            marker.addListener('click', function() {
                infowindow.setContent(description);
                infowindow.open(map, this);
            });
        }

   	function initMap() {
    		geocodeAddress();
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIZ60y28YQxA8tUkzhQV_Rz8cO-FDaebc&callback=initMap">
    </script>

<main class="main_home" id="page-interne">       

    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <h1>Tous nos terrains en ventes</h1>
                <p><?php the_content();?></p>


                <!-- Terrain liste à boucler -->
                <div class="row">
                    <?php foreach ($terrains as $terrain):
                        $gallery = CTerrain::getTerrainGallery($terrain->id);  ?>
                    <div class="col-md-4 col-sm-6">
                        <div href="<?php the_permalink(); ?>" class="itemTerrain">
                            <div class="terrainSlider">
                                    <?php  if( count($gallery) ):?>
                                        <?php  foreach($gallery as $image): ?>
                                            <?php   $full_image_url= $image['full_image_url']; $full_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160);
                                            $title = $image['title'];   ?>
                                <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                            </div>
                            <a href="<?php echo get_permalink($terrain->id); ?>" class="infosTerrain clearfix">
                                <span class="nom"><?php echo $terrain->title; ?></span>
                                <span class="surface"><?php echo $terrain->surface;?></span>
                            </a>

                            <div class="description">
                                <p><?php echo substr($terrain->content, 0,100); ?> </p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                    <div class="pagination col-md-12">
                        <div class="wp-pagenavi">
                            <?php wp_pagenavi(); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4" id="map-canvas">
            </div>

        </div>

    </div>

    <?php get_footer();?>

   
