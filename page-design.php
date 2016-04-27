<?php
/*
 Template Name: Design Page
 *
*/
?>

<?php get_header(); ?>

		<?php

			$image_1 = get_field('image_1');
			$image_2 = get_field('image_2');
			$image_3 = get_field('image_3');
			$image_4 = get_field('image_4');
			$image_5 = get_field('image_5');
			$image_6 = get_field('image_6');
			$image_7 = get_field('image_7');
			$image_8 = get_field('image_8');

		?>

			<div id="content">

				<div id="inner-content" class="inner-content">

					<div class="content-container entry-content">
						
						<div class="design">
							<?php if( !empty($image_1) ): ?>
								<img src="<?= $image_1['url']; ?>" alt="<?= $image_1['alt']; ?>">
							<?php endif; ?>
							<?php if( !empty($image_2) ): ?>
								<img src="<?= $image_2['url']; ?>" alt="<?= $image_2['alt']; ?>">
							<?php endif; ?>
						</div>
						<div class="design">
							<?php if( !empty($image_3) ): ?>
								<img src="<?= $image_3['url']; ?>" alt="<?= $image_3['alt']; ?>">
							<?php endif; ?>
							<?php if( !empty($image_4) ): ?>
								<img src="<?= $image_4['url']; ?>" alt="<?= $image_4['alt']; ?>">
							<?php endif; ?>
						</div>
						<div class="design">
							<?php if( !empty($image_5) ): ?>
								<img src="<?= $image_5['url']; ?>" alt="<?= $image_5['alt']; ?>">
							<?php endif; ?>
							<?php if( !empty($image_6) ): ?>
								<img src="<?= $image_6['url']; ?>" alt="<?= $image_6['alt']; ?>">
							<?php endif; ?>
						</div>
						<div class="design">
							<?php if( !empty($image_7) ): ?>
								<img src="<?= $image_7['url']; ?>" alt="<?= $image_7['alt']; ?>">
							<?php endif; ?>
							<?php if( !empty($image_8) ): ?>
								<img src="<?= $image_8['url']; ?>" alt="<?= $image_8['alt']; ?>">
							<?php endif; ?>
						</div>

					</div> <!-- End container -->

					<div class="text-background">

						<div class="container">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/CreativeWork">

									<?php
										// the content
										the_content();

									?>
								 <?php // end article section ?>

							</article>

							<?php endwhile; endif; ?>

					</div>

				</div>

			</div>

<?php get_footer(); ?>
