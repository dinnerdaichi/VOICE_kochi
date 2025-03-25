<?php get_header(); ?>

<?php
  // カスタムフィールド title の値を取得

  $related_research = get_field('related_research');
  $title = get_field('title');
  $title_en = get_field('title_en');
  $tag = get_field('tag');
  $mainvisual_bg = get_field('mainvisual_bg');
  $mainvisual_bg_sp = get_field('mainvisual_bg_sp');
  if ($mainvisual_bg_sp == "") {
    $mainvisual_bg_sp = $mainvisual_bg;
  }

  // PCの時は$mainvisual_bg、SPの時は$mainvisual_bg_spを表示
  $$mainvisual_bg_url = "";
  if (wp_is_mobile()) {
    $mainvisual_bg_url = $mainvisual_bg_sp;
  } else {
    $mainvisual_bg_url = $mainvisual_bg;
  }

  $mainvisual_text = get_field('mainvisual_text');
  $researchers_check = get_field('researchers_check');
  $researchers_image = get_field('researchers_image');
  $researchers_name = get_field('researchers_name');
  $researchers_name_en = get_field('researchers_name_en');
  $researchers_status = get_field('researchers_status');
  $researchers_url = get_field('researchers_url');
  $researchers_movie = get_field('researchers_movie');
  // $researchers_movie_poster = get_field('researchers_movie_poster');
  
  
  $mission_check = get_field('mission_check');
  $mission_title = get_field('mission_title');
  $mission_text = get_field('mission_text');
  $mission_image = get_field('mission_image');
  $vision_check = get_field('vision_check');
  $vision_title = get_field('vision_title');
  $vision_text = get_field('vision_text');
  $vision_image = get_field('vision_image');
  $value_check = get_field('value_check');
  $value_title = get_field('value_title');
  $value_text = get_field('value_text');
  $value_image = get_field('value_image');

  if ($mission_check == 0 && $vision_check == 0 && $value_check == 0) {
    $hidden_check = 1;
  } else {
    $hidden_check = 0;
  }

?>

<head>
	<link rel="stylesheet" href="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets02/slick/slick-theme.css">
	<link rel="stylesheet" href="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets02/slick/slick.css">
</head>

<div class="fixed_btn">
	<a href="https://www.youtube.com/@ko-ken-k3" target="_blank"></a>
</div>

<div class="l-content">

  <div class="fv">
    <?php 
      // $mainvisual_bg_urlが空でない場合に表示
      if ($mainvisual_bg_url) {
    ?>
      <div class="fv__bg"><img src="<?php echo $mainvisual_bg_url; ?>" alt="BG"></div>
    <?php } ?>

    <div class="fv-item">
      <div class="fv-item__first">
        <div class="fv-item__first__inr">
          <h1 class="fv-item__first__title"><?php echo $title; ?></h1>
          <p class="fv-item__first__name"><?php echo $title_en; ?></p>
        </div>
        <p class="fv-item__first__tags"><?php echo $tag; ?></p>
      </div>
    </div>
    <div class="fv-item js-scrollItem fade-in">
      <div class="fv-item__second">
        <?php echo $mainvisual_text; ?>
      </div>
    </div>

  </div>


  <main class="l-main">

    <section class="l-section js-scrollItem fade-in">
      <div class="l-section__inr">
        <h2 class="c-titleA">
          <div class="c-titleA__inr">
            <img src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/research/images/research-news.svg" alt="">
            <span>研究ニュース</span>
          </div>
        </h2>

        <div class="news">
          <div class="wrap">
            <div class="newswrap">
            <?php
              $args = array(
              'posts_per_page' => 3,
              'post_type' => 'news',
              'post_status' => 'publish',
              'orderby' => 'date',
              'order'  => 'DESC',
              'tax_query' => array(
                array(
                  'taxonomy' => 'news_category',
                  'field' => 'slug',
                  'terms' => 'study' ,
                  ),
                ),
              );
              $wp_query = new WP_Query();
              $wp_query->query($args);
            ?>
            
            <?php if($wp_query->have_posts()): ?>
              <ul class="news-list news-flex">
                <?php while($wp_query->have_posts()) : $wp_query->the_post();?>
                  <li class="news-item">
                    <a href="<?php echo get_permalink(); ?>">
                      <div class="news-item__inr">
                      <?php if($acf_thumbnail = get_field('news-thumbnail')):?>
                        <div class="news-top" style="background-image: url(<?php echo $acf_thumbnail;?>)"></div>
                      <?php else:?>
                        <div class="news-top" style="background-image: url(<?php echo site_url();?>/img/common/image-default.jpg)"></div>
                        <?php endif;?>
                        <div class="news-bottom">
                          <div class="news-info">
                            <div class="news-info__top">
                              <?php 
                              // 現在の投稿に割り当てられた 'news_category' の全てのタームを取得
                              $terms2 = get_the_terms($post->ID, 'news_category');
                              // タームが存在し、エラーがないことを確認
                              if (!is_wp_error($terms2) && !empty($terms2)): ?>
                                <div class="news-categories">
                                  <?php foreach ($terms2 as $terms): // 取得した各タームに対してループ処理 ?>
                                    <p class="news-category bold news-category-<?php echo esc_attr($terms->slug); ?>"><?php echo esc_html($terms->name); ?></p>
                                  <?php endforeach; ?>
                                </div>
                                <p class="news-date bold"><span class="date"><?php echo get_the_date('Y.m.d'); ?></span></p>
                              <?php endif; ?>
                            </div>
                            <h3 class="news-title bold"><?php the_title(); ?></h3>
                          </div>
                        </div>
                      </div>
                    </a>
                  </li>
                <?php endwhile;?>
              </ul>
            <?php endif; ?>
            </div>
            <a href="/news/study/" class="more"><img class="news_top" src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets02/img/news_more.svg" width="110" height="14" alt="View more"></a>
          </div>
        </div>

      </div>
    </section>


    <?php if ($researchers_check == 1) { ?>
      <section class="l-section js-scrollItem fade-in">
        <div class="l-section__inr">
          <h2 class="c-titleA">
            <div class="c-titleA__inr">

              <img src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/research/images/researchers.svg" alt="researchers" class="researchers">
              <span>研究者</span>
            </div>
          </h2>


          <div class="c-researcher">
            <div class="c-researcher__inr">
              <?php if($researchers_image) { ?>
                <div class="c-researcher__thum"><img src="<?php echo $researchers_image; ?>" alt="研究者写真"></div>
              <?php } ?>

              <div class="c-researcher__info">
                <?php if($researchers_name) { ?>
                  <p class="name"><?php echo $researchers_name; ?> </p>
                <?php } ?>
                <?php if($researchers_name_en) { ?>
                  <p class="name-en"><?php echo $researchers_name_en; ?></p>
                <?php } ?>
                <?php if($researchers_status) { ?>
                  <div class="status"><?php echo $researchers_status; ?></div>
                <?php } ?>

                <?php if($researchers_url) { ?>
                <a href="<?php echo $researchers_url; ?>" class="c-btnA"><span>研究者について詳しく見る</span></a>
                <?php } ?>
              </div>
          </div>

          <?php if($researchers_movie) { ?>
            <div class="c-researcher__movie">
              <div class="c-researcher__movie__inr">
                <!-- iframe -->
                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $researchers_movie; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
            </div>
          <?php } ?>

          </div>
        </div>
      </section>
    <?php } ?>

    <?php if ($hidden_check == 0) { ?>

      <section class="feature">
        <div class="feature__inr">

          <?php if($mission_check == 1) { ?>
            <div class="feature__item mission js-scrollItem fade-in">
              <h2 class="feature__item__title">
                <img src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/research/images/mission.svg" alt="MISSION" class="mission">
                <span>研究の使命</span>
              </h2>
              <div class="feature__item__catch"><?php echo $mission_title; ?></div>
              <div class="feature__item__text"><?php echo $mission_text; ?></div>
              <?php if($mission_image) { ?>
                <div class="feature__item__thum"><img src="<?php echo $mission_image; ?>" alt=""></div>
              <?php } ?>
            </div>
          <?php } ?>

          <?php if($vision_check == 1) { ?>
            <div class="feature__item vision js-scrollItem fade-in">
              <h2 class="feature__item__title">
                <img src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/research/images/vision.svg" alt="vision" class="vision">
                <span>研究の目標</span>
              </h2>
              <div class="feature__item__catch"><?php echo $vision_title; ?></div>
              <div class="feature__item__text"><?php echo $vision_text; ?></div>
              <?php if($vision_image) { ?>
                <div class="feature__item__thum"><img src="<?php echo $vision_image; ?>" alt=""></div>
              <?php } ?>
            </div>
          <?php } ?>


          <?php if($value_check == 1) { ?>
            <div class="feature__item value js-scrollItem fade-in">
              <h2 class="feature__item__title">
                <img src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/research/images/value.svg" alt="value" class="value">
                <span>価値と成果</span>
              </h2>
              <div class="feature__item__catch"><?php echo $value_title; ?></div>
              <div class="feature__item__text"><?php echo $value_text; ?></div>
              <?php if($value_image) { ?>
                <div class="feature__item__thum"><img src="<?php echo $value_image; ?>" alt=""></div>
              <?php } ?>
            </div>
          <?php } ?>

        </div>
      </section>

    <?php } ?>


    <section class="l-section js-scrollItem fade-in">
      <div class="l-section__inr">
        <h2 class="c-titleA">
          <div class="c-titleA__inr">
            <img src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/research/images/other-egg.svg" alt="OTER EGG" class="other-egg">
            <span>関連する研究</span>
          </div>
        </h2>
        
        <div class="egg-slide">
          <div class="js-egg-slide">

            <?php if($related_research == "Wellbeing・発達科学部門") { ?>
              <div>
                <a href="/center/research/developmental-behavioral-science-of-mind-and-body0/" class="c-egg">
                  <div class="c-egg__icon">
                    <div class="c-egg__icon__inr">
                      <img src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets/images/egg-1.png" alt="">
                      <div class="text">
                        <span>Developmental<br>behavioral<br>science of mind <br>and body</span>
                        <p class="c-egg__name">こころと身体の<br>発達行動科学</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div>
                <a href="/center/research/english-in-the-field-of-rehabilitation/" class="c-egg">
                  <div class="c-egg__icon">
                    <div class="c-egg__icon__inr">
                      <img src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets/images/egg-2.png" alt="">
                      <div class="text">
                        <span>English in <br>rehabilitation field</span>
                        <p class="c-egg__name">リハビリテーション<br>分野の英語</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div>
                <a href="/center/research/well-being-and-empowerment-of-children-and-adults/" class="c-egg">
                  <div class="c-egg__icon">
                    <div class="c-egg__icon__inr">
                      <img src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets/images/egg-3.png" alt="">
                      <div class="text">
                        <span>Well-being and<br>Empowerment<br>of Children <br>and Adults</span>
                        <p class="c-egg__name">こどもとおとなの<br>ウェルビーイングと<br>エンパワメント</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div>
                <a href="/center/research/child-developmental-psychology/" class="c-egg">
                  <div class="c-egg__icon">
                    <div class="c-egg__icon__inr">
                      <img src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets/images/egg-4.png" alt="">
                      <div class="text">
                        <span>Child Development<br>Psychology</span>
                        <p class="c-egg__name">子ども発達<br>心理学</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            <?php } ?>

            <?php if($related_research == "基礎・運動科学部門") { ?>
              <div>
                <a href="/center/research/exercise-science/" class="c-egg">
                  <div class="c-egg__icon">
                    <div class="c-egg__icon__inr">
                      <img src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets/images/egg-9.png" alt="">
                      <div class="text">
                        <span>Locomotive <br>Science Lab</span>
                        <p class="c-egg__name">運動の科学</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div>
                <a href="/center/research/studying-the-science-of-motor-skill-proficiency/" class="c-egg">
                  <div class="c-egg__icon is-shadow-4">
                    <div class="c-egg__icon__inr">
                      <img src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets/images/egg-10.png" alt="">
                      <div class="text">
                        <span>Neuromechanics</span>
                        <p class="c-egg__name">運動の巧みさを<br>科学する</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div>
                <a href="/center/research/skeletal-muscle-structure-and-function/" class="c-egg">
                  <div class="c-egg__icon is-shadow-5">
                    <div class="c-egg__icon__inr">
                      <img src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets/images/egg-11.png" alt="">
                      <div class="text">
                        <span>Structure and function <br>of skeletal muscles</span>
                        <p class="c-egg__name">骨格筋の<br>構造と機能</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div>
                <a href="/center/research/neuroscience-of-sensory-and-motor-behavior/" class="c-egg">
                  <div class="c-egg__icon is-shadow-5">
                    <div class="c-egg__icon__inr">
                      <img src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets/images/egg-12.png" alt="">
                      <div class="text">
                        <span>Sensory and Motor<br>Behavior Neuroscience</span>
                        <p class="c-egg__name">感覚と運動行動の<br>神経科学</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div>
                <a href="/center/research/exercise-physiology/" class="c-egg">
                  <div class="c-egg__icon is-shadow-5">
                    <div class="c-egg__icon__inr">
                      <img src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets/images/egg-13.png" alt="">
                      <div class="text">
                        <span>Physiology of<br>physical training <br>on human body</span>
                        <p class="c-egg__name">身体トレーニングの<br>生理学</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            <?php } ?>

            <?php if($related_research == "神経・精神科学部門") { ?>
              <div>
                <a href="/center/research/social-neuroscience/" class="c-egg">
                  <div class="c-egg__icon is-shadow-2">
                    <div class="c-egg__icon__inr">
                      <img src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets/images/egg-5.png" alt="">
                      <div class="text">
                        <span>Social <br>Neuroscience</span>
                        <p class="c-egg__name">社会性神経科学</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div>
                <a href="/center/research/mind-vitality-and-lab/" class="c-egg">
                  <div class="c-egg__icon is-shadow-2">
                    <div class="c-egg__icon__inr">
                      <img src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets/images/egg-6.png" alt="">
                      <div class="text">
                        <span>Heart<br>・Health・Lab</span>
                        <p class="c-egg__name">こころ・元気・ラボ</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div>
                <a href="/center/research/pain-science/" class="c-egg">
                  <div class="c-egg__icon is-shadow-2">
                    <div class="c-egg__icon__inr">
                      <img src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets/images/egg-7.png" alt="">
                      <div class="text">
                        <span>Science of Pain</span>
                        <p class="c-egg__name">痛みの科学</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div>
                <a href="/center/research/health-science-of-mind-and-body/" class="c-egg">
                  <div class="c-egg__icon is-shadow-3">
                    <div class="c-egg__icon__inr">
                      <img src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets/images/egg-8.png" alt="">
                      <div class="text">
                        <span>Mental and Physical <br>Health Science</span>
                        <p class="c-egg__name">心と体の<br>健康科学</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            <?php } ?>

            <?php if($related_research == "スポーツ・健康科学部門") { ?>
              <div>
                <a href="/center/research/health-science-in-physical-environments/" class="c-egg">
                  <div class="c-egg__icon is-shadow-4">
                    <div class="c-egg__icon__inr">
                      <img src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets/images/egg-14.png" alt="">
                      <div class="text">
                        <span>Health Sciences<br>in thePhysical <br>Environment</span>
                        <p class="c-egg__name">物理的環境での<br>健康科学</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div>
                <a href="/center/research/movement-coaching-studies/" class="c-egg">
                  <div class="c-egg__icon is-shadow-4">
                    <div class="c-egg__icon__inr">
                      <img src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets/images/egg-15.png" alt="">
                      <div class="text">
                        <span>Motion Coaching <br>Science</span>
                        <p class="c-egg__name">動きの<br>コーチング学</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div>
                <a href="/center/research/community-and-health/" class="c-egg">
                  <div class="c-egg__icon is-shadow-4">
                    <div class="c-egg__icon__inr">
                      <img src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets/images/egg-16.png" alt="">
                      <div class="text">
                        <span>Community<br>and Health</span>
                        <p class="c-egg__name">地域と健康</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div>
                <a href="/center/research/preventing-frailty-for-healthy-longevity/" class="c-egg">
                  <div class="c-egg__icon is-shadow-4">
                    <div class="c-egg__icon__inr">
                      <img src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets/images/egg-17.png" alt="">
                      <div class="text">
                        <span>Healthy longevity<br>by preventing frailty</span>
                        <p class="c-egg__name">フレイル予防で<br>健康長寿</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div>
                <a href="/center/research/health-and-sports-science/" class="c-egg">
                  <div class="c-egg__icon is-shadow-4">
                    <div class="c-egg__icon__inr">
                      <img src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets/images/egg-18.png" alt="">
                      <div class="text">
                        <span> Health and <br>Sports Science</span>
                        <p class="c-egg__name">スポーツ<br>健康科学</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div>
                <a href="/center/research/instruction-and-acquisition-of-movements/" class="c-egg">
                  <div class="c-egg__icon is-shadow-4">
                    <div class="c-egg__icon__inr">
                      <img src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets/images/egg-19.png" alt="">
                      <div class="text">
                        <span>Motion coaching <br>and learning</span>
                        <p class="c-egg__name">動作指導と<br>その習得</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            <?php } ?>

					</div>
        </div>
      </div>
    </section>

    <section class="l-section m-type2 js-scrollItem fade-in">
      <div class="l-section__inr">
        <h2 class="c-titleA">
          <div class="c-titleA__inr">
            <img src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/research/images/egg-categories.svg" alt="EGG CATEGORIES" class="egg-categories">
            <span>すべての研究部門</span>
          </div>
        </h2>


        <div class="c-btn-list">
          <a href="/center/#developmental-behavioral-science-of-mind-and-body" class="c-btnB"><span>Wellbeing・発達科学部門</span></a>
          <a href="/center/#department-of-basic-and-exercise-sciences" class="c-btnB m-type2"><span>基礎・運動科学部門</span></a>
          <a href="/center/#neuroscience-and-neuropsychiatry" class="c-btnB m-type3"><span>神経・精神科学部門</span></a>
          <a href="/center/#sports-and-health-sciences" class="c-btnB m-type4"><span>スポーツ・健康科学部門</span></a>
        </div>
      </div>
    </section>
  </main>

</div>



<section class="contact">
		<img class="pc" src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets02/img/contact.jpg" width="1366" height="540" alt="お問い合わせ　※高知健康科学大学附属未来健康創造研究センター、 地域連携支援センターに関するお問い合わせは、「お問い合わせ送信フォーム」よりお送りください。（お電話での受付は行っておりませんので、ご了承くださいませ。）お送りいただいたお問い合わせには、原則として1週間以内にご返信いたします。"><img class="sp" src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets02/img/sp_contact.jpg" width="375" height="553" alt="お問い合わせ　※高知健康科学大学附属未来健康創造研究センター、 地域連携支援センターに関するお問い合わせは、「お問い合わせ送信フォーム」よりお送りください。（お電話での受付は行っておりませんので、ご了承くださいませ。）お送りいただいたお問い合わせには、原則として1週間以内にご返信いたします。">
		<a href="https://forms.gle/8dpQBe1TwAp6paW68" target="_blank"><img class="pc" src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets02/img/contact_btn.svg" width="305" height="385" alt="お問い合わせはコチラ"><img class="sp" src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets02/img/sp_contact_btn.svg" width="124" height="158" alt="お問い合わせはコチラ"></a>
</section>
<section class="footer pc">
	<div class="wrap">
		<img class="left" src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets02/img/footer_left.jpg" width="426" height="153" alt="地域連携支援センター × 未来健康創造研究センター　Powerd by UNIVERSITY OF KOCHI HEALTH SCIENCES">
		<a href="/" class="right"><img src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets02/img/footer_logo.jpg" width="359" height="72" alt="高知健康科学大学　〒781-5103 高知県高知市大津乙 2500-2　TEL 088-866-6119"></a>
	</div>
	<div class="bottom">
		<a href="/privacy-policy/">プライバシーポリシー</a>
		<p class="copyright">Copyright University of Kochi Health Sciences</p>
	</div>
</section>
<section class="footer sp">
	<div class="wrap">
		<img class="footerimg" src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets02/img/sp_footer01.jpg" width="300" height="205" alt="地域連携支援センター × 未来健康創造研究センター　Powerd by UNIVERSITY OF KOCHI HEALTH SCIENCES">
		<a href="/"><img class="footerimg" src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets02/img/sp_footer02.jpg" width="300" height="90" alt="高知健康科学大学"></a>
	</div>
	<div class="bottom">
		<a href="/privacy-policy/">プライバシーポリシー</a>
		<p class="copyright">Copyright University of Kochi Health Sciences</p>
	</div>
</section>

<script type="text/javascript" src="<?php echo site_url();?>/wp-content/themes/ko-ken-k3/center/assets02/slick/slick.js"></script>
<script>
	$(document).ready(function() {
		function checkWidth() {
			if (window.matchMedia("(max-width: 767px)").matches) {
				$('.news-list').slick({
					arrows: false,
					dots: false,
          slidesToShow: 1,
          slidesToScroll: 1,
          adaptiveHeight: false,
          centerMode: true,
          fade: false,
          breakpoint: 767,
          // centerMode: true,
          // responsive: [{
          //   breakpoint: 767,
          //   settings: {
          //     arrows: false,
          //     slidesToShow: 1,
          //     slidesToScroll: 1,
          //     adaptiveHeight: true,
          //     fade: false,
          //   }
          // }]
				});
			}
		}
		checkWidth();

		function eggSlide() {
			$('.js-egg-slide').slick({
				arrows: true,
				dots: false,
				autoplay: false,
				autoplaySpeed: 5000,
				infinite: true,
				speed: 500,
				slidesToShow: 3,
				slidesToScroll: 1,
				adaptiveHeight: false,
        centerMode: false,
				fade: false,
				cssEase: 'linear',
        responsive: [{
          breakpoint: 767,
          settings: {
            arrows: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,
            centerPadding: "15%",
            adaptiveHeight: false,
            variableWidth: true,
            fade: false,
          }
        }]	
			});
		}
		eggSlide();

		$(window).resize(function() {
			checkWidth();
			eggSlide();
		});

    $(window).on("load", function() {
      $('.js-loadItem').each(function() {
        $(this).addClass('active');
      });
    });
		
		$(window).on("scroll", function() {
      var scroll = $(window).scrollTop();

			if ($(window).scrollTop() > 500) {
				$(".fixed_btn").addClass('active');
			} else {
				$(".fixed_btn").removeClass('active');
			}

      const fvHeight = $('.fv').height();
			if ($(window).scrollTop() > fvHeight) {
				$('.fv__bg').fadeOut();
			} else {
				$('.fv__bg').fadeIn();
			}

      $('.js-scrollItem').each(function() {
        var position = $(this).offset().top;
        var windowHeight = $(window).height();
        if (scroll > position - windowHeight / 1.7) {
          $(this).addClass('active');
        } else {
          $(this).removeClass('active');
        }
      });

		});
	});
</script>

<?php get_footer(); ?>

