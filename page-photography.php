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
						
						<div class="slider-for">
							<div><img src="http://placehold.it/1200x800/ffffff/" alt=""></div>
							<div><img src="http://placehold.it/1200x800/ff0000/" alt=""></div>
							<div><img src="http://placehold.it/1200x800/00ff00/" alt=""></div>
							<div><img src="http://placehold.it/1200x800/0000ff/" alt=""></div>
							<div><img src="http://placehold.it/1200x800/00ffff/" alt=""></div>
							<div><img src="http://placehold.it/1200x800/ffff00/" alt=""></div>
							<div><img src="http://placehold.it/1200x800/aa0000/" alt=""></div>
							<div><img src="http://placehold.it/1200x800/00aa00/" alt=""></div>
							<div><img src="http://placehold.it/1200x800/aaaa00/" alt=""></div>
							<div><img src="http://placehold.it/1200x800/00aaaa/" alt=""></div>
						</div>

						<div class="slider-nav">
							<div><img src="http://placehold.it/400x320/ffffff/" alt=""></div>
							<div><img src="http://placehold.it/400x320/ff0000/" alt=""></div>
							<div><img src="http://placehold.it/400x320/00ff00/" alt=""></div>
							<div><img src="http://placehold.it/400x320/0000ff/" alt=""></div>
							<div><img src="http://placehold.it/400x320/00ffff/" alt=""></div>
							<div><img src="http://placehold.it/400x320/ffff00/" alt=""></div>
							<div><img src="http://placehold.it/400x320/aa0000/" alt=""></div>
							<div><img src="http://placehold.it/400x320/00aa00/" alt=""></div>
							<div><img src="http://placehold.it/400x320/aaaa00/" alt=""></div>
							<div><img src="http://placehold.it/400x320/00aaaa/" alt=""></div>
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
