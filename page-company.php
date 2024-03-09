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
            <li class="m-about-nav__item"><a href="<?php bloginfo('url'); ?>/about/">代表挨拶</a></li>
            <li class="m-about-nav__item"><a href="<?php bloginfo('url'); ?>/about/company/" class="is-active">会社概要</a></li>
            <li class="m-about-nav__item"><a href="<?php bloginfo('url'); ?>/about/philosophy/">経営理念</a></li>
            <li class="m-about-nav__item"><a href="<?php bloginfo('url'); ?>/about/links/">リンク</a></li>
					</ul>
			</div>

      <section>
        <div class="l-inner m-pt-xl m-pb-xl">
          <h2 class="m-line-title"><span class="title">会社概要</span></h2>
          <table class="m-tbl m-mt-xl m-text-16">
            <tr>
              <th>名称</th>
              <td>株式会社スワリク</td>
            </tr>
            <tr>
              <th>設⽴</th>
              <td>昭和47年5⽉</td>
            </tr>
            <tr>
              <th>資本金</th>
              <td>4,500万円</td>
            </tr>
            <tr>
              <th>代表取締役</th>
              <td>小池 大洋</td>
            </tr>
            <tr>
              <th>本社</th>
              <td>〒392-0016　長野県諏訪市大字豊田1070　代表 : 0266-52-6193 FAX: 0266-52-6156</td>
            </tr>
            <tr>
              <th>事業所</th>
              <td>諏訪市/伊那市/長野市/塩尻市/松本市/座間市/千葉市/埼玉県川島町</td>
            </tr>
            <tr>
              <th>従業員数</th>
              <td>全体:277名 男性：214 女性：63 ≪パート・アルバイトを含む 令和4年5月現在≫</td>
            </tr>
            <tr>
              <th>事業内容</th>
              <td>一般区域貨物自動車運送事業/貨物取り扱い事業/倉庫付帯事業/梱包保管事業/輸出入通関業務</td>
            </tr>
            <tr>
              <th>保有車輌</th>
              <td>124台</td>
            </tr>
            <tr>
              <th>主要取引先（※あいうえお順）</th>
              <td>旭食品㈱/㈱旭フーズ/㈱イチハラフーズ/㈱石井大一商店伊藤ハム㈱/㈱ウェルファムフーズ/小川畜産㈱/㈱キョクレイ/㈱銀河フーズ/ジェイロジスティクス㈱/JA信州諏訪/信越明星㈱/スターゼンロジスティクス㈱/大信畜産工業㈱/㈱大成/DHLサプライチェーン㈱/㈱デリフレッシュフーズ/㈱東蓄/東洋精機㈱/ナイス物流㈱/長野県農協直販㈱/㈱長野サンヨーフーズ/ナガトフーズ/日水物流㈱ /日通NECロジスティクス㈱/日本通運㈱/日本ハム㈱/日本貿易輸送㈱/㈱ヒューテックノオリン/プリマハム㈱/豊上製菓㈱/㈱ホーライ/㈱松屋フーズ ㈱マルイチ産商/丸紅㈱/㈱みすずコーポレーション/㈱宮坂醸造/㈱ミヤシタフーズ/ムサシノミート㈱/㈱ロジスティクスネットワーク/㈱米久他</td>
            </tr>
            <tr>
              <th>関連会社</th>
              <td>諏訪貨物自動車㈱/㈱太平洋/㈱ちの自動車センター</td>
            </tr>
            <tr>
              <th>加盟組合</th>
              <td>(公社)長野県トラック協会/諏訪トラック協同組合/(一社)日本3PL協会</td>
            </tr>
            <tr>
              <th>取引銀行</th>
              <td>長野銀行/八十二銀行/三井住友銀行</td>
            </tr>
          </table>
          <ul class="m-about-outline-bnrs m-mt-xl">
            <li class="m-about-outline-bnrs__item"><a href="https://www.naganota.or.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/about/outline/nagano_track_organization_logo.svg" width="368" height="148" alt="公益社団法人長野県トラック協会"></a></li>
            <li class="m-about-outline-bnrs__item"><a href="http://www.suwa-truck.com/navigation.html" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/about/outline/suwa_track_logo.svg" width="368" height="148" alt="諏訪トラック協同組合"></a></li>
            <li class="m-about-outline-bnrs__item"><a href="https://www.3pl.or.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/about/outline/3pl_logo.svg" width="368" height="148" alt="一般社団法人日本3PL協会"></a></li>

          </ul>
        </div>
      </section>

      <div class="l-inner m-pt-xl">
          <ul class="m-about-nav">
            <li class="m-about-nav__item"><a href="<?php bloginfo('url'); ?>/about/">代表挨拶</a></li>
            <li class="m-about-nav__item"><a href="<?php bloginfo('url'); ?>/about/company/" class="is-active">会社概要</a></li>
            <li class="m-about-nav__item"><a href="<?php bloginfo('url'); ?>/about/philosophy/">経営理念</a></li>
            <li class="m-about-nav__item"><a href="<?php bloginfo('url'); ?>/about/links/">リンク</a></li>
          </ul>
      </div>

    </main>
<?php
get_footer();