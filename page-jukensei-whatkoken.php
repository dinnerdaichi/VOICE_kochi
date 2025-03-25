
<?php
// Template Name: 受験生サイト whatkoken
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
    <link rel="stylesheet" type="text/css" href="<?php echo $theme_uri; ?>/jukensei/assets/css/jukensei/whatkoken/index.css"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Zen+Kaku+Gothic+New:wght@500;700&display=swap" rel="stylesheet">
    <!-- 各頁用 JS-->
    <script src="<?php echo $theme_uri; ?>/jukensei/assets/js/jukensei/whatkoken/index.js"></script>

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
        <div class="un_popup un_popup--1">
          <div class="un_popup_inner">
            <div class="un_popup_close"> </div>
            <div class="un_popup_baseWrap">
              <div class="un_popup_base"> 
                <div class="un_popup_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/popup_img1.jpg" alt=""></div>
                <div class="un_popup_role">
                   理学療法学専攻<br><span>田中 太郎</span></div>
                <div class="un_popup_subttl">○先生は何の研究をしているの？</div>
                <div class="un_popup_txt">ダミーダミーの研究。大学時代、ダミーの授業がきっかけ。ダミーです。50文字程度。ダミーです。50文字程度。簡単に。<br><a href="#">もっと詳しく見る<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow3.png" alt="" width="10" height="10"></a></div>
                <div class="un_popup_subttl">○オススメ推し本</div>
                <div class="un_popup_txt">ダミーダミーの書</div>
                <div class="un_popup_subttl">○学生に向けてメッセージを！</div>
                <div class="un_popup_txt">ダミー学生に向けて、簡単に一言コメントを。ダミーです。50文字程度。ダミーです。50文字程度。簡単に一言。</div>
              </div>
              <div class="un_popup_base"> 
                <div class="un_popup_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/popup_img2.jpg" alt=""></div>
                <div class="un_popup_role">
                   理学療法学専攻<br><span>田中 太郎</span></div>
                <div class="un_popup_subttl">○先生は何の研究をしているの？</div>
                <div class="un_popup_txt">ダミーダミーの研究。大学時代、ダミーの授業がきっかけ。ダミーです。50文字程度。ダミーです。50文字程度。簡単に。<br><a href="#">もっと詳しく見る<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow3.png" alt="" width="10" height="10"></a></div>
                <div class="un_popup_subttl">○オススメ推し本</div>
                <div class="un_popup_txt">ダミーダミーの書</div>
                <div class="un_popup_subttl">○学生に向けてメッセージを！</div>
                <div class="un_popup_txt">ダミー学生に向けて、簡単に一言コメントを。ダミーです。50文字程度。ダミーです。50文字程度。簡単に一言。</div>
              </div>
              <div class="un_popup_base"> 
                <div class="un_popup_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/popup_img3.jpg" alt=""></div>
                <div class="un_popup_role">
                   理学療法学専攻<br><span>田中 太郎</span></div>
                <div class="un_popup_subttl">○先生は何の研究をしているの？</div>
                <div class="un_popup_txt">ダミーダミーの研究。大学時代、ダミーの授業がきっかけ。ダミーです。50文字程度。ダミーです。50文字程度。簡単に。<br><a href="#">もっと詳しく見る<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow3.png" alt="" width="10" height="10"></a></div>
                <div class="un_popup_subttl">○オススメ推し本</div>
                <div class="un_popup_txt">ダミーダミーの書</div>
                <div class="un_popup_subttl">○学生に向けてメッセージを！</div>
                <div class="un_popup_txt">ダミー学生に向けて、簡単に一言コメントを。ダミーです。50文字程度。ダミーです。50文字程度。簡単に一言。</div>
              </div>
              <div class="un_popup_base"> 
                <div class="un_popup_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/popup_img4.jpg" alt=""></div>
                <div class="un_popup_role">
                   理学療法学専攻<br><span>田中 太郎</span></div>
                <div class="un_popup_subttl">○先生は何の研究をしているの？</div>
                <div class="un_popup_txt">ダミーダミーの研究。大学時代、ダミーの授業がきっかけ。ダミーです。50文字程度。ダミーです。50文字程度。簡単に。<br><a href="#">もっと詳しく見る<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow3.png" alt="" width="10" height="10"></a></div>
                <div class="un_popup_subttl">○オススメ推し本</div>
                <div class="un_popup_txt">ダミーダミーの書</div>
                <div class="un_popup_subttl">○学生に向けてメッセージを！</div>
                <div class="un_popup_txt">ダミー学生に向けて、簡単に一言コメントを。ダミーです。50文字程度。ダミーです。50文字程度。簡単に一言。</div>
              </div>
              <div class="un_popup_base"> 
                <div class="un_popup_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/popup_img5.jpg" alt=""></div>
                <div class="un_popup_role">
                   理学療法学専攻<br><span>田中 太郎</span></div>
                <div class="un_popup_subttl">○先生は何の研究をしているの？</div>
                <div class="un_popup_txt">ダミーダミーの研究。大学時代、ダミーの授業がきっかけ。ダミーです。50文字程度。ダミーです。50文字程度。簡単に。<br><a href="#">もっと詳しく見る<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow3.png" alt="" width="10" height="10"></a></div>
                <div class="un_popup_subttl">○オススメ推し本</div>
                <div class="un_popup_txt">ダミーダミーの書</div>
                <div class="un_popup_subttl">○学生に向けてメッセージを！</div>
                <div class="un_popup_txt">ダミー学生に向けて、簡単に一言コメントを。ダミーです。50文字程度。ダミーです。50文字程度。簡単に一言。</div>
              </div>
              <div class="un_popup_base"> 
                <div class="un_popup_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/popup_img6.jpg" alt=""></div>
                <div class="un_popup_role">
                   理学療法学専攻<br><span>田中 太郎</span></div>
                <div class="un_popup_subttl">○先生は何の研究をしているの？</div>
                <div class="un_popup_txt">ダミーダミーの研究。大学時代、ダミーの授業がきっかけ。ダミーです。50文字程度。ダミーです。50文字程度。簡単に。<br><a href="#">もっと詳しく見る<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow3.png" alt="" width="10" height="10"></a></div>
                <div class="un_popup_subttl">○オススメ推し本</div>
                <div class="un_popup_txt">ダミーダミーの書</div>
                <div class="un_popup_subttl">○学生に向けてメッセージを！</div>
                <div class="un_popup_txt">ダミー学生に向けて、簡単に一言コメントを。ダミーです。50文字程度。ダミーです。50文字程度。簡単に一言。</div>
              </div>
              <div class="un_popup_base"> 
                <div class="un_popup_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/popup_img7.jpg" alt=""></div>
                <div class="un_popup_role">
                   理学療法学専攻<br><span>田中 太郎</span></div>
                <div class="un_popup_subttl">○先生は何の研究をしているの？</div>
                <div class="un_popup_txt">ダミーダミーの研究。大学時代、ダミーの授業がきっかけ。ダミーです。50文字程度。ダミーです。50文字程度。簡単に。<br><a href="#">もっと詳しく見る<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow3.png" alt="" width="10" height="10"></a></div>
                <div class="un_popup_subttl">○オススメ推し本</div>
                <div class="un_popup_txt">ダミーダミーの書</div>
                <div class="un_popup_subttl">○学生に向けてメッセージを！</div>
                <div class="un_popup_txt">ダミー学生に向けて、簡単に一言コメントを。ダミーです。50文字程度。ダミーです。50文字程度。簡単に一言。</div>
              </div>
              <div class="un_popup_base"> 
                <div class="un_popup_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/popup_img8.jpg" alt=""></div>
                <div class="un_popup_role">
                   理学療法学専攻<br><span>田中 太郎</span></div>
                <div class="un_popup_subttl">○先生は何の研究をしているの？</div>
                <div class="un_popup_txt">ダミーダミーの研究。大学時代、ダミーの授業がきっかけ。ダミーです。50文字程度。ダミーです。50文字程度。簡単に。<br><a href="#">もっと詳しく見る<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow3.png" alt="" width="10" height="10"></a></div>
                <div class="un_popup_subttl">○オススメ推し本</div>
                <div class="un_popup_txt">ダミーダミーの書</div>
                <div class="un_popup_subttl">○学生に向けてメッセージを！</div>
                <div class="un_popup_txt">ダミー学生に向けて、簡単に一言コメントを。ダミーです。50文字程度。ダミーです。50文字程度。簡単に一言。</div>
              </div>
              <div class="un_popup_base"> 
                <div class="un_popup_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/popup_img9.jpg" alt=""></div>
                <div class="un_popup_role">
                   理学療法学専攻<br><span>田中 太郎</span></div>
                <div class="un_popup_subttl">○先生は何の研究をしているの？</div>
                <div class="un_popup_txt">ダミーダミーの研究。大学時代、ダミーの授業がきっかけ。ダミーです。50文字程度。ダミーです。50文字程度。簡単に。<br><a href="#">もっと詳しく見る<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow3.png" alt="" width="10" height="10"></a></div>
                <div class="un_popup_subttl">○オススメ推し本</div>
                <div class="un_popup_txt">ダミーダミーの書</div>
                <div class="un_popup_subttl">○学生に向けてメッセージを！</div>
                <div class="un_popup_txt">ダミー学生に向けて、簡単に一言コメントを。ダミーです。50文字程度。ダミーです。50文字程度。簡単に一言。</div>
              </div>
              <div class="un_popup_base"> 
                <div class="un_popup_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/popup_img10.jpg" alt=""></div>
                <div class="un_popup_role">
                   理学療法学専攻<br><span>田中 太郎</span></div>
                <div class="un_popup_subttl">○先生は何の研究をしているの？</div>
                <div class="un_popup_txt">ダミーダミーの研究。大学時代、ダミーの授業がきっかけ。ダミーです。50文字程度。ダミーです。50文字程度。簡単に。<br><a href="#">もっと詳しく見る<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow3.png" alt="" width="10" height="10"></a></div>
                <div class="un_popup_subttl">○オススメ推し本</div>
                <div class="un_popup_txt">ダミーダミーの書</div>
                <div class="un_popup_subttl">○学生に向けてメッセージを！</div>
                <div class="un_popup_txt">ダミー学生に向けて、簡単に一言コメントを。ダミーです。50文字程度。ダミーです。50文字程度。簡単に一言。</div>
              </div>
              <div class="un_popup_base"> 
                <div class="un_popup_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/popup_img11.jpg" alt=""></div>
                <div class="un_popup_role">
                   理学療法学専攻<br><span>田中 太郎</span></div>
                <div class="un_popup_subttl">○先生は何の研究をしているの？</div>
                <div class="un_popup_txt">ダミーダミーの研究。大学時代、ダミーの授業がきっかけ。ダミーです。50文字程度。ダミーです。50文字程度。簡単に。<br><a href="#">もっと詳しく見る<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow3.png" alt="" width="10" height="10"></a></div>
                <div class="un_popup_subttl">○オススメ推し本</div>
                <div class="un_popup_txt">ダミーダミーの書</div>
                <div class="un_popup_subttl">○学生に向けてメッセージを！</div>
                <div class="un_popup_txt">ダミー学生に向けて、簡単に一言コメントを。ダミーです。50文字程度。ダミーです。50文字程度。簡単に一言。</div>
              </div>
            </div>
            <div class="un_popup_links">
              <div class="un_popup_links_scr">
                <div class="un_popup_link"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher1_1.jpg" alt=""></div>
                <div class="un_popup_link"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher1_2.jpg" alt=""></div>
                <div class="un_popup_link"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher1_3.jpg" alt=""></div>
                <div class="un_popup_link"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher1_4.jpg" alt=""></div>
                <div class="un_popup_link"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher1_5.jpg" alt=""></div>
                <div class="un_popup_link"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher1_6.jpg" alt=""></div>
                <div class="un_popup_link"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher1_7.jpg" alt=""></div>
                <div class="un_popup_link"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher1_8.jpg" alt=""></div>
                <div class="un_popup_link"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher1_9.jpg" alt=""></div>
                <div class="un_popup_link"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher1_10.jpg" alt=""></div>
                <div class="un_popup_link"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher1_11.jpg" alt=""></div>
              </div>
            </div>
          </div>
        </div>
        <div class="un_popup un_popup--2">
          <div class="un_popup_inner">
            <div class="un_popup_close"> </div>
            <div class="un_popup_baseWrap">
              <div class="un_popup_base"> 
                <div class="un_popup_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/popup_img12.jpg" alt=""></div>
                <div class="un_popup_role">
                   理学療法学専攻<br><span>田中 太郎</span></div>
                <div class="un_popup_subttl">○先生は何の研究をしているの？</div>
                <div class="un_popup_txt">ダミーダミーの研究。大学時代、ダミーの授業がきっかけ。ダミーです。50文字程度。ダミーです。50文字程度。簡単に。<br><a href="#">もっと詳しく見る<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow3.png" alt="" width="10" height="10"></a></div>
                <div class="un_popup_subttl">○オススメ推し本</div>
                <div class="un_popup_txt">ダミーダミーの書</div>
                <div class="un_popup_subttl">○学生に向けてメッセージを！</div>
                <div class="un_popup_txt">ダミー学生に向けて、簡単に一言コメントを。ダミーです。50文字程度。ダミーです。50文字程度。簡単に一言。</div>
              </div>
              <div class="un_popup_base"> 
                <div class="un_popup_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/popup_img13.jpg" alt=""></div>
                <div class="un_popup_role">
                   理学療法学専攻<br><span>田中 太郎</span></div>
                <div class="un_popup_subttl">○先生は何の研究をしているの？</div>
                <div class="un_popup_txt">ダミーダミーの研究。大学時代、ダミーの授業がきっかけ。ダミーです。50文字程度。ダミーです。50文字程度。簡単に。<br><a href="#">もっと詳しく見る<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow3.png" alt="" width="10" height="10"></a></div>
                <div class="un_popup_subttl">○オススメ推し本</div>
                <div class="un_popup_txt">ダミーダミーの書</div>
                <div class="un_popup_subttl">○学生に向けてメッセージを！</div>
                <div class="un_popup_txt">ダミー学生に向けて、簡単に一言コメントを。ダミーです。50文字程度。ダミーです。50文字程度。簡単に一言。</div>
              </div>
              <div class="un_popup_base"> 
                <div class="un_popup_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/popup_img14.jpg" alt=""></div>
                <div class="un_popup_role">
                   理学療法学専攻<br><span>田中 太郎</span></div>
                <div class="un_popup_subttl">○先生は何の研究をしているの？</div>
                <div class="un_popup_txt">ダミーダミーの研究。大学時代、ダミーの授業がきっかけ。ダミーです。50文字程度。ダミーです。50文字程度。簡単に。<br><a href="#">もっと詳しく見る<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow3.png" alt="" width="10" height="10"></a></div>
                <div class="un_popup_subttl">○オススメ推し本</div>
                <div class="un_popup_txt">ダミーダミーの書</div>
                <div class="un_popup_subttl">○学生に向けてメッセージを！</div>
                <div class="un_popup_txt">ダミー学生に向けて、簡単に一言コメントを。ダミーです。50文字程度。ダミーです。50文字程度。簡単に一言。</div>
              </div>
              <div class="un_popup_base"> 
                <div class="un_popup_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/popup_img15.jpg" alt=""></div>
                <div class="un_popup_role">
                   理学療法学専攻<br><span>田中 太郎</span></div>
                <div class="un_popup_subttl">○先生は何の研究をしているの？</div>
                <div class="un_popup_txt">ダミーダミーの研究。大学時代、ダミーの授業がきっかけ。ダミーです。50文字程度。ダミーです。50文字程度。簡単に。<br><a href="#">もっと詳しく見る<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow3.png" alt="" width="10" height="10"></a></div>
                <div class="un_popup_subttl">○オススメ推し本</div>
                <div class="un_popup_txt">ダミーダミーの書</div>
                <div class="un_popup_subttl">○学生に向けてメッセージを！</div>
                <div class="un_popup_txt">ダミー学生に向けて、簡単に一言コメントを。ダミーです。50文字程度。ダミーです。50文字程度。簡単に一言。</div>
              </div>
              <div class="un_popup_base"> 
                <div class="un_popup_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/popup_img16.jpg" alt=""></div>
                <div class="un_popup_role">
                   理学療法学専攻<br><span>田中 太郎</span></div>
                <div class="un_popup_subttl">○先生は何の研究をしているの？</div>
                <div class="un_popup_txt">ダミーダミーの研究。大学時代、ダミーの授業がきっかけ。ダミーです。50文字程度。ダミーです。50文字程度。簡単に。<br><a href="#">もっと詳しく見る<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow3.png" alt="" width="10" height="10"></a></div>
                <div class="un_popup_subttl">○オススメ推し本</div>
                <div class="un_popup_txt">ダミーダミーの書</div>
                <div class="un_popup_subttl">○学生に向けてメッセージを！</div>
                <div class="un_popup_txt">ダミー学生に向けて、簡単に一言コメントを。ダミーです。50文字程度。ダミーです。50文字程度。簡単に一言。</div>
              </div>
              <div class="un_popup_base"> 
                <div class="un_popup_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/popup_img17.jpg" alt=""></div>
                <div class="un_popup_role">
                   理学療法学専攻<br><span>田中 太郎</span></div>
                <div class="un_popup_subttl">○先生は何の研究をしているの？</div>
                <div class="un_popup_txt">ダミーダミーの研究。大学時代、ダミーの授業がきっかけ。ダミーです。50文字程度。ダミーです。50文字程度。簡単に。<br><a href="#">もっと詳しく見る<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow3.png" alt="" width="10" height="10"></a></div>
                <div class="un_popup_subttl">○オススメ推し本</div>
                <div class="un_popup_txt">ダミーダミーの書</div>
                <div class="un_popup_subttl">○学生に向けてメッセージを！</div>
                <div class="un_popup_txt">ダミー学生に向けて、簡単に一言コメントを。ダミーです。50文字程度。ダミーです。50文字程度。簡単に一言。</div>
              </div>
              <div class="un_popup_base"> 
                <div class="un_popup_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/popup_img18.jpg" alt=""></div>
                <div class="un_popup_role">
                   理学療法学専攻<br><span>田中 太郎</span></div>
                <div class="un_popup_subttl">○先生は何の研究をしているの？</div>
                <div class="un_popup_txt">ダミーダミーの研究。大学時代、ダミーの授業がきっかけ。ダミーです。50文字程度。ダミーです。50文字程度。簡単に。<br><a href="#">もっと詳しく見る<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow3.png" alt="" width="10" height="10"></a></div>
                <div class="un_popup_subttl">○オススメ推し本</div>
                <div class="un_popup_txt">ダミーダミーの書</div>
                <div class="un_popup_subttl">○学生に向けてメッセージを！</div>
                <div class="un_popup_txt">ダミー学生に向けて、簡単に一言コメントを。ダミーです。50文字程度。ダミーです。50文字程度。簡単に一言。</div>
              </div>
            </div>
            <div class="un_popup_links">
              <div class="un_popup_links_scr">
                <div class="un_popup_link"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher2_1.jpg" alt=""></div>
                <div class="un_popup_link"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher2_2.jpg" alt=""></div>
                <div class="un_popup_link"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher2_3.jpg" alt=""></div>
                <div class="un_popup_link"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher2_4.jpg" alt=""></div>
                <div class="un_popup_link"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher2_5.jpg" alt=""></div>
                <div class="un_popup_link"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher2_6.jpg" alt=""></div>
                <div class="un_popup_link"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher2_7.jpg" alt=""></div>
              </div>
            </div>
          </div>
        </div>
        <section class="un_content">
          <h1 class="un_top"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/top.jpg" alt="WHAT'S KOKENDAI? 学びの特色"></h1>
          <div class="un_pointTop">
            <h2 class="un_pointTop_ttl">興味を広げる３つのポイント</h2>
            <div class="un_pointTop_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/point_img.png" alt="クロスオーバー x 教養 x 研究"></div>
          </div>
        </section>
        <section class="un_point">
          <h2 class="un_point_ttl top">POINT.1　クロスオーバー<br><span>
               クロスオーバーした学びで<br>
              チームアプローチの<br>
              礎を築く。</span></h2>
          <div class="un_point_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/point1_img1.png" alt=""></div>
          <div class="un_point_stick"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/point_stick1.png" alt=""></div>
          <div class="un_class" id="c">
            <div class="un_class_ttl">
               健康科学部<br>リハビリテーション学科</div>
            <div class="un_class_tabs">
              <div class="un_class_tab active">理学療法学専攻<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/tab_arrow.svg" alt=""></div>
              <div class="un_class_tab">作業療法学専攻<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/tab_arrow.svg" alt=""></div>
            </div>
            <div class="un_class_body">
              <div class="un_class_item">
                <div class="un_class_item_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_img1.jpg" alt=""></div>
                <div class="un_class_item_name">理学療法学専攻</div>
                <div class="un_class_item_exp">
                   病気やケガ、加齢などにより身体に障害を負った方やそれらが予測される方を運動療法や物理療法などを行い、基本的な運動機能や動作能力の改善を図ります。</div>
                <div class="un_class_item_toggle">教員紹介<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow2.png" alt="&gt;" width="10" height="10"></div>
                <div class="un_class_item_teachers">
                  <div class="un_class_item_teachers_inner">
                    <div class="un_class_item_teacher">
                      <div class="un_class_item_teacher_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher1_1.jpg" alt=""><span>プロフィール<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow1.png" alt="&gt;" width="8" height="8"></span></div>
                      <p>
                         理学療法学専攻<br><span>竹林 秀晃</span></p>
                    </div>
                    <div class="un_class_item_teacher">
                      <div class="un_class_item_teacher_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher1_2.jpg" alt=""><span>プロフィール<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow1.png" alt="&gt;" width="8" height="8"></span></div>
                      <p>
                         理学療法学専攻<br><span>渡邊 家康</span></p>
                    </div>
                    <div class="un_class_item_teacher">
                      <div class="un_class_item_teacher_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher1_3.jpg" alt=""><span>プロフィール<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow1.png" alt="&gt;" width="8" height="8"></span></div>
                      <p>
                         理学療法学専攻<br><span>井上 佳和</span></p>
                    </div>
                    <div class="un_class_item_teacher">
                      <div class="un_class_item_teacher_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher1_4.jpg" alt=""><span>プロフィール<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow1.png" alt="&gt;" width="8" height="8"></span></div>
                      <p>
                         理学療法学専攻<br><span>宅間 豊</span></p>
                    </div>
                    <div class="un_class_item_teacher">
                      <div class="un_class_item_teacher_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher1_5.jpg" alt=""><span>プロフィール<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow1.png" alt="&gt;" width="8" height="8"></span></div>
                      <p>
                         理学療法学専攻<br><span>近藤 寛</span></p>
                    </div>
                    <div class="un_class_item_teacher">
                      <div class="un_class_item_teacher_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher1_6.jpg" alt=""><span>プロフィール<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow1.png" alt="&gt;" width="8" height="8"></span></div>
                      <p>
                         理学療法学専攻<br><span>岡部 孝生</span></p>
                    </div>
                    <div class="un_class_item_teacher">
                      <div class="un_class_item_teacher_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher1_7.jpg" alt=""><span>プロフィール<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow1.png" alt="&gt;" width="8" height="8"></span></div>
                      <p>
                         理学療法学専攻<br><span>榎 勇人</span></p>
                    </div>
                    <div class="un_class_item_teacher">
                      <div class="un_class_item_teacher_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher1_8.jpg" alt=""><span>プロフィール<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow1.png" alt="&gt;" width="8" height="8"></span></div>
                      <p>
                         理学療法学専攻<br><span>宮本 祥子</span></p>
                    </div>
                    <div class="un_class_item_teacher">
                      <div class="un_class_item_teacher_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher1_9.jpg" alt=""><span>プロフィール<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow1.png" alt="&gt;" width="8" height="8"></span></div>
                      <p>
                         理学療法学専攻<br><span>川村 博文</span></p>
                    </div>
                    <div class="un_class_item_teacher">
                      <div class="un_class_item_teacher_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher1_10.jpg" alt=""><span>プロフィール<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow1.png" alt="&gt;" width="8" height="8"></span></div>
                      <p>
                         理学療法学専攻<br><span>宮本 謙三</span></p>
                    </div>
                    <div class="un_class_item_teacher">
                      <div class="un_class_item_teacher_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher1_11.jpg" alt=""><span>プロフィール<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow1.png" alt="&gt;" width="8" height="8"></span></div>
                      <p>
                         理学療法学専攻<br><span>奥田 教宏</span></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="un_class_item">
                <div class="un_class_item_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_img2.jpg" alt=""></div>
                <div class="un_class_item_name">作業療法学専攻</div>
                <div class="un_class_item_exp">
                   作業療法では、こころやからだに障害を負った方を身体面・心理面・環境面からサポートし、心身機能の回復・維持、問題解決や予防的指導を行います。</div>
                <div class="un_class_item_toggle">教員紹介<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow2.png" alt="&gt;" width="10" height="10"></div>
                <div class="un_class_item_teachers">
                  <div class="un_class_item_teachers_inner">
                    <div class="un_class_item_teacher">
                      <div class="un_class_item_teacher_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher2_1.jpg" alt=""><span>プロフィール<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow1.png" alt="&gt;" width="8" height="8"></span></div>
                      <p>
                         作業療法学専攻<br><span>畑田 早苗</span></p>
                    </div>
                    <div class="un_class_item_teacher">
                      <div class="un_class_item_teacher_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher2_2.jpg" alt=""><span>プロフィール<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow1.png" alt="&gt;" width="8" height="8"></span></div>
                      <p>
                         作業療法学専攻<br><span>稲富 惇一</span></p>
                    </div>
                    <div class="un_class_item_teacher">
                      <div class="un_class_item_teacher_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher2_3.jpg" alt=""><span>プロフィール<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow1.png" alt="&gt;" width="8" height="8"></span></div>
                      <p>
                         作業療法学専攻<br><span>箭野 豊</span></p>
                    </div>
                    <div class="un_class_item_teacher">
                      <div class="un_class_item_teacher_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher2_4.jpg" alt=""><span>プロフィール<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow1.png" alt="&gt;" width="8" height="8"></span></div>
                      <p>
                         作業療法学専攻<br><span>萩原 賢ニ</span></p>
                    </div>
                    <div class="un_class_item_teacher">
                      <div class="un_class_item_teacher_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher2_5.jpg" alt=""><span>プロフィール<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow1.png" alt="&gt;" width="8" height="8"></span></div>
                      <p>
                         作業療法学専攻<br><span>片岡 聡子</span></p>
                    </div>
                    <div class="un_class_item_teacher">
                      <div class="un_class_item_teacher_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher2_6.jpg" alt=""><span>プロフィール<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow1.png" alt="&gt;" width="8" height="8"></span></div>
                      <p>
                         作業療法学専攻<br><span>椛 秀人</span></p>
                    </div>
                    <div class="un_class_item_teacher">
                      <div class="un_class_item_teacher_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/class_teacher2_7.jpg" alt=""><span>プロフィール<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow1.png" alt="&gt;" width="8" height="8"></span></div>
                      <p>
                         作業療法学専攻<br><span>桂 雅俊</span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="un_curriculum">
            <div class="un_curriculum_inner">
              <div class="un_curriculum_ttl"> <span>カリキュラム</span><br>curriculum</div>
              <div class="un_curriculum_stick"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/curriculum_stick.png" alt=""></div>
            </div>
            <div class="un_curriculum_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/curriculum_img.png" alt=""></div>
          </div>
          <div class="un_cd">
            <div class="un_cd_name">２専攻クロスオーバー科目</div>
            <div class="un_cd_toggle">ピックアップ授業<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow2.png" alt="&gt;" width="10" height="10"></div>
            <div class="un_cd_items">
              <div class="un_cd_items_inner">
                <div class="un_cd_item">
                  <div class="un_cd_item_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/cd_img1.jpg" alt=""></div>
                  <p class="un_cd_item_txt">多職種連携教育</p>
                </div>
                <div class="un_cd_item">
                  <div class="un_cd_item_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/cd_img2.jpg" alt=""></div>
                  <p class="un_cd_item_txt">発展科目A／<br>ニューロサイエンス</p>
                </div>
                <div class="un_cd_item">
                  <div class="un_cd_item_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/cd_img3.jpg" alt=""></div>
                  <p class="un_cd_item_txt">救急救命処置演習</p>
                </div>
                <div class="un_cd_item">
                  <div class="un_cd_item_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/cd_img4.jpg" alt=""></div>
                  <p class="un_cd_item_txt">初年次IPE演習</p>
                </div>
              </div>
            </div>
          </div>
          <div class="un_cd">
            <div class="un_cd_name">理学療法学専攻</div>
            <div class="un_cd_toggle">
               ピックアップ授業<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow2.png" alt="&gt;" width="10" height="10"></div>
            <div class="un_cd_items">
              <div class="un_cd_items_inner">
                <div class="un_cd_item">
                  <div class="un_cd_item_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/cd_img5.jpg" alt=""></div>
                  <p class="un_cd_item_txt">物理療法学</p>
                </div>
                <div class="un_cd_item">
                  <div class="un_cd_item_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/cd_img6.jpg" alt=""></div>
                  <p class="un_cd_item_txt">スポーツ理学療法学</p>
                </div>
                <div class="un_cd_item">
                  <div class="un_cd_item_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/cd_img7.jpg" alt=""></div>
                  <p class="un_cd_item_txt">運動分析学</p>
                </div>
                <div class="un_cd_item">
                  <div class="un_cd_item_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/cd_img8.jpg" alt=""></div>
                  <p class="un_cd_item_txt">義肢学</p>
                </div>
              </div>
            </div>
          </div>
          <div class="un_cd">
            <div class="un_cd_name">作業療法学専攻</div>
            <div class="un_cd_toggle">
               ピックアップ授業<img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/arrow2.png" alt="&gt;" width="10" height="10"></div>
            <div class="un_cd_items">
              <div class="un_cd_items_inner">
                <div class="un_cd_item">
                  <div class="un_cd_item_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/cd_img9.jpg" alt=""></div>
                  <p class="un_cd_item_txt">発達過程作業療法学</p>
                </div>
                <div class="un_cd_item">
                  <div class="un_cd_item_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/cd_img10.jpg" alt=""></div>
                  <p class="un_cd_item_txt">精神機能作業療法学実習</p>
                </div>
                <div class="un_cd_item">
                  <div class="un_cd_item_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/cd_img11.jpg" alt=""></div>
                  <p class="un_cd_item_txt">生活行為向上<br>マネジメント演習</p>
                </div>
                <div class="un_cd_item">
                  <div class="un_cd_item_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/cd_img12.jpg" alt=""></div>
                  <p class="un_cd_item_txt">作業分析学</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="un_point un_point--2">
          <h2 class="un_point_ttl">
             POINT.２　教養<br><span>
               多分野へ学びの領域を広げ、<br>
              あなたの興味を深める。</span></h2>
          <p class="un_point_exp">
             国の指定規則を満たす必修科目に加え、学生自身の興味・関心に合わせた授業の選択が可能です。進みたい分野の知識や能力をより深く学べます。</p>
          <div class="un_point_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/point2_img1.png" alt=""></div>
          <div class="un_point_stick"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/point_stick2.png" alt=""></div>
        </section>
        <section class="un_point un_point--3">
          <h2 class="un_point_ttl">
             POINT.３ 研究<br><span>
               研究力を身につけ<br>
              地域と社会の未来を<br>
              変えていく。</span></h2>
          <p class="un_point_exp">
             ダミー情報提供まちです。ダミー地域貢献に関しての文章が入ります。７０文字以内のイメージです。ダミー地域貢献に関しての文章が入ります。７０文字以内のイメージです。</p>
          <div class="un_point_img un_point_img--full"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/point3_img1.png" alt=""></div>
          <div class="un_point_stick"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/point_stick3.png" alt=""></div>
        </section>
        <section class="un_more">
          <div class="un_pointTop">
            <h2 class="un_pointTop_ttl"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/plus.svg" alt="+"><br>さらに学びを深める３つのポイント</h2>
            <div class="un_pointTop_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/point_img2.png" alt="実習 x 先生 x 実績"></div>
          </div>
        </section>
        <section class="un_point un_point--4">
          <h2 class="un_point_ttl">
             PLUS.４　実習<br><span>
               実践力を身につける<br>
              ための豊富な<br>
              実習プログラム。</span></h2>
          <p class="un_point_exp">
             実際に体験して得た「生きた経験」が、あなたを大きく成長させる秘訣。<br>病院のみならず、高齢者施設、児童施設、刑務所などあらゆる場所が学びのステージです。</p>
          <div class="un_point_stick"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/point_stick4.png" alt=""></div>
          <div class="un_point_imgLg"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/point_imglg1.jpg" alt=""></div>
          <div class="un_point_imgLg"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/point_imglg2.jpg" alt=""></div>
          <div class="un_point_imgLg"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/point_imglg3.jpg" alt=""></div>
        </section>
        <section class="un_point un_point--5">
          <h2 class="un_point_ttl">
             PLUS.５ 先生<br><span>
               なんでも気軽に<br>相談できる存在。</span></h2>
          <p class="un_point_exp">
             前身校、土佐リハが選ばれてきた大きな理由のひとつが、先輩と後輩、学生と教員の距離が近く親しみやすいことです。大学になってもその在り方は変わりません。卒業後もアドバイスをもらったり、仲間として頼れる存在であり続けます。</p>
          <div class="un_point_img un_point_img--full"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/point5_img1.jpg" alt=""></div>
          <div class="un_point_stick"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/point_stick5.png" alt=""></div>
        </section>
        <section class="un_point un_point--6">
          <h2 class="un_point_ttl">PLUS.６<br><span class="sm">
              高知県初、認定理学療法士<br>
              臨床認定カリキュラム<br>
              教育機関に認定</span></h2>
          <p class="un_point_exp">
             ダミー情報提供まちです。ダミー認定理学療法士 臨床認定カリキュラム 教育機関とは。ダミー認定理学療法士 臨床認定カリキュラム※前身校土佐リハでの実績です。</p>
          <h2 class="un_point_ttl"><span class="sm">
              養成校全国203校中、<br>
              わずか10校のMTDLP<br>
              推進協力強化校に認定。</span></h2>
          <p class="un_point_exp">
             ダミー情報提供まちです。養成校全国203校中、わずか10校のMTDLP推進協力強化校に認定。ダミー養成校全国203校中、わずか10校のMTDLP推進協力強※前身校土佐リハでの。</p>
          <div class="un_point_stick"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/whatkoken/point_stick6.png" alt=""></div>
        </section>
        <section class="bl_others">
          <div class="bl_others_ttl"> <span>OTHERS</span>もっと詳しく知る</div>
          <div class="bl_others_items"><a class="bl_others_item" href="/oc202403">
              <div class="bl_others_item_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/others_img1.jpg" alt="まっしろからはじめよう。"></div></a><a class="bl_others_item" href="<?php echo home_url(); ?>/jukensei/jukensei/specialcontents">
              <div class="bl_others_item_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/others_img2.jpg" alt="100人100色の未来セイバー「これがわたしのめざす道」"></div></a><a class="bl_others_item" href="<?php echo home_url(); ?>/jukensei/jukensei/whatkoken">
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