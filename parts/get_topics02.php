<?php
  $wp_query = new WP_Query();
  $args = array(
  'posts_per_page' => -1,
  'post_type' => 'cpt_topics',
  'post_status' => 'publish',
  'orderby' => 'date',
  'order'  => 'DESC',
  );
  $wp_query->query($args);
?>
  <?php if($wp_query->have_posts()): ?>
  <ul class="slider topicsslider">
    <?php while($wp_query->have_posts()) : $wp_query->the_post();?>
      <?php if($acf_image = get_field('topics-image')):?>
        <?php
        $link = get_field('topics-link');
          if( $link ):
            $linkUrl = $link['url'];
            $linkTarget = $link['target'];
          ?>
          <li><a href="<?php echo $linkUrl; ?>" target="<?php echo $linkTarget;?>"><img src="<?php echo $acf_image; ?>" alt="<?php echo get_the_title();?>"></a></li>
        <?php else:?>
          <li><img src="<?php echo $acf_image; ?>" alt="<?php echo get_the_title();?>"></li>
        <?php endif;?>
      <?php endif;?>
    <?php endwhile;?>
  </ul>
<!--
  <ul class="slider topicsslider02">
    <?php while($wp_query->have_posts()) : $wp_query->the_post();?>
      <?php if($acf_image = get_field('topics-image')):?>
        <?php
        $link = get_field('topics-link');
          if( $link ):
            $linkUrl = $link['url'];
            $linkTarget = $link['target'];
          ?>
          <li><img src="<?php echo $acf_image; ?>" alt="<?php echo get_the_title();?>"></li>
        <?php else:?>
          <li><img src="<?php echo $acf_image; ?>" alt="<?php echo get_the_title();?>"></li>
        <?php endif;?>
      <?php endif;?>
    <?php endwhile;?>
  </ul>
-->
<?php else:?>
<?php endif; ?>
<?php wp_reset_postdata();?>
