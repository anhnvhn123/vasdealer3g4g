<?php get_header('vinaphone'); ?>
    <div class="clear-fix"></div>
    <div class="screen-width category-page">
        <div class="clear-fix"></div>
        <div class="list-home list-dmsp"><ol class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/" style=" margin-top: 10px;font-size: 16px">
                <!-- Breadcrumb NavXT 5.7.1 -->
                <span property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" title="Trang chủ" href="<?php echo get_home_url() ?>" class="home">
                        <span property="name">Home </span></a><meta property="position" content="1">
                </span>  /
                <span property="itemListElement" typeof="ListItem">
                    <span property="name">
                        <?php printf( __( 'Kết quả tìm kiếm cho: %s', 'vinaphone' ), get_search_query() ); ?></span>
                    <meta property="position" content="2">
                </span>
            </ol>
            <?php
            while (have_posts()) : the_post(); ?>
                <div class="post-item" >
                    <a class="photo" href="<?php the_permalink(); ?>" title="<?= the_title(); ?>">
                        <img class="home_thumb img-scale" width="300px" src="<?= the_post_thumbnail_url('home-thumb') ?>" alt="<?= the_title(); ?>" >
                    </a>
                    <div class="right" style="margin-top: 10px" >
                        <a href="<?php the_permalink(); ?>" class="title" style="font-size: 18px"><?php the_title(); ?></a>
                        <p class="description"><?php echo get_the_excerpt(); ?></p>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
            ?>
            <div class="clear-fix"></div>
            <?php page_nav(); ?>
        </div>
    </div>


<?php get_footer('vinaphone'); ?>