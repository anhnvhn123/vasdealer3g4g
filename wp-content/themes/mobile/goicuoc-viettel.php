<?php
/*Template Name: Gói cước bên Viettel */
?>
<?php get_header('viettel'); ?>
<?php
$idlist = get_field('id_list');
$i;

?>
<style type="text/css">
h3{
    font-size: 16px;
    padding: 10px 10px;
    margin-top: 0px;
    text-align: center;
    color: #fff;
    margin-bottom: 0px;
    background-color: #00918D;
}
</style>

<div class="container entry-content" style="padding: 0px 10px;">
    <div style="height: 20px;"></div>
    <h1 style="color: #29a7a2"><?php echo get_the_title(); ?></h1>
    <?php
    foreach ($idlist as $post) {
        $ID = $post['id_goi'];
        $provider = get_field('nha_mang',$ID);
        $id_goi_cuoc = get_field('id_goi_cuoc',$ID);
        $ghi_chu = get_field('ghi_chu',$ID);?>
            <div id="<?php echo $id_goi_cuoc; ?>" class="nhom-goi">
                <h2 class="nhom-goi-tite" title="#<?php echo $id_goi_cuoc; ?>"><?php echo get_the_title($ID); ?></h2>
                <p><?php echo (($ghi_chu != '')? ('<b>Ghi chú :</b>' . $ghi_chu):''); ?></p>
                <?php $datas = get_field('goi-cuoc', $ID);?>
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
                            <!--<tr>
                                <td style="width: 30%;">Cú pháp</td>
                                <td><strong><?php echo get_field('cu_phap', $value['goi-cuoc']); ?></strong>&nbsp;gửi&nbsp;<strong><?php echo get_field('dau_so', $value['goi-cuoc']); ?></strong></td>
                            </tr>-->
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
                                    <?php render_btn_dangky(get_field('cu_phap', $value['goi-cuoc']), get_field('dau_so', $value['goi-cuoc']), get_field('register_type', $value['goi-cuoc'])); ?>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php
    }
    ?>
    <div class="entry-content">
        <?php echo the_content(); ?>
        <div class="fb-comments" data-href="<?php echo get_permalink(); ?>" data-numposts="5" data-width="100%" data-order-by="reverse_time" ></div>
    </div>

</div>
<?php get_footer('viettel'); ?>
