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
				<h1 class="m-content-title-text">採用情報<span class="en">RECRUIT</span></h1>
			</div>
		<div class="m-breadcrumb-wrap">
			<ol class="m-breadcrumb">
				<li class="m-breadcrumb__item"><a href="<?php bloginfo('url'); ?>">ホーム</a></li>
				<li class="m-breadcrumb__item">採用情報</li>
			</ol>
		</div>
			<p class="m-line-title">共にスワリクの幸せ創造空間に集い、共にみんなで手を携えて、永遠に前進して参りましよう</p>
			<section class="m-pt-xl" id="new">
				<h2 class="m-line-title"><span class="title">新卒募集要項</span></h2>
				<div class="l-inner-xs m-pt-2xl m-pb-2xl">
					<table class="m-recruit-table">
						<tr>
							<th>職種</th>
							<td>配送乗務員・倉庫構内作業員</td>
						</tr>
						<tr>
							<th>勤務地</th>
							<td>諏訪（本社）・長野営業所・神奈川営業所・埼玉営業所・千葉営業所</td>
						</tr>
						<tr>
							<th>勤務時間</th>
							<td>シフト制（営業所による）</td>
						</tr>
						<tr>
							<th>基本給</th>
							<td>高卒：180,000円（一律手当を含む）</td>
						</tr>
						<tr>
							<th>各種手当</th>
							<td>通勤手当・家族手当・公休手当 他</td>
						</tr>
						<tr>
							<th>昇給制度</th>
							<td>昇給あり（年１回：会社の評価制度による）</td>
						</tr>
						<tr>
							<th>休日</th>
							<td>年間休日：105日 / 週休二日制<br>休日休暇：GW休暇・年末休暇・お盆休暇 他<br>会社の定める日</td>
						</tr>
						<tr>
							<th>賞与</th>
							<td>年２回（８月、１２月）※昨年実績あり<br>その他業務実績に応じて決算賞与支給</td>
						</tr>
						<tr>
							<th>福利厚生</th>
							<td>各種社会保険：厚生年金保険、健康保険、労災保険、雇用保険<br>その他：退職金制度（共済加入）、大型・中型免許取得補助制度、シャワールーム完備（本社・伊那・長野）</td>
						</tr>
					</table>
					<a href="<?php bloginfo('url'); ?>/contact/" class="m-btn m-btn--bu m-btn--center m-mt">応募する</a>
				</div>
			</section>

			<section class="m-pt-xl" id="semi">
				<h2 class="m-line-title"><span class="title">中途募集要項</span></h2>
				<div class="l-inner-xs m-pt-2xl m-pb-2xl">
					<table class="m-recruit-table">
						<tr>
							<th>職種</th>
							<td>大型ドライバー<br>中型ドライバー<br>倉庫構内作業員</td>
						</tr>
						<tr>
							<th>勤務地</th>
							<td>各営業所</td>
						</tr>
						<tr>
							<th>勤務時間</th>
							<td>シフト制（希望シフト要相談）</td>
						</tr>
						<tr>
							<th>基本給</th>
							<td>大型ドライバー：月給300,000円〜450,000円<br>中型ドライバー：月給250,000円〜350,000円<br>倉庫構内作業員：月給200,000円〜350,000<br>※時間外労働時間分 支給</td>
						</tr>
						<tr>
							<th>各種手当</th>
							<td>通勤手当・家族手当・公休手当 他（アルバイトは除く）</td>
						</tr>
						<tr>
							<th>昇給制度</th>
							<td>昇給あり（年１回：会社の評価制度による）</td>
						</tr>
						<tr>
							<th>休日</th>
							<td>年間休日：105日 / 週休二日制<br>休日休暇：GW休暇・年末休暇・お盆休暇 他<br>会社の定める日</td>
						</tr>
						<tr>
							<th>賞与</th>
							<td>年２回（８月、１２月）※昨年実績あり<br>その他業務実績に応じて決算賞与支給</td>
						</tr>
						<tr>
							<th>福利厚生</th>
							<td>各種社会保険：厚生年金保険、健康保険、労災保険、雇用保険<br>その他：退職金制度（共済加入）、大型・中型免許取得補助制度、シャワールーム完備（本社・伊那・長野）</td>
						</tr>
					</table>
					<a href="<?php bloginfo('url'); ?>/contact/" class="m-btn m-btn--bu m-btn--center m-mt">応募する</a>
				</div>
			</section>
		</main>
<?php
get_footer();