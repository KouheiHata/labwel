<?php

/*
Template Name: labwelお問い合わせページ
*/

?>

<?php get_header(); ?>

<img src="http://localhost/wp-content/uploads/2020/04/20200415_LABwel_01_mail_ol_cs6.png" width="100%" class="testimg">

<div class="container pt90 pb185">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 py-5 contact-titlebox">
            <p class="text-center font-weight-bolder font26 py-5 contact-title">お問い合わせ</p>
            <p class="font-weight-bolder font26 pt-5 pl90 contact-text contact-toptext">ご不明な点や見学のご予約、その他お問い合わせなど<br class="d-block d-md-none">はこちらのフォーム<br class="d-none d-lg-block">か、下記の連絡先にお問い合わせ<br class="d-block d-md-none">ください。</p>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pt30 pl100 contact-box">
            <form>
                <div class="form-group form1">
                    <label for="exampleInputEmail1" class="col-xl-3 col-lg-3 col-md-3 col-sm-5 col-xs-5 font-weight-bolder font26">お名前<span style="color: #c34909;">*</span></label>
                    <input type="name" class="form-control form-control-lg col-xl-8 col-lg-8 col-md-8 col-sm-7 col-xs-6 d-inline-block form-control">
                </div>
                <div class="form-group form2">
                    <label for="exampleInputPassword1" class="col-xl-3 col-lg-3 col-md-3 col-sm-5 col-xs-5 font-weight-bolder font26">メールアドレス<span style="color: #c34909;">*</span></label>
                    <input type="email" class="form-control form-control-lg col-xl-8 col-lg-8 col-md-8 col-sm-7 col-xs-6 d-inline-block form-control">
                </div>
                <div class="form-group form3">
                    <label for="exampleInputPassword1" class="col-xl-3 col-lg-3 col-md-3 col-sm-5 col-xs-5 font-weight-bolder font26">電話番号</label>
                    <input type="text" class="form-control form-control-lg col-xl-8 col-lg-8 col-md-8 col-sm-7 col-xs-6 d-inline-block form-control">
                </div>
                <div class="form-group form4">
                    <label for="exampleInputPassword1" class="col-xl-3 col-lg-3 col-md-3 col-sm-5 col-xs-5 font-weight-bolder font26">FAX</label>
                    <input type="text" class="form-control form-control-lg col-xl-8 col-lg-8 col-md-8 col-sm-7 col-xs-6 d-inline-block form-control">
                </div>
                <div class="form-group form5">
                    <label for="exampleInputPassword1" class="col-xl-3 col-lg-3 col-md-3 col-sm-5 col-xs-5 font-weight-bolder font26">郵便番号</label>
                    <input type="text" class="form-control form-control-lg col-xl-8 col-lg-8 col-md-8 col-sm-7 col-xs-6 d-inline-block form-control">
                </div>
                <div class="form-group form6">
                    <label for="exampleInputPassword1" class="col-xl-3 col-lg-3 col-md-3 col-sm-5 col-xs-5 font-weight-bolder font26">住所</label>
                    <input type="text" class="form-control form-control-lg col-xl-8 col-lg-8 col-md-8 col-sm-7 col-xs-6 d-inline-block form-control">
                </div>
                <div class="form-group form7">
                    <label for="exampleInputPassword1" class="col-xl-3 col-lg-3 col-md-3 col-sm-5 col-xs-5 font-weight-bolder font26 align-top">内容</label>
                    <textarea class="form-control form-control-lg col-xl-8 col-lg-8 col-md-8 col-sm-7 col-xs-6 d-inline-block form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
                </div>
                <div class="form-group form8">
                    <p class="font-weight-bolder font26 pb60 contact-text"><span style="color: #c34909;">*</span>の付いた項目は必須です。<br>入力された個人情報は法令に基づく開示を除き、お<br class="d-block d-md-none">問い合わせ以外の用途に<br class=" d-none d-lg-block">使用しません。</p>
                    <div class="form-check-box">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label font-weight-bolder font26 contact-text form-check-text" for="defaultCheck1">個人情報保護方針に同意する</label>
                    </div>
                </div>
                <div class="pt65 pl350 contact-btnbox">
                    <button type="submit" class="btn btn-contact font26">送信</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php get_footer(); ?>