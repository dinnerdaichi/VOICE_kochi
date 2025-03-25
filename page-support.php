<?php get_header(); ?>

<script>
$(window).on("scroll", function() {
    if ($(window).scrollTop() > 600) {
        $("#header").addClass("active");
    } else {
        $("#header").removeClass("active");
    }
});
</script>

<section class="fv_area">
	<img class="fvimg pc" src="<?php echo get_template_directory_uri(); ?>/support/assets/images/top_fv.png" width="1366" height="780" alt="ゼロエンからはじめよう。高知健康科学大学入居支度金補助制度　入学前の負担を軽減入学金や学納金、ひとり暮らしの準備など、なにかと費用がかさむ入学前。本学では敷金などを負担し家具家電つき物件を用意することで、保護者の負担を軽減します！">
	<img class="fvimg sp" src="<?php echo get_template_directory_uri(); ?>/support/assets/images/top_fv_sp.png" width="375" height="900" alt="ゼロエンからはじめよう。高知健康科学大学入居支度金補助制度　入学前の負担を軽減入学金や学納金、ひとり暮らしの準備など、なにかと費用がかさむ入学前。本学では敷金などを負担し家具家電つき物件を用意することで、保護者の負担を軽減します！">
	<h2 class="fv_title">　高知健康科学大学は、<br>自宅通学が困難な<br>学生のひとり暮らしを<br class="sp">応援します!</h2>
	<p class="fv_text">本学では、指定の物件(レオパレス21)に<br class="sp">入居する際の<br class="pc">初期費用を補助いたします。<br>敷金、礼金、および仲介手数料<br class="sp">（それぞれ家賃1ヶ月分）が対象です。<br>また、指定物件には基本的な<br class="sp">家具・家電がついているため、<br>新規購入費用をぐっと抑えられます。</p>
	<h3 class="conditions_title">４つの条件で<br class="sp">補助の対象に！</h3>
	<div class="conditions_wrap">
		<img src="<?php echo get_template_directory_uri(); ?>/support/assets/images/conditions01.png" width="286" height="152" alt="本学指定の賃貸物件入居希望(レオパレス21)">
		<img src="<?php echo get_template_directory_uri(); ?>/support/assets/images/conditions02.png" width="286" height="152" alt="指定物件に1年以上入居可能">
		<img src="<?php echo get_template_directory_uri(); ?>/support/assets/images/conditions03.png" width="286" height="152" alt="自宅通学が困難">
		<img src="<?php echo get_template_directory_uri(); ?>/support/assets/images/conditions04.png" width="286" height="152" alt="令和7年度以降の入学者">
	</div>
</section>
<section class="content">
	<div class="block">
		<p class="merit pc"><span>メリット１</span></p>
		<img class="sp" src="<?php echo get_template_directory_uri(); ?>/support/assets/images/merit01_title_sp.png" width="332" height="57" alt="メリット１">
		<h2 class="merit_title"><span class="first_line">本学指定の<span class="ruby">物件</span>に</span><br class="sp">入居する初期費用を<br class="sp">本学が補助!</h2>
		<img class="pc" src="<?php echo get_template_directory_uri(); ?>/support/assets/images/merit01.png" width="1132" height="741" alt="家賃が41,000円の場合 合計3ヶ月分の家賃に相当する初期費用がゼロ！">
		<img class="sp" src="<?php echo get_template_directory_uri(); ?>/support/assets/images/merit01sp.png" width="343" height="1254" alt="家賃が41,000円の場合 合計3ヶ月分の家賃に相当する初期費用がゼロ！">
	</div>
	<div class="block">
		<p class="merit pc"><span>メリット２</span></p>
		<img class="sp" src="<?php echo get_template_directory_uri(); ?>/support/assets/images/merit02_title_sp.png" width="332" height="57" alt="メリット２">
		<h2 class="merit_title"><span class="chu">基本的な家具・家電</span><br class="sp">が備え付けなので、<br>新たな購入必要なし！</h2>
		<img class="pc" src="<?php echo get_template_directory_uri(); ?>/support/assets/images/merit02.png" width="1132" height="1013" alt="ひとり暮らしに必要な家具・家電の平均価格は？ 家具：平均104,000円、家電：平均119,000円  購入の必要なし!※1　冷蔵庫・洗濯機・電子レンジ・テレビ・エアコン・コンロ(IH)・テーブル・カーテンなど">
		<img class="sp" src="<?php echo get_template_directory_uri(); ?>/support/assets/images/merit02sp.png" width="337" height="1574" alt="ひとり暮らしに必要な家具・家電の平均価格は？ 家具：平均104,000円、家電：平均119,000円  購入の必要なし!※1　冷蔵庫・洗濯機・電子レンジ・テレビ・エアコン・コンロ(IH)・テーブル・カーテンなど">
	</div>
	<div class="block">
		<p class="merit pc"><span>メリット３</span></p>
		<img class="sp" src="<?php echo get_template_directory_uri(); ?>/support/assets/images/merit03_title_sp.png" width="332" height="57" alt="メリット３">
		<h2 class="merit_title">その他保護者も<br class="sp">安心のポイントが<br class="sp">もりだくさん！</h2>
		<img class="pc" src="<?php echo get_template_directory_uri(); ?>/support/assets/images/merit03.png" width="1132" height="480" alt="通学がラク！ インターネットプラン トラブル対応 定期点検">
		<img class="sp" src="<?php echo get_template_directory_uri(); ?>/support/assets/images/merit03sp.png" width="337" height="954" alt="通学がラク！ インターネットプラン トラブル対応 定期点検">
	</div>
	<div class="bnr">
		<h2 class="bnr_title">詳しくは<br class="sp">オープンキャンパスで！</h2>
		<a href="/oc202403/"><img class="ocimg" src="<?php echo get_template_directory_uri(); ?>/support/assets/images/banner_oc.jpg" width="911" height="607" alt="OPEN CAMPUS"></a>
	</div>
	<div class="bnr">
		<h2 class="bnr_title">お問い合わせは随時受け付け！</h2>
		<div class="bnr_wrap">
			<a href="https://line.me/R/ti/p/@216ipkvl" target="_blank"><img class="pc" src="<?php echo get_template_directory_uri(); ?>/support/assets/images/contact_line.png" width="445" height="236" alt="LINEでのお問い合わせ"><img class="sp" src="<?php echo get_template_directory_uri(); ?>/support/assets/images/contact_line_sp.png" width="337" height="210" alt="LINEでのお問い合わせ"></a>
			<a href="tel:0888666119"><img class="pc" src="<?php echo get_template_directory_uri(); ?>/support/assets/images/contact_tel.png" width="445" height="236" alt="電話でのお問い合わせ"><img class="sp" src="<?php echo get_template_directory_uri(); ?>/support/assets/images/contact_tel_sp.png" width="337" height="208" alt="電話でのお問い合わせ"></a>
		</div>
	</div>
</section>

<?php get_footer(); ?>