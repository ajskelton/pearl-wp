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

				<section id="hero" class="entry-content wrap cf" itemprop="articleBody">

					<p class="hero-text"><?php the_field('hero-text'); ?></p>
					
				</section>

				<section id="home-slider" class="cf">
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

				<section id="graphic-design" class="blue">
					<div class="entry-content wrap cf">
						<h1>Graphic Design</h1>
					</div>
				</section>

				<section id="photography">
					<div class="entry-content wrap cf">
						<h1>Photography</h1>
						<?php if(have_rows('image_gallery') ): ?>
									<ul class="gallery cf">
										<?php while( have_rows('image_gallery') ): the_row();

										// vars
										$image = get_sub_field('gallery_image');
										$thumb = $image['sizes']['thumbnail'];
										$fullSize = $image['sizes']['large'];

									?>
											<li class="image">
												<?php if( $image ){ ?>
													<a href="<?php echo $fullSize; ?>" rel="lightbox[photography]">
												<?php } ?>

													<img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt'] ?>">

												<?php if( $image ) { ?>
													</a>
												<?php } ?>
											</li>

										<?php endwhile; ?>

									</ul> <!-- end gallery -->

									<?php endif; ?>
					</div>
				</section>

				<section id="about" class="blue">
					<div class="entry-content wrap cf">
						<h1>About</h1>
						<div class="about-image-wrap">
							<img class="about-image" src="<?php echo get_field('about_image'); ?>" alt="Pearl Skelton">
						</div>
						<p class="about-text"><?php echo get_field('about_text'); ?></p>
					</div>
				</section>

				<section id="contact">
					<div class="entry-content wrap cf">
						<h1>Contact</h1>
						<?php echo do_shortcode( '[contact-form-7 id="29" title="Contact Pearl"]' ); ?>
					</div>
				</section>

			</div>


<?php get_footer(); ?>
