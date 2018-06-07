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
                    <p><?php the_content();?></p>
                    

                    <!-- Terrain liste à boucler -->
                    <div class="row">
                        <?php
                			$args=array('post_type'=>'terrains','posts_per_page'=>-1,'order'=>'ASC');
                			$loop=new WP_Query ($args);
                			while($loop->have_posts()):$loop->the_post();
                        ?>
                        <div class="col-md-4 col-sm-6">
                            <div href="<?php the_permalink(); ?>" class="itemTerrain">
                                <div class="terrainSlider">
                                    <img src="<?php the_field("image_01");?>" alt="">
                                    <img src="<?php the_field("image_02");?>" alt="">
                                    <img src="<?php the_field("image_03");?>" alt="">
                                </div>
                                
                                <a href="<?php the_permalink();?>" class="infosTerrain clearfix">
                                    <span class="nom"><?php the_title();?></span>
                                    <span class="surface"><?php the_field("surface");?></span>
                                </a>

                                <div class="description">
                                    <p><?php echo substr(get_the_excerpt(), 0,100); ?> </p>
                                </div>
                            </div>
                        </div>
                         <?php
                    		endwhile;
                    		wp_reset_query();
                        ?>                        

                        <div class="pagination col-md-12">
                            <div class="wp-pagenavi">
                                <a class="previouspostslink navigation" rel="prev" href="http://localhost/pleine-conscience/notre-blog/page/2/">«</a>
                                <a class="page smaller" title="Page 1" href="http://localhost/pleine-conscience/notre-blog/">1</a>
                                <a class="page smaller" title="Page 2" href="http://localhost/pleine-conscience/notre-blog/page/2/">2</a>
                                <span class="current">3</span>
                                <a class="nextpostslink navigation" rel="next" href="http://localhost/pleine-conscience/notre-blog/page/4/">»</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" id="map-canvas">

                <!-- Div popin -->
                <div href="<?php the_permalink(); ?>" class="itemTerrain">
                    <div class="terrainSlider">
                        <img src="<?php echo get_template_directory();?>/images/slides/alasora_terr.jpg" alt="">
                        <img src="<?php echo get_template_directory();?>/images/slides/alasora_terr.jpg" alt="">
                        <img src="<?php echo get_template_directory();?>/images/slides/alasora_terr.jpg" alt="">
                    </div>
                    
                    <a href="<?php the_permalink();?>" class="infosTerrain clearfix">
                        <span class="nom">Alasora</span>
                        <span class="surface">500 m²</span>
                    </a>

                    <div class="description">
                        <p><?php echo substr(get_the_excerpt(), 0,50); ?></p>
                    </div>
                </div>
                <!-- End div popin -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d30192.55605821789!2d47.5471958!3d-18.9283173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2smg!4v1528354379432" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

            </div>

        </div>

        <?php
		endwhile;
		wp_reset_query();
		?>

<?php get_footer();?>