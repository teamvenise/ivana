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