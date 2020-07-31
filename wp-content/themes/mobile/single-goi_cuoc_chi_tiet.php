<?php  
	global $nhamang;
	$nhamang = 'viettel';
	global $list_post;
	$cur = get_queried_object_id();;
	$category = get_the_terms(get_the_ID(), 'nhom_goi_cuoc');
	$catid = ($category[0]->parent != 0) ? $category[0]->parent :  $category[0]->term_id;
    $term = get_term( $cur, 'nhom_goi_cuoc' );
    $classTelco = 'h2-minmax';
    $classPrice = '';
    switch ($catid) {
    	case '18':
    		$nhamang = 'mobifone';
            $classTelco = 'h2-minmax-mb';
            $classPrice = 'price-mb';
    		break;
    	case '19':
    		$nhamang = 'vinaphone';
            $classTelco = 'h2-minmax-vnp';
            $classPrice = 'price-vnp';
    		break;
    	case '20':
    		$nhamang = 'viettel';
    		break;
		case '72':
    		$nhamang = 'viettel';
    		break;
    	default:
    		$nhamang = 'vinaphone';
            $classTelco = 'h2-minmax-vnp';
            $classPrice = 'price-vnp';
    		break;
    }
	//echo $nhamang;die;
$arrPack = get_field('goi_cuoc_de_xuat');
if($arrPack > 0){
    $listRecommend = getListRecommend($arrPack);
}else {
    $args = array(
        'post_type' => 'goi_cuoc_chi_tiet',
        'tax_query' => array(
            array(
                'taxonomy' => 'nhom_goi_cuoc',
                'field' => 'term_id',
                'terms' => $catid
            )
        )
    );
    $query = new WP_Query( $args );
    $arrPack = $query->posts;
    $listRecommend = getListRecommend($arrPack);
}
function getListRecommend($data){
    $recommends = [];
    foreach($data as $item){
        $id = is_array($item) ? $item['goi_cuoc'] : $item->ID;
        $tem['pack_name'] = get_field('ma_goi_cuoc',$id);
        $tem['speed'] = get_field('toc_do',$id);
        $tem['price'] = get_field('gia_cuoc',$id);
        $tem['syntax'] = get_field('cu_phap',$id);
        $tem['charge_incurred'] = get_field('cuoc_phat_sinh',$id);
        $tem['number_first'] = get_field('dau_so',$id);
        $tem['register_type'] = get_field('register_type',$id);
        $tem['cycle'] = get_field('chu_ky',$id);
        $tem['description'] = get_field('mo_ta',$id);
        $tem['detail'] = get_field('chi-tiet',$id);
        $tem['id'] = $id;
        array_push($recommends, $tem);
    }
    return $recommends;
}
?>
<?php get_header(); ?>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/owlcarousel/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/owlcarousel/assets/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/package-detail.css"/>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/owlcarousel/owl.carousel.js"></script>
	<div class="container">
		<div style="height: 20px;"></div>
		<div class="">
		<div class="col-xs-12">
				<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs" class="bread">','</p>');} ?>
			</div>
		</div>
		<div style="height: 20px;" class="clear-fix"></div>
		<div class="col-xs-12">
			<p style="color: #0095f8;" class="font20 mb10">
				<b>Gói <?php echo get_field('ma_goi_cuoc'); ?></b>
			</p>
		</div>
		<div class="col-xs-12">
			<table class="w100 table-goicuocd2" border="1">
				<?php if(get_field('toc_do') != '') : ?>
				<tr>
					<td>Dung lượng</td>
					<td><?php echo get_field('toc_do'); ?></td>
				</tr>
				<?php endif; ?>
				<tr>
					<td>Giá cước</td>
					<td><?php echo product_price(get_field('gia_cuoc')); ?> vnđ / <?php echo get_field('chu_ky'); ?></td>
				</tr>
				<?php if($nhamang != 'viettel') :?>
				<tr>
					<td>Cú pháp</td>
					<td><b><?php echo get_field('cu_phap'); ?></b> gửi <b><?php echo get_field('dau_so'); ?></b></td>
				</tr>
				<?php endif ?>
			</table>
		</div>
		<div class="clear-fix" style="height: 20px;"></div>
		<div class="">
			<?php render_btn_dangky(get_field('cu_phap'), get_field('dau_so'), get_field('register_type'), product_price(get_field('gia_cuoc')), get_field('chu_ky'), get_field('toc_do')); ?>
		</div>
<!--		<div style="height: 20px;"></div>-->
		<div class="mo-ta" style="padding: 10px; text-align: justify;">
			<?php echo get_field('mo_ta'); ?>
		</div>
<!--		<div style="height: 20px;"></div>-->
		<div class="entry-content" style="text-align: justify;">
			<?php echo get_field('chi-tiet'); ?>
		</div>
<!--		<div style="height: 100px;"></div>-->
        <div class="box-data-cacgoi box-data lists slider">
            <span class="recommend-title">Các gói liên quan</span>
            <div class="owl-carousel owl-loaded owl-drag">
                <?php foreach($listRecommend as $item){?>
                    <a href="<?php echo get_permalink($item['id']); ?>">
                        <div class="items">
                            <div class="inner-item">
                                <h2 class="<?php echo $classTelco ?>"><?php echo $item['pack_name']?></h2>
                                <div class="int <?php echo $classPrice?>">
                                    <span class="speed"><?php echo $item['speed']?></span>
                                    <div class="price">
                                        <?php echo product_price($item['price']) ?>đ/<?php echo $item['cycle']?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php }?>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                var owl = $('.owl-carousel');
                owl.owlCarousel({
                    margin: 10,
                    nav: true,
                    loop: true,
                    navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
                    autoplay: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 1
                        }
                    }
                })
            })
        </script>
	</div>
<?php get_footer(); ?>