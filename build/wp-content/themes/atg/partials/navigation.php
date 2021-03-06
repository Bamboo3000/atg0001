<nav role="navigation" class="main-navigation">
	<div class="top">
		<div class="container">
			<div class="left">
				<ul class="social">
					<li>
						<a href="https://www.facebook.com/allthatglittersest2017/" target="_blank">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</a>
					</li>
					<!--<li>
						<a href="">
							<i class="fa fa-pinterest-p" aria-hidden="true"></i>
						</a>
					</li>
					<li>
						<a href="">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</li>-->
					<li>
						<a href="https://www.instagram.com/all_that_glitters_est_2017/" target="_blank">
							<i class="fa fa-instagram" aria-hidden="true"></i>
						</a>
					</li>
				</ul>
			</div>
			<div class="right">
				<ul class="tools">
					<li>
						<form role="search" method="get" class="search-form woocommerce-product-search" action="<?php get_site_url(); ?>">
							<label>
								<span class="screen-reader-text">Search for:</span>
								<input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Find products..." value="" name="s">
							</label>
							<input type="submit" class="search-submit" value="Search">
							<input type="hidden" name="post_type" value="product">
						</form>
						<i class="material-icons">search</i>
					</li>
					<li>
						<a href="<?= get_home_url(); ?>/my-account">
							<i class="material-icons">person</i>
							<span>login</span>
						</a>
					</li>
					<li>
						<a href="<?= get_home_url(); ?>/cart">
							<i class="material-icons">shopping_basket</i>
							<span>cart</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="bottom">
		<div class="container">
			<div class="left">
				<a href="/" class="logo">
					<object data="<?= get_template_directory_uri(); ?>/assets/img/logo.svg" type="image/svg+xml"></object>
				</a>
			</div>
			<div id="menu-btn">
				<span></span>
				<span></span>
				<p>MENU</p>
			</div>
			<div class="right">
				<?php if ( has_nav_menu( 'menu' ) ) :
					wp_nav_menu( array(
						'theme_location' => 'menu',
					) );
				endif; ?>
			</div>
		</div>
	</div>
</nav>