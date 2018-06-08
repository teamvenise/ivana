<?php
/*Template name: Full page layout*/
get_header();?>
<main class="main_single" id="fullWidth-page">
<?php while(have_posts()) : the_post(); ?>
    <section class="fullSection grey centered">
        <div class="wrapper">
            <div class="head-page clearfix">
                <h1><?php the_title();?></h1>
                <img src="<?php echo get_template_directory_uri();?>/images/notre_pourquoi.jpg" >
                <img src="<?php echo get_template_directory_uri();?>/images/notre_pourquoi2.jpg" >
            </div>
            <?php the_content();?>

            <div class="the_founder">
                <strong class="name">Lilia Ratefiarivony</strong>
                <span class="post">Fondatrice et Manager</span>
            </div>
        </div>
    </section>
    <?php
	endwhile;
	wp_reset_query();
?>
    <section class="fullSection bloc-rdv centered">
        <div class="wrapper">
            <h2>Et si on en parlait autour d’un cafe?</h2>
            <?php get_sidebar("modal-reservation");?>
        </div>
    </section>
        
<?php get_footer();?>