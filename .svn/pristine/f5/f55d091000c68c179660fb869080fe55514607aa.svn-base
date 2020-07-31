
<aside class="mh-widget-col-1" itemscope="itemscope" itemtype="http://schema.org/WPSideBar" style="">
    <div id="tintuc">
        <h2 style="background: rgba(0, 90, 140, 0.6)">
            <span class="chutrangnenxanh">Tin khuyến mại</span>
        </h2>
        <?php $args = array(
            'posts_per_page'   => 5,
            'offset'           => 0,
            'orderby'          => 'date',
            'order'            => 'DESC',
            'post_type'        => 'post',
            'post_status'      => 'publish',
            'category'  => $_SESSION['catId'] ?? 1
        );
        $posts_array = get_posts( $args );
        ?>
        <?php
        $color   =array('#fff','#fff','#fff','#4c4c4c','#4c4c4c');
        $bgcolor =array('#e74c3c','#1abc9c','#f39c12','#fff','#fff');
        ?>
        <div class="">
        <?php
        foreach ( $posts_array as $key => $post ) : setup_postdata( $post ); ?>
            <div style="width: 100%">
                <ul style="list-style: none">
                    <li style="border-bottom: 1px dotted #ddd;">
                        <span class="stt-icon" style="color: <?php echo $color[$key]; ?>;background-color: <?php echo $bgcolor[$key]; ?>"><?php echo $key+1; ?></span>
                        <a href="<?php echo the_permalink(); ?>"><p><?php echo the_title();?></p></a>
                    </li>
                </ul>
            </div>
        <?php endforeach;
        wp_reset_postdata();
        ?>
        </div>
    </div>
    <div class="reg-box">

        <?php
        if ($goi_cuoc_home){
            foreach ($goi_cuoc_home as $key => $value) {


            ?>
            <div id="regbox" class=" reg-box-item">
                <div class="box-title">
                    Trải nghiệm gói <?php echo $value['ma_goi_cuoc']; ?>
                </div>
                <div class="box-body">
                    <table class="noborder">
                        <thead>
                        <tr>
                            <th class="noborder" colspan="3" ><?php echo $value['ma_goi_cuoc']; ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="noborder" ><?php echo product_price($value['gia_cuoc']); ?>đ</td>
                            <td class="noborder" >-</td>
                            <td class="noborder" ><?php echo $value['chu_ky']; ?></td>
                        </tr>
                        <tr>
                            <td class="noborder" >Dung lượng</td>
                            <td class="noborder" >-</td>
                            <td class="noborder" ><?php echo $dung_luong_goi_cuoc[$key];?></td>
                        </tr>
                        <tr>
                            <td class="noborder" ><b><?php echo $value['cu_phap']; ?></b></td>
                            <td class="noborder" >Gửi</td>
                            <td class="noborder" ><b><?php echo $value['dau_so']; ?></b></td>
                        </tr>
                        <tr>
                            <td class="noborder" colspan="3" >
                                <?php render_btn_dangky($value['cu_phap'], $value['dau_so']); ?>
                            </td>
                        </tr>

                        </tbody>
                    </table>

                </div>
            </div>
            <?php
        } }
        ?>
    </div>
    <div id="anh-quang-cao">
        <?php if($_SESSION['catId'] == 7){?>
        <img class="imgs" src="<?php echo get_template_directory_uri() ?>/sidebar-image.jpg" >
        <?php }else if($_SESSION['catId'] == 15){?>
            <?php $list_anh = get_field('ads_image_list',2062); ?>
            <?php if(count($list_anh)>0): foreach($list_anh as $item): ?>
                <a href="<?php echo $item['img_url'] ?>"><img class="imgs" src="<?php echo $item['image'] ?>" ></a>
            <?php endforeach; endif; ?>
        <?php }else{?>
            <img class="imgs" src="<?php echo get_template_directory_uri() ?>/sidebar-image-mobi.jpg" >
        <?php }?>
        <br>
        <div class="fb-page" data-href="https://www.facebook.com/dangky3g4gcom/" data-tabs="timeline" data-width="326" data-height="260 " data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/dangky3g4gcom/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/dangky3g4gcom/">Dịch vụ 3G 4G</a></blockquote></div>

    </div>
    <div class="clear-fix"></div>
</aside>