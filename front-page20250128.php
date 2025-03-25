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
  /*.section-title {
    font-family: "Lora", serif;
    font-style: normal;
  }*/
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