<?php
/*
 Template Name: Front Page
 *
*/
?>

<?php get_header(); ?>

			<div id="content">

				<section id="intro" class="intro">

					<div class="hero">
						<div class="hero-inner">
							<div class="hero-copy">
								<h1 class="hero-name"><span class="sr-only">Pearl Skelton</span></h1>
								<h2>Graphic Design &amp; Photography</h2>	
							</div>
						</div>
					</div>
					
				</section>

				<section id="hero">
					
					<p class="hero-text"><?php the_field('intro_text'); ?></p>
					
				</section>

			</div>

<?php get_footer(); ?>