<?php get_header(); ?>
<main>
  <section class="p-news-detail c-bg-gray">
    <div class="c-inner">
      <div class="c-breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>">TOP</a>&nbsp;＞&nbsp;お知らせ
      </div>
      <div class="p-news-detail__info">
        <time>2024.01.01</time>
        <label for="">重要なお知らせ</label>
      </div>
      <h2 class="p-news-detail__title">
        <?php the_title(); ?>
      </h2>
      <div class="p-news-detail__contents">
        <p>
          ニュースの内容が入ります。国宝山甘露院医王寺は、ＪＲ南武線南多摩駅から南に１５０ｍ、川崎街道筋北川高台にある寺院です。

          宝永年間(1704～11)、当時村内に流行した難病の多いことを憂い、一村民が平癒祈願のために薬師如来を本尊に奉り、開創されたと伝えられています。本尊は木彫坐像で２尺６寸（約７９cm）、脇侍の日光、月光両菩薩、眷族の十二神将共に宮殿厨子内に安置されています。大正１２年(1923)の大火により本堂をはじめ全てを消失、古文書などもことごとく失ったため、詳細な由緒は不詳となっています。本尊及び脇侍、眷属は村民により運び出されました。

          沿革寺の墓地西側の丘が「十三塚」の跡と比定され、元弘３年、正慶２年(1333)新田義貞の鎌倉攻めに際し、分倍河原での合戦の戦死者を弔うものであったと伝えられています。

          現在の方七間、総欅入母屋造りの本堂は、昭和５２年３月都道拡張計画により現台地に移転、再建されたものです。本堂東側には多目的に利用できる国宝殿があり、多くの方々に利用されています。
          境内中央西側に総高二丈三尺（約６．９６ｍ）、平成元年５月に開眼した唐銅造立像の『大丸不動尊』があります。

          現在多摩川三十三観音霊場第二十三番札所および関東九十一薬師霊場第二番札所になっています。
        </p>
        <img src="./images/about/about-01.jpg" alt="">
      </div>
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
            <img src="./images/contact/mail.svg" alt="メールのアイコンme-runoaikonn">
            <p>メモリアル・ハート メールアドレス</p>
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