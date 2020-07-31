<?php get_header(); ?>

<section class="section1">
    <div class="slide1 loop owl-carousel owl-theme owl-loaded owl-drag">
        <?php $data = get_field('goi-cuoc', 3306); ?>
        <?php foreach ($data as $value) : ?>

            <div>
                <a href="<?php echo get_permalink($value['goi-cuoc']); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url($value['goi-cuoc'], 'post-thumbnail'); ?>"
                         class="w100" style="display: block;">
                </a>
                <div style="bottom: 15%;" class="w100 psa">
                    <?php if (get_field('dau_so', $value['goi-cuoc']) != 9123) { ?>
                        <?php render_btn_dangky_m(get_field('cu_phap', $value['goi-cuoc']), get_field('dau_so', $value['goi-cuoc'])); ?>
                    <?php } else { ?>
                        <?php render_btn_dangky_m(get_field('cu_phap', $value['goi-cuoc']), get_field('dau_so', $value['goi-cuoc']), 1); ?>
                    <?php } ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php require('_popup_introduce_tawto.php') ?>
<?php require('_popup_iframe_tawto.php') ?>
<?php get_footer(); ?>
<script type="text/javascript">
    jQuery(function () {
        jQuery(".slide1").owlCarousel({
            items: 1,
            loop: false,
            nav: false,
            autoplay: true,
            autoHeight: false,
            navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
            dots: true,
            responsive: {
                600: {
                    items: 1
                }
            }

        });


    })

</script>
<style type="text/css">
    .menu a img {
        display: none !important;
    }
</style>