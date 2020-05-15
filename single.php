<?php

/*
Template Name: labwel投稿ページ
*/

?>

<?php get_header(); ?>

<div class="container single-container">
    <div class="row">
        <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-xs-12">
            <div class="single-box">
                <?php if(have_posts()): the_post(); ?>
                <div>
                    <h2 class="single-title"><?php echo get_the_title(); ?></h2>
                </div>
                <div class="single-sub">
                    <p class="d-inline font-weight-bolder single-time"><i class="far fa-calendar-alt fa-fw"></i><?php the_time('Y年n月j日'); ?></p>
                    <p class="d-inline font-weight-bolder"><i class="fas fa-tag fa-fw"></i><?php the_tags(); ?></p>
                </div>
                <div>
                    <div class="single-img"><?php the_post_thumbnail(array(650, 366)); ?></div>
                    <div class="single-content"><?php the_content(); ?></div>
                </div>
                <div>
                    <?php 
                    the_post_navigation( array(
                        'prev_text'           => '< %title',
                        'next_text'           => '%title >',
                    ) ); 
                    ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-xs-12 single-side">
            <?php get_search_form(); ?>
            <div class="archive-box">
                <p class="archive-title">Archive</p>
                <?php
                $year_prev = null;
                $months = $wpdb->get_results("SELECT DISTINCT MONTH( post_date ) AS month ,
                YEAR( post_date ) AS year,
                COUNT( id ) as post_count FROM $wpdb->posts
                WHERE post_status = 'publish' and post_date <= now( )
                and post_type = 'post'
                GROUP BY month , year
                ORDER BY post_date DESC");
                foreach($months as $month) :
                $year_current = $month->year;
                if ($year_current != $year_prev){
                    if ($year_prev != null){?>
                </ul>
                <?php } ?>
            <input type="checkbox" class="accordion archive-check" />
            <label class="archive-year"><?php echo $month->year; ?></label>
                <ul>
                    <?php } ?>
                    <li>
                        <a href="<?php bloginfo('url') ?>/<?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>">
                            <?php echo date("n", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>月
                            (<?php echo $month->post_count; ?>)
                        </a>
                    </li>
                    <?php $year_prev = $year_current;
                    endforeach; ?>
                </ul>
            </div>
        <div class="tegs-box">
                <p><i class="fas fa-tag fa-fw"></i>タグ</p>
                <?php wp_tag_cloud(); ?>
            </div>
        <div class="facebook-box">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Flabwel.co.jp&tabs=timeline&width=230&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="230" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
        </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>