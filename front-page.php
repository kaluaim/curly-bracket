<?php get_header(); ?>

  <div class="container">
    <div class="row">

      <?php get_sidebar(); ?>

      <div class="col-md-9 col-sm-12 posts">

        <?php if ( have_posts() ) : ?>

<!-- Add the pagination functions here. -->

<!-- Start of the main loop. -->
<?php while ( have_posts() ) : the_post();  ?>

<!-- the rest of your theme's main loop -->
<article class="post">
            <p class="date"><?php echo the_time('l, F jS, Y'); ?></p>
            <p class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
            <p class="description">
              in <?php the_category(', '); ?>.
              <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
            </p>

            <!-- <?php the_excerpt(); ?> -->
            <?php the_content(); ?>

            <hr/>
          </article>
<?php endwhile; ?>
<!-- End of the main loop -->

<!-- Add the pagination functions here. -->


<nav>
  <ul class="pager">
    <li class="next"><?php previous_posts_link( 'Newer' ); ?></li>
    <li class="previous"><?php next_posts_link( 'Older' ); ?></li>
  </ul>
</nav>

<?php else : ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

      </div>



    </div>


    </div> <!-- /container -->
    <?php get_footer(); ?>
