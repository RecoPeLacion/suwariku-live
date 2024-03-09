<?php
/**
 * The template for displaying all pages
 * Template Name: Contact
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Contact
 */

get_header();
?>
<main class="l-container">
	<div class="m-content-title">
		<h1 class="m-content-title-text">お問い合わせ<span class="en">CONTACT</span></h1>
	</div>
<div class="m-breadcrumb-wrap">
	<ol class="m-breadcrumb">
		<li class="m-breadcrumb__item"><a href="../index.html">ホーム</a></li>
		<li class="m-breadcrumb__item">お問い合わせ</li>
	</ol>
</div>

<section>
	<div class="l-inner m-pt-xl m-pb-3xl">
		<dl> <dt class="m-text-18 m-align-c">お電話でのお問い合わせはこちら</dt>
		<dd class="m-mt-xs">
			<ul class="m-contact-us-tel">
			<li class="m-contact-us-tel__item"><span class="m-text-18">代表</span><i class="icon"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/contact/icon-tel.svg" alt="" width="22" /></i><span class="m-text-30"><a href="tel:0266-52-6193">0266-52-6193</a></span></li>
			</ul>
		</dd>
		<dd class="m-mt-xs m-text-18 m-align-c">営業時間/8:50～17:30　休業日/土曜日・日曜日・祝日</dd>
		</dl>
		<hr class="m-hr m-mt-l" />
		<div class="m-mt-l">
		<h2 class="m-align-c m-text-24">お問い合わせ、ありがとうございます。</h2>
		<p class="m-align-c m-text-18 m-mt-xs">改めて、担当者よりご連絡させていただきますので、今しばらくお待ちください。<br>5営業日を過ぎても弊社からのご連絡がない場合は、<br>お手数ではございますが、確認のため弊社お問い合せ窓口にご連絡くださいませ。<br><a href="<?php bloginfo( 'charset' ); ?>">TOPページへ戻る</a></p>
	</div>
</section>
<?php
get_footer();