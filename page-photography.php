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
							
						</div>
											

					</div> <!-- End container -->

					<div class="text">

						<div class="container">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

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
								<?php // end article section ?>

							</article>

							<?php endwhile; endif; ?>

						</div>

					</div>

				</div>

<?php get_footer(); ?>
