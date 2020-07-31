<?php global $nhamang; ?>
<?php $nhamang = 'vinaphone'; ?>
<?php  
	$terms = get_terms( 'nhom_goi_cuoc', 
		array(
	    'hide_empty' => false,
	    'orderby' => 'term_order',
		'order' => 'ASC',
	    'parent'   => 19
	) );
	$terms = array_chunk($terms, 6);
?>
<?php get_header(); ?>
	<div class="container">
		<div style="height: 20px;"></div>
		<div class="slide1 loop owl-carousel owl-theme owl-loaded owl-drag" style="height: 300px;">
			<?php foreach($terms as $term) : ?>
			<div class="row">
				<?php foreach($term as $value) : ?>
				<div class="col-xs-6">
					<div class="goicuoc-item">
						<a href="<?php echo get_term_link( $value->term_id, 'nhom_goi_cuoc' ); ?>">
							<p>
								<?php echo $value->name; ?>
							</p>
						</a>
					</div>	
				</div> 
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			</div>
			<?php endforeach; ?>
		</div>
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