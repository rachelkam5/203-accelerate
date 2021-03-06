<?php
/**
 * The template for displaying the About page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="about-page hero-content">
	<div class="main-content" role="main">
		<?php  while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .main-content -->
</div><!-- #primary -->
		
<section class="our-services">
	<div class="site-content">
		<div class="about-header">
			<h4>Our Services</h4>
			<p>We take pride in our clients and the content we create for them.  Here's a brief overview of our offered services.</p>
		</div>
		
		<ul class="service-list">
			<?php 
				$size = "full";
				$title_1 = get_field('title_1');
				$title_2 = get_field('title_2');
				$title_3 = get_field('title_3');
				$title_4 = get_field('title_4');
				$service_1 = get_field('service_1');
				$service_2 = get_field('service_2');
				$service_3 = get_field('service_3');
				$service_4 = get_field('service_4');
				$image_1 = get_field('image_1');
				$image_2 = get_field('image_2');
				$image_3 = get_field('image_3');
				$image_4 = get_field('image_4');
			?>
				<li class="single-service">
					<div class="service-pic pic-1">
						<?php echo wp_get_attachment_image( $image_1, $size ); ?>
					</div>
					<div class="service-desc">
						<h3 class="service-title"><?php echo $title_1 ?></h3>
						<p class="desc-1"><?php echo $service_1 ?></p>
					</div>
				</li>
				<li class="single-service">	
					<div class="service-desc">
						<h3 class="service-title title-2"><?php echo $title_2 ?></h3>
						<p class="desc-2"><?php echo $service_2 ?></p>
					</div>
					<div class="service-pic pic-2">
						<?php echo wp_get_attachment_image( $image_2, $size ); ?>
					</div>
				</li>
				<li class="single-service">
					<div class="service-pic pic-3">
						<?php echo wp_get_attachment_image( $image_3, $size ); ?>
					</div>
					<div class="service-desc">
						<h3 class="service-title"><?php echo $title_3 ?></h3>
						<p class="desc-3"><?php echo $service_3 ?></p>
					</div>
				</li>	
				<li class="single-service">
					<div class="service-desc">
						<h3 class="service-title title-4"><?php echo $title_4 ?></h3>
						<p class="desc-4"><?php echo $service_4 ?></p>
					</div>
					<div class="service-pic pic-4">
						<?php echo wp_get_attachment_image( $image_4, $size ); ?>
					</div>
				</li>
		</ul>
	</div>
</section>

	<div class="work-with-us">
		<p>Interested in working with us?</p>
		<a class="button" href="http://localhost/accelerate/contact">Contact Us</a>
	</div>
</div>


<?php get_footer(); ?>