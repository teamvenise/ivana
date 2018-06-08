<?php
/*Template name: comment ce marche*/
get_header();?>
<?php while(have_posts()) : the_post(); ?>
<main class="main_home comment" id="page-interne"> 
    <div class="container text-center textTop">
        <h1><?php the_title();?></h1>
        <hr />
        <h2><?php the_content();?></h2>
    </div>
    <div class="blocGris">
        <div class="container">
            <div class="blocTxt">
                <div class="texte">
                    <h3>Le clé en main personnalisé</h3>
                    <p><?php the_field("paragraphe_01");?></p>
                </div>
                <div class="photo">
                    <img src="<?php bloginfo( 'template_url' ); ?>/images/cles.svg" />
                </div>
            </div>
        </div>
    </div>  
    <div class="blocGbl">
        <div class="container">
            <div class="blocTxt reverse">
                <div class="texte">
                    <h3>Un interlocuteur unique dédié</h3>
                    <p><?php the_field("paragraphe_02");?></p>
                </div>
                <div class="photo">
                    <img src="<?php bloginfo( 'template_url' ); ?>/images/interlocuteur.svg" />
                </div>
            </div>
        </div>
    </div> 
    <div class="blocGris">
        <div class="container">
            <div class="blocTxt">
                <div class="texte">
                    <h3>Pas de surprise</h3>
                    <p><?php the_field("paragraphe_03");?></p>
                </div>
                <div class="photo">
                    <img src="<?php bloginfo( 'template_url' ); ?>/images/contract.svg" />
                </div>
            </div>
        </div>
    </div>
    <section class="fullSection bloc-rdv centered">
        <div class="container text-center">
            <h2>Et si on en parlait autour d’un cafe?</h2>
            <?php get_sidebar("modal-reservation");?>
        </div>
    </section>
</main>

<?php
	endwhile;
	wp_reset_query();
?>
<?php get_footer();?>