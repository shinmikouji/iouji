<?php /* Template Name:news  */ ?>
<?php get_header(); ?>
<main>
  <h2 class="c-subtitle--underline p-archive__title">インフォメーション一覧</h2>
  <section class="p-archive c-inner">
    <ul class="p-archive__list">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 6
      );
      $archive_query = new WP_Query($args);
      ?>
      <?php if ($archive_query->have_posts()) : ?>
        <?php while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
          <li class="p-archive__items">
            <a href="<?php the_permalink(); ?>" class="p-archive__link">
              <p class="p-archive__items-label"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></p>
              <div class="p-archive__items-textArea">
                <time><?php echo get_the_date(); ?></time>
                <p class="p-archive__items-title"><?php the_title() ?></p>
              </div>
            </a>
          </li>
        <?php endwhile;
        wp_reset_postdata(); ?>
      <?php else : ?>
        <p class="">記事が見つかりませんでした。</p>
      <?php endif; ?>
    </ul>
  </section>
</main>
<?php get_footer(); ?>