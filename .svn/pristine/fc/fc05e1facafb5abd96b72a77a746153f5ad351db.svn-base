<?php  
    /*Template Name: Trang chủ viettel*/
?>


<?php

$idlist_sidebar = array('2035','2028','2027','2026');
$goi_cuoc_home = array();
$goi_cuoc_3g = array();
$goi_cuoc_4g = array();
foreach ($idlist_sidebar as $id_item){
    $goicuoc = get_field('goi_cuoc', $id_item);
    if(count($goicuoc)>0){
        foreach ($goicuoc as $key => $value) {
            if($value['index'] == '1'){
                $goiitem = $value;
                array_push($goi_cuoc_home, $goiitem);
            }
            if($value['index_2'] == '1' && $id_item == 2026){
                $goi4g = $value;
                array_push($goi_cuoc_4g, $goi4g);
            }elseif ($value['index_2'] == '1' && $id_item != 2026){
                $goi3g = $value;
                array_push($goi_cuoc_3g, $goi3g);
            }
        }
    }
}
?>
<?php get_header('viettel'); ?>
<section id="body" class="body">

    <div class="container">
        <div class="banner">
            <a  href="">
                <img  src="<?php echo get_field('banner_viettel',2023) ?>"/>
            </a>
        </div>
        <div class="clearfix"></div>
        <div class="reg-box">
            <div class="container" style="width: 100%">
                <div style="height: 30px;"></div>
                <?php $goi_cuoc_home = get_field('goi-cuoc', 3362);?>
                <?php foreach ($goi_cuoc_home as $key => $value) : ?>
                    <div class="col-md-3 col-sm-6 category-list" style="margin-bottom: 1%;">
                        <div style="border: 2px solid #00a1e5;">
                            <p align="center" style="border:5px double #00a1e5;background-color: #00a1e5;color: #FFFFFF"><b>
                                <?php echo get_field('ma_goi_cuoc', $value['goi-cuoc']); ?>    
                                </b></p>
                            <div class="table-responsive">
                                <table style="width: 100%;" class="table table-striped table-bordered table-condensed noborder">
                                    <tbody>
                                    <tr>
                                        <td class="noborder">
                                            <b>Dung lượng :</b> 
                                            <?php echo get_field('toc_do', $value['goi-cuoc']); ?>    
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="noborder">
                                            <b>Giá cước :</b> 
                                            <?php echo get_field('gia_cuoc', $value['goi-cuoc']); ?>đ/<?php echo get_field('chu_ky', $value['goi-cuoc']); ?> 
                                            
                                        </td>
                                    </tr>
                                    <!--<tr>
                                        <td class="noborder" >
                                            <b>Cú pháp :</b> <strong style="color: red">
                                                <?php echo $value['cu_phap']; ?>
                                                <?php echo get_field('ma_goi_cuoc', $value['goi-cuoc']); ?>        
                                                </strong>&nbsp;gửi&nbsp;<strong style="color: red">
                                                    <?php echo get_field('dau_so', $value['goi-cuoc']); ?>        
                                                    </strong>
                                        </td>
                                    </tr>-->
                                    <tr>
                                        <td class="noborder" >
                                            <b>Cước phát sinh :</b> 
                                            <?php echo get_field('cuoc_phat_sinh', $value['goi-cuoc']); ?>    
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <?php render_btn_dangky(get_field('cu_phap', $value['goi-cuoc']), get_field('dau_so', $value['goi-cuoc']), get_field('register_type', $value['goi-cuoc'])); ?>
                                <div style="height: 20px;"></div>
                            </div>
                        </div>
                    </div>
               <?php endforeach; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo get_home_url() ?>/dang-ky-goi-cuoc-3gviettel/">
                    <h2 style="    width: 100%;
    font-size: 20px;
    text-transform: uppercase;
    margin-bottom: 20px;
    padding: 10px 0;
    border-left: 10px solid #3381C5;
    text-indent: 15px;
    color: #333;
    background: #d8d6d6;">GÓI CƯỚC 3G VIETTEL</h2>
                </a>
            </div>

            <?php $goi_cuoc_3g = get_field('goi-cuoc', 3359);?>
            <?php foreach ($goi_cuoc_3g as $key => $value) : ?>
            <div class="col-md-3 col-sm-6 category-list" style="margin-bottom: 1%;">
                <div style="border: 2px solid #00a1e5;">
                    <p align="center" style="border:5px double #00a1e5;background-color: #00a1e5;color: #FFFFFF"><b>
                        <?php echo get_field('ma_goi_cuoc', $value['goi-cuoc']); ?>    
                        </b></p>
                    <div class="table-responsive">
                        <table style="width: 100%;" class="table table-striped table-bordered table-condensed noborder">
                            <tbody>
                            <tr>
                                <td class="noborder">
                                    <b>Dung lượng :</b> 
                                    <?php echo get_field('toc_do', $value['goi-cuoc']); ?>    
                                </td>
                            </tr>
                            <tr>
                                <td class="noborder">
                                    <b>Giá cước :</b> 
                                    <?php echo get_field('gia_cuoc', $value['goi-cuoc']); ?>đ/<?php echo get_field('chu_ky', $value['goi-cuoc']); ?> 
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="noborder" >
                                    <b>Cú pháp :</b> <strong style="color: red">
                                        <?php echo $value['cu_phap']; ?>
                                        <?php echo get_field('ma_goi_cuoc', $value['goi-cuoc']); ?>        
                                        </strong>&nbsp;gửi&nbsp;<strong style="color: red">
                                            <?php echo get_field('dau_so', $value['goi-cuoc']); ?>        
                                            </strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="noborder" >
                                    <b>Cước phát sinh :</b> 
                                    <?php echo get_field('cuoc_phat_sinh', $value['goi-cuoc']); ?>    
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <?php render_btn_dangky(get_field('cu_phap', $value['goi-cuoc']), get_field('dau_so', $value['goi-cuoc']), get_field('register_type', $value['goi-cuoc'])); ?>
                        <div style="height: 20px;"></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo get_home_url() ?>/dang-ky-goi-cuoc-4g-viettel/">
                    <h2 style="    width: 100%;
    font-size: 20px;
    text-transform: uppercase;
    margin-bottom: 20px;
    padding: 10px 0;
    border-left: 10px solid #3381C5;
    text-indent: 15px;
    color: #333;
    background: #d8d6d6;">GÓI CƯỚC 4G VIETTEL</h2>
                </a>
            </div>

            <?php $goi_cuoc_3g = get_field('goi-cuoc', 3358);?>
            <?php foreach ($goi_cuoc_3g as $key => $value) : ?>
            <div class="col-md-3 col-sm-6 category-list" style="margin-bottom: 1%;">
                <div style="border: 2px solid #00a1e5;">
                    <p align="center" style="border:5px double #00a1e5;background-color: #00a1e5;color: #FFFFFF"><b>
                        <?php echo get_field('ma_goi_cuoc', $value['goi-cuoc']); ?>    
                        </b></p>
                    <div class="table-responsive">
                        <table style="width: 100%;" class="table table-striped table-bordered table-condensed noborder">
                            <tbody>
                            <tr>
                                <td class="noborder">
                                    <b>Dung lượng :</b> 
                                    <?php echo get_field('toc_do', $value['goi-cuoc']); ?>    
                                </td>
                            </tr>
                            <tr>
                                <td class="noborder">
                                    <b>Giá cước :</b> 
                                    <?php echo get_field('gia_cuoc', $value['goi-cuoc']); ?>đ/<?php echo get_field('chu_ky', $value['goi-cuoc']); ?> 
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="noborder" >
                                    <b>Cú pháp :</b> <strong style="color: red">
                                        <?php echo $value['cu_phap']; ?>
                                        <?php echo get_field('ma_goi_cuoc', $value['goi-cuoc']); ?>        
                                        </strong>&nbsp;gửi&nbsp;<strong style="color: red">
                                            <?php echo get_field('dau_so', $value['goi-cuoc']); ?>        
                                            </strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="noborder" >
                                    <b>Cước phát sinh :</b> 
                                    <?php echo get_field('cuoc_phat_sinh', $value['goi-cuoc']); ?>    
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <?php render_btn_dangky(get_field('cu_phap', $value['goi-cuoc']), get_field('dau_so', $value['goi-cuoc']), get_field('register_type', $value['goi-cuoc'])); ?>
                        <div style="height: 20px;"></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="clearfix"></div>
        <div style="height: 30px;"></div>
        <div class="row">
            <div class="col-md-6">
                <ul class="nav nav-pills" style="border-bottom: 2px solid #337ab7; ">
                    <li class="active"> <a href="<?php echo get_category_link(16) ?>" data-toggle="tab" aria-expanded="true"  style="border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;"><b>TIN TỨC</b></a>
                    </li>
                </ul>
                <?php $args = array(
                    'posts_per_page'   => 5,
                    'offset'           => 0,
                    'orderby'          => 'date',
                    'order'            => 'DESC',
                    'post_type'        => 'post',
                    'post_status'      => 'publish',
                    'category'	=> 16
                );
                $posts_array = get_posts( $args );
                ?>
                <?php
                foreach ( $posts_array as $key => $post ) : setup_postdata( $post );?>
                    <div class="media news_item" style="margin-bottom: 10px;">
                        <div class="" style="float: left; margin-right: 10px;">
                            <a href="<?php echo the_permalink(); ?>">
                                <img src="<?php echo the_post_thumbnail_url('index-thumb');?>" class="media-object wp-post-image" alt="<?php echo the_title();?>" style="object-fit: cover; vertical-align: middle;" width="100" height="60">
                            </a>
                        </div>
                        <div class="media-body" style="vertical-align: middle;">
                            <a href="<?php echo the_permalink(); ?>">
                                <h4 class="media-heading" style="color: #444; font-size: 16px; line-height: 20px; vertical-align: middle;"><strong><?php echo the_title();?></strong></h4>
                            </a>
                        </div>
                    </div>
                <?php endforeach;
                wp_reset_postdata();
                ?>
            </div>

            <div class="col-md-6">
                <ul class="nav nav-pills" style="border-bottom: 2px solid #337ab7; ">
                    <li class="active"> <a href="<?php echo get_category_link(15) ?>" data-toggle="tab" aria-expanded="true"  style="border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;"><b>KHUYẾN MÃI</b></a>
                    </li>
                </ul>
                <?php $args = array(
                    'posts_per_page'   => 5,
                    'offset'           => 0,
                    'orderby'          => 'date',
                    'order'            => 'DESC',
                    'post_type'        => 'post',
                    'post_status'      => 'publish',
                    'category'	=> 15
                );
                $posts_array = get_posts( $args );
                ?>
                <?php
                foreach ( $posts_array as $key => $post ) : setup_postdata( $post );?>
                    <div class="media news_item" style="margin-bottom: 10px;">
                        <div class="" style="float: left; margin-right: 10px;">
                            <a href="<?php echo the_permalink(); ?>">
                                <img src="<?php echo the_post_thumbnail_url('index-thumb');?>" class="media-object wp-post-image" alt="<?php echo the_title();?>" style="object-fit: cover; vertical-align: middle;" width="100" height="60">
                            </a>
                        </div>
                        <div class="media-body" style="vertical-align: middle;">
                            <a href="<?php echo the_permalink(); ?>">
                                <h4 class="media-heading" style="color: #444; font-size: 16px; line-height: 20px; vertical-align: middle;"><strong><?php echo the_title();?></strong></h4>
                            </a>
                        </div>
                    </div>
                <?php endforeach;
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <div style="height: 50px;"></div>
    </div>
</section>
<?php get_footer('viettel'); ?>
