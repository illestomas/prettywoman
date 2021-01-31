<?php

get_header(); ?>

<div class="placeholder">
  <?php dynamic_sidebar('smartslider_area_1'); ?>
</div>
<div class="container">
<ul class="posts">
  <?php
if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
																								  <li class="post-tab">
																								    <a href="">
																								      <?php if (has_post_thumbnail()) { ?>
																								      <div class="post-thumbnail">
																								        <?php the_post_thumbnail(); ?>
																								      </div>
																								      <?php } ?>
												      <h3><?php the_title(); ?></h3>
												                              <div class="excerpt"><?php the_excerpt(); ?></div>
												    </a>
												  </li>
												  <?php
    }
} else { ?>
	<p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
<?php }?>
</ul>
</div>
<?php
get_footer();
