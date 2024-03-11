<?php get_header(); ?>
<?php
$category = get_the_category();
$cat = $category[0];
//カテゴリー名
$cat_name = $cat->name;
?>
<main>
  <section class="p-news-detail c-bg-gray">
    <div class="c-inner">
      <div class="c-breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>">TOP</a>&nbsp;＞&nbsp;お知らせ
      </div>
      <div class="p-news-detail__info">
        <time><?php echo get_the_date(); ?></time>
        <label for=""><?php echo $cat_name; ?></label>
      </div>
      <h2 class="p-news-detail__title">
        <?php the_title(); ?>
      </h2>
      <div class="p-news-detail__contents">
        <p><?php the_content(); ?></p>
      </div>
      <a href="<?php echo esc_url(home_url('/news')); ?>" class="p-news-detail-button-archive c-button-info">
        <span>インフォメーション一覧へ</span>
      </a>
    </div>
  </section>
  <section class="c-contact c-contact--green">
    <div class="c-inner">
      <h2 class="c-contact__title">CONTACT</h2>
      <p class="c-contact__caption">お問い合わせ</p>
      <p class="c-contact__text">
        上記についてのお問い合わせは有限会社メモリアル・ハートが承っております。<br />
        どうぞお気軽にお問合せください。
      </p>
      <div class="c-contact__info">
        <div class="c-contact__info-tel">
          <div class="c-contact__info-title">
            <img src="./images/contact/tel.svg" alt="電話のアイコン">
            <p>メモリアル・ハート&nbsp;電話番号</p>
          </div>
          <p class="c-contact__info-tel-number">
            0120-148-408
          </p>
          <p class="c-contact__info-tel-description">
            （フリーダイヤル / 受付時間 09:00-17:00 ）
          </p>
          <p class="c-contact__info-tel-number">
            03-5360-1753
          </p>
          <p class="c-contact__info-tel-description">
            （受付時間 09:00-17:00 ）
          </p>
        </div>
        <div class="c-contact__info-mail">
          <div class="c-contact__info-title">
            <img src="./images/contact/mail.svg" alt="メールのアイコン">
            <p>メモリアル・ハート&nbsp;メールアドレス</p>
          </div>
          <a href="" class="c-contact__info-mail-button">
            info@m-heat.co.jp
          </a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>