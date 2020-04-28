<?php

/*
Template Name: labwelお問い合わせページ
*/

?>

<?php get_header(); ?>


<div class="container pt90 pb185 contact-container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 py-5 contact-titlebox">
            <p class="text-center font-weight-bolder font26 py-5 contact-title">お問い合わせ</p>
            <p class="font-weight-bolder font26 pt-5 pl90 contact-text contact-toptext">ご不明な点や見学のご予約、その他お問い合わせなど<br class="d-none d-sm-block d-md-none">はこちらのフォーム<br class="d-none d-lg-block">か、下記の連絡先にお問い合わせ<br class="d-none d-sm-block d-md-none">ください。</p>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pt30 pl100 contact-box">
			<?php echo do_shortcode('[contact-form-7 id="14" title="お問い合わせ"]'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>