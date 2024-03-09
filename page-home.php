<?php
/**
 * The template for displaying all pages
 * Template Name: Homepage
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HOME
 */

get_header();
?>

<!-- mv -->
<div class="m-home-intro">
    <div class="m-home-intro-logo"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/common/logo_02.svg" alt=""></div>
</div>
<main class="l-container">
  <div class="m-home-mv">
    <script>
      var tag = document.createElement('script');
        
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        var player;
        function onYouTubeIframeAPIReady() {
            player = new YT.Player('video_1', {
                videoId: 'NC9D5IZFJUM',
                playerVars: {
                    loop: 1,
                    height: "100%",
                    width: "100%",
                    controls: 0,
                    autoplay: 1,
                    showinfo: 0,
                    rel: 0,
                    playsinline:1,
                },
                events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                }
            });
        }

        function onPlayerReady(event) {
            event.target.mute();
            setTimeout(function(){ 
                $('.m-home-intro').addClass('off');
                $('.t-home').addClass('canScroll');
                event.target.playVideo();
            },1500);

        }

        var done = false;
        function onPlayerStateChange(event) {
            // 再生終了したとき
            if (event.data == YT.PlayerState.ENDED) {
                player.playVideo();
            }
        }
        function stopVideo() {
            player.stopVideo();
        }
    </script>
    <div class="m-home-mv-video">
      <div id=video_1></div>
    </div>
    <div class="m-home-mv-content">
      <h1 class="m-home-mv-title m-font-en"><span class="text">Come together and advance</span> <span class="and"></span> <span class="text">with us forever!</span> </h1>
      <p class="m-home-mv-text">共に集い、私たちと共に歩みましょう！永遠に！</p>
    </div>
    <!-- <div class="m-home-mv-play">
      <a href="" target="_blank">
        <div class="m-home-mv-play-text m-font-en">PLAY FULL MOVIE</div> <i class="m-home-mv-play-icon"></i> </a>
    </div> -->
  </div>
  <!-- end of mv -->
  <!-- company -->
  <section class="m-home-company js-home-anima">
    <div class="l-content">
      <div class="m-home-content">
        <h2 class="m-home-title js-home-anima-item"> <span class="en m-font-en">COMPANY</span> <span class="ja">スワリクについて</span> </h2>
        <h3 class="m-text-36 m-font-b m-align-c js-home-anima-item">これまでの50年、これからの50年</h3>
        <p class="m-mt m-text-18 m-align-c m-align-c--pc m-text-lh-l js-home-anima-item"> スワリクはおかげさまで令和4年に創立50周年を迎える事が出来ました。<br class="m-pc-only">これもひとえにお取引先様をはじめ関係者の皆様のおかげであると心から感謝申し上げます。<br class="m-pc-only"> そして何より従業員の皆さんとそのご家族の方々の支えがあったからこそ<br> 今日のスワリクが存在しております。<br>私達はこれまでの50年に感謝し、そしてこれからの50年も皆様の暮らしを守るため、<br class="m-pc-only">社業に専念してまいります。</p> <a href="<?php bloginfo('url'); ?>/about/#a-greeting" class="m-mt-xl m-btn">代表挨拶</a> </div>
    </div>
  </section>
  <!-- end of company -->
  <!-- history -->
  <section class="m-home-history js-home-anima">
    <div id="history" class="m-home-history-mv js-home-anima-item">
      <div class="m-home-history-mv__item"> <img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/history02.jpg" width="532" height="476" alt=""> </div>
      <div class="m-home-history-mv__item"> <img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/history01.jpg" width="532" height="476" alt=""> </div>
      <div class="m-home-history-mv__item m-home-history-mv__item--title">
        <h2 class="m-home-title"> <span class="en m-font-en">HISTORY</span> <span class="ja m-color-wh">スワリクの歩み</span> </h2>
      </div>
    </div>
    <div class="l-inner">
      <div class="m-home-history-content">
        <p class="m-text-18 m-text-lh-l m-color-wh js-home-anima-item"> スワリクは昭和47年に小池朝敦によって創業致しました。<br>当初は常温の一般貨物を中心にトラック5台で出発し、長野県内のお客様のニーズにより輸配送業務を拡大して参りました。創業から50年、長野県に8拠点、関東圏に3拠点を有し冷凍冷蔵の食品物流を中心に精密機械に至るまでお客様のご要望にお応え致します。</p>
        <!--<a href="<?php //bloginfo('url'); ?>/history/" class="m-mt-l m-btn">スワリクの歩みを見る</a> --></div>
    </div>
  </section>
  <!-- end of history -->
  <!-- for recruit -->
  <section class="m-home-recruit js-home-anima">
    <div class="l-content">
      <div class="m-mt-3xl m-home-content">
        <h2 class="m-home-title js-home-anima-item"> <span class="en en m-font-en">RECRUIT</span> <span class="ja">採用情報</span> </h2>
        <div class="m-home-recruit-list">
          <div class="m-home-recruit-list-item js-home-anima-item">
            <figure class="m-home-recruit-list-image"> <img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/all02.jpg" width="368" height="236" alt=""> </figure>
          </div>
          <div class="m-home-recruit-list-item js-home-anima-item"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="135" viewBox="0 0 440 135">
                <text id="Come_together_and_advance_with_us_forever_" data-name="Come together and 
            advance with us forever!" transform="translate(0 31)" font-size="40" font-family="Europa-Bold" font-weight="700" letter-spacing="-0.025em"><tspan x="0" y="0">Come together and </tspan><tspan x="0" y="48">advance with us forever!</tspan></text>
                <text id="共に集い_私たちと共に歩みましょう_永遠に_" data-name="共に集い、私たちと共に歩みましょう！永遠に！" transform="translate(0 133)" font-size="20" font-family="HiraginoSans-W6, Hiragino Sans"><tspan x="0" y="0">共に集い、私たちと共に歩みましょう！永遠に！</tspan></text>
            </svg> </div>
        </div>
        <p class="m-text-18 m-text-lh-l m-align-c m-mt-l m-align-c--pc js-home-anima-item">スワリクの考え方は、創業以来から変わらない社員一人一人を大切に思い、<br class="m-pc-only">家族主義のような関係で仲間を思いやることを大切にしています。<br>社員という大切な財産が、一歩ずつ成長し幸せに成ることを願い、<br class="m-pc-only">個性を生かしていく人材育成に努め、適材適所の労働環境を提供していきます。<br class="m-pc-only">社員の皆さんがいてくれるからこそ会社が存続できることに感謝し、<br class="m-pc-only">会社の更なる成長のために共に、”良い会社”を創りましょう！！</p> <a href="recruit/" class="m-mt-xl m-btn">採用情報を見る</a> </div>
    </div>
  </section>
  <!-- end of recruit -->
  <!-- for service -->
  <section class="m-home-service">
    <div class="l-content">
      <div class="js-home-anima">
        <h2 class="m-home-title js-home-anima-item"> <span class="en m-font-en">SERVICE</span> <span class="ja">事業紹介</span> </h2>
      </div>
      <div class="m-home-service-main js-home-anima">
        <figure class="m-home-service-main__mv js-home-anima-item">
          <img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/warehouse04.jpg" width="696" height="576" alt="">
        </figure>
        <div class="m-home-service-main__content">
          <div class="m-home-service-main-image">
            <div class="m-home-service-main-image-inner"> <img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/warehouse01.jpg" width="448" height="336" alt="" class="js-home-anima-item">
              <div class="m-home-service-main-image-s js-home-anima-item"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/warehouse02.jpg" width="324" height="242" alt=""></div>
            </div>
          </div>
          <div class="m-home-service-main-item js-home-anima-item">
            <a href="<?php bloginfo('url'); ?>/service/#warehouse">
              <h3 class="m-home-title-s"> <span class="ja">常温 冷凍 冷蔵倉庫業</span> <span class="en m-font-en">WAREHOUSE</span> </h3>
              <p class="m-mt m-text-18 m-color-wh">私達スワリクの基幹業務の一つは、冷凍冷蔵倉庫です。生活に必要不可欠である食品の流通を確保するのが私たちの使命です。私達は倉庫業を通じて皆様の生活を支え続けます。</p>
            </a>
          </div>
        </div>
      </div>
      <section class="m-mt-xl js-home-anima">
        <h4 class="m-home-service-title m-font-b m-text-24 js-home-anima-item"><span class="title">倉庫/営業所 一覧</span></h4>
        <div class="m-home-service-content">
          <ul class="m-home-service-list js-home-anima-item">
            <li class="m-home-service-list__item">
              <a href="<?php bloginfo('url'); ?>/service/#suwa-butsuryu">
                <figure class="m-home-service-list-image"> <img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/suwa-butsuryu.jpg" width="264" height="168" alt=""> </figure>
                <h5 class="m-icon-title m-font-b m-text-14 m-mt-s">諏訪物流センター</h5>
              </a>
            </li>
            <li class="m-home-service-list__item">
              <a href="<?php bloginfo('url'); ?>/service/#">
                <figure class="m-home-service-list-image"> <img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/suwa-teion.jpg" width="264" height="168" alt=""> </figure>
                <h5 class="m-icon-title m-font-b m-text-14 m-mt-s">諏訪低温物流センター</h5>
              </a>
            </li>
            <li class="m-home-service-list__item">
              <a href="<?php bloginfo('url'); ?>/service/#">
                <figure class="m-home-service-list-image"> <img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/nagano-teion.jpg" width="264" height="168" alt=""> </figure>
                <h5 class="m-icon-title m-font-b m-text-14 m-mt-s">長野低温物流センター</h5>
              </a>
            </li>
            <li class="m-home-service-list__item">
              <a href="<?php bloginfo('url'); ?>/service/#">
                <figure class="m-home-service-list-image"> <img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/saitama-reizo.jpeg" width="264" height="168" alt=""> </figure>
                <h5 class="m-icon-title m-font-b m-text-14 m-mt-s">埼玉冷蔵倉庫</h5>
              </a>
            </li>
            <li class="m-home-service-list__item">
              <a href="<?php bloginfo('url'); ?>/service/#">
                <figure class="m-home-service-list-image"> <img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/chibawakaba-teion.jpg" width="264" height="168" alt=""> </figure>
                <h5 class="m-icon-title m-font-b m-text-14 m-mt-s">千葉若葉低温物流センター</h5>
              </a>
            </li>
            <li class="m-home-service-list__item">
              <a href="<?php bloginfo('url'); ?>/service/#">
                <figure class="m-home-service-list-image"> <img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/chiba-teion.jpg" width="264" height="168" alt=""> </figure>
                <h5 class="m-icon-title m-font-b m-text-14 m-mt-s">千葉低温物流センター</h5>
              </a>
            </li>
          </ul>
        </div>
      </section>
      <div class="m-home-service-main js-home-anima">
        <figure class="m-home-service-main__mv js-home-anima-item">
          <img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/tracking01.jpg" width="696" height="576" alt=""></figure>
        <div class="m-home-service-main__content">
          <div class="m-home-service-main-image">
            <div class="m-home-service-main-image-inner">
              <img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/warehouse03.jpg" width="448" height="336" alt="" class="js-home-anima-item">
              <div class="m-home-service-main-image-s js-home-anima-item">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/transportaion01.jpg" width="324" height="242" alt=""> </div>
            </div>
          </div>
          <div class="m-home-service-main-item js-home-anima-item">
            <a href="<?php bloginfo('url'); ?>/service/#transportation">
              <h3 class="m-home-title-s"> <span class="ja">輸配送業務</span> <span class="en m-font-en">TRANSPORTATION</span> </h3>
              <p class="m-mt m-text-18 m-color-wh">日本国内では物流の殆どをトラック輸送に依存しております。私達はお客様のために24時間、365日運び続けます。私達はお客様の物流部門です。</p>
            </a>
          </div>
        </div>
      </div>
      <section class="m-mt-xl js-home-anima">
        <h4 class="m-home-service-title m-font-b m-text-24 js-home-anima-item"><span class="title">倉庫/営業所 一覧</span></h4>
        <div class="m-home-service-content">
          <ul class="m-home-service-list js-home-anima-item">
            <li class="m-home-service-list__item">
              <a href="<?php bloginfo('url'); ?>/service/#">
                <figure class="m-home-service-list-image"> <img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/honsya.jpg" width="264" height="168" alt=""> </figure>
                <h5 class="m-icon-title m-font-b m-text-14 m-mt-s">本社・諏訪営業所</h5>
              </a>
            </li>
            <li class="m-home-service-list__item">
              <a href="<?php bloginfo('url'); ?>/service/#">
                <figure class="m-home-service-list-image"> <img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/shiojiri-eigyousyo.jpg" width="264" height="168" alt=""> </figure>
                <h5 class="m-icon-title m-font-b m-text-14 m-mt-s">松本・塩尻事業所</h5>
              </a>
            </li>
            <li class="m-home-service-list__item">
              <a href="<?php bloginfo('url'); ?>/service/#">
                <figure class="m-home-service-list-image"> <img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/kanagawa-eigyousyo.jpg" width="264" height="168" alt=""> </figure>
                <h5 class="m-icon-title m-font-b m-text-14 m-mt-s">神奈川営業所</h5>
              </a>
            </li>
            <li class="m-home-service-list__item">
              <a href="<?php bloginfo('url'); ?>/service/#">
                <figure class="m-home-service-list-image"> <img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/ina-eigyousyo.jpg" width="264" height="168" alt=""> </figure>
                <h5 class="m-icon-title m-font-b m-text-14 m-mt-s">伊那営業所</h5>
              </a>
            </li>
            <li class="m-home-service-list__item">
              <a href="<?php bloginfo('url'); ?>/service/#">
                <figure class="m-home-service-list-image"> <img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/iida-eigyousyo.jpg" width="264" height="168" alt=""> </figure>
                <h5 class="m-icon-title m-font-b m-text-14 m-mt-s">飯田営業所</h5>
              </a>
            </li>
          </ul>
        </div>
      </section>
    </div>
  </section>
  <!-- end of service -->
  <!-- information -->
  <section class="m-home-information js-home-anima">
    <h2 class="m-home-title js-home-anima-item"> <span class="en m-font-en">INFORMATION</span> <span class="ja">お知らせ</span> </h2>
    <div class="l-inner">
      <div class="m-home-topics-box">
        <ul class="m-home-information-list js-home-anima-item">
          <?php // the query
						$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>20));
					?>
					<?php if ( $wpb_all_query->have_posts() ) : ?>
            <!-- the loop -->
            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
          <li class="m-home-information-list__item"><a href="<?php echo the_permalink();?>">
              <time class="datetime m-text-14" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
              <p class="m-text-18 m-link-text"><?php echo wp_trim_words( get_the_title(), 26 , '…' ); ?></p></a>
          </li>
          <?php endwhile; ?>
          <?php endif?>
        </ul>
        <a href="<?php bloginfo('url'); ?>/information/" class="m-mt-l m-btn">一覧はこちら</a>
      </div>
    </div>
  </section>
  <!-- end of information -->
  <!-- for rent -->
  <div class="js-home-anima">
    <div class="m-home-gallery-wrap">
      <ul class="m-home-gallery js-home-anima-item">
        <li class="m-home-gallery__item"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/gallery01.jpg" width="228" height="228" alt=""></li>
        <li class="m-home-gallery__item"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/gallery12.jpg" width="228" height="228" alt=""></li>
        <li class="m-home-gallery__item"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/gallery06.jpg" width="228" height="228" alt=""></li>
        <li class="m-home-gallery__item"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/gallery02.jpg" width="228" height="228" alt=""></li>
        <li class="m-home-gallery__item"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/gallery05.jpg" width="228" height="228" alt=""></li>
        <li class="m-home-gallery__item"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/gallery09.jpg" width="228" height="228" alt=""></li>
        <li class="m-home-gallery__item"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/gallery14.jpg" width="228" height="228" alt=""></li>
      </ul>
      <ul class="m-home-gallery js-home-anima-item">
        <li class="m-home-gallery__item"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/gallery08.jpg" width="228" height="228" alt=""></li>
        <li class="m-home-gallery__item"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/gallery10.jpg" width="228" height="228" alt=""></li>
        <li class="m-home-gallery__item"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/gallery13.jpg" width="228" height="228" alt=""></li>
        <li class="m-home-gallery__item"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/gallery11.jpg" width="228" height="228" alt=""></li>
        <li class="m-home-gallery__item"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/gallery15.jpg" width="228" height="228" alt=""></li>
        <li class="m-home-gallery__item"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/gallery04.jpg" width="228" height="228" alt=""></li>
        <li class="m-home-gallery__item"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/gallery07.jpg" width="228" height="228" alt=""></li>
      </ul>
    </div>
  </div>
</main>

<?php
get_footer();