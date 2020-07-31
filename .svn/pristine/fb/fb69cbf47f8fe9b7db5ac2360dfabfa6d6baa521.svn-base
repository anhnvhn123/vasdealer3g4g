<?php  
	global $nhamang;
	$nhamang = 'viettel';
	global $list_post;
	$cur = get_queried_object_id();
    $term = get_term( $cur, 'category' );
    switch ($term->term_id) {
    	case 10:
    		$nhamang = 'mobifone';
    		break;
    	case 7:
    		$nhamang = 'vinaphone';
    		break;
    	case 15:
    		$nhamang = 'viettel';
    		break;
    	default:
    		$nhamang = 'vinaphone';
    		break;
    }
?>
<?php get_header(); ?>
	<div class="container">
		<div style="height: 20px;"></div>
		<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
		<div class="post-item">
			<a href="<?php echo get_permalink(); ?>">
				<div class="col-md-3 col-xs-3">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>">
				</div>
				<div class="col-md-9 col-xs-9" style="padding-left: 0px;">
					<b>
						<?php echo get_the_title(  ); ?>
					</b>
				</div>
			</a>
		</div>
		<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
		<div class="pagination">
			<?php echo paginate_links(array(
				'prev_text'          => __('< Trước'),
				'next_text'          => __('Tiếp >'),
			)); ?>
		</div>
		<div style="height: 100px;"></div>
	</div>
<?php get_footer(); ?>
<style type="text/css">
	.tin-tuc img.img-down{
		display: block !important;
	}
	.goi-cuoc img.img-down{
		display: none !important;
	}
</style>