<?php get_header();

/*Template name: Acceuil*/?>

     <?php while(have_posts()) : the_post(); ?>

    <div class="banner relative">

        <!--img src="<?php bloginfo( 'template_url' ); ?>/images/banner.jpg" class="" /-->

        <div class="container absolute text_header text-center">

            <h1>

               Devenez propriétaire à Madagascar <span>les yeux fermés ! </span> 

            </h1><br />

            <a href="<?php echo esc_url( get_permalink(224) ); ?>" class="btn btnType">Découvrir comment</a>

        </div>

        <div class="absolute btnBanner">

            <a href="#intro"></a>

        </div>

    </div>

    <main class="main_home">

        <section class="bloc_intro" id="intro">

            <div class="container">

                <div class="title text-center">

                    <h2>

                        <span>Une formule clé en main </span> depuis l’étranger ! 

                    </h2>

                    <span></span>

                </div>

                <div class="row list_picto">

                    <div class="col-sm-4">

                        <div class="bloc_picto picto01">

                            <span></span>

                            <div class="title">Signatures notariées</div>

                        </div>

                        <div class="panel_group" id="signature">

                              <div class="panel panel-default">

                                <div class="panel-heading">

                                    <a class="collapsed" data-toggle="collapse" data-parent="#signature" href="#signature1" >

                                      <?php the_field("titre");?>

                                    </a>

                                </div>

                                <div id="signature1" class="panel-collapse collapse " >

                                  <div class="panel-body">

                                   <?php the_field("contenu");?>

                                  </div>

                                </div>

                              </div>

                              <div class="panel panel-default">

                                <div class="panel-heading">

                                    <a class="collapsed" data-toggle="collapse" data-parent="#signature" href="#signature2" >

                                     <?php the_field("titre_02");?>

                                    </a>

                                </div>

                                <div id="signature2" class="panel-collapse collapse">

                                  <div class="panel-body">

                                    <?php the_field("contenu_02");?>

                                  </div>

                                </div>

                              </div>

                            </div>

                    </div>

                    <div class="col-sm-4">

                        <div class="bloc_picto picto02">

                            <span></span>

                            <div class="title">Garantie decennale</div>

                        </div>

                        <div class="panel_group" id="garantie">

                              <div class="panel panel-default">

                                <div class="panel-heading">

                                    <a class="collapsed" data-toggle="collapse" data-parent="#garantie" href="#garantie1" >

                                      <?php the_field("titre_03");?>

                                    </a>

                                </div>

                                <div id="garantie1" class="panel-collapse collapse " >

                                  <div class="panel-body">

                                   <?php the_field("contenu_03");?>

                                  </div>

                                </div>

                              </div>

                              <div class="panel panel-default">

                                <div class="panel-heading">

                                    <a class="collapsed" data-toggle="collapse" data-parent="#garantie" href="#garantie2" >

                                     <?php the_field("titre_04");?>

                                    </a>

                                </div>

                                <div id="garantie2" class="panel-collapse collapse">

                                  <div class="panel-body">

                                     <?php the_field("contenu_04");?>

                                  </div>

                                </div>

                              </div>

                              <div class="panel panel-default">

                                <div class="panel-heading">

                                    <a class="collapsed" data-toggle="collapse" data-parent="#garantie" href="#garantie3" >

                                     <?php the_field("titre_05");?>

                                    </a>

                                </div>

                                <div id="garantie3" class="panel-collapse collapse">

                                  <div class="panel-body">

                                     <?php the_field("contenu_05");?>

                                  </div>

                                </div>

                              </div>

                            </div>

                    </div>

                    <div class="col-sm-4">

                        <div class="bloc_picto picto01">

                            <span></span>

                            <div class="title">Transactions sécurisées </div>

                        </div>

                        <div class="panel_group" id="transaction">

                              <div class="panel panel-default">

                                <div class="panel-heading">

                                    <a class="collapsed" data-toggle="collapse" data-parent="#transaction" href="#transaction1" >

                                       <?php the_field("titre_06");?>

                                    </a>

                                </div>

                                <div id="transaction1" class="panel-collapse collapse " >

                                  <div class="panel-body">

                                    <?php the_field("contenu_06");?>

                                  </div>

                                </div>

                              </div>

                              <div class="panel panel-default">

                                <div class="panel-heading">

                                    <a class="collapsed" data-toggle="collapse" data-parent="#transaction" href="#transaction2" >

                                     <?php the_field("titre_07");?>

                                    </a>

                                </div>

                                <div id="transaction2" class="panel-collapse collapse">

                                  <div class="panel-body">

                                    <?php the_field("contenu_07");?>

                                  </div>

                                </div>

                              </div>

                            </div>

                    </div>

                </div>

            </div>

        </section>

        <section class="bloc_temoignage">

            <div class="container">

                <div class="row">

                    <div class="col-sm-8">

                        <div id="temoignage" class="carousel_temoignage slide" data-ride="carousel">

                          

                          <ol class="carousel-indicators">

                            <li data-target="#temoignage" data-slide-to="0" class="active"></li>

                            <li data-target="#temoignage" data-slide-to="1"></li>

                            <li data-target="#temoignage" data-slide-to="2"></li>

                          </ol>

                        

                          <div class="carousel-inner" role="listbox">

                            <?php 

                			$args=array('post_type'=>'temoignages','posts_per_page'=>-1,'order'=>'ASC');

                			$loop=new WP_Query ($args);

                			while($loop->have_posts()):$loop->the_post();

                            

                		?>

                                <div class="item <?php if ( $loop->current_post == 0 ) : ?>active<?php endif; ?>">

                                    <div class="name"><?php the_title();?></div>

                                    <hr />

                                    <div class="contTemoignage">

                                        <p><?php the_content();?></p>

                                    </div>

                                    <div class="noteTemoignage">

                                        <input id="rating" name="rating" value="<?php the_field("note");?>" class="rating-loading rat_in">

                                    </div>

                                    <div class="text-right temoin">- <?php the_field("nom")?>, <?php the_field("villa")?></div>

                                </div>

                                <?php

                    				endwhile;

                    				wp_reset_query();

                				?>

                            </div>

                          </div>

                        </div>

                    <div class="col-sm-4">

                        <div class="bloc_newsletter">

                            <div class="title text-center">

                                <h2><span>Restons en contact</span></h2>

                                <span></span>

                            </div>

                            <div class="newsForm">

                                <?php echo do_shortcode('[mc4wp_form id="157"]');?>

                            </div>

                            

                        </div>

                    </div>

                    </div>

                </div>

            </div>

        </section>

        <section class="bloc_history_home">

            <div class="container">

            <div class="row">

                <div class="col-md-7">

                </div>

                <div class="col-md-5">

                    <div class="text-left">

                        <h2>notre concept</h2>

                        <hr />
            
                        <p>Nous avons la certitude qu’à partir du moment où vous vous êtes décidé à, investir à Madagascar, vous y installer un temps ou pour votre retraite, nous confier la
construction de votre maison, c’est un pas de plus vers un renouveau de l’Ile !</p>
                        <a class="btn btnType" href="<?php echo esc_url( get_permalink(229) ); ?>">parlons-en </a>

                    </div>

                </div>

            </div>

                

                

            </div>

        </section>

        <section class="bloc_maisonHome">

            <div class="container">

                <div class="title text-center">

                    <h2><span>Des lieux de vie  <i>qui donnent envie</i></span></h2>

                    <span></span>

                </div>

                <div class="row">

                <?php 

                			$args=array('post_type'=>'maisons','posts_per_page'=>6,'order'=>'ASC');

                			$loop=new WP_Query ($args);

                			while($loop->have_posts()):$loop->the_post();

                            

                		?>

                    <div class="col-sm-6">

                        <div class="relative list_maisonHome">

                            <a href="<?php the_permalink();?>">

                                <?php the_post_thumbnail("list_maison");

                               /* $image = get_field('image_01');

                                $size = 'list_maison'; // (thumbnail, medium, large, full or custom size)

                                if( $image ) {

                                    echo wp_get_attachment_image( $image, $size );

                                

                                }*/?>

                                <div class="absolute text-center">

                                    <div class="maisonName">
                                        <?php the_title();?>
                                        <div class="sousTitre"><?php the_field("slogan");?></div>
                                    </div>
                                    
                                    <ul class="details">
                                        <li><i class="icone chambres"></i>3 Chambres</li>
                                        <li><i class="icone salle-de-bain"></i>2 salles de bains</li>
                                        <li><i class="icone surface"></i>60 M²</li>
                                    </ul>

                                    <!--div class="short_desc"><?php the_field("type");?> - <?php the_field("surface");?> m²</div-->

                                </div>

                            </a>

                        </div>

                    </div>

                    <?php

        				endwhile;

        				wp_reset_query();

    				?>

            </div>

        </section>
        <section class="bloc_financement">

            <div class="container">

                <div class="row">
                    <div class="col-md-6">

                        <div class="content contentRight">
                            <div class="title text-center">
                                <h2><span>4 étapes et nous <i>commençons les travaux.</i></span></h2>
                            </div>

                            <ul class="text-center">

                                <li> <span>4.</span>Signons la promesse d’achat</li>

                                <li> <span>3.</span>Désignez un mandataire à Madagascar pour vous représenter.</li>

                                <li> <span>2.</span> Rassemblons les documents bancaires et notariaux</li>

                                <li> <span>1.</span>On signe devant le notaire !</li>

                            </ul>

                        </div>

                    </div>
                    <div class="col-md-6">

                            <div class="content bloc_reservation text-center reservationHome">

                                <div class="title text-center">
                                    <h2><span>Et maintenant ? <i>Parlons de votre <br /> projet en tête-à-tête</i></span></h2>
                                </div>
                                <?php get_sidebar("modal-reservation");?>
                             </div>

                       

                    </div>

                    

                </div>

            </div>
            <div class="detailsReservations text-center">
                <div class="title"><strong>On vous explique</strong>  les détails.</div>
                <a class="btn btnType" title="ici" href="<?php echo esc_url( get_permalink(224) ); ?>">ICI</a>
            </div>
        </section>
        <section class="bloc_instagramHome">

          <?php 

        			$args=array('page_id' =>96, 'posts_per_page' =>-1);

        			$loop=new WP_Query($args);

        			while ( $loop->have_posts() ) : $loop->the_post();

        			?>

            <div class="container">

                <div class="title text-center">

                    <h2><span><?php the_title(); ?></span></h2>

                    <span></span>

                </div>

                <div>

                    <?php the_content(); ?>

                </div>

            </div>

            <?php

			endwhile;

			wp_reset_query();

			?> 

        </section>

         <?php

		endwhile;

		wp_reset_query();

		?>

            <section class="mapHome relative">
            <div class="contact_map">
                <ul class="socialMap">
                    <li><a href="mailto:salama@ivana.mg">salama@ivana.mg</a></li>
                    <li><a href="https://www.facebook.com/Ivana.immobilier/" target="_blank">/ivana.immobilier</a></li>
                    <li><a href="tel:+261 34 70 830 02">+261 34 70 830 02</a></li>
                    <li><a href="https://www.instagram.com/ivana_home" target="_blank">@ivana_home</a></li>
                </ul>
            </div>
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 adresse">
                        <span class="icone tana"></span>
                        <strong>ANTANANARIVO</strong>
                        <p>Antananarivo 102, <br>Sabotsy Namehana</p>
                        <hr />
                    </div>
                    <div class="col-md-3 map-tana">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/map-tana.jpg">
                    </div>
                    <div class="col-md-3 map-paris">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/map-paris.jpg">
                    </div>
                    <div class="col-md-3 adresse">
                        <span class="icone paris"></span>
                        <strong>PARIS</strong>
                        <p>7 Rue Meyerbeer 75009, <br>Paris</p>
                        <hr />
                    </div>
                </div>
            </div>
        </section>

<?php get_footer();?>