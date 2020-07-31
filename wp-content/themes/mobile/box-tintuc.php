<?php  
    switch ($provider) {
        case 'vinaphone':
            $cat_tintuc = 4;
            $cat_khuyenmai = 7;
            break;
        case 'mobifone':
            $cat_tintuc = 9;
            $cat_khuyenmai = 10;
            break;
        case 'viettel':
            $cat_tintuc = 16;
            $cat_khuyenmai = 15;
            break;
        default:
            $cat_tintuc = 4;
            $cat_khuyenmai = 7;
            break;
    }
?>
<div class="" style="overflow: hidden;">
    <div class="col-md-6 col-xs-12">
        <ul class="nav nav-pills" style="border-bottom: 2px solid #337ab7; ">
            <li class="active"> <a href="<?php echo get_category_link(4) ?>" data-toggle="tab" aria-expanded="true"  style="border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;"><b>TIN TỨC</b></a>
            </li>
        </ul>
        <?php $args = array(
            'posts_per_page'   => 5,
            'offset'           => 0,
            'orderby'          => 'date',
            'order'            => 'DESC',
            'post_type'        => 'post',
            'post_status'      => 'publish',
            'category'	=> $cat_tintuc
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
                        <h4 class="media-heading" style="color: #444; font-size: 16px; vertical-align: middle; line-height: 24px;">
                            <strong><?php echo the_title();?></strong>
                        </h4>
                    </a>
                </div>
            </div>
        <?php endforeach;
        wp_reset_postdata();
        ?>
    </div>

    <div class="col-md-6 col-xs-12">
        <ul class="nav nav-pills" style="border-bottom: 2px solid #337ab7; ">
            <li class="active"> <a href="<?php echo get_category_link(7) ?>" data-toggle="tab" aria-expanded="true"  style="border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;"><b>KHUYẾN MÃI</b></a>
            </li>
        </ul>
        <?php $args = array(
            'posts_per_page'   => 5,
            'offset'           => 0,
            'orderby'          => 'date',
            'order'            => 'DESC',
            'post_type'        => 'post',
            'post_status'      => 'publish',
            'category'	=> $cat_khuyenmai
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
                        <h4 class="media-heading" style="color: #444; font-size: 16px; vertical-align: middle; line-height: 24px;">
                            <strong><?php echo the_title();?></strong>
                        </h4>
                    </a>
                </div>
            </div>
        <?php endforeach;
        wp_reset_postdata();
        ?>
    </div>
    
</div>
<div style="height: 50px;"></div>