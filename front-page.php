<?php
/*
 Template Name: Front Page
 *
*/
?>

<?php get_header(); ?>

			<div id="content">

				<section id="intro" class="intro">

					<?php responsive_featured_image(get_the_ID()); ?>
					<div class="intro-text">
						<img id="name" class="intro-name" src="<?php echo get_template_directory_uri();?>/library/images/PearlName.png" alt="Pearl Skelton">
						<h2>Graphic Design &amp; Photography</h2>
					</div>
					
				</section>

				<section id="hero">
					
					<p class="hero-text"><?php the_field('hero-text'); ?></p>
					
				</section>

			</div>

<?php get_footer(); ?>
