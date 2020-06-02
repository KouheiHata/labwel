<?php get_header(); ?>

<div class="wrapper">
    <main id="main">

        <section id="section01" class="section01">
            <div class="bg">
                <div></div>
            </div>
            <div class="l-text01">
                <h1>
                    <img src="<?php echo esc_url( get_theme_file_uri('images/l-text1.png') ); ?>" alt="Your specialty leads to happiness 得意を伸ばそう">
                    <div></div>
                </h1>
                <div class="h1cover"></div>
            </div>
            <div class="carousel1">
                <div class="i-wrapper">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="<?php echo esc_url( get_theme_file_uri('images/top_image1.jpg') ); ?>" alt=""></div>
                            <div class="swiper-slide"><img src="<?php echo esc_url( get_theme_file_uri('images/top_image1-2.jpg') ); ?>" alt=""></div>
                            <div class="swiper-slide"><img src="<?php echo esc_url( get_theme_file_uri('images/top_image1-3.jpg') ); ?>" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carouselborder">
                <img src="<?php echo esc_url( get_theme_file_uri('images/border1_04.jpg') ); ?>" alt="">
            </div>
        </section>

        <section id="section02" class="section02">
            <div class="bg">
                <div style="height:100%;"></div>
            </div>
            <div class="carousel2">
                <div class="i-wrapper">
                    <ul>
                        <li>
                            <img src="<?php echo esc_url( get_theme_file_uri('images/top_image02_01.jpg') ); ?>" alt="">
                        </li>
                    </ul>
                </div>
                <div class="carouselborder">
                    <div></div>
                </div>
            </div>
            <div class="carousel3">
                <div class="i-wrapper">
                    <ul>
                        <li>
                            <img src="<?php echo esc_url( get_theme_file_uri('images/top_image03.jpg') ); ?>">
                        </li>
                    </ul>
                </div>
                <div class="carouselborder">
                    <div></div>
                </div>
            </div>
            <div class="content">
                <p class="content-title">CONCEPT</p>
                <p class="content-text mt60">株式会社LABwelは、
                    お仕事を通して自分の存在価値・やる気・新たな能力の発見など、利用者さんの成長に繋がる自立を支援をする会社です。</p>
                <a href="<?php echo esc_url(home_url( '/company' )); ?>" class="button">MORE</a>

            </div>
        </section>

        <section id="section03">
            <h2>昆布かきＰＲ動画</h2>
            <video src="<?php echo get_template_directory_uri(); ?>/images/LW2020_1.mp4" controls></video>
        </section>

        <section id="section04">
            <div class="bg"></div>
            <div class="content">
                <p class="content-title">就労継続支援Ａ型</p>
                <h2>
                    <img src="<?php echo esc_url( get_theme_file_uri('images/ipppo_06.png') ); ?>" alt="" width="156px">
                    <img src="<?php echo esc_url( get_theme_file_uri('images/+ipppo_08.png') ); ?>" alt="" width="156px">
                    <br class="d-lg-none">
                    <img src="<?php echo esc_url( get_theme_file_uri('images/a-copy_03.png') ); ?>">
                </h2>
                <p class="content-text">お仕事がバリエーション豊富にあるので
                    自分のやりがいにつながる得意なお仕事が
                    きっと見つかります。</p>
                <a href="<?php echo esc_url(home_url( '/office-a' )); ?>" class="button">MORE</a>
            </div>
            <div class="slide-content">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="<?php echo esc_url( get_theme_file_uri('images/a_staff_img.jpg') ); ?>" alt=""></div>
                        <div class="swiper-slide"><img src="<?php echo esc_url( get_theme_file_uri('images/a-section-img4.jpg') ); ?>" alt=""></div>
                    </div>
                </div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="<?php echo esc_url( get_theme_file_uri('images/a_staff_img2.jpg') ); ?>" alt="">
                        </div>
                        <div class="swiper-slide"><img src="<?php echo esc_url( get_theme_file_uri('images/a-section-img5.jpg') ); ?>" alt=""></div>
                        <div class="swiper-slide"><img src="<?php echo esc_url( get_theme_file_uri('images/a-section-img6.jpg') ); ?>" alt=""></div>
                    </div>
                </div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="<?php echo esc_url( get_theme_file_uri('images/a_staff_img3.jpg') ); ?>" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo esc_url( get_theme_file_uri('images/a-section-img7.jpg') ); ?>" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo esc_url( get_theme_file_uri('images/a-section-img8.jpg') ); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <a href="<?php echo esc_url(home_url('/office-a')); ?>" class="m-button d-lg-none">MORE</a>
        </section>

        <section id="section05">
            <div class="itemimage">
                <img src="<?php echo esc_url( get_theme_file_uri('images/b-staff_02.jpg') ); ?>" class="d-lg-none">
                <img src="<?php echo esc_url( get_theme_file_uri('images/b_staff_img.jpg') ); ?>">
                <div></div>
            </div>

            <div class="content">
                <p class="content-title">就労継続支援Ｂ型</p>
                <h3>
                    <img src="<?php echo esc_url( get_theme_file_uri('images/+ipppo_08.png') ); ?>" alt="+ipppo" class="pb30" width="156px">
                    <img src="<?php echo esc_url( get_theme_file_uri('images/b-copy_07.png') ); ?>" alt="">
                </h3>
                <p class="content-text">みんなと仕事をするのが楽しくなる。
                    そんな働きやすい環境と楽しい人間関係づくりに
                    こだわりました。</p>
                <a href="<?php echo esc_url(home_url('/office-b')); ?>" class="button">MORE</a>
            </div>
        </section>

        <section id="section06">
            <div class="content pb-3">
                <p class="text-center font-weight-bold my-5">利用者さんの日々の活動はこちら</p>
            </div>
            <!-- サブループ -->
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 1,
            );
                $news_query = new WP_Query($args);
                ?>
            <?php if ( $news_query->have_posts()) : ?>
            <?php while ($news_query->have_posts() ) : ?>
            <?php $news_query->the_post(); ?>
            <div class="content mb90">
                <div>
                    <h2 class="single-title"><?php echo get_the_title(); ?></h2>
                </div>
                <div class="single-sub">
                    <p class="d-inline font-weight-bolder single-time">
                        <i class="far fa-calendar-alt fa-fw"></i>
                        <?php the_time('Y年n月j日'); ?>
                    </p>
                    <p class="d-inline font-weight-bolder">
                        <i class="fas fa-tag fa-fw"></i>
                        <?php get_the_tags(); ?>
                    </p>
                </div>
                <div>
                    <div class="single-img">
                        <?php the_post_thumbnail(array(650, 366)); ?>
                    </div>
                    <div class="single-content mb-5">
                        <?php the_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="button">MORE</a>
                    <div class="clear"></div>
                </div>
            </div>
            <?php endwhile;
                    wp_reset_postdata();
                    else: ?>
            <p>投稿はありません。</p>
            <?php endif; ?>

        </section>

    </main>
</div>

<?php get_footer('front'); ?>
