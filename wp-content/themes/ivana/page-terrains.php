<?php 
/*
Template name: Terrains*/
get_header();
$terrains = CTerrain::getBy(6);

?>
<main class="main_home" id="page-interne">
    <div class="container">
        <div class="row">

            <div class="col-md-6 terrain-left">
                <h1><?php echo the_title();?></h1>
                <p><?php //the_content();?></p>

                <!-- Terrain liste -->
                <div class="row">
                    <?php foreach ($terrains as $terrain):
                        $gallery = CTerrain::getTerrainGallery($terrain->id);
                    ?>
                    <div class="col-md-6 col-sm-6">
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
                                <p>Terrain à vendre à <?php echo $terrain->title; ?> à partir de <?php echo $terrain->prix_du_m; ?>€ le m2.</p>
                            </div>
                        </div>
                    </div>
                   
                    <?php endforeach; ?>

                    <div class="pagination col-md-12">
                        <div class="wp-pagenavi">
                        <?php
                        $the_terrain = new WP_Query(array('post_type' => 'terrains','posts_per_page' => 6,'paged'=> get_query_var('paged') ));
                        if(function_exists('wp_pagenavi')) { wp_pagenavi(array('query'=> $the_terrain));} ?>
                            <?php wp_reset_postdata();?>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php get_sidebar("terrain");?>

        </div>

    </div>

<?php get_footer();?>