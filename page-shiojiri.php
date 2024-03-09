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
			<li class="m-breadcrumb__item">松本・塩尻営業所</li>
		</ol>
	</div>

	<section>
		<div class="l-inner m-pt-l m-pb-l tr-main-img">
			<h2 class="m-mt-xl m-line-title trans-pa"><span class="title">松本営業所</span></h2>
			<img src="<?php echo get_template_directory_uri(); ?>/resources/images/transportion/matsumoto.jpg">
		</div>
	</section>

	<section>
		<div class="l-inner m-pt-l m-pb-l">
			<h2 class="m-mt-xl m-line-title trans-pa"><span class="title">ご挨拶</span></h2>
			<div class="greeting-box trans-pa">
				<div class="greeting-box_img">
					<!-- <img src="<?php echo get_template_directory_uri(); ?>/resources/images/transportion/chief_02.png"> -->
					<img src="<?php echo get_template_directory_uri(); ?>/resources/images/transportion/chief_02.jpg">

				</div>
				<div class="greeting-box_txt">
					<p>
					私たち松本営業所は主要荷主様の構内入出庫から配送までの一連の作業を中心に県内外へお預かりした商品・製品の輸送を請け負っております。<br><br>
					安全・安心をお届けすることを従業員一同で心掛けてまいります。<br>
					何かお困りごとがございましたら、お気軽にお問合せください。
					</p>
					<p class="greeting-box_txt__name">所長 藤澤 一教</p>
				</div>
			</div>
			<p class="m-text-24 m-text-lh-l m-font-serif m-align-c m-align-c--pc trans-pa">
				長野県の中心に位置する利便性を活用し、冷蔵・冷凍品は、松本低温センターで、<br class="m-pc-only">精密製品・部品は、塩尻センターで、県内全域に共同配送物流を行っています。
			</p>
			<table class="m-tbl m-mt-xl m-text-16">
				<tr>
					<th>住所</th>
					<td>〒399-0004 長野県松本市市場10-3 ㈱マルイチ産商松本広域販売部内</td>
				</tr>
				<tr>
					<th>保有車両</th>
					<td>
						<ul>
							<li>10t冷凍ウィング車1台　4t冷凍車7台</li>
							<li>2t冷凍車1台　1t冷凍バン1台</li>
							<li>10tウィング車1台　4tウィングゲート車4台</li>
							<li>3tPG車2台</li>
							<li>3t冷凍車/2tウィング車/2t平ボディー車/2t 冷凍車</li>
						</ul>
					</td>
				</tr>
				<tr>
					<th>従業員</th>
					<td>29名</td>
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
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3264.683655608965!2d137.95966169744435!3d36.197257281483544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d0f083bd896d5%3A0x4fc4e42f18879055!2z44CSMzk5LTAwMDQg6ZW36YeO55yM5p2-5pys5biC5biC5aC077yR77yQ4oiS77yTIOODnuODq-OCpOODgeeUo-WVhuadvuacrOeVnOeUo-mDqA!5e0!3m2!1sja!2sjp!4v1684484557051!5m2!1sja!2sjp" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</section>
	<section id="shiojiri">
		<div class="l-inner m-pt-l m-pb-l">
			<!-- <h3 class="m-service-warehouse-item-title m-font-b m-text-30">塩尻営業所</h3> -->
			<h2 class="m-mt-xl m-line-title trans-pa"><span class="title">塩尻営業所</span></h2>
			<img src="<?php echo get_template_directory_uri(); ?>/resources/images/transportion/shiojiri.jpg">
			<table class="m-tbl m-mt-xl m-text-16">
				<tr>
					<th>住所</th>
					<td>〒399-0702 塩尻市広丘野村角前1817-1 日通NECロジスティクス㈱内</td>
				</tr>
				
				<tr>
					<th>従業員</th>
					<td>21名</td>
				</tr>
				<tr>
					<th>その他設備</th>
					<td>喫煙所、休憩所</td>
				</tr>
			</table>
			<h2 class="m-mt-xl m-line-title trans-pa"><span class="title">アクセス</span></h2>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3222.057715114191!2d137.9516310757887!3d36.14080797244248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d05059cca2be5%3A0x6f7684eeea306f7f!2z5pel6YCa77yu77yl77yj44Ot44K444K544OG44Kj44Kv44K577yI5qCq77yJ6ZW36YeO5Za25qWt5omA!5e0!3m2!1sja!2sjp!4v1684484929957!5m2!1sja!2sjp" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</section>

</main>
<?php
get_footer();