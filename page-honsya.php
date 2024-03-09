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
			<li class="m-breadcrumb__item">本社・諏訪営業所</li>
		</ol>
	</div>

	<section>
		<div class="l-inner m-pt-l m-pb-l tr-main-img">
			<h2 class="m-mt-xl m-line-title trans-pa"><span class="title">本社・諏訪営業所</span></h2>
			<img src="<?php echo get_template_directory_uri(); ?>/resources/images/transportion/honsya.jpg">
		</div>
	</section>

	<section>
		<div class="l-inner m-pt-l m-pb-l">
			<h2 class="m-mt-xl m-line-title trans-pa"><span class="title">ご挨拶</span></h2>
			<div class="greeting-box trans-pa">
				<div class="greeting-box_img">
					<!-- <img src="<?php echo get_template_directory_uri(); ?>/resources/images/transportion/chief_01.png"> -->
					<img src="<?php echo get_template_directory_uri(); ?>/resources/images/transportion/chief_01.jpg">

				</div>
				<div class="greeting-box_txt">
					<p>諏訪営業所では、主に関東方面に冷凍・チルド品・青果等の生鮮食品良品を輸送しております。<br><br>
						また高品質物流サービスの提供をするために、庫内二箇所に24時間デジタル温度管理を配置し、温度管理の徹底と調整を行なっております。<br><br>
						お客様からお預かりした商品をそのままの状態でお届けすることを従業員一同心がけています。<br><br>
						何かお困りごと、ご相談ありましたら、お気軽にお問合せください。
					</p>
					<p class="greeting-box_txt__name">所長 鷹野原 洋</p>
				</div>
			</div>
			<p class="m-text-24 m-text-lh-l m-font-serif m-align-c m-align-c--pc">
				高原都市諏訪周辺で生産された精密部品から高原野菜などを、<br class="m-pc-only">常温倉庫、冷蔵倉庫を活用して、生産物流から消費物流まで一貫で対応！！
			</p>
			<table class="m-tbl m-mt-xl m-text-16">
				<tr>
					<th>住所</th>
					<td>〒392-0016 長野県諏訪市豊田1070</td>
				</tr>
				<tr>
					<th>保有車両</th>
					<td>
						<ul>
							<li>15t 冷凍ウィング車/15tウィング車</li>
							<li>10t 冷凍ウィング車/10tウィング車</li>
							<li>6t 冷凍ウィング車/6tウィング車</li>
							<li>4t ウィング車/4t平ボディー車/4tユニック車/4t 冷凍車</li>
							<li>3t冷凍車/2tウィング車/2t平ボディー車/2t 冷凍車</li>
						</ul>
					</td>
				</tr>
				<tr>
					<th>敷地面積</th>
					<td>14,602坪</td>
				</tr>
				<tr>
					<th>従業員</th>
					<td>39名</td>
				</tr>
				<tr>
					<th>その他設備</th>
					<td>喫煙所、休憩所、シャワールーム</td>
				</tr>
			</table>
		</div>

	</section>
	<section>
		<div class="l-inner m-pt-l m-pb-l">
			<h2 class="m-mt-xl m-line-title trans-pa"><span class="title">アクセス</span></h2>
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3226.854316045344!2d138.1004532!3d36.0238508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601c55dd56c38ecd%3A0x3967e307df7205c3!2z44CSMzkyLTAwMTYg6ZW36YeO55yM6KuP6Kiq5biC6LGK55Sw77yR77yQ77yX77yQ!5e0!3m2!1sja!2sjp!4v1684481629774!5m2!1sja!2sjp"
				width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
				referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</section>

</main>
<?php
get_footer();