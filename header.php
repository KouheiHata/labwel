<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' );//言語属性を出力 ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0,initial-scale=1.0">
    <title>labwel</title>

    <!-- Bootstrap4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--スタイルシート-->
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!--    <?php //deregister_script('jquery'); //wordpressのjquery停止 ?> 現状でこれを使うとwordpressが動かない-->
    <?php wp_head(); ?>

</head><!-- head end -->

<body <?php body_class(); //body要素にクラスを付けるタグ ?>>
    <header id="header" class="mt20">

        <div class="container">
            <div class="row">

                <h1>
                    <img src="<?php echo esc_url( get_theme_file_uri('images/labwel-logo.png') ); ?>" alt="LABwel">
                </h1>
                
                <ul class="vertical">
                    <li>
                        <img src="<?php echo esc_url( get_theme_file_uri('images/ipppo.png') ); ?>" alt="ipppo">
                    </li>
                    <li>
                        <img src="<?php echo esc_url( get_theme_file_uri('images/+ipppo.png') ); ?>" alt="+ipppo">
                    </li>
                </ul>
                
                <div class="ham" id="ham">
                </div>
                
                <nav id="global-nav"></nav>

            </div>
        </div>

    </header><!-- header end -->
