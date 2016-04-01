<?php get_header();?>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
          <h1><?php the_title(); ?></h1>
          <?php  if (have_posts()) :
            while (have_posts()) :
              the_post();
              the_content();
            endwhile;
          endif;?>
        </article>
      </div>
    </div>
<?php get_footer(); ?>