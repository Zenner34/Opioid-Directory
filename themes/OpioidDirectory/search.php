<?php get_header();?>
  <div class="row content">
    <div class="col-md-8">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <?php // Get number of results
                $results_count = $wp_query->found_posts;
            ?>

            <h1>Search <span class="keyword">&ldquo;<?php the_search_query(); ?>&rdquo;</span></h1>
            <?php if ($results_count == '' || $results_count == 0) { // No Results ?>
                <p><span class="label label-danger"><?php _e('No Results'); ?></span>&nbsp; <?php _e('Try different search terms.'); ?></p>
            <?php } else { // Results Found ?>
                <p><span class="label label-success"><?php echo $results_count . __(' Results'); ?></span></p>
            <?php } // end results check ?>
        
            <div class="col-md-12">
                <?php get_search_form(); ?>
            </div>
    
            <div class="row">
                <div class="col-md-12">
                    <?php if (have_posts()) : // Results Found ?>
                        <h1><?php _e('Search Results'); ?></h1>
                        <?php while (have_posts()) : the_post(); ?>
                            <article <?php post_class(); ?>>
                                <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                                <div class="entry">
                                    <p><?php echo wp_trim_words( get_the_excerpt(), 30, '...' ); ?></p>
                                </div>
                            </article>
                            <hr />
                        <?php endwhile; ?>
                        <ul class="pager">
                            <li><?php next_posts_link('<i class="icon-chevron-left"></i>&nbsp; Older Results') ?></li>
                            <li><?php previous_posts_link('Newer Results &nbsp;<i class="icon-chevron-right"></i>') ?></li>
                        </ul>

                    <?php else : // No Results ?>

                        <p><?php _e('Sorry. We couldn&rsquo;t find anything for that search. View one of our site&rsquo;s pages or a recent article below.'); ?></p>
                        <div class="row">
                            <div class="col-md-6 posts">
                                <h3><?php _e('Recent Articles'); ?></h3>
                                <ul>
                                    <?php
                                        $args = array(
                                            'numberposts' => '10',
                                            'post_status' => 'publish'
                                        );
                                        $recent_posts = wp_get_recent_posts( $args );
                                        foreach( $recent_posts as $recent ) {
                                            echo '<li><a href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"] . '</a></li>';
                                        }
                                    ?>
                                </ul>
                            </div> <!-- .posts -->
                            <div class="col-md-6 pages">
                                <h3><?php _e('Page Sitemap'); ?></h3>
                                <ul>
                                    <?php wp_list_pages('title_li=&sort_column=menu_order'); ?>
                                </ul>
                            </div> <!-- .pages -->
                        </div> <!-- .row -->
                    <?php endif; ?>
                </div> <!-- .col-md-12 -->
            </div>
        </article>
         </div> <!-- .row -->

        <?php get_sidebar(); ?>

  </div>
  <?php get_footer();?>
