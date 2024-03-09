<?php
/**
 * The template for displaying all pages
 * Template Name: Service
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Service
 */

get_header();
?>
<main class="l-container">
	<div class="m-content-title">
		<h1 class="m-content-title-text">輸送業<span class="en">TRANSPORTION</span></h1>
	</div>
	<div class="m-breadcrumb-wrap">
		<ol class="m-breadcrumb">
			<li class="m-breadcrumb__item"><a href="<?php bloginfo('url'); ?>">ホーム</a></li>
			<li class="m-breadcrumb__item">事業紹介</li>
			<li class="m-breadcrumb__item">輸送業</li>
			<li class="m-breadcrumb__item">埼玉冷蔵倉庫</li>
		</ol>
	</div>

	<section>
		<div class="l-inner m-pt-l m-pb-l tr-main-img">
			<h2 class="m-mt-xl m-line-title trans-pa"><span class="title">埼玉冷蔵倉庫</span></h2>
			<img src="<?php echo get_template_directory_uri(); ?>/resources/images/transportion/saitama.jpg">
		</div>
	</section>

	<section>
		<div class="l-inner m-pt-l m-pb-l">
			<h2 class="m-mt-xl m-line-title trans-pa"><span class="title">ご挨拶</span></h2>
			<div class="greeting-box trans-pa">
				<div class="greeting-box_img">
					<img src="<?php echo get_template_directory_uri(); ?>/resources/images/transportion/chief_0602.jpg">
				</div>
				<div class="greeting-box_txt">
					<p>
					埼玉営業所は営業倉庫では珍しい365日24時間稼働している冷蔵、冷凍のDC型の物流センターです。<br><br>
					倉庫面積は1,000坪、保管パレット数は冷蔵500PL冷凍1,600PL,仕分けスペース200坪を完備しております。<br><br>
					保管品は畜肉品です。畜肉品が多いので仕分けスペースも0℃設定で他の冷蔵倉庫よりは低温で稼働しています。
					2024年問題、倉庫の荷待ち時間等に対応し、深夜でも荷受け、発送を行っています。<br><br>
					深夜でもピッキング、仕分け作業は行っており、各種ニーズにお応えしております。お困り事がありましたらご相談下さいませ。

					</p>
					<p class="greeting-box_txt__name">所長　名執　陽助</p>
				</div>
			</div>
			<p class="m-text-24 m-text-lh-l m-font-serif m-align-c m-align-c--pc">
			東名高速、中央道、関越道、東北道、常磐道、東関東道等の放射状に延びる高速圏央道、川島インターチェンジから1分の好立地の場所にあります。<br class="m-pc-only">都心まで50Kmと都内の配送に適しています。千葉、埼玉、神奈川を始め群馬、茨木、栃木までも配送エリアを拡大しています。
			</p>
			<table class="m-tbl m-mt-xl m-text-16">
				<tr>
					<th>住所</th>
					<td>〒350-0168 埼玉県比企郡川島町川島2-7</td>
				</tr>
				<tr>
					<th>敷地面積</th>
					<td>
						<ul>
							<li>敷地面積:2,700坪</li>
							<li>延床面積:1,400坪</li>
							<li>冷凍倉庫:618坪</li>
							<li>冷蔵倉庫:204坪</li>
							<li>前室:206坪</li>
						</ul>
					</td>
				</tr>
			</table>
		</div>

	</section>
	<section>
		<div class="l-inner m-pt-l m-pb-l">
			<h2 class="m-mt-xl m-line-title trans-pa"><span class="title">アクセス</span></h2>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3228.490665536495!2d139.45618047578182!3d35.98387597249113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018d14799b0b805%3A0x2938b502f64ff3d5!2z44CSMzUwLTAxNjgg5Z-8546J55yM5q-U5LyB6YOh5bed5bO255S644GL44KP44GY44G-77yS5LiB55uu77yX!5e0!3m2!1sja!2sjp!4v1684655517255!5m2!1sja!2sjp" width=100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</section>

</main>
<?php
get_footer();