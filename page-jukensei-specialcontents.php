
<?php
// Template Name: 受験生サイト special contents
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
    <link rel="stylesheet" type="text/css" href="<?php echo $theme_uri; ?>/jukensei/assets/css/jukensei/specialcontents/index.css"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Zen+Kaku+Gothic+New:wght@500;700&display=swap" rel="stylesheet">
    <!-- 各頁用 JS-->
    <script src="<?php echo $theme_uri; ?>/jukensei/assets/js/jukensei/specialcontents/index.js"></script>

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

      <article class="white" id="content">
        <div class="un_spHeader">
          <div class="un_spHeader_top"> <a href="<?php echo home_url(); ?>/jukensei/"> <img class="logo" src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/spheader_logo.png" alt="まっしろから、はじめよう。高知健康科学大学 UNIVERSITY OF KOCHI HEALTH SCIENCES"></a>
            <div class="un_spHeader_toggle"><span></span><span></span><span></span></div>
          </div>
        </div>
        <section class="un_slider">
          <div class="bl_carousel">
            <div class="bl_carousel_items"><a class="bl_carousel_item" href="#entry11">
                <div class="bl_carousel_item_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/specialcontents/slider_img11.jpg" alt=""></div></a><a class="bl_carousel_item" href="#entry1">
                <h1 class="bl_carousel_item_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/specialcontents/slider_img1.jpg" alt="100人100色の未来セイバー「これがわたしのめざす道」"></h1></a><a class="bl_carousel_item" href="#entry2">
                <div class="bl_carousel_item_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/specialcontents/slider_img2.jpg" alt=""></div></a><a class="bl_carousel_item" href="#entry3">
                <div class="bl_carousel_item_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/specialcontents/slider_img3.jpg" alt=""></div></a><a class="bl_carousel_item" href="#entry4">
                <div class="bl_carousel_item_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/specialcontents/slider_img4.jpg" alt=""></div></a><a class="bl_carousel_item" href="#entry5">
                <div class="bl_carousel_item_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/specialcontents/slider_img5.jpg" alt=""></div></a><a class="bl_carousel_item" href="#entry6">
                <div class="bl_carousel_item_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/specialcontents/slider_img6.jpg" alt=""></div></a><a class="bl_carousel_item" href="#entry7">
                <div class="bl_carousel_item_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/specialcontents/slider_img7.jpg" alt=""></div></a><a class="bl_carousel_item" href="#entry8">
                <div class="bl_carousel_item_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/specialcontents/slider_img8.jpg" alt=""></div></a><a class="bl_carousel_item" href="#entry9">
                <div class="bl_carousel_item_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/specialcontents/slider_img9.jpg" alt=""></div></a><a class="bl_carousel_item" href="#entry10">
                <div class="bl_carousel_item_img"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/specialcontents/slider_img10.jpg" alt=""></div></a></div>
          </div>
          <div class="bl_carousel_paging"> 
            <div data-num="1" class="bl_carousel_page current"><span></span></div>
            <div data-num="2" class="bl_carousel_page"><span></span></div>
            <div data-num="3" class="bl_carousel_page"><span></span></div>
            <div data-num="4" class="bl_carousel_page"><span></span></div>
            <div data-num="5" class="bl_carousel_page"><span></span></div>
            <div data-num="6" class="bl_carousel_page"><span></span></div>
            <div data-num="7" class="bl_carousel_page"><span></span></div>
            <div data-num="8" class="bl_carousel_page"><span></span></div>
            <div data-num="9" class="bl_carousel_page"><span></span></div>
            <div data-num="10" class="bl_carousel_page"><span></span></div>
            <div data-num="11" class="bl_carousel_page"><span></span></div>
          </div>
        </section>
        <section class="un_catch">
          <h2 class="un_catch_ttl"> <span class="kakko1"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/kakko_1.svg" alt="「"></span>あなたの未来は<br><span class="line2">何色ですか？</span><span class="kakko2"><img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/kakko_2.svg" alt="」"></span></h2>
          <p class="un_catch_copy">
            学生たちに将来の夢や目標を<br>
            宣誓してもらいました。<br>
            まだまっしろなあなたにも未来が見つかる<br>
            新発見があるかもしれません。
          </p>
          <div class="un_catch_stick"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/specialcontents/catch_stick.png" alt=""></div>
        </section>
        <section class="un_entry">
          <div class="un_entry_item" id="entry1">
            <div class="para para-slideup para-g1">
              <div class="un_entry_ttl"> <span>ENTRY NO.１</span><br>理学療法学専攻　原田 汐里</div>
              <div class="un_entry_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/specialcontents/entry_img1.jpg" alt=""></div>
            </div>
            <div class="un_entry_dream">
              <h3 class="un_entry_dream_ttl">夢や目標を教えて！</h3>
              <p class="un_entry_dream_txt">
                 わたしもリハビリを受けた経験者。思うように体を動かせない不安はよくわかります。専門知識と技術でいろんな解決策を提案し、不安を解消していくリハビリのプロになります。</p>
            </div>
            <div class="un_entry_chance">
              <h3 class="un_entry_chance_ttl">
                 めざしたきっかけは？</h3>
              <p class="un_entry_chance_txt">よさこいの練習をしていたときでした。立っていても、座っていても、消えない痛みにたえられず、病院に行っても明確な理由はわからないまま。「こんなに痛いのになんで」って落ち込んでいたとき、すすめられたのがリハビリでした。担当してくれた理学療法士は土佐リハ（前身校）の卒業生。いろいろな話をして緊張をほぐしてくれた先輩のようになりたいと思ったのがきっかけです。</p>
            </div>
          </div>
          <div class="un_entry_item" id="entry2">
            <div class="para para-slideup para-g2">
              <div class="un_entry_ttl"> <span>ENTRY NO.２</span><br>理学療法学専攻　和田 圭</div>
              <div class="un_entry_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/specialcontents/entry_img2.jpg" alt=""></div>
            </div>
            <div class="un_entry_dream">
              <h3 class="un_entry_dream_ttl">夢や目標を教えて！</h3>
              <p class="un_entry_dream_txt">
                 めざすは親しみやすさ日本一！。少子高齢化が進む現代社会、お年寄りの方からも、ケガに悩む若い人たちからも、幅広い世代から頼られる理学療法士になりたいです。</p>
            </div>
            <div class="un_entry_chance">
              <h3 class="un_entry_chance_ttl">
                 めざしたきっかけは？</h3>
              <p class="un_entry_chance_txt">野球少年だったぼくは、小学生のとき、成長期に発症しやすいオスグッド病になり、理学療法士の先生に初めて出会いました。中学、高校でもお世話になる中で、仕事への興味はいつしか「自分もなりたい！」という決意に変わりました。スポーツをする側から、スポーツ選手を支える側へ。これからはスポーツ人口の向上にも貢献したいです。</p>
            </div>
          </div>
          <div class="un_entry_item" id="entry3">
            <div class="para para-slideup para-g3">
              <div class="un_entry_ttl"> <span>ENTRY NO.３</span><br>作業療法学専攻　森本 小次郎</div>
              <div class="un_entry_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/specialcontents/entry_img3.jpg" alt=""></div>
            </div>
            <div class="un_entry_dream">
              <h3 class="un_entry_dream_ttl">夢や目標を教えて！</h3>
              <p class="un_entry_dream_txt">
                 「森本くんとリハビリするのいいね！」。そんなふうに言われたい。表情や言葉遣い、道具などひとつひとつに気を配り、患者さんにリハビリを楽しんでもらいながら、ともに歩んでいきたいです。</p>
            </div>
            <div class="un_entry_chance">
              <h3 class="un_entry_chance_ttl">
                 めざしたきっかけは？</h3>
              <p class="un_entry_chance_txt">作業療法士をめざすと決めたのは、高校2年生、17歳のときでした。おばあちゃんがデイサービスに通うようになったんです。決意っていうのかな？ デイサービスに出かける背中を見送りながら、どんどん気持ちが高まっていきました。「おばあちゃんのような方を元気にしたい」って。普段の生活が少しでも快適になるよう、障害を取り除いてあげたいです。</p>
            </div>
          </div>
          <div class="un_entry_item" id="entry4">
            <div class="para para-slideup para-g4">
              <div class="un_entry_ttl"> <span>ENTRY NO.４</span><br>理学療法学専攻　福島 彩花</div>
              <div class="un_entry_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/specialcontents/entry_img4.jpg" alt=""></div>
            </div>
            <div class="un_entry_dream">
              <h3 class="un_entry_dream_ttl">夢や目標を教えて！</h3>
              <p class="un_entry_dream_txt">
                 安心してもらえる理学療法士になりたい！治療だけでなく一緒によりそうセラピストなら、安心してもらえると思います。なにげない会話も大切に、一人ひとりにあった治療法を探っていきます。</p>
            </div>
            <div class="un_entry_chance">
              <h3 class="un_entry_chance_ttl">
                 めざしたきっかけは？</h3>
              <p class="un_entry_chance_txt">高校生のときの部活動です。空手部に入っていたのですが、大事な大会前にまさかのケガ！ 自由に動かない足に、毎日が不安でいっぱいでした。そんなときに支えてくれたのが理学療法士の先生です。いつか先生みたいに活躍できるようになりたいって、あこがれが目標に変わりました。</p>
            </div>
          </div>
          <div class="un_entry_item" id="entry5">
            <div class="para para-slideup para-g5">
              <div class="un_entry_ttl"> <span>ENTRY NO.５</span><br>作業療法学専攻　三好 菫</div>
              <div class="un_entry_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/specialcontents/entry_img5.jpg" alt=""></div>
            </div>
            <div class="un_entry_dream">
              <h3 class="un_entry_dream_ttl">夢や目標を教えて！</h3>
              <p class="un_entry_dream_txt">
                 作業療法士は人をみる仕事です。思い通りにいかず、悩む日もあるかもしれません。それでも、試行錯誤する過程を患者様の目標を達成するための糧にして、生活によりそったリハビリをしていきたいです。</p>
            </div>
            <div class="un_entry_chance">
              <h3 class="un_entry_chance_ttl">
                 めざしたきっかけは？</h3>
              <p class="un_entry_chance_txt">足を手術したおばあちゃんのリハビリにつきそったときです。患者さんと一生懸命に向き合い、よりそいながらはたらく姿が、とってもステキで、キラキラと輝いて見えたんです。「体も、こころも支える作業療法士になりたい」って、将来の夢が決まりました。</p>
            </div>
          </div>
          <div class="un_entry_item" id="entry6">
            <div class="para para-slideup para-g6">
              <div class="un_entry_ttl"> <span>ENTRY NO.６</span><br>理学療法学専攻　宮﨑 恋</div>
              <div class="un_entry_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/specialcontents/entry_img6.jpg" alt=""></div>
            </div>
            <div class="un_entry_dream">
              <h3 class="un_entry_dream_ttl">夢や目標を教えて！</h3>
              <p class="un_entry_dream_txt">
                 やっぱり地元が好きなんです。専門的な知識も、コミュニケーション能力も、思いやりのこころも身につけ、高知県内の病院や施設で、だれからも頼られるセラピストをめざします。</p>
            </div>
            <div class="un_entry_chance">
              <h3 class="un_entry_chance_ttl">
                 めざしたきっかけは？</h3>
              <p class="un_entry_chance_txt">9年間、続けたソフトテニス。最後の県高校総体前に肩を痛めてしまって「間に合わないかも」って、正直、あきらめかけました。そんなときに励ましてくれたのが、リハビリを担当してくれた理学療法士さんです。自宅でもできるリハビリを教えてもらい、何とか大会には間に合いました。そして、結果は準優勝！ 結果がでたうれしさと同時に、人の役に立つ理学療法士の仕事に興味をひかれました。</p>
            </div>
          </div>
          <div class="un_entry_item" id="entry7">
            <div class="para para-slideup para-g7">
              <div class="un_entry_ttl"> <span>ENTRY NO.７</span><br>作業療法学専攻　松﨑 柚華</div>
              <div class="un_entry_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/specialcontents/entry_img7.jpg" alt=""></div>
            </div>
            <div class="un_entry_dream">
              <h3 class="un_entry_dream_ttl">夢や目標を教えて！</h3>
              <p class="un_entry_dream_txt">
                 ささいな悩みでもいい。相談しやすい雰囲気のある作業療法士をめざしています。話すのが苦手な人でも気持ちをくみとり、患者さんも、医療関係者も、お互いに楽しいリハビリを提案していきたいです。</p>
            </div>
            <div class="un_entry_chance">
              <h3 class="un_entry_chance_ttl">
                 めざしたきっかけは？</h3>
              <p class="un_entry_chance_txt">きっかけをくれたのはおじいちゃん。足が悪く、リハビリに出かけるおじいちゃんに、わたしは「いってらっしゃい。がんばって」と声をことしかできなくて。専門知識がないことがくやしかった。でも、そんなわたしを、おじいちゃんは「やさしい」って言ってくれたんです。家族のため、いつか担当する患者さんのため。そして、私のように「何もできない」と悩む人たちの力になりたいです。</p>
            </div>
          </div>
          <div class="un_entry_item" id="entry8">
            <div class="para para-slideup para-g8">
              <div class="un_entry_ttl"> <span>ENTRY NO.８</span><br>理学療法学専攻　髙橋 蒼空</div>
              <div class="un_entry_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/specialcontents/entry_img8.jpg" alt=""></div>
            </div>
            <div class="un_entry_dream">
              <h3 class="un_entry_dream_ttl">夢や目標を教えて！</h3>
              <p class="un_entry_dream_txt">
                 理学療法士は、社会復帰をめざす一歩を支える仕事です。人生にかかわる職業だからこそ、患者さんとのこころの距離を縮め、不安な気持ちまでサポートしたいと考えています。</p>
            </div>
            <div class="un_entry_chance">
              <h3 class="un_entry_chance_ttl">
                 めざしたきっかけは？</h3>
              <p class="un_entry_chance_txt">高校2年生で足をケガし、リハビリに通いました。痛みで歩くこともままならないとき、一番近くにいてくれたのが理学療法士の先生です。先生に教えてもらったマッサージをしてみると、1日1日、よくなって、気づいたら走れるぐらい回復していました。不思議だったし、ほんとうにうれしかった。同時に、ぼくも悩んでいる人を助けたいって思ったんです。それがきっかけになりました。</p>
            </div>
          </div>
          <div class="un_entry_item" id="entry9">
            <div class="para para-slideup para-g9">
              <div class="un_entry_ttl"> <span>ENTRY NO.９</span><br>理学療法学専攻　安芸 知郁</div>
              <div class="un_entry_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/specialcontents/entry_img9.jpg" alt=""></div>
            </div>
            <div class="un_entry_dream">
              <h3 class="un_entry_dream_ttl">夢や目標を教えて！</h3>
              <p class="un_entry_dream_txt">
                 ひとことで理学療法士と言っても、呼吸器だったり、解剖学だったり、いろいろな専門分野があります。わたしもそんな強みをいくつも作りたい。国内だけでなく、海外の医療にもふれてみたいと思っています。</p>
            </div>
            <div class="un_entry_chance">
              <h3 class="un_entry_chance_ttl">
                 めざしたきっかけは？</h3>
              <p class="un_entry_chance_txt">きっかけはひいおじいちゃん。むかし理学療法士の先生にお世話になったことがあると知って、この仕事を知りました。めざすからには、とことんやりたい！ 専門分野を深く、幅広く勉強したいと思っています。患者さんがリハビリを乗り越え、1日でも早く普通の生活に戻り、笑顔になれるよう、わたし自身もどんどん成長していきたいと思っています。</p>
            </div>
          </div>
          <div class="un_entry_item" id="entry10">
            <div class="para para-slideup para-g10">
              <div class="un_entry_ttl"> <span>ENTRY NO.１０</span><br>作業療法学専攻　山口 朱花</div>
              <div class="un_entry_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/specialcontents/entry_img10.jpg" alt=""></div>
            </div>
            <div class="un_entry_dream">
              <h3 class="un_entry_dream_ttl">夢や目標を教えて！</h3>
              <p class="un_entry_dream_txt">
                 自由に動けなくなってしまったら―。日常生活は不便になるだろうし、精神的にもくるしいと思います。そんな人をそばで支え、どんな支援ができるかを考え続けていきます。</p>
            </div>
            <div class="un_entry_chance">
              <h3 class="un_entry_chance_ttl">
                 めざしたきっかけは？</h3>
              <p class="un_entry_chance_txt">小学生のとき、足のケガでリハビリに励むお母さんにつきそい、理学療法士の仕事を間近で見ました。そこから医療の仕事に興味がわき、「作業療法士」という職業を見つけました。「この仕事は体だけでなく精神面のリハビリもできるんだ」。患者さんの心と体に深くよりそう仕事に魅力を感じ、作業療法士がわたしの目標になりました。</p>
            </div>
          </div>
          <div class="un_entry_item" id="entry11">
            <div class="para para-slideup para-g1">
              <div class="un_entry_ttl"> <span>ENTRY NO.１１</span><br>作業療法学専攻　走川 愛波</div>
              <div class="un_entry_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/specialcontents/entry_img11.jpg" alt=""></div>
            </div>
            <div class="un_entry_dream">
              <h3 class="un_entry_dream_ttl">夢や目標を教えて！</h3>
              <p class="un_entry_dream_txt">
                 患者さんとセラピストが一緒にリハビリをがんばるために、大切なものは何だろう。それは“信頼”だと思うんです。患者さんの話を聞き、こちらもしっかりと説明し、一歩ずつ着実に信頼関係をきずいていきたいです。</p>
            </div>
            <div class="un_entry_chance">
              <h3 class="un_entry_chance_ttl">
                 めざしたきっかけは？</h3>
              <p class="un_entry_chance_txt">ソフトテニスを指導してくれたコーチが理学療法士で、リハビリの仕事を知りました。そこから作業療法士の仕事にも興味がわき、自分で調べたり、知り合いに話を聞いたりしてみたんです。知れば知るほど、ひかれていくわたしがいました。「人とかかわるのが好き」「人の役に立ちたい」そんな思いを作業療法士なら叶えられると思いました。これがわたしの出発点です。</p>
            </div>
          </div>
          <div class="un_entry_comming para para-slideup para-g2">
            <div class="un_entry_comming_acce"><span></span><span></span><span></span><span></span></div>
            <div class="un_entry_comming_body">
              <h3 class="un_entry_comming_ttl"> <span>NEXT</span><br>COMING SOON</h3>
              <p class="un_entry_comming_txt">
                 随時更新予定です。<br>
                新たな未来セイバーたちの情報を<br>
                お待ちください！
              </p>
              <div class="un_entry_comming_stick"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/jukensei/specialcontents/catch_stick.png" alt=""></div>
            </div>
          </div>
        </section>
        <section class="bl_others">
          <div class="bl_others_ttl"> <span>OTHERS</span>もっと詳しく知る</div>
          <div class="bl_others_items"><a class="bl_others_item" href="/oc202403">
              <div class="bl_others_item_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/others_img1.jpg" alt="まっしろからはじめよう。"></div></a><a class="bl_others_item" href="<?php echo home_url(); ?>/jukensei/jukensei/specialcontents">
              <div class="bl_others_item_img"> <img src="<?php echo $theme_uri; ?>/jukensei/assets/images/common/others_img2.jpg" alt="100人100色の未来セイバー「これがわたしのめざす道」"></div></a><a class="bl_others_item" href="<?php echo home_url(); ?>/features/">
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