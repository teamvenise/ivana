<?php get_header();?>
<?php while(have_posts()) : the_post(); ?>
<main class="main_single">
        <div class="images_banner relative">
            <div id="slider" class="carousel_page slide relative" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#slider" data-slide-to="0" class="active"></li>
                <li data-target="#slider" data-slide-to="1"></li>
                <li data-target="#slider" data-slide-to="2"></li>
              </ol>
            
              <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <?php 
                            $image = get_field('image_01');
                            $image2 = get_field('image_02');
                            $image3 = get_field('image_03');
                            $size = 'slider'; // (thumbnail, medium, large, full or custom size)
                            
                            if( $image ) {
                            
                            	echo wp_get_attachment_image( $image, $size );
                            
                            }
                            
                            ?>
                    </div>
                    <div class="item ">
                        <?php 
                            if( $image2 ) {
                            
                            	echo wp_get_attachment_image( $image2, $size );
                            
                            }
                            
                            ?>
                    </div>
                    <div class="item ">
                        <?php 
                            
                            
                            if( $image3 ) {
                            
                            	echo wp_get_attachment_image( $image3, $size );
                            
                            }
                            
                            ?>
                    </div>
                </div>
                <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#slider" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
              </div>
              <div class="absolute tab_description">
                    <div class="hide">
                        <?php 
                			$args=array('post_type'=>'download','posts_per_page'=>-1,'order'=>'ASC');
                			$loop=new WP_Query ($args);
                			while($loop->have_posts()):$loop->the_post();
                            
                		?>
                        <?php
                    				endwhile;
                    				wp_reset_query();
                				?>
                    </div>
                    
                      <div class="panel_group tab_description" id="descriptions">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="collapsed" data-toggle="collapse" data-parent="#descriptions" href="#description" >
                                  Descriptions
                                </a>
                            </div>
                            <div id="description" class="panel-collapse collapse tab-content" >
                              <div class="panel-body">
                                <h1><?php the_title();?></h1>
                                <div><?php the_content();?></div>
                                
                                <div class="action">
                                    <div class="pull-left prix">
                                        <label>Prix :</label>
                                        <span class="prixTotal"><?php the_field("prix");?> €</span>
                                    </div>
                                    <!--div class="pull-right">
                                        <a id="id_plan" class="btn btnType" href="<?php //the_field("plan");?>"> <?php the_field("plan");?> Telecharger les plans</a>
                                    </div-->
                                    <div class="clearfix"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
              </div>
        </div>
        <!--section class="bloc_details blocGamme1">
            <div class="container relative">
                <div class="col-md-8 pull-right">
                    <div class="images_single"> 
                        <img class="imgGamme01" src="<?php the_field("image_salle_de_sejour");?>" />
                        <img class="imgGamme02 none" src="<?php the_field("image_salle_de_sejour_02");?>" />
                        <img class="imgGamme03 none" src="<?php the_field("image_salle_de_sejour_03");?>" />
                    </div>
                </div>
                <div class="col-md-4">
                    
                    <div class="details_bloc">
                        <input type="hidden" value="0" id="gammeSejour01" />
                        <input type="hidden" value="0" id="gammeSejour02" />
                        <input type="hidden" value="0" id="gammeSejour03" />
                        <div class="title">
                            <h2>Salle de sejour</h2>
                            <span></span>
                        </div>
                        <p>
                            <?php the_field("contenu_salle_de_sejour");?>
                        </p>
                        <div class="panel_group" id="sejour">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#sejour" href="#sejour1" >
                                      <?php the_field("titre_salle_de_sejour_01");?>
                                    </a>
                                </div>
                                <div id="sejour1" class="panel-collapse collapse " >
                                  <div class="panel-body">
                                    <?php the_field("description_salle_de_sejour_01");?>
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#sejour" href="#sejour2" >
                                     <?php the_field("titre__salle_de_sejour_02");?> 
                                    </a>
                                </div>
                                <div id="sejour2" class="panel-collapse collapse">
                                  <div class="panel-body">
                                    <?php the_field("description_salle_de_sejour_02");?>
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#sejour" href="#sejour3" >
                                    <?php the_field("titre_salle_de_sejour_03");?>  
                                    </a>
                                </div>
                                <div id="sejour3" class="panel-collapse collapse in">
                                  <div class="panel-body">
                                    <?php the_field("description_salle_de_sejour_03");?>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="text-right">
                                <a class="btn btnType gamme1" id="id_gammeSejour">Monter en gamme</a>
                            </div>
                    </div>
                </div>
                
            </div>
            
        </section>
        <section class="bloc_details blocGamme1">
            <div class="container relative">
            <input type="hidden" value="0" id="gammeCuisine01" />
            <input type="hidden" value="<?php the_field("prix_cuisine_gamme02");?>" id="gammeCuisine02" />
            <input type="hidden" value="<?php the_field("prix_cuisine_gamme03");?>" id="gammeCuisine03" />
                <div class="col-md-8">
                    <div class="images_single"> 
                         <img class="imgGamme01" src="<?php the_field("image_cuisine");?>" />
                         <img class="imgGamme02 hidden" src="<?php the_field("image_cuisine_02");?>" />
                         <img class="imgGamme03 hidden" src="<?php the_field("image_cuisine_03");?>" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="details_bloc details_right">
                        <div class="title">
                            <h2>Cuisine</h2>
                            <span></span>
                        </div>
                        <p>
                            <?php the_field("contenu_cuisine");?>
                        </p>
                        <div class="panel_group" id="cuisine">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#cuisine" href="#cuisine1" >
                                      <?php the_field("titre_cuisine_01");?>
                                    </a>
                                </div>
                                <div id="cuisine1" class="panel-collapse collapse in" >
                                  <div class="panel-body">
                                    <?php the_field("description_cuisine_01");?>
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#cuisine" href="#cuisine2" >
                                     <?php the_field("titre__cuisine_02");?> 
                                    </a>
                                </div>
                                <div id="cuisine2" class="panel-collapse collapse">
                                  <div class="panel-body">
                                    <?php the_field("description_cuisine_02");?>
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#cuisine" href="#cuisine3" >
                                     <?php the_field("titre_cuisine_03");?>
                                    </a>
                                </div>
                                <div id="cuisine3" class="panel-collapse collapse">
                                  <div class="panel-body">
                                    <?php the_field("description_cuisine_03");?>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="text-left">
                                <a class="btn btnType gamme1" id="id_gammeCuisine">Monter en gamme</a>
                            </div>
                    </div>
                </div>
            </div>
            
            
        </section>
        <section class="bloc_details blocGamme1">
            <input type="hidden" value="0" id="gammeDouche01" />
            <input type="hidden" value="0" id="gammeDouche02" />
            <input type="hidden" value="0" id="gammeDouche03" />
            <div class="container relative">
                <div class="col-md-8 pull-right">
                    <div class="images_single"> 
                        <img class="imgGamme01" src="<?php the_field("image_salle_de_bain");?>" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="details_bloc">
                        <div class="title">
                            <h2>Salle de bain</h2>
                            <span></span>
                        </div>
                        <p>
                            <?php the_field("contenu_salle_de_bain");?>
                        </p>
                        <div class="panel_group" id="salle-de-bain">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#salle-de-bain" href="#salle-de-bain" >
                                      <?php the_field("titre_salle_de_bain_01");?>
                                    </a>
                                </div>
                                <div id="salle-de-bain1" class="panel-collapse collapse " >
                                  <div class="panel-body">
                                    <?php the_field("description_salle_de_bain_01");?>
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#salle-de-bain" href="#salle-de-bain2" >
                                     <?php the_field("titre__salle_de_bain_02");?> 
                                    </a>
                                </div>
                                <div id="salle-de-bain2" class="panel-collapse collapse">
                                  <div class="panel-body">
                                    <?php the_field("description_salle_de_bain_02");?>
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#salle-de-bain" href="#salle-de-bain3" >
                                     <?php the_field("titre_salle_de_bain_03");?>
                                    </a>
                                </div>
                                <div id="salle-de-bain3" class="panel-collapse collapse in">
                                  <div class="panel-body">
                                    <?php the_field("description_salle_de_bain_03");?>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="text-right">
                                <a class="btn btnType gamme1" id="id_gammeDouche">Monter en gamme</a>
                            </div>
                    </div>
                </div>
            </div>
            
            
        </section>
        <section class="bloc_details blocGamme1">
            <input type="hidden" value="0" id="gammeChambre01" />
            <input type="hidden" value="0" id="gammeChambre02" />
            <input type="hidden" value="0" id="gammeChambre03" />
            <div class="container relative">
                <div class="col-md-8">
                    <div class="images_single"> 
                       <img class="imgGamme01" src="<?php the_field("image_chambre");?>" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="details_bloc details_right">
                        <div class="title">
                            <h2>Chambre</h2>
                            <span></span>
                        </div>
                        <p>
                            <?php the_field("contenu_chambre");?> 
                        </p>
                        <div class="panel_group" id="chambre">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#chambre" href="#chambre1" >
                                      <?php the_field("titre_chambre_01");?> 
                                    </a>
                                </div>
                                <div id="chambre1" class="panel-collapse collapse in" >
                                  <div class="panel-body">
                                    <?php the_field("description_chambre_01");?>
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#chambre" href="#chambre2" >
                                     <?php the_field("titre_chambre_02");?> 
                                    </a>
                                </div>
                                <div id="chambre2" class="panel-collapse collapse">
                                  <div class="panel-body">
                                    <?php the_field("description_chambre_02");?>
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#chambre" href="#chambre3" >
                                     <?php the_field("titre_chambre_03");?>
                                    </a>
                                </div>
                                <div id="chambre3" class="panel-collapse collapse ">
                                  <div class="panel-body">
                                    <?php the_field("description_chambre_03");?>
                                  </div>
                                </div>
                              </div>
                         </div>
                            <div class="text-left">
                                <a class="btn btnType gamme1" id="id_gammeChambre">Monter en gamme</a>
                            </div>
                    </div>
                </div>
            </div>
            
            
        </section-->
        <div class="text-center blocPerm">
            <div class="container">
                <h2>vel blandit ligula elementum</h2>
                <p>
                    Etiam tempus ipsum id felis interdum, vel blandit ligula elementum. Maecenas nulla elit, egestas at posuere quis, molestie id velit. Sed eu bibendum purus. Quisque eu suscipit felis, vitae varius erat. Mauris vel arcu lobortis, imperdiet dui sed. 
                    Etiam tempus ipsum id felis interdum, vel blandit ligula elementum. Maecenas nulla elit, egestas at posuere quis, molestie id velit. Sed eu bibendum purus. Quisque eu suscipit felis, vitae varius erat. Mauris vel arcu lobortis, imperdiet dui sed.
                </p>
            </div>
        </div>
        <section class="bloc_tarifForfaitaire">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="title">
                            <h2>Prix</h2>
                            <span></span>
                        </div>
                        <p><i>Tarif forfaitaire </i> pour modification des plans </p>
                        <a href="" class="btn btnType" data-toggle="modal" data-target="#fianancementModal">FINANCEMENT</a>
                        <div class="modal fade modalFinancement" id="fianancementModal" tabindex="-1" role="dialog" aria-labelledby="fianancementModal" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              <div class="modal-body">
                                <div class="title">
                                    <h2>FINANCEMENT</h2>
                                    <span></span>
                                </div>
                                 <div class="content">
                                    <p>
                                        Echelonnement : 50% a la signature, 30% a la fin des gros oeuvres, 20 % a la livraison
                                    </p>
                                    <p>
                                        <strong>Pret bancaire en France</strong>
                                        <ul>
                                            <li> - Pour un credit a la consommation : environ 350 euro/mois sur 5
        ans, 200 euros/mois usr 10 ans, 150 euros/mois sur 15 ans</li>
                                            <li>
                                                - Pour un credit immobilier en résidence secondaire : environ 350 euro/mois sur 5 ans, 200 euros/mois usr 10 ans, 150 euros/mois sur 15 ans
                                            </li>
                                        </ul>
                                    </p>
                                    <p>
                                        <strong>Pret bancaire a Madagascar</strong>
                                        <ul>
                                            <li>- environ 850 euro/mois sur 5 ans, 700 euros/mois usr 10 ans, 600 euros/mois sur 15 ans</li>
                                        </ul>
                                    </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-6 text-center">
                        <div class="prix prixTotal" > <?php the_field("prix");?> €</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bloc_financement">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                            <div class="content bloc_reservation text-center">
                                <div class="title">TOUT COMMENCE PAR UN RENDEZ-VOUS !</div>
                                <p>Planifions une rendez-vous pour que nous puissions mieux connaitre votre projet.</p>
                                <div class="contentRdv relative">
                                    <div class="row checkCountry">
                                        <div class="col-sm-6">
                                            <div class="table countryChoice" id="checkParis">
                                                <div class="cont">
                                                    <span>Se voir  à Paris</span> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="table countryChoice" id="checkTana">
                                                <div class="cont">
                                                    <span>Se voir  à Tana</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="getDateTana hide">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="currentDate">
                                                        <div class="curr_mounth"></div>
                                                        <div class="curr_date"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <input id="datetimepickerTana" type="hidden"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class="getDateParis hide">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="currentDate">
                                                        <div class="curr_mounth"></div>
                                                        <div class="curr_date"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <input id="datetimepickerParis" type="hidden"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="back hide absolute"> << Retour</div>
                                </div>
                          </div>
                       
                    </div>
                    <div class="col-md-5">
                        <div class="content contentRight">
                            <h3 class="text-center">A QUOI VOUS ATTENDRE</h3>
                            <ul class="text-center">
                                <li> <span>Etape 1 :</span>Signature de la promesse d’achat</li>
                                <li> <span>Etape 2 :</span> Designer votre mandataire a Madagascar pour vous représenter. Ce mandataire pourra signer devant le notaire pour vous et suivre les travaux en votre nom.</li>
                                <li> <span>Etape 3 :</span> Réunissez tous les documents pour la banque et le notaire</li>
                                <li> <span>Etape 4 :</span> Signature devant notaire</li>
                                <li> <span>Etape 5 :</span> Debut des travaux</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
<?php
		endwhile;
		wp_reset_query();
		?>
        <div class="modal fade rdvModal" id="rdvTana" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php 
        			$args=array('page_id' =>47, 'posts_per_page' =>-1);
        			$loop=new WP_Query($args);
        			while ( $loop->have_posts() ) : $loop->the_post();
        			?>
              <div class="modal-body">
                <div class="text-center">
                    <div class="title">
                        <h2>Rendez-Vous</h2>
                        <span></span>
                    </div>
               </div>
                 <?php the_content();?>
              <?php
    			endwhile;
    			wp_reset_query();
    			?> 
            </div>
          </div>
          </div>
    </div>
        
<div class="modal fade rdvModal" id="rdvParis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <?php 
        			$args=array('page_id' =>50, 'posts_per_page' =>-1);
        			$loop=new WP_Query($args);
        			while ( $loop->have_posts() ) : $loop->the_post();
        			?>
          <div class="modal-body">
            <div class="text-center">
                <div class="title">
                    <h2>Rendez-Vous</h2>
                    <span></span>
                </div>
                
            </div>
            <?php the_content();?>
          </div>
          <?php
    			endwhile;
    			wp_reset_query();
    			?> 
        </div>
      </div>
    </div>
<?php get_footer();?>