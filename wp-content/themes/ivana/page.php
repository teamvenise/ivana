<?php get_header();?>
     
    
    <main class="main_home page">
        <?php while(have_posts()) : the_post(); ?>
        <div class="container ">
            <div class="containerPage">
                <div class="image">
                    <?php the_post_thumbnail();?>
                </div>
                <div><?php the_content();?></div>
            </div>
            
        </div>
        
        <?php
		endwhile;
		wp_reset_query();
		?>
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
<?php get_footer();?>