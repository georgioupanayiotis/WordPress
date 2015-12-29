<?php
   $postslist = get_posts('numberposts=3&order=DESC&orderby=date');
   foreach ($postslist as $post) :
      setup_postdata($post);
   ?>
   <div class="entry">
   <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
   <?php the_time(get_option('date_format')) ?>
   <?php the_excerpt(); ?>
   </div>
 <?php endforeach; ?>
