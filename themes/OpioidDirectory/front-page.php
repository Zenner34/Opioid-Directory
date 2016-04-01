<?php get_header();?>
<?php require("configure.php"); ?>
  <div class="container">
        <div class="row">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
                <h1><?php the_title(); ?></h1>
                <?php  if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                        the_content();
                    endwhile;
                endif;?>
            </article>
            <div class="col-md-12 text-center">
                <h2>Get Help Now</h2>
            </div>
            <div class="col-md-3 col-md-offset-3 lookup">
                <?php include_once('state.php'); ?>
            </div>
                        
            <div class="col-md-3 lookup">
                <div id="cities"></div>
            </div>
            <div class="col-md-12 facilities">
                <div id="facilityInfo"></div>
            </div>       
        </div>
<?php get_footer(); ?>