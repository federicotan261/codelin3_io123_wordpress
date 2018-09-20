<?php
/**
 * The template for displaying search forms in Unite
 *
 * @package unite
 */
  
 ?>
 
 
<form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url(home_url('/')); ?>">
  <label class="sr-only"><?php _e('Search for:', 'unite'); ?></label>
  <div class="input-group">
    <input type="search" value="<?php echo get_search_query(); ?>" name="s" class="search-field form-control" placeholder="<?php _e('Search...', 'unite'); ?>">
    <span class="input-group-btn">
      <button type="submit" class="search-submit btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
    </span>
  </div>
  <div>
  <h2>Recent Films</h2>
	<ul>
	<?php
		$recent_posts = wp_get_recent_posts(array('numberposts' => 5, 'post_type'=>'films', 'orderby' => 'post_date'));
		foreach( $recent_posts as $recent ){
			echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
		}
	?>
	</ul>

  </div>
</form>

