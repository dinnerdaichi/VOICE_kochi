<?php get_header(); ?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/css/reset.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/scss/style.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/css/slick.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/css/slick-theme.css">
</head>

<a href="https://docs.google.com/forms/d/e/1FAIpQLSfDbsQUJ7vLDfjdX8Y6t1qe-3Aqn2Qi8RNZTtWkfMZ-FROa-Q/viewform" class="fixed-banner" target="_blank">
  <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/fixed_banner.png" alt="">
</a>

<header></header>

<div class="fixed-bg pc"></div>

<div class="fixed-nav">
  <div class="fixed-logo">
  <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/fixed_logo.png" alt="">
  </div>
  <div class="fixed-nav__inner">
    <!-- <div class="fixed-nav__logo">
                <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/logo.png" alt="高知健康科学大学">
            </div> -->
    <div class="fixed-nav__title">
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/fixed_nav_title.png" alt="">
    </div>
    <!-- <div class="fixed-nav__box">
                <div class="fixed-nav__img">
                    <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/fixed_nav_img.png" alt="OPEN CAMPUS">
                </div>
                <div class="fixed-nav__content">
                    <p class="date">3/25</p>
                    <p class="time">10:00-13:00</p>
                </div>
            </div> -->
    <ul class="fixed-nav__list">
      <li>
        <a href="#event">
          <div class="arrow">
            <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/arrow.png" alt="矢印">
          </div>
          <p class="title">
            <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/fixed-nav__list01.png" alt="">
          </p>
          <p class="subtitle">今回の推しイベント</p>
        </a>
      </li>
      <li>
        <a href="#program">
          <div class="arrow">
            <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/arrow.png" alt="矢印">
          </div>
          <p class="title list2">
          <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/fixed-nav__list02.png" alt="">
          </p>
          <p class="subtitle">プログラム</p>
        </a>
      </li>
      <li>
        <a href="#schedule">
          <div class="arrow">
            <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/arrow.png" alt="矢印">
          </div>
          <p class="title list3">
          <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/fixed-nav__list03.png" alt="">
          </p>
          <p class="subtitle">年間スケジュール</p>
        </a>
      </li>
      <li>
        <a href="#entry">
          <div class="arrow">
            <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/arrow.png" alt="矢印">
          </div>
          <p class="title list4">
          <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/fixed-nav__list04.png" alt="">
          </p>
          <p class="subtitle">申し込み</p>
        </a>
      </li>
    </ul>
    <div class="fixed-nav__banner">
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/fixed_nav_miraiiro.png" alt="">
    </div>

  </div>
</div>

<div class="fixed-sns pc">
  <div class="fixed-sns__inner">
    <ul class="fixed-sns__list">
      <li class="fixed-sns__list__item">
        <a href="https://www.instagram.com/ko_ken_k3/" target="_blank">
          <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/insta2.png" alt="インスタグラム">
        </a>
      </li>
      <li class="fixed-sns__list__item">
        <a href="https://twitter.com/ko_ken_k3?s=20&t=Y_uHl45DJtM54pB6GDDSGA" target="_blank">
          <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/x2.png" alt="エックス">
        </a>
      </li>
      <li class="fixed-sns__list__item">
        <a href="https://facebook.com/kokendai" target="_blank">
          <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/fb2.png" alt="フェースブック">
        </a>
      </li>
      <li class="fixed-sns__list__item">
        <a href="https://www.youtube.com/channel/UCepY8p5nU8FXqoLTN8npPEA" target="_blank">
          <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/youtube2.png" alt="ユーチューブ">
        </a>
      </li>
    </ul>
    <a href="https://ko-ken-k3.jp/" class="fixed-sns__link" target="_blank">オフィシャルサイト</a>
    <a href="https://ko-ken-k3.jp/contact/#contact" class="fixed-sns__link" target="_blank">お問い合わせ</a>
    <!-- <a href="#lunch" class="btn_schedule">
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/btn_schedule.png" alt="日程表を見る">
    </a> -->
  </div>
</div>

<main>
  <div class="fv">
    <div class="fv__inner">
      <!-- <p class="date">2025.3.25 TUE</p>
                <p class="time">10:00-13:00（受付 9:30-）</p> -->
      <!-- <p class="title">参加者全員に</p>
                <p class="title">QUOカードプレゼント!</p>
                <p class="text">詳しくは下へスクロール</p> -->
      <p class="title">4.20<span>sun</span></p>
      <p class="title">10:00-13:00 (受付9:30-)</p>
    </div>
    <div class="scroll-logo">
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/scroll_logo.png" alt="矢印">
    </div>
  </div>

  <div class="sec1">
    <div class="sec1__text-wrap">
      <p class="common__subtitle">高知健康科学大学では<br>未来に悩む高校生のために<br>新たな委員会を発足しました。</p>
      <p class="common__subtitle second">その名も</p>
      <h2 class="common__title">
        <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec1_head.png" alt="じぶんの未来見つけなくて委員会">
      </h2>
      <p class="common__subtitle third">まだ何色でもない、まっしろなあなたが、<br>いろいろな分野、業界、<br>世界で羽ばたけるように。<br>セラピストなら、<br>きっと、色彩豊かな未来を掴める。<br>さあ、あなただけのCOLORで<br>
        輝く未来を見つけに来てください。</p>
      <!-- <div class="sec1__logo fadeinElem toUp">
        <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec1_logo.png" alt="ロゴ">
      </div> -->
      <!-- <div class="sec1__bg-title fadeinElem toUp">
        <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec1_title.png" alt="まっしろから、はじめよう。">
      </div> -->
    </div>
    <!-- <div class="sec1__text-box">
      <p class="sec1__text fadeinElem toUp">きっと、あなたはまだ何色でもない。<br>どんな色にも染まっていない、無垢の白。<br>白は、はじまりの色。<br>これから何色にでもなれるCOLOR。<br>未来のあなたは何色だろうか。<br>いまはまだ描けてなくてもだいじょうぶ。<br>あなたはこれから何色にでもなれる。<br>理学療法士・作業療法士の資格を<br>手にすることは、<br>いろいろな未来を描けるということ。<br>リハビリテーションのプロフェッショナルは、<br>いろいろな分野へ、業界へ、<br>世界へ羽ばたける。<br>わたしたちはセラピスト＝<br>療法士の可能性を拓く大学。<br>まっしろなあなたを、<br>色彩豊かな未来に導くキャンパス。</p>
    </div> -->
    <div class="sec1__bottom-img">
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec1_bottom-img.png" alt="ロゴ">
    </div>

    <div class="sec1__miraiiro">
      <p>あなたの未来の色はなにいろ？</p>
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec1_img.jpg" alt="じぶんの未来色診断">
    </div>

  </div>

  <div class="sec2" id="event">
    <h2 class="common__title">
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec2_title.png" alt="MAIN IVENT">
    </h2>
    <p class="sec2__text">楽しみながら学べるイベントを開催！<br>何回でも遊びに来てください！</p>

    <div class="sec2__item sec2__item--first fadeinElem toUp">
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec2_img1_202503.png" alt="">
    </div>
    <div class="sec2__item fadeinElem toUp">
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec2_img2_202503.png" alt="">
    </div>
    <div class="sec2__item fadeinElem toUp">
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec2_img3_202503.png" alt="">
    </div>
    <div class="sec2__item fadeinElem toUp">
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec2_img4_202503.png" alt="">
    </div>
    <div class="sec2__item fadeinElem toUp">
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec2_img5_202503.png" alt="">
    </div>
  </div>

  <div class="sec3" id="program">
    <h2 class="common__title">
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec3_title.png" alt="">
    </h2>
    <p class="sec3__text">「何を相談していいか分かりません」<br>なんて相談でもOK！<br>あなたのカラーを見つけるための<br>プログラムです。</p>
    <div class="sec3__box fadeinElem toUp">
      <div class="sec3__box__item">
        <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec3_img01.png" alt="学校説明会">
      </div>
    </div>
    <!-- <div class="sec3__img fadeinElem toUp">
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec3_img5.png" alt="当日プランもまっしろでOK!学生たちがナビゲートします！">
    </div> -->
  </div>

  <div class="sec4">
    <h2 class="common__title">
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec4_title.png" alt="TIME TABLE">
    </h2>
    <div class="sec4__item">
      <p class="time">9:30~</p>
      <p class="title">受付開始</p>
    </div>
    <div class="sec4__item">
      <p class="time">10:00</p>
      <p class="title">学校説明会</p>
    </div>
    <div class="sec4__item">
      <p class="time">10:30</p>
      <p class="title">メインイベント<br>通常プログラム等</p>
    </div>
    <div class="sec4__item">
      <p class="time">13:00</p>
      <p class="title">終了</p>
    </div>
    <p class="not">※変更になる場合がございます。</p>
  </div>

  <div class="sec5">
    <h2 class="common__title">
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec5_title.png" alt="PRESENT">
    </h2>
    <div class="sec5__item fadeinElem toUp">
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec5_img1.png" alt="開学記念ギフトカード">
    </div>
    <div class="sec5__item fadeinElem toUp">
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec5_img2.png" alt="COMINGSOON">
    </div>
  </div>

  <div class="sec6" id="access">
    <h2 class="common__title">
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec6_title.png" alt="ACCESS">
    </h2>
    <div class="sec6__map fadeinElem toUp">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d53193.07248375888!2d133.5455333!3d33.564624!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354e1c69b6ce1893%3A0x4526ff7d37f23814!2z6auY55-l5YGl5bq356eR5a2m5aSn5a2mL-Wcn-S9kOODquODj-ODk-ODquODhuODvOOCt-ODp-ODs-OCq-ODrOODg-OCuA!5e0!3m2!1sja!2sjp!4v1708059835528!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="sec6__content fadeinElem toUp">
      <p class="sec6__bg-text">〒781-5103</p>
      <p class="sec6__bg-text">高知県高知市大津乙2500-2</p>
      <p class="sec6__bg-text sec6__bg-text2">路面電車でお越しの方</p>
    </div>
    <div class="sec6_img fadeinElem toUp">
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec6_img1.png" alt="路面電車でお越しの方">
    </div>
    <div class="sec6__content fadeinElem toUp w100">
      <p class="sec6__bg-text sec6__bg-text2 margin-left">お車でお越しの方</p>
      <p class="sec6__text white">○はりまや橋より約15分<br>○JR高知駅より約10分<br>○高知インターより約5分<br>○高知中央インターより約2分<br>○高知龍馬空港より約20分<br><br>※無料駐車場完備（約150台）</p>
    </div>
  </div>

  <div class="sec7" id="entry">
    <h2 class="common__title">
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec7_title.png" alt="ENTRY">
    </h2>
    <div class="sec7__content1 fadeinElem toUp">
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec7_img1.png" alt="コウケンダイでは受付ファストパスのご利用を推奨しています！">
    </div>
    <div class="sec7__title-img">
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec7_title_img.png" alt="簡単3ステップ">
    </div>
    <div class="sec7__item fadeinElem toUp">
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec7_img2.png" alt="受付フォームに入力する">
    </div>
    <div class="sec7__item fadeinElem toUp">
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec7_img3.png" alt="受付完了のメールが届く">
    </div>
    <div class="sec7__item fadeinElem toUp">
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec7_img4.png" alt="当日スマホ画面(メール)を提示">
    </div>
    <div class="sec7__bg-title fadeinElem toUp">
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec7_title_img2.png" alt="GO TO OPEN CAMPUS!まっしろからはじめよう。">
    </div>
    <!-- <div class="arrow fadeinElem toUp">
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec7_arrow.png" alt="矢印">
    </div> -->
    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfDbsQUJ7vLDfjdX8Y6t1qe-3Aqn2Qi8RNZTtWkfMZ-FROa-Q/viewform" target="_blank" class="sec7__btn">オープンキャンパスに申し込む</a>
  </div>

  <div class="sec8" id="schedule">
    <h2 class="common__title">
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec8_title.png" alt="矢印">
    </h2>
    <p class="sec8__title">2025 SCHEDULE</p>
    <p class="sec8__text">10:00−13:00<!-- <span>8月は15:00まで開催！</span> --></p>
    <div class="sec8__box" style="position: relative;">
      <div class="sec8__box__item finished">
        <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec8_img1.png" alt="3月26日、火曜日">
      </div>
      <!-- <div class="sec8__box__item finished">
        <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec8_img2.png" alt="4月21日、日曜日">
      </div>
      <div class="sec8__box__item finished">
        <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec8_img3.png" alt="6月15日、土曜日">
      </div>
      <div class="sec8__box__item finished">
        <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec8_img4.png" alt="7月7日、日曜日">
      </div>
      <div class="sec8__box__item finished">
        <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec8_img5.png" alt="8月18日、日曜日">
      </div>
      <div class="sec8__box__item finished">
        <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/sec8_img6.png" alt="11月30日、土曜日">
      </div>
      <p style="width: 100%;font-size: 18px;font-weight: 600;text-align: center;line-height: 1.5;letter-spacing: 0.05em;position: absolute;top: 50%;right: 50%;transform: translate(50%,-50%)">&nbsp;2024年の全日程は終了しました。<br>2025年初回は3/25に開催します！</p> -->
    </div>
    <p class="sec8__last-text">※時間は変更になる場合があります</p>
  </div>
</main>

<footer>
  <div class="footer__logo">
    <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/footer_logo.png" alt="高知健康科学大学">
  </div>
  <p class="footer__text">〒781-5103 高知県高知市大津乙 2500-2</p>
  <div class="footer__link-box">
    <a href="https://ko-ken-k3.jp/" class="link" target="_blank">オフィシャルサイト</a>
    <a href="https://ko-ken-k3.jp/contact/#contact" class="link" target="_blank">お問い合わせ</a>
    <a href="https://ko-ken-k3.jp/access/" class="link" target="_blank">アクセス</a>
  </div>
  <div class="footer__sns-box">
    <a href="https://www.instagram.com/ko_ken_k3/" class="sns" target="_blank">
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/insta.png" alt="インスタグラム">
    </a>
    <a href="https://twitter.com/ko_ken_k3?s=20&t=Y_uHl45DJtM54pB6GDDSGA" class="sns" target="_blank">
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/x.png" alt="エックス">
    </a>
    <a href="https://facebook.com/kokendai" class="sns" target="_blank">
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/fb.png" alt="フェースブック">
    </a>
    <a href="https://www.youtube.com/channel/UCepY8p5nU8FXqoLTN8npPEA" class="sns" target="_blank">
      <img src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/images/youtube.png" alt="ユーチューブ">
    </a>
  </div>
  <p class="copyright">© University of Kochi Health Sciences</p>
</footer>

<?php get_footer(); ?>
<script src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/js/index.js"></script>
<script src="<?php echo site_url(); ?>/wp-content/themes/ko-ken-k3/oc/assets/js/slick.min.js"></script>