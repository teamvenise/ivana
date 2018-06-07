<div class="container">


                            <div class="content bloc_reservation text-center relative">

                                <div class="title">TOUT COMMENCE PAR UN RENDEZ-VOUS !</div>

                                <p>Planifions une rendez-vous pour que nous puissions mieux connaitre <br /> votre projet.</p>

                                <div class="contentRdv ">

                                    <div class="row checkCountry">

                                        <div class="inline-block">

                                            <div class="table countryChoice" id="checkParis">

                                                <div class="cont">

                                                    <span>Se voir  à Paris</span> 

                                                </div>

                                            </div>

                                        </div>

                                        <div class="inline-block">

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

                                                <div class="col-md-6 curDate">

                                                    <div class="currentDate ">

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

                                                <div class="col-md-6 curDate">

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