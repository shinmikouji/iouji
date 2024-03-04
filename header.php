<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Zen+Old+Mincho&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <?php wp_head(); ?>
</head>

<body>
  <header class="l-header">
    <h2 class="l-header__title"><a href="<?php echo esc_url(home_url('/')); ?>">醫王寺</a></h2>
    <nav class="l-header__nav c-display--pc">
      <ul>
        <li><a href="<?php echo esc_url(home_url('/info')); ?>">知る</a></li>
        <li><a href="<?php echo esc_url(home_url('/kaikan')); ?>">会館紹介</a></li>
        <li><a href="<?php echo esc_url(home_url('/noukotsudou')); ?>">納骨堂</a></li>
        <li><a href="<?php echo esc_url(home_url('/reiansitsu')); ?>">霊安室</a></li>
        <li><a href="<?php echo esc_url(home_url('/ohaka')); ?>">お墓</a></li>
        <li><a href="<?php echo esc_url(home_url('/gousibaka')); ?>">合祀墓</a></li>
        <li><a href="<?php echo esc_url(home_url('/kaisou')); ?>">改葬について</a></li>
        <li><a href="<?php echo esc_url(home_url('/sougi')); ?>">葬儀について</a></li>
        <li><a href="<?php echo esc_url(home_url('/#access')); ?>">交通案内</a></lia>
        <li><a href="<?php echo esc_url(home_url('/danka')); ?>">檀家の皆様へ</a></li>
      </ul>
    </nav>
    <div class="l-header__icon c-display--sp">
      <span class="line"></span>
      <span class="line"></span>
      <span class="line"></span>
    </div>
  </header>
  <div class="l-header__nav--sp c-display--sp">
    <nav>
      <div class="l-header__navArea--sp">
        <ul class="list">
          <li>
            <h4><a href="<?php echo esc_url(home_url('/info')); ?>">知る</a></h4>
            <ul>
              <li><a href="<?php echo esc_url(home_url('/info/#raireki')); ?>">来歴</a></li>
              <li><a href="<?php echo esc_url(home_url('/info/#tendaisyu')); ?>">天台宗とは</a></li>
              <li><a href="<?php echo esc_url(home_url('/info/#nenkangyouji')); ?>">年間行事</a></li>
            </ul>
          </li>
          <li>
            <h4><a href="<?php echo esc_url(home_url('/kaikan')); ?>">会館紹介</a></h4>
            <ul>
              <li><a href="<?php echo esc_url(home_url('/kaikan/#about')); ?>">会館について</a></li>
              <li><a href="<?php echo esc_url(home_url('/kaikan/#map')); ?>">館内マップ / ご利用料金</a></li>
            </ul>
          </li>
          <li>
            <h4><a href="<?php echo esc_url(home_url('/noukotsudou')); ?>">納骨堂</a></h4>
            <ul>
              <li><a href="<?php echo esc_url(home_url('/noukotsudou/#about')); ?>">お墓のないお墓</a></li>
              <li><a href="<?php echo esc_url(home_url('/noukotsudou/#fee')); ?>">ご利用料金</a></li>
            </ul>
          </li>
          <li>
            <h4><a href="<?php echo esc_url(home_url('/reiansitsu')); ?>">霊安室</a></h4>
            <ul>
              <li>
                <a href="<?php echo esc_url(home_url('/reiansitsu/#type')); ?>">
                  醫王寺の霊安室の種類
                </a>
              </li>
              <li>
                <a href="<?php echo esc_url(home_url('/reiansitsu/#forever')); ?>">
                  国宝殿永安室
                </a>
              </li>
              <li>
                <a href="<?php echo esc_url(home_url('/reiansitsu/#feature')); ?>">
                  醫王寺の永安室 7 つの特徴
                </a>
              </li>
            </ul>
          </li>
        </ul>
        <ul class="list">
          <li>
            <h4><a href="<?php echo esc_url(home_url('/ohaka')); ?>">お墓</a></h4>
            <ul>
              <li><a href="<?php echo esc_url(home_url('/ohaka/#feature')); ?>">醫王寺のお墓の特長</a></li>
              <li><a href="<?php echo esc_url(home_url('/ohaka/#type')); ?>">醫王寺のお墓の種類</a></li>
              <li><a href="<?php echo esc_url(home_url('/ohaka/#set')); ?>">墓終いセット</a></li>
            </ul>
          </li>
          <li>
            <h4><a href="<?php echo esc_url(home_url('/gousibaka')); ?>">合祀墓</a></h4>
          </li>
          <li>
            <h4><a href="<?php echo esc_url(home_url('/kaisou')); ?>">改葬について</a></h4>
          </li>
          <li>
            <h4><a href="<?php echo esc_url(home_url('/#access')); ?>">交通案内</a></h4>
          </li>
          <li>
            <h4><a href="<?php echo esc_url(home_url('/sougi')); ?>">葬儀について</a></h4>
          </li>
          <li>
            <h4><a href="<?php echo esc_url(home_url('/danka')); ?>">檀家の皆様へ</a></h4>
            <ul>
              <li><a href="<?php echo esc_url(home_url('/danka/#news')); ?>">お盆法要のお知らせ</a></li>
              <li><a href="<?php echo esc_url(home_url('/danka/#report')); ?>">行事のご報告</a></li>
              <li><a href="<?php echo esc_url(home_url('/danka/#application')); ?>">法事・塔婆申し込み</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </div>