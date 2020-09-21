<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package anmake-tokyo
 */

get_header();
?>

	<main class="site-main">
		<div class="about">
      <section class="l-mainVisual">
        <picture class="catch__mainVisualPicture">
          <!-- <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/mv-sp.webp" media="(max-width: 480px)" type="image/webp"> -->
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/mv.webp" media="(min-width: 481px)" type="image/webp">
          <!-- <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/mv-sp.jpg" media="(max-width: 480px)"> -->
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/mv.jpg" alt="">
        </picture>
      </section>
      <h1 class="page__title">ABOUT</h1>
      <section class="about__message">
        <h2 class="about__messageHeadline">MESSAGE</h2>
        <div class="about__messageContents">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/ceo.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/ceo.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/about/ceo@2x.jpg 2x" alt="">
          <div class="about__messageText">
            <p class="about__messageLead">
              「デジタルネイティブ」の視点から<br>
              映像の新しいカタチを創造。<br>
              常に生まれ変わる世界の「クリエイティブ」を<br>
              あなたと一緒に追求します。
            </p>
            <p class="about__messageContent">
              私たちAnMAKE Tokyoは創業時より、イベント映像の新しいカタチの創造につとめ、映像制作をしてまいりました。おかげさまで、現在その領域は様々なクライアント様のニーズに沿ったクリエイティブ全般に広がりを見せています。今後も新しい映像のカタチを追求し、多様なニーズにお応えしていきたいと考えております。<br>
            </p>
            <span class="about__messageCeoName">佐藤 遼太郎 社長兼最高経営責任者（CEO)</span>
          </div>
        </div>
      </section>
      <section class="about__service">
        <picture class="about__servicePicture">
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/service_bg.webp" media="(min-width: 481px)" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/service_bg.jpg" alt="">
        </picture>
        <h2 class="about__headline">SERVICE</h2>
        <ul class="about__serviceList">
          <li class="about__serviceItem">
            <h3 class="about__serviceHeadline">
              <span class="about__serviceHeadlineNumWrapper">
                <span class="about__serviceHeadlineNum">01</span>
              </span>
              <span class="about__serviceHeadlineName">EVENT MOVIE</span>
            </h3>
            <div class="about__serviceIcon">
              <?php echo file_get_contents(get_template_directory() . '/assets/img/icons/service_01.svg'); ?>
            </div>
            <h4 class="about__serviceSubHeadline">イベント映像制作</h4>
            <p class="about__serviceParagraph">
              従来のイベント映像にはない「没入感」にこだわった映像を制作致します。最短２４時間以内納品、イベント開催中納品も可能です。常に新しいクリエイティブを追求し、映像でイベントに新たな可能性を見出します。
            </p>
          </li>
          <li class="about__serviceItem">
            <h3 class="about__serviceHeadline">
              <span class="about__serviceHeadlineNumWrapper">
                <span class="about__serviceHeadlineNum">02</span>
              </span>
              <span class="about__serviceHeadlineName">PROMOTION</span>
            </h3>
            <div class="about__serviceIcon">
              <?php echo file_get_contents(get_template_directory() . '/assets/img/icons/service_02.svg'); ?>
            </div>
            <h4 class="about__serviceSubHeadline">PR映像制作・企画</h4>
            <p class="about__serviceParagraph">
              商品・サービスの課題を解決し、強みを伸ばす映像を制作致します。クライアント様に寄り添い、PRに最適な企画をご提案致します。
            </p>
          </li>
          <li class="about__serviceItem">
            <h3 class="about__serviceHeadline">
              <span class="about__serviceHeadlineNumWrapper">
                <span class="about__serviceHeadlineNum">03</span>
              </span>
              <span class="about__serviceHeadlineName">YOUTUBE</span>
            </h3>
            <div class="about__serviceIcon">
              <?php echo file_get_contents(get_template_directory() . '/assets/img/icons/service_03.svg'); ?>
            </div>
            <h4 class="about__serviceSubHeadline">YouTube映像制作・企画・運用</h4>
            <p class="about__serviceParagraph">
              YouTubeチャンネルの立ち上げから、企画、制作、運用まで一貫して承ります。初めてYouTubeチャンネルを立ち上げる方でも、ご安心できるよう、サポート致します。
            </p>
          </li>
          <li class="about__serviceItem">
            <h3 class="about__serviceHeadline">
              <span class="about__serviceHeadlineNumWrapper">
                <span class="about__serviceHeadlineNum">04</span>
              </span>
              <span class="about__serviceHeadlineName">VR MOVIE</span>
            </h3>
            <div class="about__serviceIcon">
              <?php echo file_get_contents(get_template_directory() . '/assets/img/icons/service_04.svg'); ?>
            </div>
            <h4 class="about__serviceSubHeadline"><span>VR映像制作</span></h4>
            <p class="about__serviceParagraph">
              作業教育システム、施設内説明、企業説明会、インターンシップなどに活用できるVR映像を制作致します。様々なビジネス現場の疑似体験をVRが可能にし、業者間のスムーズな情報共有や、一貫した現場教育が可能となります。
            </p>
          </li>
          <li class="about__serviceItem">
            <h3 class="about__serviceHeadline">
              <span class="about__serviceHeadlineNumWrapper">
                <span class="about__serviceHeadlineNum">05</span>
              </span>
              <span class="about__serviceHeadlineName">SNS OPERATION</span>
            </h3>
            <div class="about__serviceIcon">
              <?php echo file_get_contents(get_template_directory() . '/assets/img/icons/service_05.svg'); ?>
            </div>
            <h4 class="about__serviceSubHeadline"><span>SNS運用</span></h4>
            <p class="about__serviceParagraph">
              SNSマーケティングの企画、コンテンツ制作、運用、レポーティングまで一貫して承ります。各SNSの動向を把握し、アカウントの分析から運用・KPI管理までを実施。「共感されるコンテンツ」や「バズり」の効果最大化を狙います。
            </p>
          </li>
          <li class="about__serviceItem">
            <h3 class="about__serviceHeadline">
              <span class="about__serviceHeadlineNumWrapper">
                <span class="about__serviceHeadlineNum">06</span>
              </span>
              <span class="about__serviceHeadlineName">MANAGEMENT</span>
            </h3>
            <div class="about__serviceIcon">
              <?php echo file_get_contents(get_template_directory() . '/assets/img/icons/service_06.svg'); ?>
            </div>
            <h4 class="about__serviceSubHeadline">クリエイターマネジメント業務</h4>
            <p class="about__serviceParagraph">
              映像クリエイターを中心とした、マネジメント業務を行なっています。映像クリエイターがクリエイティブを最大限に発揮できるような環境を整えます。
            </p>
          </li>
        </ul>
      </section>
      <section class="about__company">
        <div class="labelValue">
          <h2 class="about__companyHeadline">COMPANY</h2>
          <dl class="labelValue__row">
            <dt class="labelValue__label">CORPORATE NAME</dt>
            <dd class="labelValue__value">AnMAKE Tokyo 合同会社</dd>
          </dl>
          <dl class="labelValue__row">
            <dt class="labelValue__label">FOUNDED</dt>
            <dd class="labelValue__value">2019年２月14日</dd>
          </dl>
          <dl class="labelValue__row">
            <dt class="labelValue__label">CAPITAL</dt>
            <dd class="labelValue__value">500万円</dd>
          </dl>
          <dl class="labelValue__row">
            <dt class="labelValue__label">ADDRESS</dt>
            <dd class="labelValue__value">
              <address>
                〒245-0067<br>
                神奈川県横浜市戸塚区深谷町1610-46<br>
                TEL 090-6920-3015<br>
                TEL 080-9525-2370
              </address>
            </dd>
          </dl>
          <dl class="labelValue__row">
            <dt class="labelValue__label">SERVICES</dt>
            <dd class="labelValue__value">映像企画・制作業務、OOH（音楽ライブステージ映像、イベント映像）、ミュージックビデオ、WEB映像制作、デジタルコンテンツ企画制作、クリエイターマネージメント業務</dd>
          </dl>
          <dl class="labelValue__row">
            <dt class="labelValue__label">MAIN BANK</dt>
            <dd class="labelValue__value">かながわ信用金庫</dd>
          </dl>
          <dl class="labelValue__row">
            <dt class="labelValue__label">CLIENTS</dt>
            <dd class="labelValue__value">
              <ul class="about__clientList">
                <li class="about__clientItem">株式会社電通</li>
                <li class="about__clientItem">株式会社リクルートマーケティングパートナーズ</li>
                <li class="about__clientItem">株式会社W TOKYO</li>
                <li class="about__clientItem">CONNECT 株式会社</li>
                <li class="about__clientItem">株式会社エースディレクション</li>
                <li class="about__clientItem">ユニバーサルミュージック合同会社</li>
                <li class="about__clientItem">株式会社 プラチナムミュージックアンドクリエイティブ</li>
                <li class="about__clientItem">株式会社 TANK</li>
                <li class="about__clientItem">株式会社 FMJ</li>
                <li class="about__clientItem">株式会社 菊楽商会</li>
                <li class="about__clientItem">株式会社 MINDSET</li>
                <li class="about__clientItem">株式会社 インセンス ミュージック ワークス</li>
                <li class="about__clientItem">H&M へネス・アンド・マウリッツ・ジャパン株式会社</li>
                <li class="about__clientItem">株式会社 日本アクア</li>
                <li class="about__clientItem">株式会社 アップル神奈川</li>
              </ul>
            </dd>
          </dl>
          <dl class="labelValue__row">
            <dt class="labelValue__label">OFFICERS & DIRECTORS</dt>
            <dd class="labelValue__value">
              社長兼最高経営責任者(CEO)　佐藤 遼太郎<br>
              取締役　片寄 裕太郎<br>
              取締役　高野 隼弥
            </dd>
          </dl>
        </div>
      </section>
      <section class="about__history">
        <h2 class="about__headline -history">HISTORY</h2>
        <picture class="about__historyImage">
          <!-- <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/mv-sp.webp" media="(max-width: 480px)" type="image/webp"> -->
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/history_image.webp" media="(min-width: 481px)" type="image/webp">
          <!-- <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/history_image-sp.jpg" media="(max-width: 480px)"> -->
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/history_image.jpg" alt="">
        </picture>
        <p class="about__historyParagraph">
          フリーランス映像クリエイター3人から2019年にAnMAKE Tokyoを設立。カタチに捉われないクリエイティブな発想から、新しい映像のカタチを実現。様々なジャンルの映像を制作する中、イベントの映像制作に魅了される。東京ガールズコレクションやSTAR ISLANDなど大型イベントのオフィシャル映像を制作。
        </p>
        <p class="about__historyParagraph">
          現在はその経験を活かし、PR映像、YouTube映像制作、VR映像制作、SNS運営等、様々なジャンルに展開。常に新しいクリエイティブを追求し、映像制作を行なっている。
        </p>
        <div class="about__historyYearBlock">
          <h3 class="about__historyYear -opened">2019年</h3>
          <div class="about__historyContents">
            <dl>
              <dt>2月</dt>
              <dd>AnMAKE Tokyo 設立</dd>
            </dl>
            <dl>
              <dt>7月</dt>
              <dd>STAR ISLAND 公式SNS映像制作</dd>
            </dl>
            <dl>
              <dt>8月</dt>
              <dd>
                コカコーラプレゼンツ STAGE0: 公式SNS映像制作<br>
                ラストアイドル「青春トレイン」MVメイキング映像制作
              </dd>
            </dl>
            <dl>
              <dt>9月</dt>
              <dd>
                東京ガールズコレクションA/W 公式アフタームービー制作<br>
                ULTRA JAPAN COCALERO 公式SNS映像制作
              </dd>
            </dl>
            <dl>
              <dt>10月</dt>
              <dd>ベストジーニスト 公式メディア映像制作</dd>
            </dl>
            <dl>
              <dt>11月</dt>
              <dd>SOFTBANK CMメイキング映像制作</dd>
            </dl>
          </div>
        </div>
        <div class="about__historyYearBlock ">
          <h3 class="about__historyYear -opened">2020年</h3>
          <div class="about__historyContents">
            <dl>
              <dt>2月</dt>
              <dd>
                １周年<br>
                東京ガールズコレクションS/S 公式アフタームービー制作
              </dd>
            </dl>
          </div>
        </div>
      </section>
      <section class="about__contact" id="contact">
        <div class="about__contactInner">
          <h2 class="about__headline">CONTACT</h2>
          <?php echo do_shortcode('[contact-form-7 id="5" title="コンタクトフォーム 1"]'); ?>
        </div>
      </section>
		</div>
	</main><!-- #main -->

<?php
get_footer();
