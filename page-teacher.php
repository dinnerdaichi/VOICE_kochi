<?php get_header(); ?>

<main class="main">
  <div class="page-container">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <!-- <div class="page-breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/"> -->
          <!-- <div class="inner"> -->
            <?php // if(function_exists('bcn_display')): bcn_display(); endif;?>
          <!-- </div> -->
        <!-- </div> -->

        <div class="l-content">
          <div class="kv">
            <picture>
              <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/teacher/teacher_kv_sp.jpg">
              <img src="<?php echo get_template_directory_uri(); ?>/teacher/teacher_kv.jpg" alt="">
            </picture>
          </div>

          <div class="page-head">
            <h1 class="page-head__top">教員紹介</h1>
            <p class="page-head__bottom"><span class="lora">Faculty Members</span></p>
          </div>


          <div class="profile-list">

            <input type="radio" name="tab1" id="tab1" checked>
            <input type="radio" name="tab1" id="tab2">

            <div class="profile-list__content">
              <div class="profile-list__tab">
                <label for="tab1" data-tab="tab1"><span>理学療法学専攻</span></label>
                <label for="tab2" data-tab="tab2" class="type-2"><span>作業療法学専攻</span></label>
              </div>

              <div class="profile-list__target">
                <div class="profile-list__target__item js-scrollItem fade-in">
                  <h2 class="profile-list__target__item__title"><span>理学療法学専攻</span></h2>

                  <ul class="c-teachers">

                    <?php
                      $args = array(
                        'post_type' => 'teacher',
                        'posts_per_page' => -1,
                        'post__not_in' => array($post->ID),
                        'meta_query' => array(
                          array(
                            'key' => 'major',
                            'value' => '理学療法学専攻',
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

                      <li>
                        <a href="<?php echo $permalink; ?>" class="c-teachers__item">
                          <span class="arrow"></span>
                          <div class="c-teachers__item__thum"><img src="<?php echo $teacher_image; ?>" alt=""></div>
                          <div class="c-teachers__item__inr">
                            <div class="c-teachers__item__info">
                              <div class="major"><p>理学療法学専攻</p></div>
                              <div class="title"><p><?php echo $position_2_2; ?></p></div>
                            </div>
                            <div class="c-teachers__item__name"><p><?php echo $name; ?></p></div>
                          </div>
                        </a>
                      </li>

                    <?php endwhile; ?>
                    <?php else : ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                  </ul>
                </div>
                

                <div class="profile-list__target__item js-scrollItem fade-in">
                  <h2 class="profile-list__target__item__title type-2"><span>作業療法学専攻</span></h2>

                  <ul class="c-teachers">
                  <?php
                      $args = array(
                        'post_type' => 'teacher',
                        'posts_per_page' => -1,
                        'post__not_in' => array($post->ID),
                        'meta_query' => array(
                          array(
                            'key' => 'major',
                            'value' => '作業療法学専攻',
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

                      <li>
                        <a href="<?php echo $permalink; ?>" class="c-teachers__item">
                          <span class="arrow m-type2"></span>
                          <div class="c-teachers__item__thum"><img src="<?php echo $teacher_image; ?>" alt=""></div>
                          <div class="c-teachers__item__inr">
                            <div class="c-teachers__item__info">
                              <div class="major m-type2"><p>作業療法学専攻</p></div>
                              <div class="title"><p><?php echo $position_2_2; ?></p></div>
                            </div>
                            <div class="c-teachers__item__name"><p><?php echo $name; ?></p></div>
                          </div>
                        </a>
                      </li>

                    <?php endwhile; ?>
                    <?php else : ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                  </ul>

                </div>

              </div>
            </div>


          </div>


        </div>
        
      </div>
      <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
  </div>
</main>
<!--/.main-->


<script>
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