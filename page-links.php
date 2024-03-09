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
 * @package PRIVACY POLICY
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
				 <li class="m-about-nav__item"><a href="<?php bloginfo('url'); ?>/about/company/">会社概要</a></li>
				 <li class="m-about-nav__item"><a href="<?php bloginfo('url'); ?>/about/philosophy/">経営理念</a></li>
				 <li class="m-about-nav__item"><a href="<?php bloginfo('url'); ?>/about/links/" class="is-active">リンク</a></li>
			 </ul>
		 </div>
 
		 <section>
			<div class="l-inner m-pt-xl m-pb-xl">
				<h2 class="m-line-title"><span class="title">リンク</span></h2>
				<ul class="m-links-list m-mt-2xl">
					<li class="m-links-list__item">
						<div class="m-links-list-title m-text-22 m-color-nv m-font-b">株式会社太平洋</div>
						<div class="m-links-list-url m-text-18"><figure class="m-mb-xs"><a href="https://taiheiyou.org/" target="_blank"></a></figure><a href="https://taiheiyou.org/" target="_blank" class="m-uline m-color-gy">https://taiheiyou.org/</a></div>
					</li>
				</ul>
			</div>
		</section>
 
		 <div class="l-inner m-pt-xl">
			 <ul class="m-about-nav">
				 <li class="m-about-nav__item"><a href="<?php bloginfo('url'); ?>/about/">代表挨拶</a></li>
				 <li class="m-about-nav__item"><a href="<?php bloginfo('url'); ?>/about/company/">会社概要</a></li>
				 <li class="m-about-nav__item"><a href="<?php bloginfo('url'); ?>/about/philosophy/">経営理念</a></li>
				 <li class="m-about-nav__item"><a href="<?php bloginfo('url'); ?>/about/links/" class="is-active">リンク</a></li>
			 </ul>
		 </div>
	 </main>
 <?php
 get_footer();