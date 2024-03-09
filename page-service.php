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
				<h1 class="m-content-title-text">事業紹介<span class="en">SERVICE</span></h1>
			</div>
		<div class="m-breadcrumb-wrap">
			<ol class="m-breadcrumb">
				<li class="m-breadcrumb__item"><a href="<?php bloginfo('url'); ?>">ホーム</a></li>
				<li class="m-breadcrumb__item">事業紹介</li>
			</ol>
		</div>

			<section id="a-movie">
				<div class="m-service-mv">
					<h2 class="m-font-en m-text-40 m-color-yl m-align-c">経営理念</h2>
					<p class="m-mt m-align-c m-align-c--pc m-color-wh m-text-18 m-text-lh-l">
						私たちは、物流業務を通じて、<br class="m-pc-only">全従業員の物心両面の豊かさを実現すると共に、<br class="m-pc-only">お客様と社会の発展に貢献します。
					</p>
				</div>
			</section>

			<section class="m-bg-lbl">
				<div class="m-pt-4xl m-pb-4xl l-inner">
					<ul class="m-service-list">
						<li class="m-service-list__item js-service-anima">
							<a href="<?php bloginfo('url'); ?>/service/#warehouse">
								<figure class="m-service-list-image js-service-anima-item">
									<!-- <img src="<?php //echo get_template_directory_uri(); ?>/resources/images/service/" width="576" height="368" alt=""> -->
								</figure>
								<div class="m-service-list-content">
									<h3 class="m-icon-title m-font-b"><span class="m-text-32">倉庫業</span><br><span class="m-font-en3 m-color-yl m-text-14">WAREHOUSE</span></h3>
								</div>
							</a>
						</li>

						<li class="m-service-list__item js-service-anima">
							<a href="<?php bloginfo('url'); ?>/service/#transportation">
								<figure class="m-service-list-image js-service-anima-item">
									<!-- <img src="<?php //echo get_template_directory_uri(); ?>/resources/images/service/" width="576" height="368" alt=""> -->
								</figure>
								<div class="m-service-list-content">
									<h3 class="m-icon-title m-font-b"><span class="m-text-32">輸送業</span><br><span class="m-font-en3 m-color-yl m-text-14">TRANSPORTATION</span></h3>
								</div>
							</a>
						</li>

						<li class="m-service-list__item js-service-anima">
							<a href="<?php bloginfo('url'); ?>/service/#others">
								<figure class="m-service-list-image js-service-anima-item">
									<!-- <img src="<?php //echo get_template_directory_uri(); ?>/resources/images/service/" width="576" height="368" alt=""> -->
								</figure>
								<div class="m-service-list-content">
									<h3 class="m-icon-title m-font-b"><span class="m-text-32">その他</span><br><span class="m-font-en3 m-color-yl m-text-14">OTHERS</span></h3>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</section>
			<div class="m-content-title">
				<h1 class="m-content-title-text" id="warehouse">倉庫・3PL事業<span class="en">WAREHOUSE</span></h1>
			</div>

			<section>
				<div class="l-inner m-pt-l m-pb-l">
					<p class="m-text-24 m-text-lh-l m-font-serif m-align-c m-align-c--pc">
						私たちは倉庫業の使命である、<br class="m-pc-only">「生活に必要な物資を安全かつ効率的に保管することにより、<br class="m-pc-only">人々の生活に利便性と安定をもたらす。」ということに真剣に取り組み続けます。
					</p>
					<h2 class="m-mt-xl m-line-title"><span class="title">物流センター一覧</span></h2>
					<p class="m-mt-l m-align-c m-align-c--pc m-text-18 m-text-lh-l">
						常温・低温・冷凍の各品目の保管倉庫に加え、集荷-保管-仕分け-ピッキング-物流加工-配送の一環3PL業務を行っており、<br class="m-pc-only">荷主企業様のあらゆるニーズにお応えします。
					</p>
				</div>


				<section class="m-service-warehouse-item">
					<div id="suwa-butsuryu" class="l-inner m-pt-3xl m-pb-3xl">
						<div class="m-service-warehouse-item-col">
							<figure class="m-service-warehouse-item-col__image">
								<a href="#" class="m-op"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/suwa-butsuryu.jpg" width="472" height="300" alt=""></a>
							</figure>
							<div class="m-service-warehouse-item-col__content">
								<h3 class="m-service-warehouse-item-title m-font-b m-text-30">諏訪物流センター</h3>
								<div class="m-service-warehouse-item-content m-mt">
									<dl class="m-text-18">
										<dt class="m-font-b">所在地・連絡先：</dt>
										<dd>〒392-0016　長野県諏訪市豊田1070</dd>
										<dd>TEL : 0266-52-6193</dd>
										<dd>FAX : 0266-52-6156</dd>
									</dl>
									<a href="<?php bloginfo('url'); ?>/office/suwa/" class="link-btn">詳細へ</a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="m-service-warehouse-item">
					<div id="suwa-teion" class="l-inner m-pt-3xl m-pb-3xl">
						<div class="m-service-warehouse-item-col">
							<figure class="m-service-warehouse-item-col__image">
								<a href="#" class="m-op"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/suwa-teion.jpg" width="472" height="300" alt=""></a>
							</figure>
							<div class="m-service-warehouse-item-col__content">
								<h3 class="m-service-warehouse-item-title m-font-b m-text-30">諏訪低温センター</h3>
								<div class="m-service-warehouse-item-content m-mt">
									<dl class="m-text-18">
										<dt class="m-font-b">所在地・連絡先：</dt>
										<dd>〒392-0131　長野県諏訪市湖南3873</dd>
										<dd>TEL : 0266-52-6193</dd>
										<dd>FAX : 0266-52-6156</dd>
									</dl>
									<a href="<?php bloginfo('url'); ?>/office/suwa/#suwa-second" class="link-btn">詳細へ</a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="m-service-warehouse-item">
					<div id="nagano-teion" class="l-inner m-pt-3xl m-pb-3xl">
						<div class="m-service-warehouse-item-col">
							<figure class="m-service-warehouse-item-col__image">
								<a href="#" class="m-op"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/nagano-teion.jpg" width="472" height="300" alt=""></a>
							</figure>
							<div class="m-service-warehouse-item-col__content">
								<h3 class="m-service-warehouse-item-title m-font-b m-text-30">長野低温物流センター</h3>
								<div class="m-service-warehouse-item-content m-mt">
									<dl class="m-text-18">
										<dt class="m-font-b">所在地・連絡先：</dt>
										<dd>〒381-2212　長野県長野市小島田町1881</dd>
										<dd>TEL : 026-214-6722</dd>
										<dd>FAX : 026-214-6779</dd>
									</dl>
									<a href="<?php bloginfo('url'); ?>/office/nagano/" class="link-btn">詳細へ</a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="m-service-warehouse-item">
					<div id="shiojiri" class="l-inner m-pt-3xl m-pb-3xl">
						<div class="m-service-warehouse-item-col">
							<figure class="m-service-warehouse-item-col__image">
								<a href="#" class="m-op"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/shiojiri-eigyousyo.jpg" width="472" height="300" alt=""></a>
							</figure>
							<div class="m-service-warehouse-item-col__content">
								<h3 class="m-service-warehouse-item-title m-font-b m-text-30">塩尻事業所</h3>
								<div class="m-service-warehouse-item-content m-mt">
									<dl class="m-text-18">
										<dt class="m-font-b">所在地・連絡先：</dt>
										<dd>〒399-0702　長野県塩尻市広丘野村角前1817 NECロジスティクス倉庫内</dd>
										<dd>TEL : 0263-51-5580</dd>
										<dd>FAX : 0263-51-5581</dd>
									</dl>
									<a href="<?php bloginfo('url'); ?>/office/shiojiri/#shiojiri" class="link-btn">詳細へ</a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="m-service-warehouse-item">
					<div id="saitama-reizo" class="l-inner m-pt-3xl m-pb-3xl">
						<div class="m-service-warehouse-item-col">
							<figure class="m-service-warehouse-item-col__image">
								<a href="#" class="m-op"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/saitama-reizo.jpeg" width="472" height="300" alt=""></a>
							</figure>
							<div class="m-service-warehouse-item-col__content">
								<h3 class="m-service-warehouse-item-title m-font-b m-text-30">埼玉冷蔵倉庫</h3>
								<div class="m-service-warehouse-item-content m-mt">
									<dl class="m-text-18">
										<dt class="m-font-b">所在地・連絡先：</dt>
										<dd>〒350-0168　埼玉県比企郡川島町かわしま2-7</dd>
										<dd>TEL : 049-227-3801</dd>
										<dd>FAX : 049-227-3803</dd>
									</dl>
									<a href="<?php bloginfo('url'); ?>/office/saitama/" class="link-btn">詳細へ</a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="m-service-warehouse-item">
					<div id="chibawakaba-reizo" class="l-inner m-pt-3xl m-pb-3xl">
						<div class="m-service-warehouse-item-col">
							<figure class="m-service-warehouse-item-col__image">
								<a href="#" class="m-op"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/chiba-teion.jpg" width="472" height="300" alt=""></a>
							</figure>
							<div class="m-service-warehouse-item-col__content">
								<h3 class="m-service-warehouse-item-title m-font-b m-text-30">千葉若葉低温物流センター</h3>
								<div class="m-service-warehouse-item-content m-mt">
									<dl class="m-text-18">
										<dt class="m-font-b">所在地・連絡先：</dt>
										<dd>〒264-0021　千葉県千葉市若葉区若葉若松町2249番地1</dd>
										<dd>TEL : 043-235-7557</dd>
										<dd>FAX : 043-235-7787</dd>
									</dl>
									<a href="<?php bloginfo('url'); ?>/office/chiba/" class="link-btn">詳細へ</a>
								</div>
							</div>
						</div>
					</div>
				</section>
			</section>

			<section class="m-service-warehouse-item">
					<div id="chiba-reizo" class="l-inner m-pt-3xl m-pb-3xl">
						<div class="m-service-warehouse-item-col">
							<figure class="m-service-warehouse-item-col__image">
								<a href="#" class="m-op"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/chibawakaba-teion.jpg" width="472" height="300" alt=""></a>
							</figure>
							<div class="m-service-warehouse-item-col__content">
								<h3 class="m-service-warehouse-item-title m-font-b m-text-30">千葉第二低温物流センター</h3>
								<div class="m-service-warehouse-item-content m-mt">
									<dl class="m-text-18">
										<dt class="m-font-b">所在地・連絡先：</dt>
										<dd>〒264-0021　千葉県千葉市若葉若松町2301-1　D棟</dd>
										<dd>TEL : 043-235-7557</dd>
										<dd>FAX : 043-235-7787</dd>
									</dl>
									<a href="<?php bloginfo('url'); ?>/office/chiba/#chiba-second" class="link-btn">詳細へ</a>
								</div>
							</div>
						</div>
					</div>
				</section>
			</section>

			<div class="m-content-title">
				<h1 class="m-content-title-text" id="transportation">輸送業<span class="en">TRANSPORTATION</span></h1>
			</div>

			<section>
				<div class="l-inner m-pt-l m-pb-l">
					<p class="m-text-24 m-text-lh-l m-font-serif m-align-c m-align-c--pc">
						私たち輸送業の使命は、<br class="m-pc-only">お客様に滞りの無い物流を提供することです。<br class="m-pc-only">輸送、倉庫の一貫物流でお客様のサプライチェーンを創造します。
					</p>
					<h2 class="m-mt-xl m-line-title"><span class="title">事業所一覧</span></h2>
					<p class="m-mt-l m-align-c m-align-c--pc m-text-18 m-text-lh-l">
						常温・低温・冷凍の各品目の保管倉庫に加え、危険品倉庫ならびに文書箱保管倉庫を備えており、<br class="m-pc-only">荷主企業のあらゆるニーズにお応えします。
					</p>
				</div>


				<section class="m-service-warehouse-item">
					<div id="honsya" class="l-inner m-pt-3xl m-pb-3xl">
						<div class="m-service-warehouse-item-col">
							<figure class="m-service-warehouse-item-col__image">
								<a href="#" class="m-op"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/honsya.jpg" width="472" height="300" alt=""></a>
							</figure>
							<div class="m-service-warehouse-item-col__content">
								<h3 class="m-service-warehouse-item-title m-font-b m-text-30">本社営業所</h3>
								<div class="m-service-warehouse-item-content m-mt">
									<dl class="m-text-18">
										<dt class="m-font-b">所在地・連絡先：</dt>
										<dd>〒392-0016　長野県諏訪市豊田1070</dd>
										<dd>TEL : 0266-52-6193</dd>
										<dd>FAX : 0266-52-6156</dd>
									</dl>
									<a href="<?php bloginfo('url'); ?>/office/honsya/" class="link-btn">詳細へ</a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="m-service-warehouse-item">
					<div id="matsumoto" class="l-inner m-pt-3xl m-pb-3xl">
						<div class="m-service-warehouse-item-col">
							<figure class="m-service-warehouse-item-col__image">
								<a href="#" class="m-op"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/matsumoto.jpg" width="472" height="300" alt=""></a>
							</figure>
							<div class="m-service-warehouse-item-col__content">
								<h3 class="m-service-warehouse-item-title m-font-b m-text-30">松本営業所</h3>
								<div class="m-service-warehouse-item-content m-mt">
									<dl class="m-text-18">
										<dt class="m-font-b">所在地・連絡先：</dt>
										<dd>〒399-0004　長野県松本市市場10-3</dd>
										<dd>TEL : 0263-24-3345</dd>
										<dd>FAX : 0263-24-3346</dd>
									</dl>
									<a href="<?php bloginfo('url'); ?>/office/shiojiri/" class="link-btn">詳細へ</a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- <section class="m-service-warehouse-item">
					<div id="shiojiri" class="l-inner m-pt-3xl m-pb-3xl">
						<div class="m-service-warehouse-item-col">
							<figure class="m-service-warehouse-item-col__image">
								<a href="#" class="m-op"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/shiojiri-eigyousyo.jpg" width="472" height="300" alt=""></a>
							</figure>
							<div class="m-service-warehouse-item-col__content">
								<h3 class="m-service-warehouse-item-title m-font-b m-text-30">塩尻事業所</h3>
								<div class="m-service-warehouse-item-content m-mt">
									<dl class="m-text-18">
										<dt class="m-font-b">所在地・連絡先：</dt>
										<dd>〒399-0702　長野県塩尻市広丘野村角前1817 NECロジスティクス倉庫内</dd>
										<dd>TEL : 0263-51-5580</dd>
										<dd>FAX : 0263-51-5581</dd>
									</dl>
									<a href="<?php bloginfo('url'); ?>/office/shiojiri/#shiojiri" class="link-btn">詳細へ</a>
								</div>
							</div>
						</div>
					</div>
				</section> -->

				<section class="m-service-warehouse-item">
					<div id="kanagawa" class="l-inner m-pt-3xl m-pb-3xl">
						<div class="m-service-warehouse-item-col">
							<figure class="m-service-warehouse-item-col__image">
								<a href="#" class="m-op"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/kanagawa-eigyousyo.jpg" width="472" height="300" alt=""></a>
							</figure>
							<div class="m-service-warehouse-item-col__content">
								<h3 class="m-service-warehouse-item-title m-font-b m-text-30">神奈川営業所</h3>
								<div class="m-service-warehouse-item-content m-mt">
									<dl class="m-text-18">
										<dt class="m-font-b">所在地・連絡先：</dt>
										<dd>〒252-0002　神奈川県座間市小松原1-1-43</dd>
										<dd>TEL : 046-205-1660</dd>
										<dd>FAX : 046-205-1661</dd>
									</dl>
									<a href="<?php bloginfo('url'); ?>/office/kanagawa/" class="link-btn">詳細へ</a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="m-service-warehouse-item">
					<div id="ina" class="l-inner m-pt-3xl m-pb-3xl">
						<div class="m-service-warehouse-item-col">
							<figure class="m-service-warehouse-item-col__image">
								<a href="#" class="m-op"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/ina-eigyousyo.jpg" width="472" height="300" alt=""></a>
							</figure>
							<div class="m-service-warehouse-item-col__content">
								<h3 class="m-service-warehouse-item-title m-font-b m-text-30">伊那営業所</h3>
								<div class="m-service-warehouse-item-content m-mt">
									<dl class="m-text-18">
										<dt class="m-font-b">所在地・連絡先：</dt>
										<dd>〒399-4511　長野県上伊那郡南箕輪村中の原9902-5</dd>
										<dd>TEL : 0265-74-8578</dd>
										<dd>FAX : 0265-74-8556</dd>
									</dl>
									<a href="<?php bloginfo('url'); ?>/office/ina/" class="link-btn">詳細へ</a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="m-service-warehouse-item">
					<div id="iida" class="l-inner m-pt-3xl m-pb-3xl">
						<div class="m-service-warehouse-item-col">
							<figure class="m-service-warehouse-item-col__image">
								<a href="#" class="m-op"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/iida-eigyousyo.jpg" width="472" height="300" alt=""></a>
							</figure>
							<div class="m-service-warehouse-item-col__content">
								<h3 class="m-service-warehouse-item-title m-font-b m-text-30">飯田営業所</h3>
								<div class="m-service-warehouse-item-content m-mt">
									<dl class="m-text-18">
										<dt class="m-font-b">所在地・連絡先：</dt>
										<dd>〒395-0811　長野県飯田市松尾上溝2910-30</dd>
										<dd>TEL : 000-000-0000</dd>
										<dd>FAX : 000-000-0000</dd>
									</dl>
									<a href="<?php bloginfo('url'); ?>/office/ina/#iida" class="link-btn">詳細へ</a>
								</div>
							</div>
						</div>
					</div>
				</section>
			</section>

			<div class="m-content-title">
				<h1 class="m-content-title-text" id="others">その他<span class="en">OTHERS</span></h1>
			</div>

			<section>
				<div class="l-inner m-pt-l m-pb-l">
					<p class="m-text-24 m-text-lh-l m-font-serif m-align-c m-align-c--pc">
						輸出入通関業務、太陽光発電<br class="m-pc-only">「生活に必要な物資を安全かつ効率的に保管することにより、<br class="m-pc-only">人々の生活に利便性と安定をもたらす。」ということに真剣に取り組み続けます。
					</p>
				</div>


				<section class="m-service-warehouse-item">
					<div class="l-inner m-pt-3xl m-pb-3xl">
						<div class="m-service-warehouse-item-col">
							<figure class="m-service-warehouse-item-col__image">
								<a href="#" class="m-op"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/taiyoukou07.jpeg" width="472" height="300" alt=""></a>
							</figure>
							<div class="m-service-warehouse-item-col__content">
								<h3 class="m-service-warehouse-item-title m-font-b m-text-30">原村発電所</h3>
								<div class="m-service-warehouse-item-content m-mt">
									<dl class="m-text-18">
										<dt class="m-font-b">所在地・連絡先：</dt>
										<dd>〒391-0106　長野県諏訪郡原村菖蒲沢10691他（中央自動車道下り線原パーキングエリア）</dd>
									</dl>
								</div>
							</div>
						</div>
					</div>
				</section>
			</section>

		</main>
<?php
get_footer();