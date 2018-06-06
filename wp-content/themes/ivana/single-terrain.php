<?php
/*Template name: Terrains detail*/
get_header();?>

<?php while(have_posts()) : the_post(); ?>
<div id="terrain-single-slider">
    <img src="<?php echo get_template_directory_uri();?>/images/slides/slider_1.jpg" alt="">
    <img src="<?php echo get_template_directory_uri();?>/images/slides/slider_1.jpg" alt="">
    <img src="<?php echo get_template_directory_uri();?>/images/slides/slider_1.jpg" alt="">
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
                        <td>600 M²</td>
                    </tr>
                    <tr>
                        <td><strong>Prix du m²</strong></td>
                        <td><strong>25 €</strong> (80 000Ar)</td>
                    </tr>
                    <tr>
                        <td><strong>Distance</strong></td>
                        <td>Seulement à 12km du centre ville</td>
                    </tr>
                    <tr>
                        <td><strong>Durée</strong></td>
                        <td>à 15min du centre ville</td>
                    </tr>
                    <tr>
                        <td><strong>Jirama</strong></td>
                        <td>Oui</td>
                    </tr>
                    <tr>
                        <td><strong>Accès voiture</strong></td>
                        <td>Oui</td>
                    </tr>
                    <tr>
                        <td><strong>Centre commercial à proximité</strong></td>
                        <td>Shoprite, Leader price</td>
                    </tr>
                    <tr>
                        <td><strong>Etablissement au allentour</strong></td>
                        <td>Collège de France, La pepinière</td>
                    </tr>

                    <tr>
                        <td><strong>Lorem ipsum</strong></td>
                        <td>Batou beach, dolor sit amet</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-md-4">
                <div class="contact-widget">
                    <span class="head-title">
                        Laissez-nous vos coordonnées et restons en contact
                    </span>
                    <form id="widgetForm" method="post">
                        <input type="text" placeholder="Nom">
                        <input type="text" placeholder="E-mail">
                        <button type="submit" value="Envoyer" class="btn btnType">Envoyer</button>
                    </form>
                </div>

                <div class="relativePosts-widget">
                    <span class="title">
                        Vous en voulez d'autres ?
                    </span>

                    <div id="similarSlide">
                        <div class="wrap">
                            <a class="item">
                                <img src="<?php echo get_template_directory_uri();?>/images/slides/alasora_terr.jpg" alt="">
                                <div class="infosTerrain clearfix">
                                    <span class="nom">Alasora</span>
                                    <span class="surface">1172 m²</span>
                                </div>
                            </a>
                        </div>
                        <div class="wrap">
                            <a class="item">
                                <img src="<?php echo get_template_directory_uri();?>/images/slides/alasora_terr.jpg" alt="">
                                <div class="infosTerrain clearfix">
                                    <span class="nom">Alasora</span>
                                    <span class="surface">1172 m²</span>
                                </div>
                            </a>
                        </div>
                        <div class="wrap">
                            <a class="item">
                                <img src="<?php echo get_template_directory_uri();?>/images/slides/alasora_terr.jpg" alt="">
                                <div class="infosTerrain clearfix">
                                    <span class="nom">Alasora</span>
                                    <span class="surface">1172 m²</span>
                                </div>
                            </a>
                        </div>
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