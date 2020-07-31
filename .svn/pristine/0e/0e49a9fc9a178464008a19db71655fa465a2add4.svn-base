<?php
/*Template Name: Các gói cước 3G Mobi tiện ích */
?>
<?php get_header('mobifone'); ?>
<?php
$loop = new WP_Query(
    array(
        'post_type' => 'goi_cuoc',
        'meta_key'  => 'loai_goi',
        'meta_value'	=> '3g'
    )
);
$thutu=array('591','749','1268','592');
$id_nhom_goi=array('facebook','nhanongxanh','youtube','zing');
$i;

?>

<div class="container entry-content" style="padding: 0px 10px;">

    <ol class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/" style="margin-top: 10px;font-size: 16px">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </ol>
    <div style="height: 20px;"></div>
    <h1><?php echo get_the_title(); ?></h1>
    <?php $datas = get_field('goi_cuoc'); ?>
    <?php
    for ($i=0;$i<count($thutu);$i++){
        foreach ($loop->posts as $post) {
            $provider = get_field('nha_mang',$post->ID);
            $ghi_chu = get_field('ghi_chu',$post->ID);?>
                <div id="<?php echo $id_nhom_goi[$i]; ?>" class="nhom-goi">
                    <h2 class="nhom-goi-tite" title="#<?php echo $id_nhom_goi[$i]; ?>"><?php echo $post->post_title; ?></h2>
                    <p><?php echo (($ghi_chu != '')? ('<b>Ghi chú :</b>' . $ghi_chu):''); ?></p>

                    <?php $datas = get_field('goi-cuoc', $post->ID);?>
                    <?php foreach ($datas as $key => $value) : ?>
                        <div class="item">
                            <h3><?php echo get_field('ma_goi_cuoc', $value['goi-cuoc']); ?></h3>
                            <table style="width: 100%;" class="table table-striped">
                                <tbody>
                                <tr>
                                    <td style=" width: 30%;">Dung lượng</td>
                                    <td><?php echo get_field('toc_do', $value['goi-cuoc']); ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 30%;">Giá cước</td>
                                    <td><?php echo product_price(get_field('gia_cuoc', $value['goi-cuoc'])); ?>đ / <?php echo get_field('chu_ky', $value['goi-cuoc']); ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 30%;">Cú pháp</td>
                                    <td><strong><?php echo get_field('cu_phap', $value['goi-cuoc']); ?></strong>&nbsp;gửi&nbsp;<strong><?php echo get_field('dau_so', $value['goi-cuoc']); ?></strong></td>
                                </tr>
                                <tr>
                                    <td>Cước phát sinh</td>
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
                                    <td colspan="2" style="text-align: center;">
                                        <?php render_btn_dangky(get_field('cu_phap', $value['goi-cuoc']), get_field('dau_so', $value['goi-cuoc'])); ?>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php        }
    }
    ?>
    <div class="entry-content">

        <?php echo get_the_content(); ?>

        <div class="fb-comments" data-href="<?php echo get_permalink(); ?>" data-numposts="5" data-width="100%" data-order-by="reverse_time" ></div>
    </div>

</div>


<?php get_footer('mobifone'); ?>
