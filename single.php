<?php

/*
Template Name: labwel投稿ページ
*/

?>

<?php get_header(); ?>

<div class="container single-container">
    <div class="row">
        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
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
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>