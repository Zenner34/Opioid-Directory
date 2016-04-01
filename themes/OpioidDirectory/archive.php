<?php get_header();?>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
          <h1> Archive: <?php the_category(', '); ?>  </h1>
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>    
                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                <small><?php the_time('F jS, Y') ?> </small>
                <?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?>
                <?php the_excerpt(); ?>
                <p><a  class="btn btn-small btn-primary" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Continue Reading</a></p>
                <p class="postmetadata">Posted in <?php the_category(', '); ?></p>
              <?php endwhile; ?>
            <?php endif; ?>
        </article>
      </div>
    </div>
<?php get_footer(); ?>