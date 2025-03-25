
<?php
// Template Name: 受験生サイト campuslife
$theme_uri = get_template_directory_uri();
?>

<!DOCTYPE html>
<html lang="ja">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
    <meta charset="utf-8">
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-MQ7BTTZQ');</script>
	<!-- End Google Tag Manager -->
    <meta name="viewport" id="viewport" content="width=device-width,user-scalable=yes">
    <link rel="stylesheet" type="text/css" href="<?php echo $theme_uri; ?>/jukensei/assets/css/common.css">
    <!-- 各頁用 CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo $theme_uri; ?>/jukensei/assets/css/jukensei/campuslife/index.css"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Zen+Kaku+Gothic+New:wght@500;700&display=swap" rel="stylesheet">
    <!-- 各頁用 JS-->
    <script src="<?php echo $theme_uri; ?>/jukensei/assets/js/jukensei/campuslife/index.js"></script>

    <?php wp_head(); ?>
  </head>
  <body id="index">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src=https://www.googletagmanager.com/ns.html?id=GTM-MQ7BTTZQ
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
    <!-- <div class="un_loader"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/loader.png" alt="高知健康科学大学 受験生応援サイト まっしろから、はじめよう"></div> -->
    <main id="wrapper">
      <div id="wrapper_bg"></div>

      <!-- jukensei/parts-header.phpの読み込み -->
      <?php get_template_part('jukensei/parts-header'); ?>

      <!-- CONTENT-->
      
      <!-- jukensei/parts-leftside.phpの読み込み -->
      <?php get_template_part('jukensei/parts-leftside'); ?>

      <article id="content">
        <div class="un_spHeader">
          <div class="un_spHeader_top"> <a href="<?php echo home_url(); ?>/jukensei/"> <img class="logo" src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/spheader_logo.png" alt="まっしろから、はじめよう。高知健康科学大学 UNIVERSITY OF KOCHI HEALTH SCIENCES"></a>
            <div class="un_spHeader_toggle"><span></span><span></span><span></span></div>
          </div>
        </div>
        <section class="un_content" style="background-image: url(<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/campuslife/bg.png);">
          <h1 class="un_top"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/campuslife/top_img.png" alt="100人100色のキャンパスライフ キャンパスライフを学生目線でちょこっとご紹介！"></h1>
          <div class="un_imgs">
            <div class="un_img para para-slideup para-g1"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/campuslife/img1.png" alt="The start of the day! ※写真は前身校土佐リハの時のものです"></div>
            <div class="un_img para para-slideup para-g1"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/campuslife/img2.png" alt="リハビリのための道具をマスター"></div>
            <div class="un_img para para-slideup para-g1"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/campuslife/img3.png" alt="遊んでる？いいえ、授業風景です（笑）"></div>
            <div class="un_img para para-slideup para-g1"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/campuslife/img4.png" alt="地域まるごと学びのフィールド！"></div>
            <div class="un_img para para-slideup para-g1"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/campuslife/img5.png" alt="アートの力がリハビリに！？"></div>
            <div class="un_img para para-slideup para-g1"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/campuslife/img6.png" alt="授業終わりは羽を伸ばして♪"></div>
            <div class="un_img para para-slideup para-g1"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/campuslife/img7.png" alt="学園祭も全力で！"></div>
            <div class="un_img para para-slideup para-g1"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/campuslife/img8.png" alt="スポーツで汗をながす日も"></div>
          </div>
        </section>
        <section class="bl_others">
          <div class="bl_others_ttl"> <span>OTHERS</span>もっと詳しく知る</div>
          <div class="bl_others_items"><a class="bl_others_item" href="/oc202403">
              <div class="bl_others_item_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/others_img1.jpg" alt="まっしろからはじめよう。"></div></a><a class="bl_others_item" href="<?php echo home_url(); ?>/jukensei/jukensei/specialcontents">
              <div class="bl_others_item_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/others_img2.jpg" alt="100人100色の未来セイバー「これがわたしのめざす道」"></div></a><a class="bl_others_item" href="<?php echo home_url(); ?>//features/">
              <div class="bl_others_item_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/others_img3.jpg" alt="WHAT'S KOKENDAI? 学びの特色 理学療法学/作業療法学 専攻"></div></a><a class="bl_others_item" href="<?php echo home_url(); ?>/jukensei/jukensei/future">
              <div class="bl_others_item_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/others_img4.jpg" alt="まっしろな本音で話そう、セラピストの未来。"></div></a><a class="bl_others_item" href="<?php echo home_url(); ?>/jukensei/jukensei/campuslife">
              <div class="bl_others_item_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/others_img5.jpg" alt="100人100色のキャンパスライフ"></div></a><a class="bl_others_item" href="/admission">
              <div class="bl_others_item_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/others_img6.jpg" alt="丸わかり！入試情報"></div></a></div>
        </section>
        <section class="bl_docs"><a href="/request"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/docs_img1.png" alt="あなたは、何色にでもなれる。 NEW PAMPHLET 送料無料！今すぐ資料請求 詳しくはこちら"></a></section>
        
        <!-- FOOTER-->
        <?php get_template_part('jukensei/parts-footer'); ?>

      </article>
      
      <!-- jukensei/parts-rightside.phpの読み込み -->
      <?php get_template_part('jukensei/parts-rightside'); ?>

    </main>
  </body>
</html>