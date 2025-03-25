
<?php
// Template Name: 受験生サイト future
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
    <link rel="stylesheet" type="text/css" href="<?php echo $theme_uri; ?>/jukensei/assets/css/jukensei/future/index.css"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Zen+Kaku+Gothic+New:wght@500;700&display=swap" rel="stylesheet">
    <!-- 各頁用 JS-->
    <script src="<?php echo $theme_uri; ?>/jukensei/assets/js/jukensei/future/index.js"></script>

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
        <section>
          <div class="un_top"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/future/top.jpg" alt="まっしろな本音で話そう、セラピストの未来"></div><a class="un_btn" href="<?php echo home_url(); ?>/jukensei/future/physical"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/future/btn1.jpg" alt=""></a><a class="un_btn" href="<?php echo home_url(); ?>/jukensei/future/occupational"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/future/btn2.jpg" alt=""></a>
        </section>
        
        <!-- FOOTER-->
        <?php get_template_part('jukensei/parts-footer'); ?>

      </article>

      <!-- jukensei/parts-rightside.phpの読み込み -->
      <?php get_template_part('jukensei/parts-rightside'); ?>

    </main>
  </body>
</html>

