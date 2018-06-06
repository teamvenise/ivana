<?php 

/*

Template name: Terrains*/

get_header();?>

    <?php while(have_posts()) : the_post(); ?>
    <main class="main_home" id="page-interne">       

        <div class="container">
            <div class="row">
                
                <div class="col-md-8">
                    <h1>Tous nos terrains en ventes</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lacinia convallis justo, eget ornare nibh ornare vel.</p>
                    <?php the_content();?>

                    <!-- Terrain liste à boucler -->
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="itemTerrain">
                                <div class="terrainSlider">
                                    <img src="<?php echo get_template_directory_uri();?>/images/terrain_thumb.jpg" alt="">
                                    <img src="<?php echo get_template_directory_uri();?>/images/terrain_thumb.jpg" alt="">
                                    <img src="<?php echo get_template_directory_uri();?>/images/terrain_thumb.jpg" alt="">
                                </div>
                                
                                <div class="infosTerrain clearfix">
                                    <span class="nom">By pass</span>
                                    <span class="surface">600 m²</span>
                                </div>

                                <div class="description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lacinia convallis justo, eget ornare nibh ornare vel. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="itemTerrain">
                                <div class="terrainSlider">
                                    <img src="<?php echo get_template_directory_uri();?>/images/terrain_thumb.jpg" alt="">
                                    <img src="<?php echo get_template_directory_uri();?>/images/terrain_thumb.jpg" alt="">
                                    <img src="<?php echo get_template_directory_uri();?>/images/terrain_thumb.jpg" alt="">
                                </div>
                                
                                <div class="infosTerrain clearfix">
                                    <span class="nom">By pass</span>
                                    <span class="surface">600 m²</span>
                                </div>

                                <div class="description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lacinia convallis justo, eget ornare nibh ornare vel. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="itemTerrain">
                                <div class="terrainSlider">
                                    <img src="<?php echo get_template_directory_uri();?>/images/terrain_thumb.jpg" alt="">
                                    <img src="<?php echo get_template_directory_uri();?>/images/terrain_thumb.jpg" alt="">
                                    <img src="<?php echo get_template_directory_uri();?>/images/terrain_thumb.jpg" alt="">
                                </div>
                                
                                <div class="infosTerrain clearfix">
                                    <span class="nom">By pass</span>
                                    <span class="surface">600 m²</span>
                                </div>

                                <div class="description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lacinia convallis justo, eget ornare nibh ornare vel. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="itemTerrain">
                                <div class="terrainSlider">
                                    <img src="<?php echo get_template_directory_uri();?>/images/terrain_thumb.jpg" alt="">
                                    <img src="<?php echo get_template_directory_uri();?>/images/terrain_thumb.jpg" alt="">
                                    <img src="<?php echo get_template_directory_uri();?>/images/terrain_thumb.jpg" alt="">
                                </div>
                                
                                <div class="infosTerrain clearfix">
                                    <span class="nom">By pass</span>
                                    <span class="surface">600 m²</span>
                                </div>

                                <div class="description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lacinia convallis justo, eget ornare nibh ornare vel. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="itemTerrain">
                                <div class="terrainSlider">
                                    <img src="<?php echo get_template_directory_uri();?>/images/terrain_thumb.jpg" alt="">
                                    <img src="<?php echo get_template_directory_uri();?>/images/terrain_thumb.jpg" alt="">
                                    <img src="<?php echo get_template_directory_uri();?>/images/terrain_thumb.jpg" alt="">
                                </div>
                                
                                <div class="infosTerrain clearfix">
                                    <span class="nom">By pass</span>
                                    <span class="surface">600 m²</span>
                                </div>

                                <div class="description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lacinia convallis justo, eget ornare nibh ornare vel. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="itemTerrain">
                                <div class="terrainSlider">
                                    <img src="<?php echo get_template_directory_uri();?>/images/terrain_thumb.jpg" alt="">
                                    <img src="<?php echo get_template_directory_uri();?>/images/terrain_thumb.jpg" alt="">
                                    <img src="<?php echo get_template_directory_uri();?>/images/terrain_thumb.jpg" alt="">
                                </div>
                                
                                <div class="infosTerrain clearfix">
                                    <span class="nom">By pass</span>
                                    <span class="surface">600 m²</span>
                                </div>

                                <div class="description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lacinia convallis justo, eget ornare nibh ornare vel. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" id="dynamicMap">
                    
                </div>

            </div>

        </div>

        <?php
		endwhile;
		wp_reset_query();
		?>

<?php get_footer();?>