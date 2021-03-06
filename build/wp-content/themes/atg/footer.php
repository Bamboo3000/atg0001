	</div>
	<footer class="footer">
		<div class="container">
			<div class="footer__grid-container">
				<div class="footer__grid">
					<div class="footer__grid-content">
						<h5 class="footer__title">Contact</h5>
						<hr>
						<div class="footer__content">
							<p>
								Glitterrealm
							</p>
							<p>
								<a href="https://www.google.co.uk/maps/dir//3+Silverwood+Cl,+Cambridge+CB1+3HA/@52.2058281,0.1430968,16.62z/data=!4m17!1m7!3m6!1s0x47d8708a034514af:0x2805b1e4a56b49e3!2s3+Silverwood+Cl,+Cambridge+CB1+3HA!3b1!8m2!3d52.2073572!4d0.1438173!4m8!1m0!1m5!1m1!1s0x47d8708a034514af:0x2805b1e4a56b49e3!2m2!1d0.1438173!2d52.2073572!3e3" target="_blank">
									Coldhams Lane<br/>
									Cambridge<br/> 
									CB1 3HA
								</a>
							</p>
							<p>
								<a href="tel:+447858544278">
									+44 (0) 785 854 4278
								</a><br/>
								<a href="mailto:shop@allthatglitters.london">
									shop@allthatglitters.london
								</a>
							</p>
						</div>
					</div>
				</div>
				<div class="footer__grid">
					<div class="footer__grid-content">
						<h5 class="footer__title">Hot products</h5>
						<hr>
						<div class="footer__content">
							<?php dynamic_sidebar( 'sidebar-2' ); ?>
						</div>
					</div>
				</div>
				<div class="footer__grid">
					<div class="footer__grid-content">
						<h5 class="footer__title">Sitemap</h5>
						<hr>
						<div class="footer__content">
							<?php if ( has_nav_menu( 'menu' ) ) :
								wp_nav_menu( array(
									'theme_location' => 'menu',
									'depth'			 => 1
								) );
							endif; ?>			
						</div>
					</div>
				</div>
				<div class="footer__grid">
					<div class="footer__grid-content">
						<h5 class="footer__title">Newsletter</h5>
						<hr>
						<div class="footer__content">
							<p>
								Interested in instantly receiving the latest special offers and promotions?
							</p>
							<a href="#" class="btn btn-default">
								<span>Subscribe</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer__lower">
			<div class="container">
				<div class="footer__lower__grid-container">
					<div class="footer__lower__grid left">
						<p>
							Copyright © 2017 All That Glitters.
						</p>
					</div>
					<div class="footer__lower__grid right">
						<p>
							<a href="https://cb1-photography.co.uk/" target="_blank">Photos by <!--<i class="fa fa-heart" aria-hidden="true"></i> by: --><span>CB1 Photography</span></a>&nbsp;&nbsp;
							<a href="https://www.sative.co.uk" target="_blank">Website by <!--<i class="fa fa-heart" aria-hidden="true"></i> by: --><span>Sative</span></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" defer></script>
	<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/js/app.js?v=1.1" defer></script>
    <?php wp_footer(); ?>
</body>
</html>