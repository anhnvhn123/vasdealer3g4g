<?php
/*Template Name: Bán sim data*/
?>
<?php get_header('vinaphone'); ?>
<div class="category-page">
    <div class="container entry-content" style="margin-top: 10px;margin-bottom: 10px">
        <div class="row"">
            <div class="row" style="min-height: 181px;margin-left: 0px;margin-right: 0px;">
                <div class="entry-content clearfix">
                    <?php echo get_the_content() ?>
                </div>
            </div>
             <div class="row" id="comment" style="margin-left: 0px;margin-right: 0px">
                 <script src="https://apis.google.com/js/plusone.js">

                 </script>
                 <g:comments
                     href="[URL]"
                     width="642"
                     first_party_property="BLOGGER"
                     view_type="FILTERED_POSTMOD">
                 </g:comments>
            </div>
            <div class="row" id="comment" style="margin-left: 0px;margin-right: 0px">

                <?php global $wp;$current_url = home_url(add_query_arg(array(),$wp->request)); ?>
                <div class="fb-comments" data-href="<?php echo $current_url; ?>" data-numposts="5" data-width="100%" data-order-by="reverse_time"></div>
            </div>
        </div>

    </div>
</div>

<?php get_footer('vinaphone'); ?>
