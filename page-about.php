<?php
/*
 Template Name: About Page
 *
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="inner-content">

					<div class="text-background about-page">
													
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

<?php get_footer(); ?>
