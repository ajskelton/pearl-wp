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

					<div class="container entry-content">
						
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

						<div id="main" role="main" class="container" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<section class="entry-content cf" itemprop="articleBody">
									<?php
										// the content (pretty self explanatory huh)
										the_content();

										/*
										 * Link Pages is used in case you have posts that are set to break into
										 * multiple pages. You can remove this if you don't plan on doing that.
										 *
										 * Also, breaking content up into multiple pages is a horrible experience,
										 * so don't do it. While there are SOME edge cases where this is useful, it's
										 * mostly used for people to get more ad views. It's up to you but if you want
										 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
										 *
										 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
										 *
										*/
										wp_link_pages( array(
											'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
											'after'       => '</div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',
										) );
									?>
								</section> <?php // end article section ?>

							</article>

							<?php endwhile; endif; ?>

						</main>

				</div>

			</div>

<?php get_footer(); ?>
