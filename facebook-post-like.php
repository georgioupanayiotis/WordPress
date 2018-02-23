<?php
//get facebook post like for WordPress permalink http://www.example.com/Year/Month/post-slug/
<iframe src="http://www.facebook.com/plugins/like.php?href=<?php
  $test1 = 'http://www.example.com/';
  $test2 =  get_the_date('Y/m/');
  $test3 = get_post_field( 'post_name', get_post());
  $all = (string)$test1.$test2.$test3.'/';
  echo urlencode($all);
  ?>&layout=button_count&show_faces=false&width=350&height=35&appId=1405002166492976&size=large&amp;action=like&amp;colorscheme=dark"
  scrolling="no" frameborder="0" allowTransparency="true" >
  </iframe>
  
//share button example in your theme, open your single.php template file and add this where you want the link to appear:
<a href="https://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink($post->ID)); ?>&t=<?php echo urlencode($post->post_title); ?>">Share on Facebook</a>
?>
