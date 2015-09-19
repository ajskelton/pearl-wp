<?php
/*
 Template Name: Front Page
 *
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="hero" class="hero">

					<?php responsive_featured_image(get_the_ID()); ?>
					<div class="hero-text">
						<img id="name" class="hero-name" src="<?php echo get_template_directory_uri();?>/library/images/PearlName.png" alt="Pearl Skelton">
						<h2>Graphic Design &amp; Photography</h2>
					</div>
					
				</div>

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<section class="entry-content cf" itemprop="articleBody">

									<p class="about-text"><?php the_field('hero-text'); ?></p>
									
								</section>

								<section>
									<?php if (have_rows('slider') ): ?>

										<div class="slider">

											<?php while(have_rows('slider') ): the_row();

											// vars
											$image = get_sub_field('slider_image');

											?>
											
											<div><img src="<?php echo $image['url']; ?>"></div>

											<?php endwhile; ?>

										</div>

									<?php endif; ?>

								</section>

							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>

						

				</div>

			</div>


<?php get_footer(); ?>
