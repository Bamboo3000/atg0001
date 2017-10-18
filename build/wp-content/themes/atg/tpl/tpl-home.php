<?php /* Template Name: Home page */ ?>
<?php get_header(); ?>

<div class="container">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php for($i = 1; $i <= 6; $i++) : ?>

			<?php if(get_field('hc_image_'.$i)) : ?>

				<section class="home home__product">
					<?php if($i % 2 != 0) : ?>
						<div class="image">
							<?php $image = get_field('hc_image_'.$i); if( !empty($image) ): ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							<?php endif; ?>
						</div>
					<?php endif; ?>
					<div class="text">
						<div class="text-container">
							<p class="title">
								<?php the_field('hc_title_'.$i); ?>
							</p>
							<hr>
							<p class="summary">
								<?php the_field('hc_summary_'.$i); ?>
							</p>
							<?php $term = get_field('hc_link_'.$i); if( $term ): ?>
								<a href="<?php echo get_term_link( $term ); ?>" class="btn btn-default">
									<span><?php the_field('hc_link_text_'.$i); ?></span>
								</a>
							<?php endif; ?>
						</div>
					</div>
					<?php if($i % 2 == 0) : ?>
						<div class="image">
							<?php $image = get_field('hc_image_'.$i); if( !empty($image) ): ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							<?php endif; ?>
						</div>
					<?php endif; ?>
				</section>

			<?php endif; ?>

		<?php endfor; ?>

		<section class="home home__lookbook">
			<div class="text">
				<div class="text-container">
					<p class="title">
						Visit our
						<a href="">Lookbook</a>
					</p>
				</div>
			</div>
			<div class="image">
				<img src="assets/img/lookbook1.jpg" alt="">
			</div>
			<div class="image">
				<img src="assets/img/lookbook2.jpg" alt="">
			</div>
		</section>

		<section class="home home__comments">
			<p class="title">
				A few comments
			</p>
			<div id="comments-carousel">
				<div>
					<p class="comment">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas malesuada rhoncus nisl a condimentum. Fusce tincidunt, est eget egestas molestie, ante erat venenatis urna, sit amet rutrum tortor libero id felis. Vestibulum quam nisi, varius vel eros eget, egestas aliquam diam. Cras vel lorem pretium, hendrerit tellus eu, auctor diam. Nulla eu risus sit amet justo lacinia tempor.
					</p>
					<span>-</span>
					<p class="author">
						Monica Jones
					</p>
				</div>
				<div>
					<p class="comment">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas malesuada rhoncus nisl a condimentum. Fusce tincidunt, est eget egestas molestie, ante erat venenatis urna, sit amet rutrum tortor libero id felis. Vestibulum quam nisi, varius vel eros eget, egestas aliquam diam. Cras vel lorem pretium, hendrerit tellus eu, auctor diam. Nulla eu risus sit amet justo lacinia tempor.
					</p>
					<span>-</span>
					<p class="author">
						Monica Jones
					</p>
				</div>
				<div>
					<p class"=comment">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas malesuada rhoncus nisl a condimentum. Fusce tincidunt, est eget egestas molestie, ante erat venenatis urna, sit amet rutrum tortor libero id felis. Vestibulum quam nisi, varius vel eros eget, egestas aliquam diam. Cras vel lorem pretium, hendrerit tellus eu, auctor diam. Nulla eu risus sit amet justo lacinia tempor.
					</p>
					<span>-</span>
					<p class="author">
						Monica Jones
					</p>
				</div>
			</div>
			<div id="siema-prev">
				<i class="material-icons">chevron_left</i>
			</div>
			<div id="siema-next">
				<i class="material-icons">chevron_right</i>
			</div>
		</section>

	<?php endwhile; // end of the loop. ?>

</div>

<?php get_footer(); ?>