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
				<h1 class="m-content-title-text"><?php echo get_the_date( 'Y年' );?><span class="en">archive</span></h1>
			</div>
			<div class="m-breadcrumb-wrap">
				<ol class="m-breadcrumb">
					<li class="m-breadcrumb__item"><a href="<?php bloginfo('url'); ?>">ホーム</a></li>
					<li class="m-breadcrumb__item"><a href="<?php bloginfo('url'); ?>/information/">お知らせ</a></li>
					<li class="m-breadcrumb__item"><?php echo get_the_date( 'Y年' );?></li>
				</ol>
			</div>

			<section>
				<div class="l-inner-s m-pt-xl m-pb-3xl">
					<div class="m-topics">
						<div class="m-topics__content">
							<?php 
							// the query
							$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'year' => get_the_date('Y'), 'posts_per_page'=>20));
							?>
							<?php if ( $wpb_all_query->have_posts() ) : ?>
							<div class="m-topics-archives">
								<!-- the loop -->
                                <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
								<div class="m-topics-archives-item">
									<div class="m-topics-article-heading">
										<h2 class="m-font-b m-text-28"><?php echo wp_trim_words( get_the_title(), 26 , '…' ); ?></h2>
									</div>
									<div class="m-topics-date m-mt-s">
										<time class="m-text-18" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
									</div>
									<div class="m-topics-article-body m-cms-body">
									<?php echo wp_trim_words( get_the_content(), 40 , '…' );?>
									</div>
									<a href="<?php echo get_permalink( $id ); ?>" class="m-btn-secondary m-mt">本文を読む</a>
								</div>
								<?php endwhile; ?>
                                <!-- end of the loop -->
								<?php wp_reset_postdata(); ?>
                        
								<?php else : ?>
									<p><?php _e( '現在投稿がございません。' ); ?></p>
								<?php endif; ?>
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