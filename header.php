<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' );//言語属性を出力 ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0,initial-scale=1.0">
    <title>labwel</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <!-- Bootstrap4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- swiper css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/swiper.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

<?php
wp_deregister_script('jquery');
?>

<?php wp_head(); ?>

</head><!-- head end -->

<body <?php body_class(); //body要素にクラスを付けるタグ ?>>
    <header id="header" class="mt20">

        <div class="container">
            <div class="row">

                <h1>
                    <a href="<?php echo home_url() ?>"><img src="<?php echo esc_url( get_theme_file_uri('images/labwel-logo.png') ); ?>" alt="LABwel"></a>
                </h1>

                <ul class="vertical">
                    <li>
                        <img src="<?php echo esc_url( get_theme_file_uri('images/ipppo.png') ); ?>" alt="ipppo" width="50px">
                    </li>
                    <li>
                        <img src="<?php echo esc_url( get_theme_file_uri('images/+ipppo.png') ); ?>" alt="+ipppo" width="50px">
                    </li>
                </ul>
                
                <div id="ham" class="ham">
				<p>MENU</p>
                </div>
                
                <nav id="global-nav">
				    <header id="globHeader">
				        <a href="/"><img src="<?php echo esc_url( get_theme_file_uri('images/labwel-logo-menu.png') ); ?>" /></a>
				    </header>
	                <ul class="vertical">
	                    <li>
	                        <img src="<?php echo esc_url( get_theme_file_uri('images/ipppo.png') ); ?>" alt="ipppo" width="50px">
	                    </li>
	                    <li>
	                        <img src="<?php echo esc_url( get_theme_file_uri('images/+ipppo.png') ); ?>" alt="+ipppo" width="50px">
	                    </li>
	                </ul>
			        <ul class="main">
			            <li class="_1">
			                <a href="<?php echo esc_url(home_url('/')); ?>" class="hoverArea">
			                    <p class="gillSansNovaMedium">TOP</p>
			                </a>
			            </li>
			            <li class="_2">
			                <a href="<?php echo esc_url(home_url('/company')); ?>" class="hoverArea">
			                    <p class="gillSansNovaMedium">会社概要</p>
			                </a>
			            </li>
			            <li class="_3">
			                <a href="<?php echo esc_url(home_url('/office-a')); ?>" class="hoverArea">
			                    <p class="gillSansNovaMedium">就労継続支援<br class="menu_br" />Ａ型事業所</p>
			                </a>
			            </li>
			            <li class="_4">
			                <a href="<?php echo esc_url(home_url('/office-b')); ?>" class="hoverArea">
			                    <p class="gillSansNovaMedium">就労継続支援<br class="menu_br" />Ｂ型事業所</p>
			                </a>
			            </li>
			            <li class="_5">
			                <a href="<?php echo esc_url(home_url('/blog')); ?>" class="hoverArea">
			                    <p class="gillSansNovaMedium">ブログ</p>
			                </a>
			            </li>
			            <li class="_6">
			                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="hoverArea">
			                    <p class="gillSansNovaMedium">お問い合わせ</p>
			                </a>
			            </li>
			        </ul>
			        <div class="lower">
			            <p class="copyright gillSansNovaBook"><small>©︎ 2020, LABwel INC.,<span>ALL TRADEMARKS REGISTERED. ALL RIGHTS RESERVED</span></small></p>
			        </div>
                </nav>
            </div>
        </div>

    </header><!-- header end -->
