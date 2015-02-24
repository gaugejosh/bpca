<?php
$args = [
	'post_type'      => 'leaders',
	'posts_per_page' => - 1,
	'meta_key'       => 'leader_order',
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

	<li class="grid">
		<div class="grid-content">
			<div class="grid-info">
				<ul class="grid-info-list">
					<li><h2><?php the_title() ?></h2></li>
					<li><?php the_field('position_title') ?></li>
					<li><?php the_field('confirmed_on') ?></li>
				</ul>
			</div>
			<!-- .grid-info -->

			<div class="grid-image">
				<?php the_post_thumbnail() ?>
			</div>
			<!-- .grid-image -->

			<div class="grid-button"></div>
		</div>
		<!-- .grid-content -->

		<div class="grid-description">
			<div class="left-col">
				<ul>
					<li><?php the_title() ?></li>
					<li><?php the_field('position_title') ?></li>
					<li><?php the_field('confirmed_on') ?></li>
				</ul>
				<p><?php the_field('bio_column_1') ?></p>
			</div>
			<!-- .left-col -->
			<div class="right-col">
				<p><?php the_field('bio_column_2') ?></p>
			</div>
			<!-- .right-col -->
		</div>
		<!-- .grid-description -->
	</li>

	<?php // insert the description container in the correct place ?>
	<?php if ($i % 2 === 0): ?>
		<li class="grid-alt">
		</li>
	<?php endif; ?>

	<?php // increment the iterator ?>
	<?php $i ++; ?>

<?php endwhile; ?>
