<footer id="footer">
    <div class="container-fluid py-5">
        <div class="row footer-box">
            <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12 footer-logo">
                <div>
                    <img class="footer-logo1" src="<?php echo esc_url( get_theme_file_uri('images/labwel-logo.png') ); ?>">
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-6 col-sm-6 col-xs-6 pl90 footer-textbox1">
                <div>
                    <img class="footer-logo2" src="<?php echo esc_url( get_theme_file_uri('images/ipppo_06.png') ); ?>">
                </div>
                <div class="footer-text">
                    <p class="font-weight-bolder pb10">〒914-0045&nbsp;&nbsp;敦賀市古田刈66-803-2</p>
                    <p class="font-weight-bolder pb10">TEL:0770-47-6526&nbsp;&nbsp;FAX:0770-47-6527</p>
                    <p class="font-weight-bolder pb10">TEL:0770-47-5024（おそうじ部）</p>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-6 col-sm-6 col-xs-6 footer-textbox2">
                <div>
                    <img class="footer-logo2" src="<?php echo esc_url( get_theme_file_uri('images/+ipppo_08.png') ); ?>">
                </div>
                <div class="footer-text">
                    <p class="font-weight-bolder pb10">〒914-0121&nbsp;&nbsp;福井県敦賀市野神2-34-2</p>
                    <p class="font-weight-bolder pb10">TEL:0770-47-6979&nbsp;&nbsp;FAX:0770-47-6984</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-footer">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="text-center">
                    <p class="d-inline-block text-left text-white">©︎&nbsp;&nbsp;2020,&nbsp;&nbsp;LABwel&nbsp;&nbsp;INC.,<br>ALL&nbsp;&nbsp;TRADEMARKS&nbsp;&nbsp;REGISTERED.&nbsp;&nbsp;ALL&nbsp;&nbsp;RIGHTS&nbsp;&nbsp;RESERVED</p>
                </div>
            </div>
        </div>
    </div>
</footer><!-- footer end -->

<!--- bootstrap4 javascript --->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper-utils.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<!-- swiper -->
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/swiper.min.js"></script>
<script>
var swiper = new Swiper ('.swiper-container', {
    navigation: {
        nextE1: '.swiper-button-next',
        prevE1: '.swiper-button-prev',
    },
    effect: "fade", //フェードさせる
    loop: true,
    autoplay: {
        delay: 2000,
        disableOnInteraction :false,
    },
});
</script>

<!-- 検索エリアボタン変更 -->
<script>
$('#searchsubmit').val('\uf002')
</script>

<?php wp_footer(); ?>
</body>

</html>
