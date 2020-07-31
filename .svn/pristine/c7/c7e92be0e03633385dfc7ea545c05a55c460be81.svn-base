<?php
/*Template Name: Gói cước 3G Mobi */
?>
<?php get_header('mobifone'); ?>
<?php
$list = get_field('data_list');
$i;
$provider = 'mobifone';
?>
<div class="container entry-content">
    <h1><?php echo get_the_title(); ?></h1>
    <?php
        foreach ($list as $item_list) {
            $ID = $item_list['id'];
            $manhom = $item_list['ma_nhom'];
            $datas = get_field('goi-cuoc',$ID);
            $ghi_chu = get_field('ghi_chu',$ID);
            ?>
                <div id="<?php echo $manhom; ?>" class="nhom-goi">
                    <h2 class="nhom-goi-tite"
                        title="#<?php echo $manhom; ?>"><?php echo get_the_title($ID); ?></h2>
                    <p><?php echo (($ghi_chu != '')? ('<b>Ghi chú :</b>' . $ghi_chu):''); ?></p>

                    <?php
                    foreach ($datas as $key => $value) {
                        ?>
                        <div class="item">
                            <h3><b><?php echo get_field('ma_goi_cuoc', $value['goi-cuoc']); ?></b></h3>
                            <table class="table table-striped">
                                <tbody>
                                <tr>
                                    <td style="width: 30%;">Dung lượng</td>
                                    <td><?php echo get_field('toc_do', $value['goi-cuoc']); ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 30%;">Giá cước</td>
                                    <td><?php echo product_price(get_field('gia_cuoc', $value['goi-cuoc'])); ?>đ / <?php echo get_field('chu_ky', $value['goi-cuoc']); ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 30%;">Cú pháp</td>
                                    <td><strong style="color: red"><?php echo get_field('cu_phap', $value['goi-cuoc']); ?></strong>&nbsp;gửi&nbsp;<strong
                                                style="color: red"><?php echo get_field('dau_so', $value['goi-cuoc']); ?></strong></td>
                                </tr>
                                <tr>
                                    <td style="width: 30%;">Cước phát sinh</td>
                                    <td><?php echo get_field('cuoc_phat_sinh', $value['goi-cuoc']); ?></td>
                                </tr>
                                <?php if(get_field('mo_ta', $value['goi-cuoc']) != '') : ?>
                            	<tr >
                                	<td>Chú thích</td>
                                	<td>
                                    		<?php echo get_field('mo_ta', $value['goi-cuoc']); ?>
                                	</td>
                            	</tr>
                            	<?php endif; ?>
                                <tr>
                                    <td colspan="2">
                                        <?php render_btn_dangky_mobi(get_field('cu_phap', $value['goi-cuoc']), get_field('dau_so', $value['goi-cuoc'])); ?>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <?php
                        if ($key % 2 != 0) {
                            echo '<div class="clear-fix"></div>';
                        }
                    }
                    ?>
                </div>
                <?php
            }

    ?>
    <div class="entry-content">

        <?php echo get_the_content(); ?>
        <!--<div class="row" style="height: 50px">
            <div class="btn-bottom" align="left">
                <a class="btn btn-view-more" href="<?php echo get_home_url(); ?>/cac-goi-tien-ich/">Xem thêm các gói tiện ích &#8594;</a>
            </div>
        </div>-->
        <div class="fb-comments" data-href="<?php echo get_permalink(); ?>" data-numposts="5" data-width="100%" data-order-by="reverse_time" ></div>
    </div>
	<div style="height: 20px;"></div>
    <?php include('box-tintuc.php'); ?>
    <div style="height: 20px;"></div>

</div>


<?php get_footer('mobifone'); ?>
