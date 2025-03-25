<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <meta name="format-detection" content="telephone=no">
  <meta name="google-site-verification" content="IjZZFsvNS0YrhuLyjpwy0YfdnXvFU5xRnUg_q2MS-f4" />

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-MQ7BTTZQ');</script>
  <!-- End Google Tag Manager -->

  <title></title>
  <?php wp_head(); ?>
  <?php if ( is_page('support') ): ?>
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/support/assets/scss/style.css">
  <?php endif; ?>
</head>

<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src=https://www.googletagmanager.com/ns.html?id=GTM-MQ7BTTZQ
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <?php if ( ! is_page(array('oc202403','oc-test')) ) { ?>
    <header id="header" class="header">
      <div class="header-wrapper">
        <div class="header-container">
          <div class="header-brand">
            <div class="header-logo">
              <a href="/">
                <?php if(is_front_page()):?>
                  <h1><img src="<?php echo site_url();?>/img/common/header-logo.svg" alt="高知健康科学大学"></h1>
                <?php else:?>
                  <img src="<?php echo site_url();?>/img/common/header-logo.svg" alt="高知健康科学大学">
                <?php endif;?>
              </a>
            </div>
            <div class="headmenu">
				<a class="megabtn head-about">大学について</a>
				<a class="megabtn head-class">学部学科</a>
				<a href="/admission/">入試情報</a>
				<a href="/career/">キャリア・就職支援</a>
				<div class="search_box">
					<form method="get" action="https://www.google.co.jp/search" role="search" target="_blank">
	                    <input type="hidden" name="hl" value="ja">
	                    <input type="hidden" name="ie" value="utf-8">
	                    <input type="hidden" name="oe" value="utf-8">
	                    <input type="hidden" name="as_sitesearch" value="https://ko-ken-k3.ac.jp">
	                    <input type="image" name="sa" src="<?php echo site_url();?>/img/common/icon_search.svg" alt="検索" class="icon-search">
	                    <input type="text" name="q" value="">
	                </form>
				</div>
            </div>
            <div class="headmenu-mega head-about">
	            <div class="mega_wrap">
		            <a href="/president/" class="mgr30"><img src="<?php echo site_url();?>/img/common/mega_about01.jpg" alt="学長メッセージ" width="200" height="198"></a>
		            <a href="/center/" class="mgr60"><img src="<?php echo site_url();?>/img/common/mega_about02.jpg" alt="研究組織・プロジェクト等" width="295" height="198"></a>
		            <div class="right_wrap">
			            <ul>
				            <li><a href="/message/">理事長メッセージ</a></li>
<!-- 				            <li><a href="#" class="nolink">大学基本情報</a></li> -->
				            <li><a href="/public_information/">情報公開</a></li>
			            </ul>
			            <ul>
<!-- 				            <li><a href="#" class="nolink">クラブサークル</a></li> -->
				            <li><a href="/teacher/">教員紹介</a></li>
<!-- 				            <li><a href="#" class="nolink">研究活動</a></li> -->
				            <li><a href="/campusmap/#newopen">図書館</a></li>
			            </ul>
			            <ul>
<!-- 				            <li><a href="#" class="nolink">教職員公募</a></li> -->
				            <li><a href="/kifu/">ご支援について</a></li>
			            </ul>
		            </div>
	            </div>
            </div>
            <div class="headmenu-mega head-class">
	            <div class="mega_wrap">
		            <a href="/features/"><img src="<?php echo site_url();?>/img/common/mega_class01.jpg" alt="学びの特色" width="324" height="165"></a>
		            <a href="/features/rigaku/"><img src="<?php echo site_url();?>/img/common/mega_class02.jpg" alt="理学療法学専攻" width="324" height="165"></a>
		            <a href="/features/sagyo/"><img src="<?php echo site_url();?>/img/common/mega_class03.jpg" alt="作業療法学専攻" width="324" height="165"></a>
	            </div>
            </div>
<!--
            <div class="headmenu-mega head-career">
	            <div class="mega_wrap">
		            <a href="/features/rigaku/">実習関連文書</a>
		            <a href="/features/sagyo/">求人登録</a>
		            <a href="/features/">各種証明書発行</a>
	            </div>
            </div>
-->
            <div class="ocbtn">
              <a class="" href="/oc202403" target="_blank"><img class="pc" src="<?php echo site_url();?>/img/common/btn_oc202503.png" alt="OPEN CAMPUS"><img class="sp" src="<?php echo site_url();?>/img/common/btn_oc202503-sp.png" alt="OPEN CAMPUS"></a>
            </div>
            <div class="gmenu">
              <div class="openbtn">
                <div class="openbtn-line">
                  <span></span><span></span><span></span>
                </div>
                <div class="openbtn-title">
                  <p class="text">MENU</p>
                </div>
              </div>
              <nav id="g-nav">
                <div id="g-nav-list">
                  <nav id="js-global-navigation" class="global-navigation">
                    <div class="nav_wrap">
                      <div class="left">
                        <a href="/concept">
                          <img class="pc" src="<?php echo site_url();?>/img/common/header_bnr01.jpg" alt="まっしろから、はじめよう。">
                          <img class="sp" src="<?php echo site_url();?>/img/common/header_bnr01_sp.jpg" alt="まっしろから、はじめよう。">
                        </a>
                        <div class="pc">
                          <div class="flex">
                            <div class="left_block">
                              <a href="/jukensei" target="_blank">
                                <img src="<?php echo site_url();?>/img/common/header_bnr02.jpg" alt="受験生応援サイト">
                              </a>
                            </div>
                            <div class="right_block">
                              <a href="/oc202403">
                                <img src="<?php echo site_url();?>/img/common/header_bnr03.jpg" alt="オープンキャンパス">
                              </a>
                              <a href="/center">
                                <img src="<?php echo site_url();?>/img/common/header_bnr04.jpg" alt="学長メッセージ">
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="right">
                        <ul>
                          <li>
                            <a href="/features">学びの特色</a>
                          </li>
                          <li>
                            <a href="/features/rigaku/">理学療法学専攻</a>
                          </li>
                          <li>
                            <a href="/features/sagyo/">作業療法学専攻</a>
                          </li>
                          <li>
                            <a href="/teacher">教員紹介</a>
                          </li>
                          <li>
                            <a href="/performance">教育の実績</a>
                          </li>
                          <li>
                            <a href="/event">イベント情報</a>
                          </li>
                          <li>
                            <a href="/admission">入試情報</a>
                          </li>
                          <!--<li>
                            <a href="/result">入試合否確認</a>
                          </li>-->
                          <li>
                            <a href="/message">理事長メッセージ</a>
                          </li>
                          <li>
                            <a href="/president">学長メッセージ</a>
                          </li>
                          <li>
                            <a href="/career">キャリア・就職支援</a>
                          </li>
                          <li>
                            <a href="/expenses">学納金・奨学金</a>
                          </li>
                          <li>
                            <a href="/campusmap">キャンパス案内</a>
                          </li>
                          <li>
                        </ul>
                        <div class="sp sp_bnr">
                          <a href="/jukensei">
                            <img src="<?php echo site_url();?>/img/common/header_bnr02.jpg" alt="受験生応援サイト">
                          </a>
                          <a href="/oc202403">
                            <img src="<?php echo site_url();?>/img/common/header_bnr03.jpg" alt="オープンキャンパス">
                          </a>
                          <a href="/center">
                            <img src="<?php echo site_url();?>/img/common/header_bnr04.jpg" alt="学長メッセージ">
                          </a>
                        </div>
                        <div class="btn_area">
                          <div class="item">
                            <a href="https://line.me/R/ti/p/@216ipkvl" target="_blank">
                              <img src="<?php echo site_url();?>/img/common/header_btn_ico01.svg" alt="">
                              LINE登録
                            </a>
                          </div>
                          <div class="item">
                            <a href="/contact/#contact">
                              <img src="<?php echo site_url();?>/img/common/header_btn_ico02.svg" alt="">
                              お問い合わせ
                            </a>
                          </div>
                          <div class="item">
                            <a href="/access">
                              <img src="<?php echo site_url();?>/img/common/header_btn_ico03.svg" alt="">
                              アクセス
                            </a>
                          </div>
                        </div>
                        <div class="link_area">
                          <div class="item">
                            <a href="/pamphlet">
                              <img src="<?php echo site_url();?>/img/common/header_ico01.svg" alt="">
                              デジタルパンフレット
                            </a>
                          </div>
                          <div class="flex">
                            <div class="item">
                              <a href="/kifu/">
                                <img src="<?php echo site_url();?>/img/common/header_ico02.svg" alt="">
                                寄付について
                              </a>
                            </div>
                            <div class="item">
                              <a href="/public_information">
                                <img src="<?php echo site_url();?>/img/common/header_ico03.svg" alt="">
                                情報公開
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </nav>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- 追従バナー -->
	<?php if ( is_page('expenses') ): ?>
    <div id="fix_bnr" class="fix_bnr">
      <a href="/support/">
        <img class="pc" src="/img/home/banner-support.jpg">
        <img class="tab" src="/img/home/banner-support-tab.jpg">
        <img class="sp" src="/img/home/banner-support-sp.jpg">
      </a>
    </div>
	<?php else: ?>
    <div id="fix_bnr" class="fix_bnr">
      <a href="/jukensei/" target="_blank">
        <img class="pc" src="/img/home/banner-jukensei202406.jpg">
        <img class="tab" src="/img/home/banner-jukensei202406-tab.jpg">
        <img class="sp" src="/img/home/banner-jukensei202406-sp.jpg">
      </a>
    </div>
	<?php endif; ?>
  <?php } ?>