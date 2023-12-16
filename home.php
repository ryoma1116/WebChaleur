<?php get_header('page'); ?>
<div class="page-fv">
    <h2 class="page-fv__title">Works</h2>
</div>
<!-- 記事があるかを判別→記事があればそれ以降のコードを実行 -->
<div class="page-works">
    <div class="inner">
        <?php if (have_posts()) : ?>
            <ul class="page-works-list">
                <!-- 記事のループ処理（繰り返し処理） -->
                <?php while (have_posts()) : the_post(); ?>
                    <li class="page-works-item">
                        <!-- 記事のURLを出力 -->
                        <div class="page-works-item__img">
                            <?php
                            $thumbnail = get_field('thumbnail');
                            if (!empty($thumbnail)) : ?>
                                <img src="<?php echo esc_url($thumbnail['url']); ?>" alt="<?php echo esc_attr($thumbnail['alt']); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="page-works-item__body">
                            <h3 class="page-works-item__title"><?php the_title(); ?>様</h3>
                            <a href="<?php the_field('link'); ?>" target="_blank" class="page-works-item__link"><?php the_field('link'); ?></a>
                            <p class="page-works-item__text"><?php the_field('description'); ?></p>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
            <!-- 投稿されている記事が0件のときに行う処理 -->
        <?php else : ?>
            <p>記事が投稿されていません</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>