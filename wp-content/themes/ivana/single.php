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

                                        <label>Exorna </label>

                                        <span class="prixTotal"><?php the_field("prix");?> €</span>

                                    </div>
                                    <div class="pull-right">

                                        <a class="btn btnType" href="<?php echo  get_permalink(get_page_by_path("inscription")->ID); ?>">Demander les plans</a>
    
                                    </div>

                                    <div class="clearfix"></div>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

              </div>

        </div>

        <section class="bloc_details blocGamme1">

            <div class="container relative">

                <div class="col-md-8 pull-right">

                    <div class="images_single"> 

                        <img class="imgGamme01" src="<?php the_field("image_salle_de_sejour");?>" alt="<?php the_field("titre_salle_de_sejour_01");?>" />

                    </div>

                </div>

                <div class="col-md-4">

                    

                    <div class="details_bloc">

                        <div class="title">

                            <h2>L’espace de vie</h2>

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

                </div>

                

            </div>

            

        </section>

        <section class="bloc_details blocGamme1">

            <div class="container relative">
            <div class="col-md-8">

                    <div class="images_single"> 

                         <img class="imgGamme01" src="<?php the_field("image_cuisine");?>" alt="<?php the_field("titre_cuisine_01");?>" />


                    </div>

                </div>

                <div class="col-md-4">

                    <div class="details_bloc details_right">

                        <div class="title">

                            <h2>La cuisine</h2>

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
                              <?php $cuisine = get_field("titre_cuisine_03");?>
                              <?php if ($cuisine) {?>
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
                              <?php } ?>

                            </div>


                    </div>

                </div>

            </div>

            

            

        </section>

        <section class="bloc_details">
            <div class="container relative">
                <div class="col-md-8 pull-right">
                    <div class="images_single"> 
                        <img class="imgGamme01" src="<?php the_field("image_salle_de_bain");?>" alt="<?php the_field("titre_salle_de_bain_01");?>" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="details_bloc">
                        <div class="title">
                            <h2>La salle de bain</h2>
                            <span></span>
                        </div>
                        <p>
                            <?php the_field("contenu_salle_de_bain");?>
                        </p>
                        <div class="panel_group" id="salle-de-bain">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#salle-de-bain" href="#salle-de-bain1" >
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
                </div>
            </div>      
        </section>
        <section class="bloc_details">
            <div class="container relative">
                <div class="col-md-8">
                    <div class="images_single">
                       <img class="imgGamme01" src="<?php the_field("image_chambre");?>" alt="<?php the_field("titre_chambre_01");?>" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="details_bloc details_right">
                        <div class="title">
                            <h2>Le dressing</h2>
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
                    </div>
                </div>
            </div>
        </section>
        <section class="bloc_details blocGamme1">
            <div class="container relative">
                <div class="col-md-8 pull-right">
                    <div class="images_single"> 
                        <img class="imgGamme01" src="<?php the_field("image_buanderie");?>" alt="<?php the_field("titre_buanderie_01");?>" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="details_bloc">
                        <div class="title">
                            <h2>La buanderie</h2>
                            <span></span>
                        </div>
                        <p>
                            <?php the_field("contenu_buanderie");?>
                        </p>
                        <div class="panel_group" id="buanderie">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#buanderie" href="#buanderie1" >
                                      <?php the_field("titre_buanderie_01");?>
                                    </a>
                                </div>
                                <div id="buanderie1" class="panel-collapse collapse " >
                                  <div class="panel-body">
                                    <?php the_field("description_buanderie_01");?>
                                  </div>
                                </div>
                              </div>
                              <?php $buanderie = get_field("titre_buanderie_02")?>
                              <?php if ($buanderie) {?> 
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#buanderie" href="#buanderie2" >
                                     <?php the_field("titre_buanderie_02");?>
                                    </a>
                                </div>
                                <div id="buanderie2" class="panel-collapse collapse">
                                  <div class="panel-body">
                                    <?php the_field("description_buanderie_02");?>
                                  </div>
                                </div>
                              </div>
                              <?php }?>
                              <?php $buanderie2 = get_field("titre_buanderie_03")?>
                              <?php if ($buanderie2) {?> 
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#buanderie" href="#buanderie3" >
                                     <?php the_field("titre_buanderie_03");?>
                                    </a>
                                </div>
                                <div id="buanderie3" class="panel-collapse collapse in">
                                  <div class="panel-body">
                                    <?php the_field("description_buanderie_03");?>
                                  </div>
                                </div>
                              </div>
                              <?php }?>
                            </div>
                    </div>
                </div>
            </div>      
        </section>
        <section class="bloc_details blocGamme1">
            <div class="container relative">
                <div class="col-md-8">
                    <div class="images_single">
                       <img class="imgGamme01" src="<?php the_field("image_suite");?>" alt="<?php the_field("titre_suite_01");?>" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="details_bloc details_right">
                        <div class="title">
                            <h2>La suite parentale</h2>
                            <span></span>
                        </div>
                        <p>
                            <?php the_field("contenu_suite");?>
                        </p>
                        <div class="panel_group" id="chambre">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#suite" href="#suite1" >
                                      <?php the_field("titre_suite_01");?>
                                    </a>
                                </div>
                                <div id="suite1" class="panel-collapse collapse in" >
                                  <div class="panel-body">
                                    <?php the_field("description_suite_01");?>
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#suite" href="#suite2" >
                                     <?php the_field("titre_suite_02");?>
                                    </a>
                                </div>
                                <div id="suite2" class="panel-collapse collapse">
                                  <div class="panel-body">
                                    <?php the_field("description_suite_02");?>
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#suite" href="#suite3" >
                                        <?php the_field("titre_suite_03");?>
                                    </a>
                                </div>
                                <div id="suite3" class="panel-collapse collapse ">
                                    <div class="panel-body">
                                        <?php the_field("description_03");?>
                                  </div>
                                </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </section>          
        <section class="BloctarifsMaison">
            <div class="container">
                <div class="text-center">
                    <div class="item">
                        <span class="clos"></span>
                        <div class="titre">Clos couvert</div>
                        <div class="price"><?php the_field("clos_couvert");?> <strong>€</strong></div>
                        <hr />
                        <a href="<?php echo esc_url( get_permalink(138) ); ?>">Détails</a>
                    </div>
                    <div class="item">
                        <span class="premium"></span>
                        <div class="titre">Premium</div>
                        <div class="price"><?php the_field("premium");?> <strong>€</strong></div>
                        <hr />
                        <a href="<?php echo esc_url( get_permalink(138) ); ?>">Détails</a>
                    </div>
                    <div class="item">
                        <span class="prestige"></span>
                        <div class="titre">Prestige</div>
                        <div class="price"><?php the_field("prestige");?> <strong>€</strong></div>
                        <hr />
                        <a href="<?php echo esc_url( get_permalink(138) ); ?>">Détails</a>
                    </div>
                    <a href="<?php echo esc_url( get_permalink(138) ); ?>" class="btn btnType"><strong>Me faire</strong> financer</a>
                </div>
            </div>
        </section>
        

        <section class="blocrdvSingle">

            <div class="container">


                            <div class="content bloc_reservation text-center relative">

                                <div class="title">TOUT COMMENCE PAR UN RENDEZ-VOUS !</div>

                                <p>Planifions une rendez-vous pour que nous puissions mieux connaitre <br /> votre projet.</p>

                                <?php get_sidebar("modal-reservation");?>

                          </div>


            </div>

        </section>

       

<?php

		endwhile;

		wp_reset_query();

		?>


<?php get_footer();?>