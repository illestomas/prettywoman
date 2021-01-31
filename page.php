<?php

/**
 * @file
 * Description asdasd
 */


get_header(); ?>

<?php if(!is_front_page()) {

    ?>
<div class="placeholder">
  <?php dynamic_sidebar('smartslider_area_1'); ?>
</div>

<?php
  } else {
    echo do_shortcode('[smartslider3 slider="2"]');
  }
    ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
  the_content();
  endwhile; endif;
 ?>

<?php get_footer(); ?>