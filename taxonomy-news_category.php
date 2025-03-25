<?php get_header(); ?>

<main class="main">
  <div class="page-container">
    <div class="page-breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/">
      <div class="inner">
        <?php if(function_exists('bcn_display')): bcn_display(); endif;?>
      </div>
    </div>
    <div class="page-visual">
      <div class="page-visual-inner">
        <h1 class="page-title bold" data-title-en="NEWS">お知らせ</h1>
      </div>
    </div>
    <div class="page-contents">
      <section id="newsList">
        <div class="inner">
          <div class="column">
            <div class="column-left">
              <?php include(get_theme_root() . '/' . get_template() . "/parts/get_newsTaxnomy.php"); ?>
            </div>
            <div id="news_link" class="column-right">
              <ul class="news-menu">
                <li class="cat-item "><a href="/news#news_link">ALL</a></li>
                <?php include(get_theme_root() . '/' . get_template() . "/parts/get_newsMenu.php"); ?>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</main>

<?php get_footer(); ?>