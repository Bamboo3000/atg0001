<nav role="navigation" class="main-navigation">
	<div class="top">
		<div class="left">
			<ul class="social">
				<li>
					<a href="">
						<i class="fa fa-facebook" aria-hidden="true"></i>
					</a>
				</li>
				<li>
					<a href="">
						<i class="fa fa-pinterest-p" aria-hidden="true"></i>
					</a>
				</li>
				<li>
					<a href="">
						<i class="fa fa-twitter" aria-hidden="true"></i>
					</a>
				</li>
				<li>
					<a href="">
						<i class="fa fa-instagram" aria-hidden="true"></i>
					</a>
				</li>
			</ul>
		</div>
		<div class="right">
			<ul class="tools">
				<li>
					<a href="">
						<span>search</span>
						<i class="material-icons">search</i>
					</a>
				</li>
				<li>
					<a href="<?= get_home_url(); ?>/my-account">
						<span>account</span>
						<i class="material-icons">person</i>
					</a>
				</li>
				<li>
					<a href="<?= get_home_url(); ?>/cart">
						<span>basket</span>
						<i class="material-icons">shopping_basket</i>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="bottom">
		<div class="container">
			<div class="left">
				<a href="/" class="logo">
					<object data="<?= get_template_directory_uri(); ?>/assets/img/logo.svg" type="image/svg+xml"></object>
				</a>
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