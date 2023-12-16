<?php get_header(); ?>
<div class="mv">
    <h2 class="mv-copy dragging-text js-splitText">WebChaleur</h2>
    <div id="particles-js"></div>
    <div id="wrapper">
    </div>
</div>
<section id="about" class="about">
    <div class="inner">
        <div class="about-content">
            <div class="about-title-wrapper">
                <div class="section-title">
                    <h3 class="section-title__text">About Us</h3>
                    <img src="<?php echo esc_url(get_theme_file_uri("/assets/img/common/section-arrow.png")); ?>" alt="" loading="lazy" class="section-title__arrow">
                </div>
            </div>
            <div class="about-body">
                <h4 class="about-heading">つながりを紡ぎ、Webで照らす</h4>
                <div class="about-text-wrapper">
                    <p class="about-text">
                        私はWebの知識の深さに関わらず、すべての人々との温かな結びつきを創出します。
                    </p>
                    <p class="about-text">
                        集客を超え、価値ある情報と優れた技術で、すべての人がWebの恩恵を受けられるよう努めており、お客様一人ひとりの立場に立った質の高いサービスを提供し、信頼と優しさに満ちた地域の星となることを目指します。
                    </p>
                    <p class="about-text">
                        Webによる障壁に直面している企業や個人が、その限界を乗り越え、地域の活力と成長に貢献できるよう、今後も活動していきます。
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="works" class="works">
    <div class="inner works-inner">
        <div class="works-title-wrapper">
            <div class="section-title">
                <h3 class="section-title__text">Works</h3>
                <img src="<?php echo esc_url(get_theme_file_uri("/assets/img/common/section-arrow.png")); ?>" alt="" loading="lazy" class="section-title__arrow">
            </div>
        </div>
        <div class="splide" role="group" aria-label="実績を紹介するスライダー">
            <div class="splide__track">
                <?php
                $args = array(
                    "post_type" => "post",
                    "posts_per_page" => 3
                );
                $the_query = new WP_Query($args);
                ?>
                <?php if ($the_query->have_posts()) : ?>
                    <ul class="splide__list works-list">
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                            <li class="splide__slide works-item">
                                <a href="<?php echo esc_url(home_url("/works")) ?>" class="works-item__link">
                                    <?php
                                    $thumbnail = get_field('thumbnail');
                                    if (!empty($thumbnail)) : ?>
                                        <img src="<?php echo esc_url($thumbnail['url']); ?>" alt="<?php echo esc_attr($thumbnail['alt']); ?>" class="works-item__img">
                                    <?php endif; ?>
                                    <p class="works-item__title"><?php the_title(); ?>様</p>
                                </a>
                            </li>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>
                <?php else : ?>
                    <p>記事が投稿されていません</p>
                <?php endif; ?>
            </div>
        </div>
        <a href="<?php echo esc_url(home_url('/works')); ?>" class="works-btn">view all</a>
    </div>
</section>
<section id="service" class="service">
    <div class="inner service-inner">
        <div class="service-title-wrapper">
            <div class="section-title service-title">
                <h3 class="section-title__text">Service</h3>
                <img src="<?php echo esc_url(get_theme_file_uri("/assets/img/common/section-arrow.png")); ?>" alt="" loading="lazy" class="section-title__arrow">
            </div>
        </div>
        <ul class="service-list">
            <li class="service-item">
                <div class="service-item__img">
                    <span class="service-item__number">01</span>
                    <img src="<?php echo esc_url(get_theme_file_uri("/assets/img/common/works-item01.webp")); ?>" alt="会社のメンバーとコンサルタントが机を囲み、コンサルティングを受けている様子" loading="lazy">
                    <span class="service-item__tag">WEBコンサル</span>
                </div>
                <p class="service-item__text">
                    「WEBを活用して売上や集客を上げたい」
                    「WEBのことを教えてほしい」
                    など、Webに関する専門的なアドバイスを通じて
                    お客様の目的達成をサポートさせて頂きます。
                    お問い合わせよりご相談ください。
                </p>
            </li>
            <li class="service-item">
                <div class="service-item__img">
                    <span class="service-item__number">02</span>
                    <img data-speed="auto" src="<?php echo esc_url(get_theme_file_uri("/assets/img/common/works-item02.webp")); ?>" alt="PCでホームページを制作している様子" loading="lazy">
                    <span class="service-item__tag">ホームページ制作</span>
                </div>
                <p class="service-item__text">
                    お客様のビジネスモデルに合わせたホームページ制作から、長期的な保守・運用まで、一貫して対応いたします。
                    確かな技術と経験を活かし、お客様のニーズに真摯に応えるサービスを提供いたします。
                    詳しくは、お問い合わせよりご連絡ください。
                </p>
            </li>
            <li class="service-item">
                <div class="service-item__img">
                    <span class="service-item__number">03</span>
                    <img data-speed="auto" src="<?php echo esc_url(get_theme_file_uri("/assets/img/common/works-item03.webp")); ?>" alt="PCのキーボードの中心に水色のいいねマークがある様子" loading="lazy">
                    <span class="service-item__tag">SNS運用</span>
                </div>
                <p class="service-item__text">
                    アカウントの作成、初期設計〜運用、分析まで一貫して代行させていただきます。
                    また、代行だけではなく、コンサルプランでは一緒にアカウントを作り上げていくことが可能で、分析しながら効率よく運用していくことができます。
                </p>
            </li>
        </ul>
    </div>
</section>


<?php get_footer(); ?>