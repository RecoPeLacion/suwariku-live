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
				<h1 class="m-content-title-text">お知らせ<span class="en">INFORMATION</span></h1>
			</div>
			<div class="m-breadcrumb-wrap">
				<ol class="m-breadcrumb">
					<li class="m-breadcrumb__item"><a href="<?php bloginfo('url'); ?>">ホーム</a></li>
					<li class="m-breadcrumb__item"><a href="<?php bloginfo('url'); ?>/information/">お知らせ</a></li>
					<li class="m-breadcrumb__item"></li>
				</ol>
			</div>

			<section>
				<div class="l-inner-s m-pt-xl m-pb-3xl">
					<div class="m-topics">
						<div class="m-topics__content">
							<div class="m-topics-archives">
								<div class="m-topics-archives-item">
									<?php while (have_posts()) : the_post(); ?>
									<div class="m-topics-article-heading">
										<h2 class="m-font-b m-text-28"><?php the_title(); ?></h2>
									</div>
									<div class="m-topics-date m-mt-s">
										<time class="m-text-18" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y年m月d日');?></time>
									</div>
									<div class="m-topics-article-body m-cms-body">
									<?php the_content(); ?>
									</div>
									<ul class="m-topics-btns m-mt-xl">
										<?php $pre_post ="";?>
										<?php $pre_post = get_previous_post() ;?>
										<?php if(!empty($pre_post)): ?>
											<li class="m-topics-btns__item"><a href="<?php echo $pre_post->guid;?>" class="m-btn-secondary m-btn-secondary--wa m-btn-secondary--back">前の記事を見る</a></li>
										<?php endif; ?>
										<?php $next_post = get_next_post();?>
										<?php if(!empty($next_post)):?>
											<li class="m-topics-btns__item"><a href="<?php echo $next_post->guid;?>" class="m-btn-secondary m-btn-secondary--wa">次の記事を見る</a></li>
										<?php endif; ?>
									</ul>
									<?php endwhile; ?>
								</div>
							</div>
						</div>
						<aside class="m-topics__aside">
							<dl class="m-topics-aside-item">
								<dt class="m-topics-aside-item-title">最新記事</dt>
								<dd>
									<ul class="m-topics-aside-item-list">
									<?php
										$args = array(
											'post_type' => 'post',
											'posts_per_page' => 5,
										);
										$my_query = new WP_Query( $args );
									?>
									<?php if ( $my_query->have_posts() ): ?>
									<?php while( $my_query->have_posts()): $my_query->the_post(); ?>
										<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
										<?php endwhile; ?>
										<?php wp_reset_postdata(); ?>
										<?php endif; ?>
									</ul>
								</dd>
							</dl>
							<dl class="m-topics-aside-item">
								<dt class="m-topics-aside-item-title">アーカイブ</dt>
								<dd>
									<ul class="m-topics-aside-item-list">
									<?php wp_get_archives( 'post_type=post&type=yearly' ); ?>
									</ul>
								</dd>
							</dl>
						</aside>
					</div>
				</div>
			</section>
		</main>
<?php
get_footer();