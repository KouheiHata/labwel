<?php

/*
Template Name: labwelお問い合わせページ
*/

?>

<?php get_header(); ?>

<div class="container pt90 pb185">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 py-5">
            <p class="text-center font-weight-bolder font26 py-5">お問い合わせ</p>
            <p class="font-weight-bolder font26 pt-5 pl90 contact-text">ご不明な点や見学のご予約、その他お問い合わせなどはこちらのフォーム<br>か、下記の連絡先にお問い合わせください。</p>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pt30 pl100">
            <form>
                <div class="form-group form1">
                    <label for="exampleInputEmail1" class="col-3 font-weight-bolder font26">お名前<span style="color: #c34909;">*</span></label>
                    <input type="name" class="form-control form-control-lg col-8 d-inline-block form-control">
                </div>
                <div class="form-group form2">
                    <label for="exampleInputPassword1" class="col-3 font-weight-bolder font26">メールアドレス<span style="color: #c34909;">*</span></label>
                    <input type="email" class="form-control form-control-lg col-8 d-inline-block form-control">
                </div>
                <div class="form-group form3">
                    <label for="exampleInputPassword1" class="col-3 font-weight-bolder font26">電話番号</label>
                    <input type="text" class="form-control form-control-lg col-8 d-inline-block form-control">
                </div>
                <div class="form-group form4">
                    <label for="exampleInputPassword1" class="col-3 font-weight-bolder font26">FAX</label>
                    <input type="text" class="form-control form-control-lg col-8 d-inline-block form-control">
                </div>
                <div class="form-group form5">
                    <label for="exampleInputPassword1" class="col-3 font-weight-bolder font26">郵便番号</label>
                    <input type="text" class="form-control form-control-lg col-8 d-inline-block form-control">
                </div>
                <div class="form-group form6">
                    <label for="exampleInputPassword1" class="col-3 font-weight-bolder font26">住所</label>
                    <input type="text" class="form-control form-control-lg col-8 d-inline-block form-control">
                </div>
                <div class="form-group form7">
                    <label for="exampleInputPassword1" class="col-3 font-weight-bolder font26 align-top">内容</label>
                    <textarea class="form-control form-control-lg col-8 d-inline-block form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
                </div>
                <div class="form-group form8">
                    <p class="font-weight-bolder font26 pb60 contact-text"><span style="color: #c34909;">*</span>の付いた項目は必須です。<br>入力された個人情報は法令に基づく開示を除き、お問い合わせ以外の用途に<br>使用しません。</p>
                    <div class="form-check-box">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label font-weight-bolder font26 contact-text form-check-text" for="defaultCheck1">個人情報保護方針に同意する</label>
                    </div>
                </div>
                <div class="pt65 pl350">
                    <button type="submit" class="btn btn-contact font26">送信</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php get_footer(); ?>