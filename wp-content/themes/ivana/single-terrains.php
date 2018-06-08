<?php
/*Template name: Terrains detail*/
get_header();
$pageid = get_the_id();
$terrains = CTerrain::getBy();
$gallery = CTerrain::getTerrainGallery($pageid);
$defaut_ariary = DEFAULT_ARIARY;
  var_dump(getTerrainPrice("25"));
?>


<div id="terrain-single-slider">
     <?php  if( count($gallery) ):?>
        <?php  foreach($gallery as $image): ?>
            <?php   $full_image_url= $image['full_image_url'];
                    $title = $image['title'];   ?>
                <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
        <?php endforeach; ?>
     <?php endif; ?>
  
</div>
<main class="main_single sidebar-right" id="page-interne">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1><?php echo the_title();?></h1>
                <p><?php echo the_content();?></p>
                <table class="table table-striped" id="descriptionTable">
                    <tbody>
                    <tr>
                        <td><strong>Surface</strong></td>
                        <td><?php the_field("surface");?></td>
                    </tr>
                    <tr>
                        <td><strong>Prix du m²</strong></td>
                        <td class="prixTerrain">
                            <?php the_field("prix_du_m");?>
                            <div class="infos">
                                <i class="status up"></i>
                                <i class="help">
                                    ?
                                    <div class="infobulle">
                                        Lorem ipsum dolor sit amet
                                    </div>
                                </i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Distance</strong></td>
                        <td><?php the_field("distance");?></td>
                    </tr>
                    <tr>
                        <td><strong>Durée</strong></td>
                        <td><?php the_field("duree");?></td>
                    </tr>
                    <tr>
                        <td><strong>Jirama</strong></td>
                        <td><?php the_field("jirama");?></td>
                    </tr>
                    <tr>
                        <td><strong>Accès voiture</strong></td>
                        <td><?php the_field("acces_voiture");?></td>
                    </tr>
                    <tr>
                        <td><strong>Centre commercial à proximité</strong></td>
                        <td><?php the_field("centre_commercial_a_proximite");?></td>
                    </tr>
                    <tr>
                        <td><strong>Etablissement au allentour</strong></td>
                        <td><?php the_field("etablissement_au_alentour");?></td>
                    </tr>

                    <!--tr>
                        <td><strong>Lorem ipsum</strong></td>
                        <td>Batou beach, dolor sit amet</td>
                    </tr-->
                    </tbody>
                </table>
            </div>

            <div class="col-md-4">
                <div class="contact-widget">
                    <span class="head-title">
                        Laissez-nous vos coordonnées et restons en contact
                    </span>
                    <div id="widgetForm">
                        <?php echo do_shortcode('[mc4wp_form id="224"]');?>
                    </div>
                </div>

                <div class="relativePosts-widget">
                    <span class="title">
                        Vous en voulez d'autres ?
                    </span>

                    <div id="similarSlide">
                         <?php foreach ($terrains as $terrain):
                                $gallery = CTerrain::getTerrainGallery($terrain->id);  ?>
                        <div class="wrap">
                            <a class="item" href="<?php echo get_permalink($terrain->id); ?>" >
                              <?php  $image = $gallery[0];
                                     $full_image_url= $image['thumbnail_image_url'];
                                     $full_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160);
                                     $title = $image['title'];   ?>
                                <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
                                <div class="infosTerrain clearfix">
                                    <span class="nom"><?php echo $terrain->title; ?></span>
                                    <span class="surface"><?php echo $terrain->surface;?></span>
                                </div>
                            </a>
                        </div>
                          <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();?>