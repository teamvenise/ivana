<?php
/*Template name: Terrains detail*/
get_header();?>

<?php while(have_posts()) : the_post(); ?>
<div id="terrain-single-slider">
    <img src="<?php the_field("image_01");?>" alt="">
    <img src="<?php the_field("image_02");?>" alt="">
    <img src="<?php the_field("image_03");?>" alt="">
    <img src="<?php the_field("image_04");?>" alt="">
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
                        <?php 

                			$args=array('post_type'=>'terrains','posts_per_page'=>-1,'order'=>'ASC');
                			$loop=new WP_Query ($args);
                			while($loop->have_posts()):$loop->the_post();
                        ?>
                        <div class="wrap">
                            <a class="item">
                                <img src="<?php the_field("image_01");?>" alt="">
                                <div class="infosTerrain clearfix">
                                    <span class="nom"><?php the_title();?></span>
                                    <span class="surface"><?php the_field("surface");?></span>
                                </div>
                            </a>
                        </div>
                         <?php
                    		endwhile;
                    		wp_reset_query();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    endwhile;
    wp_reset_query();
?>
<?php get_footer();?>