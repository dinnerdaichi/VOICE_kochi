<?php get_header(); ?>


<?php
  $major = get_field('major');
  
  $teacher_image = get_field('teacher_image');
  $name = get_field('name');
  $name_en = get_field('name_en');
  $position_pattern = get_field('position_pattern');
  
  if (get_field('position_1')) {
    $position_1 = get_field('position_1');
  }
  if (get_field('position_2_1')) {
    $position_2_1 = get_field('position_2_1');
  }
  if (get_field('position_2_2')) {
    $position_2_2 = get_field('position_2_2');
  }

  $lab_url = get_field('lab_url');
  $lab_text = get_field('lab_text');
  $qualification = get_field('qualification');
  $degree = get_field('degree');
  $field = get_field('field');
  $thema = get_field('thema');
  $keyword = get_field('keyword');
  $image_1 = get_field('image_1');
  $image_2 = get_field('image_2');
  $message_title = get_field('message_title');
  $message_text = get_field('message_text');
  $subject_in_charge = get_field('subject_in_charge');
  $activity = get_field('activity');
  $research_map = get_field('research_map');


  // career グループフィールドの値を取得
  $career = get_field('career');
?>


<head>
	<link rel="stylesheet" href="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets02/slick/slick-theme.css">
	<link rel="stylesheet" href="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets02/slick/slick.css">
</head>

<main class="main">
  <div class="page-container">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="page-breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/">
          <div class="inner">
            <?php if(function_exists('bcn_display')): bcn_display(); endif;?>
          </div>
        </div>

        <div class="l-content">

          <div class="profile js-loadItem fade-in">
            <div class="profile__top <?php if ($major == '作業療法学専攻') { echo "type-2"; } ?>">
              <?php
                if ($position_pattern == 1) {
              ?>
                <div class="profile__top__info">
                  <div class="text"><?php echo $position_1; ?></div>
                </div>
              <?php } ?>
              <?php
                if ($position_pattern == 2) {
              ?>
                <div class="profile__top__info">
                  <div class="label"><span><?php echo $position_2_1; ?></span></div>
                  <div class="position"><p><?php echo $position_2_2; ?></p></div>
                </div>
              <?php } ?>

              <div class="profile__top__name">
                <div class="jp"><p><?php echo $name; ?></p></div>
                <div class="en"><p class="lora"><?php echo $name_en; ?></p></div>
              </div>

              <div class="profile__top__thum"><img src="<?php echo $teacher_image; ?>" alt=""></div>
            </div>

            <div class="profile__bottom">
              <div class="profile__bottom__table">
                <?php if($qualification) { ?>
                  <div class="row">
                    <div class="th"><p>資格</p></div>
                    <div class="td"><?php echo $qualification; ?></div>
                  </div>
                <?php } ?>

                <?php if ($degree) { ?>
                  <div class="row">
                    <div class="th"><p>学位</p></div>
                    <div class="td"><p><?php echo $degree; ?></p></div>
                  </div>
                <?php } ?>

                <?php if ($field) { ?>
                  <div class="row">
                    <div class="th"><p>専門分野</p></div>
                    <div class="td"><?php echo $field; ?></div>
                  </div>
                <?php } ?>

                <?php if(have_rows('career')): ?>
                  <div class="row">
                    <div class="th"><p>主な経歴</p></div>
                    <div class="td m-chronology">
                      <ul>
                        <?php while(have_rows('career')): the_row(); ?>
                          <li>
                            <div><?php the_sub_field('career_year'); ?></div>
                            <div><?php the_sub_field('career_text'); ?></div>
                          </li>
                        <?php endwhile; ?>
                      </ul>
                    </div>
                  </div>
                <?php endif; ?>


                <?php if ($thema) { ?>
                  <div class="row">
                    <div class="th"><p>研究テーマ</p></div>
                    <div class="td"><?php echo $thema; ?></div>
                  </div>
                <?php } ?>

                <?php if ($keyword) { ?>
                  <div class="row">
                    <div class="th"><p>キーワード</p></div>
                    <div class="td"><p><?php echo $keyword; ?></p></div>
                  </div>
                <?php } ?>
              </div>

              <?php if($lab_url) { ?>
                <div class="profile__bottom__labo">
                  <a href="<?php echo $lab_url; ?>"><img src="<?php echo get_template_directory_uri(); ?>/teacher/icon_labo.png" alt=""><span><?php echo $lab_text; ?></span></a>
                </div>
              <?php } ?>
            </div>
          </div>

          <div class="l-main">
            <section class="gallery js-scrollItem fade-in">
              <?php if ($image_1) { ?>
                <div><img src="<?php echo $image_1; ?>" alt="イメージ画像１"></div>
              <?php } ?>
              <?php if ($image_2) { ?>
                <div><img src="<?php echo $image_2; ?>" alt="イメージ画像２"></div>
              <?php } ?>
            </section>

            <section class="message js-scrollItem fade-in <?php if ($major == '作業療法学専攻') { echo "type-2"; } ?>">
              <div class="message__title"> 
                <h2 class="top lora"><span>Message</span></h2>
                <div class="bottom"><?php echo $message_title; ?></div>
              </div>

              <div class="message__text">
                <?php echo $message_text; ?>
              </div>
            </section>

          </div>


          <section class="detail <?php if ($major == '作業療法学専攻') { echo "type-2"; } ?>">
            <div class="detail__inr">

              <div class="detail-items js-scrollItem fade-in">

                <?php if ($subject_in_charge) { ?>
                  <div class="detail-item">
                    <div class="detail-item__head"><p>主な担当科目</p></div>
                    <div class="detail-item__body">
                      <?php echo $subject_in_charge; ?>
                    </div>
                  </div>
                <?php } ?>

                <?php if(have_rows('thesis')): ?>
                  <div class="detail-item">
                    <div class="detail-item__head"><p>主な論文</p></div>
                    <div class="detail-item__body">
                      <ul class="detail-item__thesis">
                        <?php while(have_rows('thesis')): the_row(); ?>
                          <li>
                            <p class="title"><?php the_sub_field('thesis_title'); ?></p>
                            <p class="other"><?php the_sub_field('thesis_text'); ?></p>
                          </li>
                        <?php endwhile; ?>
                      </ul>
                    </div>
                  </div>
                <?php endif; ?>

                <?php if ($subject_in_charge) { ?>
                  <div class="detail-item">
                    <div class="detail-item__head"><p>学術・社会貢献活動</p></div>
                    <div class="detail-item__body">
                      <?php echo $activity; ?>
                    </div>
                  </div>
                <?php } ?>

                <?php if(have_rows('awards')): ?>
                  <div class="detail-item">
                    <div class="detail-item__head"><p>受賞歴</p></div>
                    <div class="detail-item__body">
                      <ul class="chronology">
                        <?php while(have_rows('awards')): the_row(); ?>
                          <li>
                            <div class="chronology__head"><p><?php the_sub_field('awards_year'); ?></p></div>
                            <div class="chronology__body"><p><?php the_sub_field('awards_text'); ?></p></div>
                          </li>
                        <?php endwhile; ?>
                      </ul>
                    </div>
                  </div>
                <?php endif; ?>

                <?php if ($research_map) { ?>
                  <div class="detail-items__bottom">
                    <a href="<?php echo $research_map;?>"><span>リサーチマップはこちら</span></a>
                  </div>
                <?php } ?>
              </div>


              <div class="teachers-slide js-scrollItem fade-in <?php if ($major == '作業療法学専攻') { echo "type-2"; } ?>">
                <div class="teachers-slide__inr">

                  <?php if($major == "理学療法学専攻") { ?>
                    <div class="teachers-slide__head">
                      <h3 class="title"><span>理学療法学専攻</span></h3>
                      <p class="en lora"><span>Members of Faculty of Physical Therapy</span></p>
                    </div>
                  <?php } ?>
                  <?php if($major == "作業療法学専攻") { ?>
                    <div class="teachers-slide__head">
                      <h3 class="title"><span>作業療法学専攻</span></h3>
                      <p class="en lora"><span>Members of Faculty of Occupational Therapy</span></p>
                    </div>
                  <?php } ?>

                  <div class="c-teachers2 js-teachers-slide">

                    <!-- teacherのカスタム投稿を取得する、$majorが一致するものだけ取得 -->
                    <?php
                      $args = array(
                        'post_type' => 'teacher',
                        'posts_per_page' => -1,
                        'post__not_in' => array($post->ID),
                        'meta_query' => array(
                          array(
                            'key' => 'major',
                            'value' => $major,
                            'compare' => '='
                          )
                        )
                      );
                      $the_query = new WP_Query($args);
                    ?>

                    <?php if ($the_query->have_posts()) : ?>
                      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                      <?php
                        $major = get_field('major');
                        $teacher_image = get_field('teacher_image');
                        $name = get_field('name');
                        $name_en = get_field('name_en');
                        $position_pattern = get_field('position_pattern');
                        
                        if (get_field('position_1')) {
                          $position_1 = get_field('position_1');
                        }
                        if (get_field('position_2_1')) {
                          $position_2_1 = get_field('position_2_1');
                        }
                        if (get_field('position_2_2')) {
                          $position_2_2 = get_field('position_2_2');
                        }
                        $lab_url = get_field('lab_url');
                        $lab_text = get_field('lab_text');
                        $qualification = get_field('qualification');
                        $degree = get_field('degree');
                        $field = get_field('field');
                        $thema = get_field('thema');
                        $keyword = get_field('keyword');
                        $image_1 = get_field('image_1');
                        $image_2 = get_field('image_2');
                        $message_title = get_field('message_title');
                        $message_text = get_field('message_text');
                        $subject_in_charge = get_field('subject_in_charge');
                        $activity = get_field('activity');
                        $research_map = get_field('research_map');
                        // 記事のパーマリンク
                        $permalink = get_permalink();
                      ?>
                      <div class="item">
                        <a href="<?php echo $permalink; ?>" class="c-teachers__item">
                          <span class="arrow"></span>
                          <div class="c-teachers__item__thum"><img src="<?php echo $teacher_image; ?>" alt=""></div>
                          <div class="c-teachers__item__inr">
                            <div class="c-teachers__item__info">
                              <?php if ($major == '作業療法学専攻') { ?>
                                <div class="major m-type2"><p>作業療法学専攻</p></div>
                              <?php } ?>
                              <?php if ($major == '理学療法学専攻') { ?>
                                <div class="major"><p>理学療法学専攻</p></div>
                              <?php } ?>
                              <div class="title"><p><?php echo $position_2_2; ?></p></div>
                            </div>
                            <div class="c-teachers__item__name"><p><?php echo $name; ?></p></div>
                          </div>
                        </a>
                      </div>

                      <?php endwhile; ?>
                    <?php else : ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>

                  </div>
                  <!-- スライド -->


                  <div class="teachers-slide__btn">
                    <a href="../"><span>一覧に戻る</span></a>
                  </div>

                </div>
              </div>

            </div>
          </section>


        </div>
        
      </div>
      <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
  </div>
</main>
<!--/.main-->

<script type="text/javascript" src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets02/slick/slick.js"></script>
<script>
	$(document).ready(function() {

		function eggNewsSlide() {
			$('.js-teachers-slide').slick({
        arrows: true,
        autoplay: false, // 自動でスクロール
        // autoplaySpeed: 300, // 自動再生のスライド切り替えまでの時間を設定
        centerMode: true, // 要素を中央寄せ
        speed: 500, // スライドが流れる速度を設定
        cssEase: "linear", // スライドの流れ方を等速に設定
        // slidesToShow: 5,
        swipe: true, // 操作による切り替えはさせない
        pauseOnFocus: false, // スライダーをフォーカスした時にスライドを停止させるか
        pauseOnHover: false, // スライダーにマウスホバーした時にスライドを停止させるか
        variableWidth: true,
        infinite: true,
        slidesToScroll: 2,
        // centerPadding: '1.7%',
        // レスポンシブ
        responsive: [{
          breakpoint: 768,
          settings: {
            arrows: false,
            slidesToScroll: 1,
          }
        }]
			});
		}
		eggNewsSlide();

	});

  $('.js-loadItem').addClass('active');

  $(window).on("scroll", function() {
    var scroll = $(window).scrollTop();

    $('.js-scrollItem').each(function() {
      var position = $(this).offset().top;
      var windowHeight = $(window).height();
      if (scroll > position - windowHeight / 1.5) {
        $(this).addClass('active');
      } else {
        $(this).removeClass('active');
      }
    });

  });
</script>


<?php get_footer(); ?>