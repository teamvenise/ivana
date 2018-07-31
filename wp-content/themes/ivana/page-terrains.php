<?php 
/*
Template name: Terrains*/
get_header();
$terrains = CTerrain::getBy(9);

?>
   <style>
      
      /* The location pointed to by the popup tip. */
      .popup-tip-anchor {
        height: 0;
        position: absolute;
        /* The max width of the info window. */
        width: 200px;
      }
      /* The bubble is anchored above the tip. */
      .popup-bubble-anchor {
        position: absolute;
        width: 100%;
        bottom: /* TIP_HEIGHT= */ 8px;
        left: 0;
        text-align:center;
      }
      .gmnoprint {
        z-index:999;
      }
      
      .popup-bubble-anchor span.prix_du_m{
          display:block;
      }
      /* Draw the tip. */
      .popup-bubble-anchor::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        /* Center the tip horizontally. */
        transform: translate(-50%, 0);
        /* The tip is a https://css-tricks.com/snippets/css/css-triangle/ */
        width: 0;
        height: 0;
        /* The tip is 8px high, and 12px wide. */
        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        border-top: /* TIP_HEIGHT= */ 8px solid white;
      }
      /* The popup bubble itself. */
      .popup-bubble-content {
        position: absolute;
        top: 0;
        left: 0;
        transform: translate(-50%, -100%);
        /* Style the info window. */
        background-color: white;
        padding: 5px;
        border-radius: 5px;
        font-family: sans-serif;
        overflow-y: auto;
        max-height: 60px;
        box-shadow: 0px 2px 10px 1px rgba(0, 0, 0, 0.15);
      }
    </style>



<main class="main_home" id="page-interne">       

<div class="container">
    <div class="row">

        <div class="col-md-8 terrain-left">
            <h1><?php echo the_title();?></h1>
            <p><?php //the_content();?></p>


            <!-- Terrain liste -->
            <div class="row">
                <?php foreach ($terrains as $terrain):
                    $gallery = CTerrain::getTerrainGallery($terrain->id);  ?>
                <div class="col-md-4 col-sm-6">
                    <div href="<?php the_permalink(); ?>" class="itemTerrain">
                        <div class="terrainSlider">
                                <?php  if( count($gallery) ):  $i = 0; ?>
                                         <?php  foreach($gallery as $image): ?>
                                         <?php  if( $i<3 ):?>
                                            <?php   $full_image_url= $image['full_image_url'];
                                            $title = $image['title'];   ?>
                                            <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
                                            <?php $i++; ?>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                <?php endif; ?>
                        </div>
                        <a href="<?php echo get_permalink($terrain->id); ?>" class="infosTerrain clearfix">
                            <span class="nom"><?php echo $terrain->title; ?></span>
                            <span class="surface"><?php echo $terrain->surface;?></span>
                        </a>

                        <div class="description">
                           
                             <p> Terrain à vendre à <?php echo $terrain->title; ?> à partir de <?php echo $terrain->prix_du_m; ?>€ le m2.</p>
                        </div>
                    </div>
                </div>
                <div id="contentDiv" style="display:none">
                    <div id="<?php echo $terrain->id; ?>">
                        <span class="prix_du_m"><?php echo $terrain->prix_du_m; ?> €.</span>
                        <span class="surface">S: <?php echo $terrain->surface;?></span>                
                    </div>
                    <div id="img-out"></div>
                </div>
                <?php endforeach; ?>

                <div class="pagination col-md-12">
                    <div class="wp-pagenavi">
                      <?php
                       $the_terrain = new WP_Query(array('post_type' => 'terrains','posts_per_page' => 9,'paged'=> get_query_var('paged') ));
                      if(function_exists('wp_pagenavi')) { wp_pagenavi(array('query'=> $the_terrain));} ?>
                        <?php wp_reset_postdata();?>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4" id="map-canvas">
        </div>
        

    </div>

</div>




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
        var map, popup, Popup;

          function gethtml_gallery(pdv){
            var _gallery = '';
            var i=0;
            jQuery.each(pdv.gallery_images, function(index, value) {
                    i+=1;
					if(value && i<2 ){
                        
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
			_html += '<p> Terrain à vendre à '+ pdv.title +' à partir de ' + pdv.prix_du_m +' € le m2.</p>';
			_html += '</div>';
		_html += '</a>';
            	return _html;
        }

        function render_content_pdv(pdv){     
           
             var _html ='<div id="'+pdv.id +'">';
             _html += '<span class="nom">' +pdv.prix_du_m +' €.</span>';
             _html += '<span class="surface">S: ' + pdv.surface +'</span>';
         _html += '</div>';
         
   
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

				
                coordonnees = <?php echo get_coordonnees(); ?>;
                definePopupClass();
				var bounds = new google.maps.LatLngBounds();
                                
				jQuery.each(coordonnees, function(index, value) {
					if(value.latitude && value.longitude){
						contentString = render_infos_pdv(value);
                        contentpop = render_content_pdv(value);
                        
                       
						marker = new google.maps.Marker({
							position: new google.maps.LatLng(value.latitude, value.longitude),
							map: map,
                             icon: "<?php  echo get_template_directory_uri() ?>" + '/images/map_pin.png',
                            id: value.id
                        });

                        	bindInfoWindow(marker, map, infowindow, contentString);

                       
                       
					
                        
                        // setTimeout(function(){
                        //     $(test).click(function(e){
                        //         alert()
                        //         infowindow.setContent(description);
                        //     infowindow.open(map, this);
                        // })
                        // }, 2000);


						bounds.extend(new google.maps.LatLng(value.latitude, value.longitude));

                         var test = "#"+value.id;
                            if(document.getElementById(value.id) != null)
                            {                            
                               
                            
                            setTimeout(function(){
                            
                                var self = this;
                                    
                                    var div = document.getElementById(value.id);
                                  
                                    popup = new Popup(
                                    new google.maps.LatLng(value.latitude, value.longitude),
                                    document.getElementById(value.id),marker,map);
                                    popup.setMap(map);
                                  
                            }, 2000);      
                        }
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
                infowindow.open(map, marker);
            });
          
            // console.log(document.querySelectorAll("popup-tip-anchor"));
           
          
        }

   	function initMap() {
      
    		geocodeAddress();
        }

   
/** Defines the Popup class. */
function definePopupClass() {
  /**
   * A customized popup on the map.
   * @param {!google.maps.LatLng} position
   * @param {!Element} content
   * @constructor
   * @extends {google.maps.OverlayView}
   */
  Popup = function(position, content,marker,map) {
     
      if(content == null)
    {
        return;
    }

     
        this.position = position;

        content.classList.add('popup-bubble-content');

        var pixelOffset = document.createElement('div');
        pixelOffset.classList.add('popup-bubble-anchor');
        pixelOffset.appendChild(content);

        this.anchor = document.createElement('div');
        this.anchor.classList.add('popup-tip-anchor');
        this.anchor.appendChild(pixelOffset);

    var self = this;
    
    console.log(map.markers);
    console.log(marker);
    
    google.maps.event.addDomListener(this.anchor, "click", function(event) {
			
			google.maps.event.trigger(marker, "click");
		});
        // Optionally stop clicks, etc., from bubbling up to the map.
        //this.stopEventPropagation();
      

  };
  // NOTE: google.maps.OverlayView is only defined once the Maps API has
  // loaded. That is why Popup is defined inside initMap().
  Popup.prototype = Object.create(google.maps.OverlayView.prototype);

  /** Called when the popup is added to the map. */
  Popup.prototype.onAdd = function() {
      if(this.anchor != null)
    {this.getPanes().floatPane.appendChild(this.anchor);}
  };

  /** Called when the popup is removed from the map. */
  Popup.prototype.onRemove = function() {
    if (this.anchor.parentElement) {
      this.anchor.parentElement.removeChild(this.anchor);
    }
  };

  /** Called when the popup needs to draw itself. */
  Popup.prototype.draw = function() {
    var divPosition = this.getProjection().fromLatLngToDivPixel(this.position);
    // Hide the popup when it is far out of view.
    var display =
        Math.abs(divPosition.x) < 4000 && Math.abs(divPosition.y) < 4000 ?
        'block' :
        'none';

    if (display === 'block') {
      this.anchor.style.left = divPosition.x + 'px';
      this.anchor.style.top = divPosition.y + 'px';
    }
    if (this.anchor.style.display !== display) {
      this.anchor.style.display = display;
    }
    
  };

  /** Stops clicks/drags from bubbling up to the map. */
  Popup.prototype.stopEventPropagation = function() {
    var anchor = this.anchor;
    anchor.style.cursor = 'auto';

    ['click', 'dblclick', 'contextmenu', 'wheel', 'mousedown', 'touchstart',
     'pointerdown']
        .forEach(function(event) {
          anchor.addEventListener(event, function(e) {
            e.stopPropagation();
          });
        });
  };
}



    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIZ60y28YQxA8tUkzhQV_Rz8cO-FDaebc&callback=initMap">
    </script>


   

<?php get_footer();?>
