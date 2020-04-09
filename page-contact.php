<?php

/*
Template Name: labwelお問い合わせページ
*/

?>

<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 py-5">
            <p class="text-center font-weight-bolder font25 py-5">お問い合わせ</p>
            <p class="font-weight-bolder font25 pt-5">ご不明な点や見学のご予約、その他お問い合わせなどはこちらのフォームか、下記の連絡先にお問い合わせください。</p>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 py-5">
            <form>
                <div class="form-group py-3">
                    <label for="exampleInputEmail1" class="col-3 font-weight-bolder font25">お名前<span style="color: #c34909;">*</span></label>
                    <input type="name" class="col-7 d-inline-block form-control">
                </div>
                <div class="form-group py-3">
                    <label for="exampleInputPassword1" class="col-3 font-weight-bolder font25">メールアドレス<span style="color: #c34909;">*</span></label>
                    <input type="email" class="col-7 d-inline-block form-control">
                </div>
                <div class="form-group py-3">
                    <label for="exampleInputPassword1" class="col-3 font-weight-bolder font25">電話番号</label>
                    <input type="text" class="col-7 d-inline-block form-control">
                </div>
                <div class="form-group py-3">
                    <label for="exampleInputPassword1" class="col-3 font-weight-bolder font25">FAX</label>
                    <input type="text" class="col-7 d-inline-block form-control">
                </div>
                <div class="form-group py-3">
                    <label for="exampleInputPassword1" class="col-3 font-weight-bolder font25">郵便番号</label>
                    <input type="text" class="col-7 d-inline-block form-control">
                </div>
                <div class="form-group py-3">
                    <label for="exampleInputPassword1" class="col-3 font-weight-bolder font25">住所</label>
                    <input type="text" class="col-7 d-inline-block form-control">
                </div>
                <div class="form-group py-3">
                    <label for="exampleInputPassword1" class="col-3 font-weight-bolder font25 align-top">内容</label>
                    <textarea class="col-7 d-inline-block form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                </div>
                <div class="form-group py-3">
                    <p class="font-weight-bolder font25 py-5"><span style="color: #c34909;">*</span>の付いた項目は必須です。<br>入力された個人情報は法令に基づく開示を除き、お問い合わせ以外の用途に使用しません。</p>
                    <input class="col-1 form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="col-11 form-check-label font-weight-bolder font25" for="defaultCheck1">個人情報保護方針に同意する</label>
                </div>
                <div class="text-center py-3">
                    <button type="submit" class="btn btn-contact font25">送信</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php get_footer(); ?>