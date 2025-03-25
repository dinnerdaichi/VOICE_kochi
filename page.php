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
        <div class="page-visual">
          <div class="page-visual-inner">
            <?php if($acf_title = get_field('page_title')):?>
              <?php if($acf_title_en = get_field('page_title_en')):?>
                <h1 class="page-title bold" data-title-en="<?php echo $acf_title_en;?>"><?php echo $acf_title;?></h1>
              <?php else:?>
                <h1 class="page-title bold"><?php echo $acf_title;?></h1>
              <?php endif;?>
            <?php else:?>
              <h1 class="page-title bold"><?php the_title();?></h1>
            <?php endif;?>
          </div>
        </div>
        <div class="page-contents">
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