<?php get_header();?>
<?php while(have_posts()) : the_post(); ?>
<main class="main_single">
        <div class="images_banner relative">
            <div id="slider" class="carousel_page slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#slider" data-slide-to="0" class="active"></li>
                <li data-target="#slider" data-slide-to="1"></li>
              </ol>
            
              <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <?php 
                            $image = get_field('image_01');
                            $size = 'slider'; // (thumbnail, medium, large, full or custom size)
                            
                            if( $image ) {
                            
                            	echo wp_get_attachment_image( $image, $size );
                            
                            }
                            
                            ?>
                    </div>
                    <!--div class="item ">
                        
                    </div-->
                </div>
              </div>
              <div class="absolute tab_description">
                    <ul class="nav nav-tabs" >
                        <li class="active"><a href="#descriptions" data-toggle="tab">Descriptions</a></li>
                        <li><a href="#options"  data-toggle="tab">Options</a></li>
                    </ul>
                    
                      <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="descriptions">
                            <h1><?php the_title();?></h1>
                            <div><?php the_content();?></div>
                            
                            <div class="action">
                                <div class="pull-left prix">
                                    <label>Prix :</label>
                                    <span><?php the_field("prix");?> €</span>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btnType" href="<?php the_field("plan");?>">Telecharger les plans</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            
                        </div>
                        <div role="tabpanel" class="tab-pane" id="options">
                            <div class="optionCheckbox">
                                <div class="form-group">
                                    <input type="checkbox" id="revetement" name="options" />
                                    <label for="revetement"><span>Le revêtement extérieur</span></label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="grille" name="options" />
                                    <label for="grille"><span>Ajouter des grilles de sécurité</span></label>
                                </div>
                            </div>
                        </div>
                      </div>
              </div>
        </div>
        <section class="bloc_details relative">
            <img src="<?php the_field("image_salle_de_sejour");?>" />
            <div class="gTitle absolute">Salle de sejour</div>
            <div class="details_bloc absolute">
                <div class="buttonDetails"></div>
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
            </div>
        </section>
        <section class="bloc_details relative">
            <img src="<?php the_field("image_cuisine");?>" />
            <div class="gTitle absolute">Cuisine</div>
            <div class="details_bloc absolute">
                <div class="buttonDetails"></div>
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
                        <div id="cuisine1" class="panel-collapse collapse " >
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
                        <div id="cuisine3" class="panel-collapse collapse in">
                          <div class="panel-body">
                            <?php the_field("description_cuisine_03");?>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>
        </section>
        <section class="bloc_details relative">
            <img src="<?php the_field("image_salle_de_bain");?>" />
            <div class="gTitle absolute">Salle de bain</div>
            <div class="details_bloc absolute">
                <div class="buttonDetails"></div>
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
            </div>
        </section>
        <section class="bloc_details relative">
            <img src="<?php the_field("image_chambre");?>" />
            <div class="gTitle absolute">Chambre</div>
            <div class="details_bloc absolute">
                <div class="buttonDetails"></div>
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
                        <div id="chambre1" class="panel-collapse collapse " >
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
                        <div id="chambre3" class="panel-collapse collapse in">
                          <div class="panel-body">
                            <?php the_field("description_chambre_03");?>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>
        </section>
        <section class="bloc_tarifForfaitaire">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="title">
                            <h2>Prix</h2>
                            <span></span>
                        </div>
                        <p>Tarif forfaitaire pour modification des plans </p>
                    </div>
                    <div class="col-sm-6 text-center">
                        <div class="prix"> 100 €</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bloc_financement">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="content">
                            <h3 class="text-center">FINANCEMENT</h3>
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
                    <div class="col-sm-6">
                        <div class="content contentRight">
                            <h3 class="text-center">A QUOI VOUS ATTENDRE</h3>
                            <ul>
                                <li>Signature de la promesse d’achat</li>
                                <li>Designer votre mandataire a Madagascar pour vous représenter. Ce mandataire pourra signer devant le notaire pour vous et suivre les travaux en votre nom.</li>
                                <li>Réunissez tous les documents pour la banque et le notaire</li>
                                <li>Signature devant notaire</li>
                                <li>Debut des travaux</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bloc_reservation">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="title">TOUT COMMENCE PAR UN RENDEZ-VOUS !</div>
                        <p>Planifions une rendez-vous pour que nous puissions mieux connaitre votre projet.</p>
                    </div>
                    <div class="col-md-5"> 
                        <div class="row checkCountry">
                            <div class="col-sm-6">
                                <div class="table countryChoice" id="checkParis">
                                    <div class="cont">
                                        <strong>Paris</strong> du <br /> 13 Jan au 14 Fev <span>2018</span> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="table countryChoice" id="checkTana">
                                    <div class="cont">
                                        <strong>Tana</strong>
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
                        <div class="back hide"> << Retour</div>
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