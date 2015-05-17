<?php get_header(); ?>

  <div class="container">
    <div class="row">

      <?php get_sidebar(); ?>

      <div class="col-sm-9 posts">

        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

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

          <!-- <?php the_content(); ?> -->

        <?php endwhile; else: ?>

          <article>
            <h2>Oh no!</h2>
          </article>

          <p>No content is appearing for this page!</p>

        <?php endif; ?>

      </div>



    </div>


    </div> <!-- /container -->
    <?php get_footer(); ?>
