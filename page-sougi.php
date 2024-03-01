<?php /* Template Name:sougi */ ?>
<?php get_header(); ?>
<main>
  <div class="c-mv">
    <img src="<?php echo get_template_directory_uri(); ?>/images/sougi/sougi-mv.jpg" alt="葬儀ページのメインビジュアル">
    <h1>葬儀について</h1>
  </div>
  <section class="c-bg-gray p-soigi">
    <div class="c-inner">
      <div class="c-breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>">TOP</a>&nbsp;＞&nbsp;葬儀について
      </div>
      <h2 class="p-soigi__title c-subtitle--underline">葬儀について</h2>
      <ul>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/images/sougi/sougi-01.jpg" alt="直寺葬の画像">
          <h3>直寺葬</h3>
          <p>
            直寺葬とはお通夜や葬儀・告別式をおこなわず、直接火葬場で短時間のお別れと火葬・収骨のみをおこなうご葬儀のことを「火葬式」といい、別名「直葬」ともいわれています<br />
            ・直葬にお経のみを施します<br />
            ・医王寺では小さなお部屋（ペルソナ室）を使用しご対応いたします</p>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/images/sougi/sougi-02.jpg" alt="一日葬の画像">
          <h3>一日葬</h3>
          <p>一日葬とはお通夜を行わずに、葬儀・告別式と火葬を1日で執り行う葬儀です。</p>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/images/sougi/sougi-03.jpg" alt="家族葬の画像">
          <h3>家族葬</h3>
          <p>家族葬とは少人数で行う小規模な葬儀スタイルのことです。 「家族」という名がついていますが参列者は家族だけとは限りません。 故人が生前特に親しかった友人なども交え、10～30人程度の少人数で執り行うものです。
          </p>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/images/sougi/sougi-04.jpg" alt="普通葬の画像">
          <h3>普通葬</h3>
          <p>普通葬とは参列者を限定せず広く一般の方に故人の弔いに参列していただくスタイルです。
            一般の方といっても故人の親族や知人、職場の関係者や近所の方、喪主をはじめ故人の家族の知人や関係者など、なんらかの関係がある方たちを指します。</p>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/images/sougi/sougi-05.jpg" alt="社葬の画像">
          <h3>社葬</h3>
          <p>社葬とは創業者や社長、会長をはじめとした経営陣など、その会社の発展に大きく貢献した人が亡くなった際に行う葬儀です。
            遺族や近親者が施主を務める通常の葬儀と異なり、故人が属していた会社が施主を務めるというのが、社葬の大きな特徴です。</p>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/images/sougi/sougi-06.jpg" alt="お別れの会の画像">
          <h3>お別れの会</h3>
          <p>お別れの会とは故人を偲んでおこなわれる自由なスタイルの会です。 故人が亡くなった直後に遺族や親族のみで密葬や家族葬を行い、後日一般の参列者を招いてお別れの会をするという形で執り行います。</p>
        </li>
      </ul>
    </div>
  </section>
  <section class="c-contact c-contact--gold">
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
            <img src="<?php echo get_template_directory_uri(); ?>/images/contact/tel.svg" alt="電話のアイコン">
            <p>メモリアル・ハート&nbsp;電話番号</p>
          </div>
          <a class="c-contact__info-tel-number" href="tel:0120-148-408">
            0120-148-408
          </a>
          <p class="c-contact__info-tel-description">
            （フリーダイヤル / 受付時間 09:00-17:00 ）
          </p>
          <a class="c-contact__info-tel-number" href="tel:03-5360-1753">
            03-5360-1753
          </a>
          <p class="c-contact__info-tel-description">
            （受付時間 09:00-17:00 ）
          </p>
        </div>
        <div class="c-contact__info-mail">
          <div class="c-contact__info-title">
            <img src="<?php echo get_template_directory_uri(); ?>/images/contact/mail.svg" alt="メールのアイコンme-runoaikonn">
            <p>メモリアル・ハート メールアドレス</p>
          </div>
          <a href="mailto:info@m-heat.co.jp" class="c-contact__info-mail-button">
            info@m-heat.co.jp
          </a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>