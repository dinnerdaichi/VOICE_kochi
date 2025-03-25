<?php get_header(); ?>

<main class="main">
  <div class="page-container">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="page-breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/">
          <div class="inner">
            <?php if(function_exists('bcn_display')): bcn_display(); endif;?>
          </div>
        </div>
        <div class="page-contents">
          <section id="news" class="news-content">
            <div class="inner">
              <div class="content-block">
                <?php if($acf_thumbnail = get_field('news-thumbnail')):?>
                  <?php if($acf_thumbnail_flag = get_field('news-thumbnail-flag')):?>
                    <div class="thumbnail">
                      <img src="<?php echo $acf_thumbnail;?>" alt="サムネイル">
                    </div>
                  <?php endif;?>
                <?php endif;?>
                <div class="info">
                <?php 
                  // 現在の投稿に割り当てられた 'news_category' の全てのタームを取得
                  $terms = get_the_terms($post->ID, 'news_category');

                  // タームが存在し、エラーがないことを確認
                  if (!is_wp_error($terms) && !empty($terms)): ?>
                      <div class="news-categories">
                          <?php foreach ($terms as $term): // 取得した各タームに対してループ処理 ?>
                              <p class="news-category bold news-category-<?php echo esc_attr($term->slug); ?>">
                                  <?php echo esc_html($term->name); ?>
                              </p>
                          <?php endforeach; ?>
                      </div>
                  <?php endif; ?>
                  <h2 class="news-title bold"><?php the_title(); ?></h2>
                  <p class="news-date bold"><?php echo get_the_date('Y.m.d'); ?></p>
                </div>
                <div class="textarea">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>

    <div class="bottom_list">
      <div class="inner">
        <p class="bottom_title bold">その他 最新NEWS</p>
        <?php
          $args = array(
          'posts_per_page' => 4,
          'post_type' => 'news',
          'post_status' => 'publish',
          'orderby' => 'date',
          'order'  => 'DESC',
          );
          $wp_query = new WP_Query();
          $wp_query->query($args);
        ?>

        <?php if($wp_query->have_posts()): ?>
          <ul class="news-list news-flex">
            <?php while($wp_query->have_posts()) : $wp_query->the_post();?>
              <li class="news-item">
                <a href="<?php echo get_permalink(); ?>">
                    <div class="news-item">
                      <div class="news-top">
                        <div class="thumbnail">
                          <?php if($acf_thumbnail = get_field('news-thumbnail')):?>
                            <img src="<?php echo $acf_thumbnail;?>" alt="">
                          <?php else:?>
                            <img src="<?php echo site_url();?>/img/common/image-default.jpg" alt="">
                          <?php endif;?>
                        </div>
                      </div>
                      <div class="news-bottom">
                        <div class="news-info">
                          <?php 
                          // 現在の投稿に割り当てられた 'news_category' の全てのタームを取得
                          $terms = get_the_terms($post->ID, 'news_category');

                          // タームが存在し、エラーがないことを確認
                          if (!is_wp_error($terms) && !empty($terms)): ?>
                              <div class="news-categories">
                                  <?php foreach ($terms as $term): // 取得した各タームに対してループ処理 ?>
                                      <p class="news-category bold news-category-<?php echo esc_attr($term->slug); ?>">
                                          <?php echo esc_html($term->name); ?>
                                      </p>
                                  <?php endforeach; ?>
                              </div>
                          <?php endif; ?>
                          <h3 class="news-title bold"><?php the_title(); ?></h3>
                        </div>
                        <p class="news-date bold"><span class="date"><?php echo get_the_date('Y.m.d'); ?></span></p>
                      </div>
                    </div>
                  </a>
              </li>
            <?php endwhile;?>
          </ul>
        <?php else:?>
        <?php endif; ?>
        <?php wp_reset_postdata();?>

        <a class="back_btn" href="/news/">一覧を見る</a>
      </div>
    </div>
  </div>
</main>
<!--/.main-->

<?php get_footer(); ?>