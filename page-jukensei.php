<?php
// Template Name: 受験生サイト
$theme_uri = get_template_directory_uri();
?>

<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
  <meta charset="utf-8">
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-MQ7BTTZQ');
  </script>
  <!-- End Google Tag Manager -->
  <meta name="viewport" id="viewport" content="width=device-width,user-scalable=yes">
  <link rel="stylesheet" type="text/css" href="<?php echo $theme_uri; ?>/jukensei/assets/css/common.css">
  <!-- 各頁用 CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo $theme_uri; ?>/jukensei/assets/css/jukensei/index.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Zen+Kaku+Gothic+New:wght@500;700&display=swap" rel="stylesheet">
  <!-- 各頁用 JS-->
  <script src="<?php echo $theme_uri; ?>/jukensei/assets/js/jukensei/index.js"></script>

  <?php wp_head(); ?>
</head>

<body id="index">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src=https://www.googletagmanager.com/ns.html?id=GTM-MQ7BTTZQ
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div class="un_loader"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/loader.png" alt="高知健康科学大学 受験生応援サイト まっしろから、はじめよう"></div>
  <main id="wrapper">
    <div id="wrapper_bg"></div>

    <!-- jukensei/parts-header.phpの読み込み -->
    <?php get_template_part('jukensei/parts-header'); ?>

    <!-- CONTENT-->

    <!-- jukensei/parts-leftside.phpの読み込み -->
    <?php get_template_part('jukensei/parts-leftside'); ?>

    <article id="content">
      <div class="un_spHeader">
        <h1 class="un_spHeader_top"> <a href="<?php echo home_url(); ?>/jukensei/"> <img class="logo" src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/spheader_logo.png" alt="まっしろから、はじめよう。高知健康科学大学 UNIVERSITY OF KOCHI HEALTH SCIENCES"></a>
          <div class="un_spHeader_toggle"><span></span><span></span><span></span></div>
        </h1>
      </div>

      <section class="un_showcase">
        <div class="un_showcase_imgs">
          <div class="un_showcase_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/showcase_img1.jpg" alt=""></div>
          <div class="un_showcase_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/showcase_img1.jpg" alt=""></div>
          <div class="un_showcase_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/showcase_img1.jpg" alt=""></div>
          <!-- <div class="un_showcase_txt"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/showcase_txt.png" alt="あなたは、何色にでもなれる。100人100色の未来セイバー「これがわたしのめざす道」"></div> -->
        </div>
        <div class="un_showcase_scroll"> <span>SCROLL</span><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow2.png" alt="&gt;" width="10" height="10"></div>
      </section>
      <section class="un_intro" id="intro">
        <h2 class="un_intro_ttl"><span>INTRODUCTION</span>まず知って欲しいこと</h2>
        <div class="para para-slideup para-g1">
          <p class="un_intro_copy"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/intro_copy.png" alt="あなたの知らないリハビリテーション。"></p>
          <div class="un_intro_detail">
            <p class="un_intro_message">
              未来の社会が、企業が、人々が、<br>
              あなたがセラピストになることを、<br>
              心待ちにしている。
            </p>
            <div class="un_intro_image">
              <p><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow2.png" alt="&gt;" width="10" height="10">左右へスライド<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow2.png" alt="&gt;" width="10" height="10"></p>
              <div class="un_intro_image_core">
                <picture>
                  <source srcset="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/intro_image.webp" type="image/webp"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/intro_image.png" alt="THERAPIST 理学療法士 作業療法士">
                </picture>
              </div>
            </div>
            <div class="un_intro_scenes para para-slideup para-g1">
              <div class="un_intro_scene"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/intro_scene1.png" alt="">
                <p class="un_intro_scene_ttl">病院での治療<br>心身機能回復支援</p>
              </div>
              <div class="un_intro_scene"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/intro_scene2.png" alt="">
                <p class="un_intro_scene_ttl">住宅改修・<br>生活場面の援助</p>
              </div>
              <div class="un_intro_scene"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/intro_scene3.png" alt="">
                <p class="un_intro_scene_ttl">スポーツ<br>トレーナー活動</p>
              </div>
              <div class="un_intro_scene"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/intro_scene4.png" alt="">
                <p class="un_intro_scene_ttl">健康社会を<br>実現する研究</p>
              </div>
              <div class="un_intro_scene"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/intro_scene5.png" alt="">
                <p class="un_intro_scene_ttl">地域住民への<br>健康増進活動</p>
              </div>
              <div class="un_intro_scene"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/intro_scene6.png" alt="">
                <p class="un_intro_scene_ttl">特別支援学校<br>での支援</p>
              </div>
              <div class="un_intro_scene"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/intro_scene7.png" alt="">
                <p class="un_intro_scene_ttl">災害時の支援<br>被災者のケア</p>
              </div>
              <div class="un_intro_scene"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/intro_scene8.png" alt="">
                <p class="un_intro_scene_ttl">一般企業での<br>製品開発</p>
              </div>
              <div class="un_intro_scene"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/intro_scene9.png" alt="">
                <p class="un_intro_scene_ttl">行政での<br>制度づくり</p>
              </div>
              <div class="un_intro_scene"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/intro_scene10.png" alt="">
                <p class="un_intro_scene_ttl">まちづくり<br>への参画</p>
              </div>
            </div>
            <div class="un_intro_exp para para-slideup para-g2">
              <p>
                セラピストの活躍フィールドは、<br>
                医療の分野にとどまりません。<br>
                <br>
                こころとからだの健康の<br>
                プロフェッショナルとして、じつに<br>
                さまざまなシーンや分野で求められます。<br>
                スポーツ分野や企業の研究開発分野は<br>
                もちろんのこと、行政機関の制度づくりや<br>
                街づくりにおいても、<br>
                理学療法士・作業療法士の知識や技術が<br>
                活かされます。<br>
                とりわけ人生100年時代といわれる<br>
                社会では、そのフィールドは<br>
                ますます広がっていくでしょう。
              </p>
              <p>
                理学療法士・作業療法士の資格を<br>
                手にすること。<br>
                それは、未来のあらゆる可能性を<br>
                手にするということです。
              </p>
              <div class="un_intro_exp_stick"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/intro_stick.png" alt=""></div>
            </div>
          </div>
          <div class="bl_toggleBtn">
            <div class="bl_toggleBtn_txt"> <span>詳しく見る</span><span>閉じる</span></div><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow2.png" alt="&gt;" width="10" height="10">
          </div>
        </div>
      </section>
      <section class="un_special">
        <div class="un_special_ttl"> <span>SPECIAL CONTENTS</span>スペシャルコンテンツ</div>
        <div class="para para-slideup para-g2"><a class="un_special_item" href="/oc202403">
            <div class="un_special_item_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/special_img1.jpg" alt="まっしろからはじめよう。OPEN CAMPUS">
              <p class="roboto"><span>4/20 SUN</span><br><span>10:00-13:00</span></p>
            </div>
            <div class="un_special_item_txt">OPEN CAMPUS<br><span>オープンキャンパス</span></div>
          </a>
        </div>
        <div class="para para-slideup para-g2">
          <a class="un_special_item pointer-events" href="/oc202403">
            <div class="un_special_item_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/special_img-miraiiro.jpg" alt="自分の未来色診断">
              <!-- <p class="roboto"><span>4/20 SUN</span><br><span>10:00-13:00</span></p> -->
            </div>
            <div class="un_special_item_txt">DISCOVER YOUR FUTURE COLOR<br><span>じぶんの未来色診断</span></div>
          </a>
        </div>
        <div class="para para-slideup para-g2"><a class="un_special_item" href="<?php echo home_url(); ?>/support">
            <div class="un_special_item_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/special_img_support.jpg" alt="0円からはじめよう。 高知健康科学大学入居支度金補助制度"></div>
            <div class="un_special_item_txt">SPECIAL SUPPORT<br><span>ひとり暮らしのスタートを応援！</span></div>
          </a>
        </div>
        <div class="para para-slideup para-g2"><a class="un_special_item" href="<?php echo home_url(); ?>/jukensei/specialcontents">
            <div class="un_special_item_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/special_img2.jpg" alt="100人100色の未来セイバー「これがわたしのめざす道」"></div>
            <div class="un_special_item_txt">THE FUTURE OF STUDENTS<br><span>学生たちの未来宣誓</span></div>
          </a>
        </div>
      </section>
      <section class="un_learnMore" style="">
        <div class="un_learnMore_ttl"> <span>LEARN MORE</span>大学紹介</div>
        <div class="para para-slideup para-g4"><a class="un_learnMore_item" href="<?php echo home_url(); ?>/features/">
            <div class="un_learnMore_item_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/learnmore_img1.jpg" alt=""></div>
            <div class="un_learnMore_item_txt">WHAT’S KOKENDAI ?<br><span>学びの特色</span></div>
          </a>
          <div class="un_learnMore_col"><a class="un_learnMore_item" href="<?php echo home_url(); ?>/features/rigaku/">
              <div class="un_learnMore_item_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/learnmore_img2.jpg" alt=""></div>
              <div class="un_learnMore_item_txt un_learnMore_item_txt--2">理学療法学専攻</div>
            </a><a class="un_learnMore_item" href="<?php echo home_url(); ?>/features/sagyo/">
              <div class="un_learnMore_item_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/learnmore_img3.jpg" alt=""></div>
              <div class="un_learnMore_item_txt un_learnMore_item_txt--2">作業療法学専攻</div>
            </a></div>
        </div>
      </section>
      <section class="un_otherContents">
        <div class="un_otherContents_ttl"> <span>OTHER CONTENTS</span>その他のコンテンツ</div>
        <div class="para para-slideup para-g7"><a class="un_otherContents_item" href="<?php echo home_url(); ?>/jukensei/future">
            <div class="un_otherContents_item_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/othercontents_img1.jpg" alt="まっしろな本音で話そう、セラピストの未来。"></div>
            <div class="un_otherContents_item_txt">THE FUTURE OF THERAPISTS<br><span>学生×教員本音トーク</span></div>
          </a></div>
        <div class="para para-slideup para-g7"><a class="un_otherContents_item" href="<?php echo home_url(); ?>/jukensei/campuslife">
            <div class="un_otherContents_item_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/othercontents_img2.jpg" alt="100人100色のキャンパスライフ"></div>
            <div class="un_otherContents_item_txt">CAMPUS LIFE<br><span>先輩たちのキャンパスライフ</span></div>
          </a></div>
        <div class="para para-slideup para-g7"><a class="un_otherContents_item" href="/admission">
            <div class="un_otherContents_item_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/othercontents_img3.jpg" alt="丸わかり!入試情報"></div>
            <div class="un_otherContents_item_txt">ADMISSIONS INFORMATION<br><span>入試情報</span></div>
          </a></div>
      </section>
      <section class="un_suuji">
        <div class="un_suuji_ttl"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/suuji_ttl.png" alt="KOKENDAI NUMBERS 数字で見るコウケンダイ"></div>
        <p class="un_suuji_attention">
          ※前身校土佐リハの実績</p>
        <div class="un_suuji_item para para-slideup para-g8"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/suuji_img1.png" alt="国家試験合格率 90%超"></div>
        <div class="un_suuji_item para para-slideup para-g8"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/suuji_img2.png" alt="就職率 100%"></div>
        <div class="un_suuji_item para para-slideup para-g8"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/suuji_img3.png" alt="理学療法士・作業療法士を全国に輩出 1600名余"></div>
      </section>
      <section class="un_others">
        <div class="un_others_ttl"> <span>OTHERS</span>もっと詳しく知る</div>
        <div class="para para-slideup para-g9"><a class="un_others_item" href="/career">
            <div class="un_others_item_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/others_img1.jpg" alt="キャリア・就職支援"></div>
          </a></div>
        <div class="para para-slideup para-g9"><a class="un_others_item" href="/expenses">
            <div class="un_others_item_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/others_img2.jpg" alt="学費・奨学金"></div>
          </a></div>
        <div class="para para-slideup para-g9"><a class="un_others_item" href="/access">
            <div class="un_others_item_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/others_img3.jpg" alt="アクセス"></div>
          </a></div>
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