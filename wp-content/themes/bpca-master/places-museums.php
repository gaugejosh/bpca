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
					<?php get_template_part('grid-mobile-alt') ?>
				</div>

				<div class="tablet-grid">
					<?php get_template_part('grid-tablet-alt') ?>
				</div>

				<div class="desktop-grid">
					<?php get_template_part('grid-desktop-alt') ?>
				</div>
			</ul>
		</div>
		<!-- .about-grids -->
	</main>
</div><!-- #primary -->

<script src="<?php bloginfo('url') ?>/wp-content/themes/bpca-master/js/bpca-grid.js"></script>

<?php // wordpress footer hook. do not remove or bearshark will find you ?>
<?php get_footer(); ?>
