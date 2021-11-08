<?php 
   if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly 
?>

<h3><?php echo $custom_text; ?></h3>
<p><?php echo $sample_text; ?></p>
<ul class="gcod-popular-posts">
   <?php
   $args = array('numberposts' => $post_count);
   $recent_posts = wp_get_recent_posts($args);
   foreach ($recent_posts as $recent) {
      echo '<li><a href="' . esc_url(get_permalink($recent["ID"])) . '">' .   esc_html($recent["post_title"]) . '</a> </li> ';
   }
   wp_reset_query();
   ?>
</ul>