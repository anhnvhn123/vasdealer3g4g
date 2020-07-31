<?php  
	global $nhamang;
	$nhamang = 'viettel';
	global $list_post;
	$cur = get_queried_object_id();
    $term = get_term( $cur, 'nhom_goi_cuoc' );
    switch ($term->parent) {
    	case '18':
    		$nhamang = 'mobifone';
    		break;
    	case '19':
    		$nhamang = 'vinaphone';
    		break;
    	case '20':
    		$nhamang = 'viettel';
    		break;
    	default:
    		$nhamang = 'vinaphone';
    		break;
    }
?>
<?php get_header(); ?>

<?php 
	global $wp_query;
	$wp_query = new WP_Query( array(
		'posts_per_page' =>40,
		'post_status'	=> 'publish',
		'post_type' => 'goi_cuoc_chi_tiet',
		'tax_query' => array(
		    array(
			    'taxonomy' => 'nhom_goi_cuoc',
			    'field' => 'term_id',
			    'terms' => $cur
		    )
		)

	) );
?>
<div class="container">
	<div style="height: 20px;"></div>

	<div class="">
		<div class="col-xs-12">
			<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs" class="bread">','</p>');} ?>
		</div>
	</div>
	<div style="height: 20px;" class="clear-fix"></div>
	<div class="slide1 loop owl-carousel owl-theme owl-loaded owl-drag" style="height: 300px;">
	
		<?php $dem = 1; ?>
		<?php if(have_posts()) :  while(have_posts()) : the_post(); ?>
		<?php $dem++; ?>
		<?php if($dem == 2 OR $dem == 10) : ?>
		<div class="row">		
		<?php endif; ?>
		<div class="col-xs-6">
			<div class="goicuocd1-item">
				<a href="<?php echo get_permalink(); ?>">
					<div class="ttu">
						<div class="col-xs-6 tal" style="color: #0095f8;">
							<b class="font16"><?php echo get_the_title(  ); ?></b>
						</div>
						<div class="col-xs-6 tar" style="color: #555555; padding-top: 5px;">
							<b class="font14"><?php echo get_field('toc_do'); ?></b>
						</div>
					</div>
				</a>
			</div>	
		</div>
		<?php if($dem == 9 OR $dem == 19) : ?>
		</div>		
		<?php endif; ?>
		<?php endwhile; endif;
		wp_reset_postdata();
		?>
	</div>
	</div> <!-- end slide1 -->
	<div style="height: 200px;"></div>
	<div class="clear-fix"></div>
</div>
<?php get_footer(); ?>
<script type="text/javascript">
	jQuery(function(){
		jQuery(".slide1").owlCarousel({
		    items:1,
		    loop:false,
		    nav: false,
		    autoplay: true,
		    autoHeight: false,
		    navText: ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
		    dots: true,
		    responsive:{
		        600:{
		            items:1
		        }
		    }

        });
	})
</script>
<style type="text/css">
	.tin-tuc img.img-down{
		display: none !important;
	}
	.goi-cuoc img.img-down{
		display: block !important;
	}
</style>