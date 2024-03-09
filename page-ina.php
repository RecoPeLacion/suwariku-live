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
			<li class="m-breadcrumb__item">伊那・飯田営業所</li>
		</ol>
	</div>

	<section>
		<div class="l-inner m-pt-l m-pb-l tr-main-img">
			<h2 class="m-mt-xl m-line-title trans-pa"><span class="title">伊那営業所</span></h2>
			<img src="<?php echo get_template_directory_uri(); ?>/resources/images/transportion/ina.jpg">
		</div>
	</section>

	<section>
		<div class="l-inner m-pt-l m-pb-l">
			<h2 class="m-mt-xl m-line-title trans-pa"><span class="title">ご挨拶</span></h2>
			<div class="greeting-box trans-pa">
				<div class="greeting-box_img">
					<img src="<?php echo get_template_directory_uri(); ?>/resources/images/transportion/chief_08.jpg">
				</div>
				<div class="greeting-box_txt">
					<p>
						伊那営業所では、主に冷凍・冷蔵輸送に特化した長野県から関東・関西圏への輸送を行なっております。<br><br>
						お客様からお預かりした大切な商品を安全かつ迅速にお届け致します。<br><br>
						物流のプロとして品質・安全面の教育はもちろん社会インフラを支えるトラック事業にあたらせていただいております。<br><br>
						日々の状況が変化している時代の中でお客様からの"ニーズ"にお応えするために社員一同スピーディー対応を心掛けております。
					</p>
					<p class="greeting-box_txt__name">所長 原 義幸</p>
				</div>
			</div>
			<p class="m-text-24 m-text-lh-l m-font-serif m-align-c m-align-c--pc">
				長野県南部伊那谷の低温食品物流をきめ細やかに対応しています！！
			</p>
			<table class="m-tbl m-mt-xl m-text-16">
				<tr>
					<th>住所</th>
					<td>〒399-4511 長野県上伊那郡南箕輪村中の原9902-5</td>
				</tr>
				<tr>
					<th>保有車両</th>
					<td>
						10t冷凍箱車13台
					</td>
				</tr>
				<tr>
					<th>従業員</th>
					<td>17名</td>
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
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3233.668350858967!2d137.91657907577599!3d35.85713497253102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601ceffcd70d8a6f%3A0x6df8bb71d516b66d!2z44K544Ov44Oq44KvIOS8iumCo-WWtualreaJgA!5e0!3m2!1sja!2sjp!4v1684487352417!5m2!1sja!2sjp" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</section>

	<section id="iida">
		<div class="l-inner m-pt-l m-pb-l">
			<h2 class="m-mt-xl m-line-title trans-pa"><span class="title">飯田営業所</span></h2>
			<img src="<?php echo get_template_directory_uri(); ?>/resources/images/transportion/iida.jpg">
			<!-- <h3 class="m-service-warehouse-item-title m-font-b m-text-30">飯田営業所</h3> -->
			<table class="m-tbl m-mt-xl m-text-16">
				<tr>
					<th>住所</th>
					<td>〒395-0811 長野県飯田市松尾上溝2910-30</td>
				</tr>
				<tr>
					<th>保有車両</th>
					<td>
						<ul>
							<li>4t冷凍車　2台</li>
							<li>4tウイング車　1台</li>
							<li>2t冷凍車　3台</li>
						</ul>
					</td>
				</tr>
				<tr>
					<th>従業員</th>
					<td>5名</td>
				</tr>
				<tr>
					<th>その他設備</th>
					<td>喫煙所、休憩所</td>
				</tr>
			</table>
			<h2 class="m-mt-xl m-line-title trans-pa"><span class="title">アクセス</span></h2>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3247.959434641365!2d137.84328627576005!3d35.50528127264451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601c9bd4264b9583%3A0x44344ac759df66c2!2z44CSMzk1LTA4MTEg6ZW36YeO55yM6aOv55Sw5biC5p2-5bC-5LiK5rqd77yS77yZ77yR77yQ4oiS77yT77yQ!5e0!3m2!1sja!2sjp!4v1684488032265!5m2!1sja!2sjp" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>		</div>
	</section>

</main>
<?php
get_footer();