<?php get_header(); ?>

<main class="main">
  <div class="page-container">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
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