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
<main class="l-container">
  <div class="m-content-title">
    <h1 class="m-content-title-text">スワリクについて<span class="en">COMPANY</span></h1>
  </div>
  <div class="m-breadcrumb-wrap">
    <ol class="m-breadcrumb">
      <li class="m-breadcrumb__item"><a href="<?php bloginfo('url'); ?>">ホーム</a></li>
      <li class="m-breadcrumb__item">スワリクについて</li>
    </ol>
  </div>
  <div class="l-inner m-pt-xl">
      <ul class="m-about-nav">
        <li class="m-about-nav__item"><a href="<?php bloginfo('url'); ?>/about/" class="is-active">代表挨拶</a></li>
        <li class="m-about-nav__item"><a href="<?php bloginfo('url'); ?>/about/company/">会社概要</a></li>
        <li class="m-about-nav__item"><a href="<?php bloginfo('url'); ?>/about/philosophy/">経営理念</a></li>
        <li class="m-about-nav__item"><a href="<?php bloginfo('url'); ?>/about/links/">リンク</a></li>
      </ul>
  </div>
  <section class="m-pt-xl" id="a-greeting">
    <h2 class="m-line-title"><span class="title">代表挨拶</span></h2>
    <div class="m-about-index-mv m-mt-xl">
      <figure class="m-about-index-mv-image"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/about/index/president.jpg" width="1600" height="720" alt=""></figure>
    </div>
    <div class="l-inner-xs m-pt-2xl m-pb-2xl">
      <h3 class="m-font-serif m-text-34 m-text-lh-l">Come together and advance with us forever!<br class="m-pc-only">～共に集い、私たちと共に歩みましょう！永遠に！～</h3>
      <p class="m-text-18 m-text-lh-l m-mt">私ども株式会社スワリクは、諏訪湖、諏訪大社があります高原都市諏訪の地に生まれ、一歩一歩事業領域を成長させ、５０年以上の年月をお客様、従業員、地域の方々と共に歩んでおります。</p>
      <p class="m-text-18 m-text-lh-l m-mt">当社は、一般貨物輸送から出発し、共同配送物流、倉庫業、物流センター運営、流通加工、サードパーティー物流などを行う総合物流業者となってまいりました。<br>それは、お客様と共に成長したいという思い、従業員が人間的に成長していただきたいという思い、お取引先や地域の方々が良くなっていただきたいという思いを基本理念として事業展開をしております。</p>
      <p class="m-text-18 m-text-lh-l m-mt">今物流業界は、労働時間問題、IoT、AI、DX、ロボットの導入など、大きくその様相を変えようとしております。<br>当社も新たな物流施設・ITソフト・ソリューションなど積極的に取り入れ、時代の要請する改革に積極的に取り組むと共に、基本的なスワリクフィロソフィを判断基準として、日々精進してまいります。<br>是非私たちと共に成長してまいりましょう。ありがとうございます。</p>
      <p class="m-mt-xl m-align-r"><span class="m-text-20">代表取締役</span>&nbsp;&nbsp;<span class="m-text-32">小池 大洋</span></p>
    </div>
  </section>

  <div class="l-inner m-pt-xl">
      <ul class="m-about-nav">
      <li class="m-about-nav__item"><a href="<?php bloginfo('url'); ?>/about/" class="is-active">代表挨拶</a></li>
        <li class="m-about-nav__item"><a href="<?php bloginfo('url'); ?>/about/company/">会社概要</a></li>
        <li class="m-about-nav__item"><a href="<?php bloginfo('url'); ?>/about/philosophy/">経営理念</a></li>
        <li class="m-about-nav__item"><a href="<?php bloginfo('url'); ?>/about/links/">リンク</a></li>
      </ul>
  </div>

</main>
<?php
get_footer();