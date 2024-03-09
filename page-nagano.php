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
			<li class="m-breadcrumb__item">長野営業所・長野低温物流センター</li>
		</ol>
	</div>

	<section>
		<div class="l-inner m-pt-l m-pb-l tr-main-img">
			<h2 class="m-mt-xl m-line-title trans-pa"><span class="title">長野営業所・長野低温物流センター</span></h2>
			<!-- <img src="<?php echo get_template_directory_uri(); ?>/resources/images/transportion/nagano.png"> -->
			<img src="<?php echo get_template_directory_uri(); ?>/resources/images/transportion/nagano_02.jpg">

		</div>
	</section>

	<section>
		<div class="l-inner m-pt-l m-pb-l">
			<h2 class="m-mt-xl m-line-title trans-pa"><span class="title">ご挨拶</span></h2>
			<div class="greeting-box trans-pa">
				<div class="greeting-box_img">
					<!-- <img src="<?php echo get_template_directory_uri(); ?>/resources/images/transportion/chief_04.png"> -->
					<img src="<?php echo get_template_directory_uri(); ?>/resources/images/transportion/chief_04.jpg">

				</div>
				<div class="greeting-box_txt">
					<p>
						長野営業所は冷凍食品に特化した物流業務と24時間稼働の冷凍・冷蔵物流センターを備え、高い品質でお客様に荷物をお届けする事を大切にしています。<br><br>
						品質とは「社員の品格」と「作業の質の良さ」であり、お客様に自信を持ってスワリクの品質をお約束しています。<br><br>
						高い品質と安心、安全をお届けすることを従業員一同、全力で取り組んでおりますので、何かお困りごとがありましたら、お気軽にご相談ください。
					</p>
					<p class="greeting-box_txt__name">所長　和田隆之</p>
				</div>
			</div>
			<p class="m-text-24 m-text-lh-l m-font-serif m-align-c m-align-c--pc">
				スワリク最大の営業所として、長野県の東北信エリアの共同配送に最適です！！<br class="m-pc-only">女性が活躍する明るい職場で、優しく活気あふれる物流を展開中！！
			</p>
			<table class="m-tbl m-mt-xl m-text-16">
				<tr>
					<th>住所</th>
					<td>〒381-2212 長野県長野市小島田町1881</td>
				</tr>
				<tr>
					<th>保有車両</th>
					<td>
						<ul>
							<li>10t 冷凍箱車　13台</li>
							<li>7t 冷凍箱車　4台</li>
							<li>4t 冷凍車　　10台</li>
							<li>2t 冷凍車　　1台</li>
						</ul>
					</td>
				</tr>
				<tr>
					<th>従業員</th>
					<td>
						<ul>
							<li>ドライバー27名</li>
							<li>事務員4名</li>
						</ul>
					</td>
				</tr>
				<tr>
					<th>その他設備</th>
					<td>喫煙所、休憩所、シャワールーム</td>
				</tr>
			</table>
			<div class="dc-center">
				<h2 class="m-mt-xl m-line-title trans-pa"><span class="title">長野低温物流センター</span></h2>
				<!-- <h3 class="m-service-warehouse-item-title m-font-b m-text-30">長野低温物流センター</h3> -->
				<img src="<?php echo get_template_directory_uri(); ?>/resources/images/transportion/nagano_01.jpg">


				<div class="dc-center-box">
					<table class="m-tbl m-mt-xl m-text-16">
						<tr>
							<th>敷地</th>
							<td>
								<ul>
									<li>冷蔵倉庫　　150坪</li>
									<li>チルド倉庫　120坪</li>
									<li>常温倉庫　　200坪</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th>従業員</th>
							<td>
								<ul>
									<li>構内作業員　27名</li>
									<li>事務員　2名</li>
								</ul>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>

	</section>
	<section>
		<div class="l-inner m-pt-l m-pb-l">
			<h2 class="m-mt-xl m-line-title trans-pa"><span class="title">アクセス</span></h2>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3203.115114081414!2d138.18750421744383!3d36.5995365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d845a980591c5%3A0xbfd3de7e59be280f!2z44CSMzgxLTIyMTIg6ZW36YeO55yM6ZW36YeO5biC5bCP5bO255Sw55S677yR77yY77yY77yRIOOBiuOCguOBqOaApemAgQ!5e0!3m2!1sja!2sjp!4v1685084879113!5m2!1sja!2sjp" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</section>

</main>
<?php
get_footer();