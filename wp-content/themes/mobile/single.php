<?php  
	global $nhamang;
	$nhamang = 'viettel';
	global $list_post;
	$cur = get_queried_object_id();;
	$category = get_the_terms(get_the_ID(), 'category');
    $term = get_term( $cur, 'category' );
    switch ($category[0]->term_id) {
    	case 10:
		case 9:
    		$nhamang = 'mobifone';
    		break;
    	case 7:
		case 4:
    		$nhamang = 'vinaphone';
    		break;
    	case 15:
		case 16:
    		$nhamang = 'viettel';
    		break;
    	default:
    		$nhamang = 'vinaphone';
    		break;
    }
	//var_dump($category);die();
?>
<?php get_header(); ?>
<?php
    $provider = $nhamang;	  
    $category = get_the_category();
    $category_id = $category[0]->term_id;
?>
<div class="container" style="padding: 0px 10px;">
	<div style="height: 30px;"></div>
	<?php if(have_posts()):while(have_posts()):the_post(); ?>
		<h1 class="entry-title clink cgray font20"><b><?php echo get_the_title(); ?></b></h1>
                <div class="post-item" style="text-align: center" >
                     <a class="photo"  title="<?= the_title(); ?>">
                         <img class="home_thumb img-scale" src="<?= the_post_thumbnail_url( ) ?>" alt="<?= the_title(); ?>" >
                     </a>
                </div>
		<div class="entry-content">
			<?php the_content(); ?>		
		</div>
		<div class="screen-width" style="background-color: #fff;width: 100%">
            <div class="fb-comments" data-href="<?php echo get_permalink(); ?>" data-numposts="5" data-width="100%" data-order-by="reverse_time"></div>
        </div>
	<?php endwhile; ?>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
	<?php include('box-tintuc.php'); ?>
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