<?php
/*To implement this dynamic copyright date in your WordPress footer, 
  open your theme’s functions.php file and add the following code:*/
  
    function comicpress_copyright() {
      global $wpdb;
      $copyright_dates = $wpdb->get_results("
      SELECT
      YEAR(min(post_date_gmt)) AS firstdate,
      YEAR(max(post_date_gmt)) AS lastdate
      FROM
      $wpdb->posts
      WHERE
      post_status = 'publish'
      ");
      $output = '';
      if($copyright_dates) {
      $copyright = "&copy; " . $copyright_dates[0]->firstdate;
      if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
      $copyright .= '-' . $copyright_dates[0]->lastdate;
      }
      $output = $copyright;
      }
      return $output;
    }
?
/*Then open your theme’s footer.php file and add the following code where you want to display the date:*/

<?php echo comicpress_copyright(); ?>
