<?php


get_header(); ?>

<div class="placeholder">
  <?php dynamic_sidebar('smartslider_area_1'); ?>
</div>

<?php

 if ( have_posts() ) : while ( have_posts() ) : the_post();
  the_content();
  endwhile; endif;

get_footer();
