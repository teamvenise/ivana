<?php 
/*
Template name: inscription*/
get_header();

?>
     
    <?php while(have_posts()) : the_post(); ?>
    <main class="main_home page_inscription" id="page_insript_plan">

        <div class="container">
            <div class="row">
                <div class="col-sm-5"></div>
                <div class="col-sm-7">
                  

                    <?php echo  the_content();?>

                </div>
            </div>
        </div>
        <?php
		endwhile;
		wp_reset_query();
		?>
<?php get_footer();?>