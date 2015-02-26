<?php

/**
 * Template Name: Places - Museums
 */

// wordpress header hook. do not remove or bearshark will find you
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="breadcrumbs">
			<?php if (function_exists('bcn_display') && ! is_home())
			{
				bcn_display();
			}
			?>


		</div>
		<!-- .breadcrumbs -->

		<div class="about-leaders">
			<ul class="grids">
				<div class="mobile-grid">
					<?php
					// create loop array
					$args = [
						'post_type'      => 'places',
						'posts_per_page' => - 1,
						'tax_query'      => [
							[
								'taxonomy' => 'places_categories',
								'field'    => 'slug',
								'terms'    => 'museums-memorials',
							],
						],
						'meta_key'       => 'places_page_order',
						'orderby'        => 'meta_value_num',
						'order'          => 'ASC'
					];
					// instantiate new WP_Query object
					$loop = new WP_Query($args);

					// create iterator for expanded content
					$i = 1;

					// start ze loop!
					while ($loop->have_posts()) : $loop->the_post();
						?>

						<li class="grid places">
							<div class="grid-content">
								<div class="grid-info">
									<ul class="grid-info-list">
										<li><h2><?php the_title() ?></h2></li>
										<li><?php the_field('places_box_address') ?></li>
										<li><?php the_field('confirmed_on') ?></li>
									</ul>
								</div>
								<!-- .grid-info -->

								<div class="grid-image">
									<img src="<?php bloginfo('url') ?>/wp-content/themes/bpca-master/images/filler-image.jpg" width="400" height="350" />
								</div>
								<!-- .grid-image -->

							</div>
							<!-- .grid-content -->

							<div class="grid-button"></div>

							<div class="grid-description">
								<div class="grid-description-images">
									<ul>
										<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
										<li class="grid-thumbnail places">
											<div class="show-mobile-tablet">
												<img src="<?php the_field('places_mobile_img') ?>">
											</div>
											<div class="show-desktop">
												<img src="<?php echo $url ?>">
											</div>
										</li>
										<li class="grid-map places">
											<a href="http://maps.google.com/maps/?daddr=<?php str_replace(" ", "+", the_field('places_address')) ?>">
												<img src="<?php the_field('place_gmap') ?>">
											</a>
										</li>
									</ul>
								</div>
								<!-- .grid-description-images -->

								<div class="grid-description-content places">
									<div class="left-col places">
										<?php the_content() ?>
									</div>
									<div class="right-col places">
										<div class="grid-aside-content">
											<?php the_field('places_descr_tag') ?>

											<ul>
												<li>
													<a class="yellow-link" href="mailto:?subject=<?php echo get_the_title() ?>">
														<div class="social-icon">
															<i class="fa fa-envelope-o"></i>
														</div>

														<div class="share-text">Forward to Friends</div>
													</a>
												</li>

												<li>
													<a href="http://twitter.com/share?text=<?php get_the_title() ?>&url=">
														<div class="social-icon">
															<i class="fa fa-twitter"></i>
														</div>

														<div class="share-text">Share on Twitter</div>
													</a>
												</li>

												<li>
													<a href="https://www.facebook.com/sharer/sharer.php?u=">
														<div class="social-icon">
															<i class="fa fa-facebook"></i>
														</div>

														<div class="share-text">Share on Facebook</div>
													</a>
												</li>

												<li>
													<a href="<?php the_field('places_website') ?>" class="website-black" target="_blank">
														<div class="social-icon site">
															<div class="website-img-swap-black"></div>
														</div>

														<div class="share-text-white site">Visit the Site</div>
													</a>
												</li>

												<li>
													<div class="link-dir-area-black short">
														<div class="social-icon">
															<i class="fa fa-map-marker"></i>
														</div>

														<div><span>Get Personalized Directions</span></div>

														<form id="gdirects-black" action="http://maps.google.com/maps" method="get" target="_blank">
															<input type="text" name="saddr" placeholder="ENTER START ADDRESS" />
															<input type="hidden" name="daddr" value="<?php the_field('places_address') ?>" />
															<input type="submit" value="GO" />
														</form>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>

							</div>
							<!-- .grid-description -->
						</li>

						<?php // insert the description container in the correct place ?>
						<?php if ($i % 1 === 0): ?>
							<li class="grid-alt places">
							</li>
						<?php endif; ?>

						<?php // increment the iterator ?>
						<?php $i ++; ?>

					<?php endwhile; ?>

					<?php wp_reset_query() ?>
				</div>

				<div class="tablet-grid">
					<?php
					// create loop array
					$args = [
						'post_type'      => 'places',
						'posts_per_page' => - 1,
						'tax_query'      => [
							[
								'taxonomy' => 'places_categories',
								'field'    => 'slug',
								'terms'    => 'museums-memorials',
							],
						],
						'meta_key'       => 'places_page_order',
						'orderby'        => 'meta_value_num',
						'order'          => 'ASC'
					];
					// instantiate new WP_Query object
					$loop = new WP_Query($args);

					// create iterator for expanded content
					$i = 1;

					// start ze loop!
					while ($loop->have_posts()) : $loop->the_post();
						?>

						<li class="grid places">
							<div class="grid-content">
								<div class="grid-info">
									<ul class="grid-info-list">
										<li><h2><?php the_title() ?></h2></li>
										<li><?php the_field('places_box_address') ?></li>
										<li><?php the_field('confirmed_on') ?></li>
									</ul>
								</div>
								<!-- .grid-info -->

								<div class="grid-image">
									<img src="<?php bloginfo('url') ?>/wp-content/themes/bpca-master/images/filler-image.jpg" width="400" height="350" />
								</div>
								<!-- .grid-image -->

							</div>
							<!-- .grid-content -->

							<div class="grid-button"></div>

							<div class="grid-description">
								<div class="grid-description-images">
									<ul>
										<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
										<li class="grid-thumbnail places">
											<div class="show-mobile-tablet">
												<img src="<?php the_field('places_mobile_img') ?>">
											</div>
											<div class="show-desktop">
												<img src="<?php echo $url ?>">
											</div>
										</li>
										<li class="grid-map places">
											<a href="http://maps.google.com/maps/?daddr=<?php str_replace(" ", "+", the_field('places_address')) ?>">
												<img src="<?php the_field('place_gmap') ?>">
											</a>
										</li>
									</ul>
								</div>
								<!-- .grid-description-images -->

								<div class="grid-description-content places">
									<div class="left-col places">
										<?php the_content() ?>
									</div>
									<div class="right-col places">
										<div class="grid-aside-content">
											<?php the_field('places_descr_tag') ?>

											<ul>
												<li>
													<a class="yellow-link" href="mailto:?subject=<?php echo get_the_title() ?>">
														<div class="social-icon">
															<i class="fa fa-envelope-o"></i>
														</div>

														<div class="share-text">Forward to Friends</div>
													</a>
												</li>

												<li>
													<a href="http://twitter.com/share?text=<?php get_the_title() ?>&url=">
														<div class="social-icon">
															<i class="fa fa-twitter"></i>
														</div>

														<div class="share-text">Share on Twitter</div>
													</a>
												</li>

												<li>
													<a href="https://www.facebook.com/sharer/sharer.php?u=">
														<div class="social-icon">
															<i class="fa fa-facebook"></i>
														</div>

														<div class="share-text">Share on Facebook</div>
													</a>
												</li>

												<li>
													<a href="<?php the_field('places_website') ?>" class="website-black" target="_blank">
														<div class="social-icon site">
															<div class="website-img-swap-black"></div>
														</div>

														<div class="share-text-white site">Visit the Site</div>
													</a>
												</li>

												<li>
													<div class="link-dir-area-black short">
														<div class="social-icon">
															<i class="fa fa-map-marker"></i>
														</div>

														<div><span>Get Personalized Directions</span></div>

														<form id="gdirects-black" action="http://maps.google.com/maps" method="get" target="_blank">
															<input type="text" name="saddr" placeholder="ENTER START ADDRESS" />
															<input type="hidden" name="daddr" value="<?php the_field('places_address') ?>" />
															<input type="submit" value="GO" />
														</form>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>

							</div>
							<!-- .grid-description -->
						</li>

						<?php // insert the description container in the correct place ?>
						<?php if (($i - 1) % 2 === 1): ?>
							<li class="grid-alt places">
							</li>
						<?php endif; ?>

						<?php // increment the iterator ?>
						<?php $i ++; ?>

					<?php endwhile; ?>

					<?php wp_reset_query() ?>

					<?php // determine if we need to add additional elements need to be added to the list ?>
					<?php if ($i % 2 === 1): ?>
						<li class="grid"></li>
						<li class="grid-alt"></li>
					<?php endif; ?>
				</div>

				<div class="desktop-grid">
					<?php
					// create loop array
					$args = [
						'post_type'      => 'places',
						'posts_per_page' => - 1,
						'tax_query'      => [
							[
								'taxonomy' => 'places_categories',
								'field'    => 'slug',
								'terms'    => 'museums-memorials',
							],
						],
						'meta_key'       => 'places_page_order',
						'orderby'        => 'meta_value_num',
						'order'          => 'ASC'
					];
					// instantiate new WP_Query object
					$loop = new WP_Query($args);

					// create iterator for expanded content
					$i = 1;

					// start ze loop!
					while ($loop->have_posts()) : $loop->the_post();
						?>

						<li class="grid places">
							<div class="grid-content">
								<div class="grid-info">
									<ul class="grid-info-list">
										<li><h2><?php the_title() ?></h2></li>
										<li><?php the_field('places_box_address') ?></li>
										<li><?php the_field('confirmed_on') ?></li>
									</ul>
								</div>
								<!-- .grid-info -->

								<div class="grid-image">
									<img src="<?php bloginfo('url') ?>/wp-content/themes/bpca-master/images/filler-image.jpg" width="400" height="350" />
								</div>
								<!-- .grid-image -->

							</div>
							<!-- .grid-content -->

							<div class="grid-button"></div>

							<div class="grid-description">
								<div class="grid-description-images">
									<ul>
										<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
										<li class="grid-thumbnail places">
											<div class="show-mobile-tablet">
												<img src="<?php the_field('places_mobile_img') ?>">
											</div>
											<div class="show-desktop">
												<img src="<?php echo $url ?>">
											</div>
										</li>
										<li class="grid-map places">
											<a href="http://maps.google.com/maps/?daddr=<?php str_replace(" ", "+", the_field('places_address')) ?>">
												<img src="<?php the_field('place_gmap') ?>">
											</a>
										</li>
									</ul>
								</div>
								<!-- .grid-description-images -->

								<div class="grid-description-content places">
									<div class="left-col places">
										<?php the_content() ?>
									</div>
									<div class="right-col places">
										<div class="grid-aside-content">
											<?php the_field('places_descr_tag') ?>

											<ul>
												<li>
													<a class="yellow-link" href="mailto:?subject=<?php echo get_the_title() ?>">
														<div class="social-icon">
															<i class="fa fa-envelope-o"></i>
														</div>

														<div class="share-text">Forward to Friends</div>
													</a>
												</li>

												<li>
													<a href="http://twitter.com/share?text=<?php get_the_title() ?>&url=">
														<div class="social-icon">
															<i class="fa fa-twitter"></i>
														</div>

														<div class="share-text">Share on Twitter</div>
													</a>
												</li>

												<li>
													<a href="https://www.facebook.com/sharer/sharer.php?u=">
														<div class="social-icon">
															<i class="fa fa-facebook"></i>
														</div>

														<div class="share-text">Share on Facebook</div>
													</a>
												</li>

												<li>
													<a href="<?php the_field('places_website') ?>" class="website-black" target="_blank">
														<div class="social-icon site">
															<div class="website-img-swap-black"></div>
														</div>

														<div class="share-text-white site">Visit the Site</div>
													</a>
												</li>

												<li>
													<div class="link-dir-area-black short">
														<div class="social-icon">
															<i class="fa fa-map-marker"></i>
														</div>

														<div><span>Get Personalized Directions</span></div>

														<form id="gdirects-black" action="http://maps.google.com/maps" method="get" target="_blank">
															<input type="text" name="saddr" placeholder="ENTER START ADDRESS" />
															<input type="hidden" name="daddr" value="<?php the_field('places_address') ?>" />
															<input type="submit" value="GO" />
														</form>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>

							</div>
							<!-- .grid-description -->
						</li>

						<?php // insert the description container in the correct place ?>
						<?php if ($i % 3 === 0): ?>
							<li class="grid-alt places">
							</li>
						<?php endif; ?>

						<?php // increment the iterator ?>
						<?php $i ++; ?>

					<?php endwhile; ?>

					<?php wp_reset_query() ?>

					<?php // determine if we need to add additional elements need to be added to the list ?>
					<?php if (($i - 1) % 3 === 1): ?>
						<li class="grid"></li>
						<li class="grid"></li>
						<li class="grid-alt"></li>
					<?php elseif (($i - 1) % 3 === 2): ?>
						<li class="grid"></li>
						<li class="grid-alt"></li>
					<?php endif; ?>
				</div>
			</ul>
		</div>
		<!-- .about-grids -->
	</main>
</div><!-- #primary -->

<script src="<?php bloginfo('url') ?>/wp-content/themes/bpca-master/js/bpca-grid.js"></script>

<?php // wordpress footer hook. do not remove or bearshark will find you ?>
<?php get_footer(); ?>
