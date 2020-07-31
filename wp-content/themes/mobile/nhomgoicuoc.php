<?php
/*
 * Template Name: Nhom goi cuoc
 * Template Post Type: page
 */
?>
<?php get_header(); ?>
	<div class="container">
		<div style="height: 20px;"></div>
		<div class="slide1 loop owl-carousel owl-theme owl-loaded owl-drag" style="height: 300px;">
			<?php for($i = 0; $i <=4 ; $i++) : ?>
			<?php  
				$terms = get_terms( array(
				    'taxonomy' => 'nhom_goi_cuoc',
				    'hide_empty' => false,
				    'number'	=> 6,
				    'offset'	=> $i * 6
				) );
			?>
			<div class="row">
				<?php foreach($terms as $term) : ?>
				<div class="col-xs-6">
					<div class="goicuoc-item">
						<a href="<?php echo get_term_link( $term->term_id, 'nhom_goi_cuoc' ); ?>">
							<p>
								<?php echo $term->name; ?>
							</p>
						</a>
					</div>	
				</div> 
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			</div>
			<?php endfor; ?>
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
		    autoHeight: true,
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