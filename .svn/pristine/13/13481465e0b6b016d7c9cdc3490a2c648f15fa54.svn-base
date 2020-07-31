<?php global $nhamang; ?>
<?php $nhamang = 'viettel'; ?>
<?php get_header($nhamang); ?>
	<div class="container">
		<div style="height: 20px;"></div>
			<?php  
				$terms = get_terms( array(
				    'taxonomy' => 'nhom_goi_cuoc',
				    'hide_empty' => false,
				    'orderby' => 'term_order',
					'order' => 'ASC',
				    'parent'   => 20
				) );
			?>
			<div class="row">
				<?php foreach($terms as $term) : ?>
				<div class="col-xs-4">
					<div class="goicuoc-item" style="background-color: #f1f7fb; padding: 20px 20px; margin-bottom: 15px;" >
						<a href="<?php echo get_term_link( $term->term_id, 'nhom_goi_cuoc' ); ?>">
							<p style="margin-bottom: 0px; text-align: center; text-transform: uppercase;">
								<strong><?php echo $term->name; ?></strong>
							</p>
						</a>
					</div>	
				</div> 
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			</div>
	</div>
<?php get_footer($nhamang); ?>
