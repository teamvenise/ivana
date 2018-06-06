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

    <link href="<?php bloginfo( 'template_url' ); ?>/css/lib/star-rating.css" rel="stylesheet"/>

    <link href="<?php bloginfo( 'template_url' ); ?>/css/lib/bootstrap-datetimepicker.min.css" rel="stylesheet"/>

    <link href="<?php bloginfo( 'template_url' ); ?>/css/mobile.css" rel="stylesheet"/>

    <link href="<?php bloginfo( 'template_url' ); ?>/css/pageStyle.css" rel="stylesheet"/>

    <link href="<?php bloginfo( 'template_url' ); ?>/css/lib/slick.css" rel="stylesheet"/>

    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/lib/jquery.js"></script>

    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/lib/slick.js"></script>

    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/lib/bootstrap.min.js"></script>

    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/lib/scrollreveal.js"></script>

    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/lib/star-rating.js"></script>

    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/lib/moment.min.js"></script>

    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/lib/fr.js"></script>

    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/lib/bootstrap-datetimepicker.js"></script>

    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/lib/scrollreveal.js"></script>

    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/custom.js"></script>

    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/rating.js"></script>
  

</head>

<?php  wp_head();?>

<body class="">

    <input type="hidden" id="valuPlan" />

    <header>

       <div class="container relative">

            <div class="logo text-center">

                <a href="<?php echo get_settings('home'); ?>">

                    <img src="<?php bloginfo( 'template_url' ); ?>/images/logo.png" class="img-responsive"  />

                </a>

            </div>

            <div class="menuHeader">

                <div class="navbar-header ">

                    <button type="button" class="navbar-toggle">

                        <span class="icon-bar"></span>

                    </button>    

                </div>

                <div class="mehuHeader">

                    <nav class="navMenu">

                        <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => '', 'items_wrap' => '<ul class="pull-left nav navbar-nav main-nav">%3$s</ul>',)); ?>

                        

                    </nav>

                </div>

            </div>

        </div>

    </header>