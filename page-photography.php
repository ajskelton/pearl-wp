<?php
/*
 Template Name: Photography Page
 *
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="inner-content">

					<div class="container entry-content">

						<div class="slider-wrapper">

							<div class="slider">

								<?php 

									if ( have_rows('gallery') ):

										while ( have_rows('gallery' ) ) : the_row();

											$image = get_sub_field('image');
											?>

												<div><img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>"></div>

											<?php

										endwhile;

									else : // no rows found

									endif;

								?>



							</div> <!-- end .slider -->

							<svg class='arrow left-arrow'>
								<use xlink:href="#shape-chevron-left" />
							</svg>

							<svg class='arrow right-arrow'>
								<use xlink:href="#shape-chevron-right" />
							</svg>

						</div> <!-- end .slider-wrapper -->

						<div class="slider-nav">

							<?php

								if ( have_rows('gallery') ):

									while ( have_rows('gallery') ) : the_row();

									$thumbnail = get_sub_field('image');

									?>

									<div><img src="<?= $thumbnail['sizes']['medium'] ?>" alt="<?= $thumbnail['alt']; ?>"></div>
									<?php

									endwhile;

								else : // no rows found

								endif;

							?>
							
						</div> <!-- End .slider-nav -->
											

					</div> <!-- End container -->

					<div class="text-background">

						<div class="container">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

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
