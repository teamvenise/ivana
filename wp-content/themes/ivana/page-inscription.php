<?php 
/*
Template name: inscription*/
get_header();?>
     
    <?php while(have_posts()) : the_post(); ?>
    <main class="main_home page_inscription">
        
        <div class="container">
            <div class="row">
                <div class="col-sm-5"></div>
                <div class="col-sm-7">
                    <h1>Lorem ipsum dolor sit amet, Lorem ipsum dolor </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent facilisis congue dictum. Duis feugiat rutrum augue,</p>
                    <?php the_content();?>
                    <form>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input class="form-control" placeholder="Nom" />
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control" placeholder="Prénom" />
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control" placeholder="E-mail" />
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control" placeholder="Téléphone" />
                            </div>
                            <div class="form-group col-md-12">
                                <input class="form-control" placeholder="Ville" />
                            </div>
                            <div class="col-md-12 text-right">
                                <input type="submit" value="s'inscrire" class="btn btnType" />
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
        <?php
		endwhile;
		wp_reset_query();
		?>
<?php get_footer();?>