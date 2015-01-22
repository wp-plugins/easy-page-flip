<?php
function chr_pageflip_list($post_count = 5, $order_revista = 'DESC', $define_thumbnail = 'thumbnail') {
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$loop_pageflip = new WP_Query(
	array(
		'post_type' => 'pageflip',
		'posts_per_page' => $post_count,
		'nopaging' => false,
		'order' => $order_revista,
		'paged' => $paged
	)
);
echo '<ul class="ul-list-easy-pageflip">';
	if($loop_pageflip->have_posts()) { echo ""; } while ( $loop_pageflip->have_posts() ) : $loop_pageflip->the_post();
?>
 	<li class="li-easy-pageflip">
 		<h4><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h4>
 		<?php echo '<a href="'.get_permalink().'" title="'.the_title('', '', false).'" >'; if ( has_post_thumbnail()) { the_post_thumbnail($define_thumbnail); }else{ echo '<img src="'. plugins_url('/images/not-image.jpg' , __FILE__ ) .'" class="attachment-thumbnail wp-post-image" style="width: 150px; height: 150px;" alt="'.the_title('', '', false).'" title="'.the_title('', '', false).'" />'; } echo '</a>'; ?>
	</li>
	<?php endwhile;
	if(function_exists('wp_pagenavi')) {
		wp_pagenavi( array( 'query' => $loop_pageflip ));
	} else {
		if($loop_pageflip->max_num_pages>1){
	?>
		<p class="chr-default-pagination">
	    <?php if ($paged > 1) { ?>
	    	<a href="<?php echo '?paged=' . ($paged -1); //prev link ?>">&laquo;</a>
	    <?php } for($i=1;$i<=$loop_pageflip->max_num_pages;$i++){ ?>
	    	<a href="<?php echo '?paged=' . $i; ?>" <?php echo ($paged==$i)? 'class="selected"':'';?>><?php echo $i;?></a>
	    <?php } if($paged < $loop_pageflip->max_num_pages){ ?>
	    	<a href="<?php echo '?paged=' . ($paged + 1); //next link ?>">&raquo;</a>
	    <?php } ?>
	    </p>
	<?php }
	}
	?>
</ul>
<?php if($loop_pageflip->have_posts()) { echo "";}
}