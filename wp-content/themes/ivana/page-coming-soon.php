<?php 
/*
Template name: coming soon*/?>
<!DOCTYPE HTML>
<html>
<head>
	<title><?php wp_title( '|', true, 'right' ); ?>IVANA</title>
	<meta http-equiv="content-type" content="text/html" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="author" content="lolkittens" />
    <link rel="icon" href="<?php bloginfo( 'template_url' ); ?>/images/favicon.ico"/>
    <link href="<?php bloginfo( 'template_url' ); ?>/style.css" rel="stylesheet"/>
    <link href="<?php bloginfo( 'template_url' ); ?>/css/lib/bootstrap.css" rel="stylesheet"/>
   
    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/lib/jquery.js"></script>
    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/lib/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/custom.js"></script>
    
    
    
</head>
<?php  wp_head();?>
<body class="bodyComing">
    <div class="contentPageCome">
        <div class="text-center">
            <img src="<?php bloginfo( 'template_url' ); ?>/images/logo.png" width="122" alt="ivana" />
        </div>
         <?php while(have_posts()) : the_post(); ?>
        <div class="top">
            <div class="titre"><span>On se refait une beauté</span>, vous risquez d'être surpris </div>
            <p>Rendez-vous le <span>01 juin 2018</span></p>
        </div>
        <div class="countdown">
            <?php dynamic_sidebar( 'sidebar' ); ?>
        </div>
        <div class="formNewsletter">
            <label>Laissez-nous vos coordonnées  pour que vous soyez informé</label>
            <div class="contentForm">
            <?php the_content();?>
            </div>
        </div>
        <?php
		endwhile;
		wp_reset_query();
	?>
    </div>
</body>
<?php  wp_footer();?>