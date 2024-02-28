<?php get_header(); ?>
<main>
  <div class="p-top-slider-area">
    <div class="swiper slider">
      <ul class="swiper-wrapper">
        <li class="swiper-slide">
          <a href="" class="top-swiper-slide__link">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/top-mv-01.jpg" alt="" class="c-display--pc">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/top-mv-01-sp.jpg" alt="" class="c-display--sp">
          </a>
        </li>
        <li class="swiper-slide">
          <a href="" class="top-swiper-slide__link">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/top-mv-02.jpg" alt="" class="c-display--pc">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/top-mv-02-sp.jpg" alt="" class="c-display--sp">
          </a>
        </li>
        <li class="swiper-slide">
          <a href="" class="top-swiper-slide__link">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/top-mv-03.jpg" alt="" class="c-display--pc">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/top-mv-03-sp.jpg" alt="" class="c-display--sp">
          </a>
        </li>
        <li class="swiper-slide">
          <a href="" class="top-swiper-slide__link">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/top-mv-04.jpg" alt="" class="c-display--pc">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/top-mv-04-sp.jpg" alt="" class="c-display--sp">
          </a>
        </li>
      </ul>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
    <div class="swiper slider-thumbnail">
      <ul class="swiper-wrapper">
        <li class="swiper-slide">
          <a href="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/top-mv-01.jpg" alt="">
          </a>
        </li>
        <li class="swiper-slide">
          <a href="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/top-mv-02.jpg" alt="">
          </a>
        </li>
        <li class="swiper-slide">
          <a href="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/top-mv-03.jpg" alt="">
          </a>
        </li>
        <li class="swiper-slide">
          <a href="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/top-mv-04.jpg" alt="">
          </a>
        </li>
      </ul>
      <div class="p-top-swiper-pagination c-display--sp">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
  </div>
  <div class="c-bg-gray p-top-upper-part">
    <div class="p-top-info">
      <div class="c-inner">
        <div class="p-top-info__banner c-display--sp">
          <h3>室内納骨堂の参拝時間</h3>
          <div class="p-top-info__banner-inner">
            <p class="large">9:00-16:00</p>
          </div>
          <h3>霊安室ご面会時間</h3>
          <div class="p-top-info__banner-inner">
            <p class="large">9:30-16:00</p>
          </div>
          <h3>お墓各種（樹木葬・合同墓・水子供養墓・合祀墓）参拝時間</h3>
          <div class="p-top-info__banner-inner">
            <p class="middle">日の出より日没まで</p>
          </div>
        </div>
        <h2 class="c-top-subtitle p-top-info__subtitle">INFORMATION</h2>
        <div class="c-top-subtitle__captionArea p-top-info__subtitle-captionArea">
          <div class="c-top-subtitle__circle"></div>
          <span class="c-top-subtitle__caption">お知らせ</span>
        </div>
        <div class="p-top-info-area">
          <div class="p-top-info__tab-area">
            <div class="p-top-info__tab-box">
              <button id="importantButton" class="p-top-info__tab">重要なお知らせ</button>
              <button id="eventButton" class="p-top-info__tab">行事・イベント</button>
            </div>
            <ul id="important" class="p-top-info__list">
              <?php
              $important_category_id = get_cat_ID('重要なお知らせ');
              // ページネーションを含む記事を取得
              $important_query = new WP_Query(array(
                'category__in' => array($important_category_id),
                'posts_per_page' => 4, // 1ページあたりの記事数
                'paged' => get_query_var('page') ?: 1 // 現在のページ番号
              ));
              ?>
              <?php if ($important_query->have_posts()) : ?>
                <?php while ($important_query->have_posts()) : ?>
                  <?php $important_query->the_post(); ?>
                  <li class="p-top-info__items">
                    <a href="<?php the_permalink(); ?>">
                      <div class="p-top-info__items-top">
                        <time>2024.01.01</time>
                        <label>重要なお知らせ</label>
                      </div>
                      <p><?php the_title(); ?></p>
                    </a>
                  </li>
                <?php endwhile; ?>
              <?php endif; ?>
            </ul>
            <ul id="event" class="p-top-info__list">
              <?php
              $events_category_id = get_cat_ID('行事・イベント');
              // ページネーションを含む記事を取得
              $events_query = new WP_Query(array(
                'category__in' => array($events_category_id),
                'posts_per_page' => 4, // 1ページあたりの記事数
                'paged' => get_query_var('page') ?: 1 // 現在のページ番号
              ));
              ?>
              <?php if ($events_query->have_posts()) : ?>
                <?php while ($events_query->have_posts()) : ?>
                  <?php $events_query->the_post(); ?>
                  <li class="p-top-info__items">
                    <a href="<?php the_permalink(); ?>">
                      <div class="p-top-info__items-top">
                        <time>2024.01.01</time>
                        <label>行事・イベント</label>
                      </div>
                      <p><?php the_title(); ?></p>
                    </a>
                  </li>
                <?php endwhile; ?>
              <?php endif; ?>
            </ul>
          </div>
          <div class="p-top-info__banner-area c-display--pc">
            <div class="p-top-info__banner">
              <h3>室内納骨堂の参拝時間</h3>
              <div class="p-top-info__banner-inner">
                <p class="large">9:00-16:00</p>
              </div>
              <h3>霊安室ご面会時間</h3>
              <div class="p-top-info__banner-inner">
                <p class="large">9:30-16:00</p>
              </div>
              <h3>お墓各種（樹木葬・合同墓・水子供養墓・合祀墓）参拝時間</h3>
              <div class="p-top-info__banner-inner">
                <p class="middle">日の出より日没まで</p>
              </div>
            </div>
            <div class="p-top-info__banner">
              <h3>医王寺へのお問い合わせ</h3>
              <div class="p-top-info__banner-inner">
                <div class="p-top-info__banner-inner-top">
                  <p class="normal">会館利用及び霊安室のご面会</p>
                  <p class="middle">TEL : 042-377-8489</p>
                  <p class="middle">FAX : 042-377-1053</p>
                  <p class="normal">（受付時間 9:00-17:00 ）</p>
                </div>
                <div class="p-top-info__banner-inner-bottom">
                  <p class="normal">メールでのお問い合わせ</p>
                  <p class="middle2">oka@iouji.com</p>
                </div>
              </div>
              <h3>お墓関係・葬儀に関しては<br />
                メモリアルハート</h3>
              <div class="p-top-info__banner-inner">
                <div class="p-top-info__banner-inner-top">
                  <p class="normal">お電話でのお問い合わせ</p>
                  <p class="middle column">0120-148-408<span>（フリーダイヤル）</span></p>
                  <p class="middle">03-5360-1753</p>
                </div>
                <div class="p-top-info__banner-inner-middle">
                  <p class="normal">メールでのお問い合わせ</p>
                  <p class="middle2">info@m-heat.co.jp</p>
                </div>
                <div class="p-top-info__banner-inner-bottom">
                  <p class="normal">お急ぎの方はこちら（担当：田中）</p>
                  <p class="middle">090-4603-7798</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-top-access">
    <div class="c-inner">
      <div class="p-top-access__subtitle" id="access">
        <h2 class="c-top-subtitle">ACCESS</h2>
        <div class="c-top-subtitle__captionArea">
          <div class="c-top-subtitle__circle"></div>
          <span class="c-top-subtitle__caption">交通案内</span>
        </div>
      </div>
      <div class="p-top-access__map">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/map.jpg" alt="交通案内の画像">
      </div>
      <div class="p-top-access__map-infoArea">
        <ul class="p-top-access__map-infoArea-list">
          <li class="p-top-access__map-infoArea-item">
            <div class="p-top-access__map-infoArea__item--triangle"></div>
            <p>〒206-0801 東京都稲城市大丸1417<br class="c-display--sp">（Googleマップで見る）</p>
          </li>
          <li class="p-top-access__map-infoArea-item">
            <div class="p-top-access__map-infoArea__item--triangle"></div>
            <p>「南多摩駅」から徒歩2分</p>
          </li>
          <li class="p-top-access__map-infoArea-item">
            <div class="p-top-access__map-infoArea__item--triangle"></div>
            <p>駐車場50台以上</p>
          </li>
        </ul>
      </div>
      <div class="p-top-access__map-vehicle">
        <div class="p-top-access__map-vehicle-item">
          <div class="p-top-access__map-vehicle-top">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/train.svg" alt="電車のアイコン" class="p-top-access__map-vehicle-top--icon">
            <h3>電車で「南多摩駅」までお越しの場合</h3>
          </div>
          <ul>
            <li>京王線からJR南南武線に乗り換え<span>「分倍河原駅」</span>より乗車5分</li>
            <li>小田急線からJR南武線に乗り換え<span>「登戸駅」</span>より乗車15分
            </li>
            <li>京王相模原線に乗り換え<span>「調布駅」</span>より乗車15分（※「京王稲田堤」下車、JR「稲田堤」乗り換えの場合）</li>
          </ul>
        </div>
        <div class="p-top-access__map-vehicle-item">
          <div class="p-top-access__map-vehicle-top">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/car.svg" alt="車のアイコン" class="p-top-access__map-vehicle-top--icon">
            <h3>お車でお越しの場合</h3>
          </div>
          <ul>
            <li>中央自動車道<span>「府中スマートIC」</span>より車で5分（約2.5km）</li>
            <li>中央自動車道<span>「稲城IC」</span>より車で7分（約3.5km）
            </li>
            <li>川崎街道・鶴川街道交差点<span>「矢野口」</span>信号より車で7分（3.3km）</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="p-top-movie c-inner">
    <iframe src="https://www.youtube.com/embed/nSJCl9eeVnQ?si=XSddpysa5qGX-I00" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <p>医王寺への行き方を動画でご確認いただけます</p>
  </div>
  <div class="c-inner c-display--sp">
    <div class="p-top-info__banner c-display--sp">
      <h3>医王寺へのお問い合わせ</h3>
      <div class="p-top-info__banner-inner">
        <div class="p-top-info__banner-inner-top">
          <p class="normal">会館利用及び霊安室のご面会</p>
          <p class="large">TEL : 042-377-8489</p>
          <p class="large">FAX : 042-377-1053</p>
          <p class="normal">（受付時間 9:00-17:00 ）</p>
        </div>
        <div class="p-top-info__banner-inner-bottom">
          <p class="normal">メールでのお問い合わせ</p>
          <p class="middle3">oka@iouji.com</p>
        </div>
      </div>
      <h3>お墓関係・葬儀に関しては<br />
        メモリアルハート</h3>
      <div class="p-top-info__banner-inner">
        <div class="p-top-info__banner-inner-top">
          <p class="normal">お電話でのお問い合わせ</p>
          <p class="large column">0120-148-408<span>（フリーダイヤル）</span></p>
          <p class="large">03-5360-1753</p>
        </div>
        <div class="p-top-info__banner-inner-middle">
          <p class="normal">メールでのお問い合わせ</p>
          <p class="middle3">info@m-heat.co.jp</p>
        </div>
        <div class="p-top-info__banner-inner-bottom">
          <p class="normal">お急ぎの方はこちら（担当：田中）</p>
          <p class="large">090-4603-7798</p>
        </div>
      </div>
    </div>
  </div>
  <div class="p-top-banner">
    <ul class="p-top-banner__list">
      <li>
        <a href="http://www.m-heart.co.jp/" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/banner-01.jpg" alt="メモリアル・ハートのバナー">
        </a>
      </li>
      <li>
        <a href="https://www.iris-pet.jp/" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/banner-02.jpg" alt="アイリスペットエンジェルのバナー">
        </a>
      </li>
    </ul>
  </div>
</main>
<?php get_footer(); ?>