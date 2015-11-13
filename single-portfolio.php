<?php
/*
 * CUSTOM POST TYPE TEMPLATE
 *
 * This is the custom post type post template. If you edit the post type name, you've got
 * to change the name of this template to reflect that name change.
 *
 * For Example, if your custom post type is "register_post_type( 'bookmarks')",
 * then your single template should be single-bookmarks.php
 *
 * Be aware that you should rename 'custom_cat' and 'custom_tag' to the appropiate custom
 * category and taxonomy slugs, or this template will not finish to load properly.
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							

							<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">

								<header class="article-header">

									<h1 class="single-title custom-post-type-title"><?php the_title(); ?></h1>
									

								</header>

								<section class="entry-content cf">

									<div class="row cf">
										<div class="m-all t-1of2 d-1of2 cf">
											<?php
												if ( has_post_thumbnail() ) {
													the_post_thumbnail('large');
												}
											?>
										</div>

										<div class="last-col m-all t-1of2 d-1of2 cf">
											<p><?php the_field('project_description'); ?></p>
											<?php the_field('project_details'); ?>
											<p><a href="<?php the_field('project_link');?>"><?php the_field('project_link');?></a></p>

										</div>
									</div>
									<hr>
									<div class="row cf">
										<div class="m-all t-all-d-all cf">
											<?php if(have_rows('project_images') ): ?>

												<ul class="project-images">
												
													<?php while( have_rows('project_images') ): the_row();
														// vars
														$image = get_sub_field('image');
														$fullSize = $image['sizes']['large'];
														?>
														<li>
														<img src="<?php echo $fullSize; ?>" alt="<?php echo $image['alt'] ?>">
														</li>
													<?php endwhile; ?>

												</ul>

											<?php endif; ?>
										</div>
									</div>
									
								</section> <!-- end article section -->

								<footer class="article-footer">
									
								</footer>


							</article>



						</main>

				</div>

			</div>

<?php get_footer(); ?>
