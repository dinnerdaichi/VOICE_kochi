<?php get_header(); ?>
<?php
  $page = get_post( get_the_ID() );
  $slug = $page->post_name;
?>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400..700&display=swap" rel="stylesheet">
</head>

<style>
  .link a {
    color: #fff;
    background-color: #002f7c;
  }
  #close_cross {
    width: 40px !important;
  }
</style>



<main class="main">
  <div class="page-container">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="page-contents">
        <section id="mainvisual">
      <div class="wrapper">
        <div class="visual-area topslider"><!-- <a href="https://ko-ken-k3.ac.jp/news/event/1811/">
<div class="visual visual-pc"><img src="https://ko-ken-k3.ac.jp/wp-content/uploads/2024/08/fv-scaled.jpg" alt="" /></div>
<div class="visual visual-sp"><img src="https://ko-ken-k3.ac.jp/wp-content/uploads/2024/08/fv_sp.jpg" alt="" /></div>
          </a> -->
<!--
		  <a href="https://ko-ken-k3.ac.jp/admission/">
		    <div class="visual visual-pc"><img src="<?php echo site_url();?>/img/home_fv/fv_nyushi202502c.jpg" alt="" /></div>
		    <div class="visual visual-sp"><img src="<?php echo site_url();?>/img/home_fv/fv_nyushi202502c_sp.jpg" alt="" /></div>
		  </a>
-->



		  <a href="https://ko-ken-k3.ac.jp/center/">
            <div class="visual visual-pc"><img src="https://ko-ken-k3.ac.jp/wp-content/uploads/2024/10/top-2.jpg" alt="" /></div>
            <div class="visual visual-sp"><img src="https://ko-ken-k3.ac.jp/wp-content/uploads/2024/10/top_sp-2.jpg" alt="" /></div>
          </a>
          <a href="https://ko-ken-k3.ac.jp/concept/">
            <div class="visual visual-pc"><img src="https://ko-ken-k3.ac.jp/wp-content/uploads/2024/09/fv03-scaled.jpg" alt="" /></div>
            <div class="visual visual-sp"><img src="https://ko-ken-k3.ac.jp/wp-content/uploads/2024/09/fv03sp.jpg" alt="" /></div>
          </a>
          <a href="https://ko-ken-k3.ac.jp/concept/">
            <div class="visual visual-pc"><img src="https://ko-ken-k3.voicelab.info/wp-content/uploads/2025/03/top-oc.jpg" alt="" /></div>
            <div class="visual visual-sp"><img src="https://ko-ken-k3.ac.jp/wp-content/uploads/2024/09/fv03sp.jpg" alt="" /></div>
          </a>


        </div>
      </div>
    </section>
    <section class="sp_area fade-in">
      <h2 class="sp_text lora">Special Projects</h2>
      <div class="sp_wrap">
        <a href="https://ko-ken-k3.ac.jp/news/regional/1457/">
          <img src="https://ko-ken-k3.ac.jp/img/home/top_spbanner01.jpg" alt="3つの海と空をこころで繋ぐアートプロジェクト" width="395" height="152" class="sp_area-img" />
        </a>
        <a href="https://ko-ken-k3.ac.jp/news/info/1711/" class="nolink">
          <img src="https://ko-ken-k3.ac.jp/img/home/top_spbanner02.jpg" alt="COMING SOON 高知ユナイテッドSC サポートプロジェクト" width="395" height="152" class="sp_area-img" />
        </a>
        <a href="https://ko-ken-k3.ac.jp/news/regional/2068/">
          <img src="https://ko-ken-k3.ac.jp/img/home/top_spbanner03.jpg" alt="部活応援プロジェクト" width="395" height="152" class="sp_area-img" />
        </a>

      </div>
      <!-- <div class="sp_wrap study">
        <a href="/news/collabo/#news_link">
          <img src="https://ko-ken-k3.ac.jp/img/home/top_spbanner04.jpg" alt="各機関との共同研究について" width="330" height="128" class="sp_area-img pc" />
          <img src="https://ko-ken-k3.ac.jp/img/home/top_spbanner04_sp.jpg" alt="各機関との共同研究について" width="330" height="128" class="sp_area-img sp" />
        </a>
      </div> -->
    </section>
          <div class="popup" id="popup">
            <div class="popup__inner inner">
              <h2 class="topics_title zenkakugo">共同研究プロジェクト</h2>
                <div class="popup__blocks"  data-simplebar data-simplebar-auto-hide="false">
                    <?php if(have_rows('popup_row','option')): ?>
                    <?php while(have_rows('popup_row', 'option')): the_row(); ?>
                    <div class="popup__block">
                        <time datetime="<?php echo get_sub_field('date','option') ?>" class="popup__time"><?php echo get_sub_field('date','option') ?></time>
                        <?php if(get_sub_field('url','option')): ?>
                          <p class="popup__title">
                            <a href="<?php echo get_sub_field('url','option'); ?>" target="_blank" rel="noopener">
                              <?php echo get_sub_field('text','option'); ?>
                            </a>
                          </p>
                        <?php else: ?>
                          <p class="popup__title"><?php echo get_sub_field('text','option'); ?></p>
                        <?php endif; ?>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <a class="project_linkwrap" href="https://docs.google.com/forms/d/e/1FAIpQLSdn8j2jwTkZT88hI-7254gAb2hyZaKJ-8xbgdzrIeVlAAezqw/viewform" target="_blank">
          	  <img src="https://ko-ken-k3.ac.jp/img/home/btn_project.svg" width="358" height="62">
            </a>
          </div>
          <?php the_content(); ?>
        </div>
      </div>
      <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
  </div>
</main>
<!--/.main-->

<?php get_footer(); ?>