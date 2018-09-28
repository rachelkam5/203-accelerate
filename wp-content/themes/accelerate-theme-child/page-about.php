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
		
<section class="our-services">
	<div class="site-content">
		<div class="about-header">
			<h4>Our Services</h4>
			<p>We take pride in our clients and the content we create for them.  Here's a brief overview of our offered services.</p>
		</div>
		
		<ul class="service-list">
			<?php while ( have_posts() ) : the_post();
				$size = "thumbnail";
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
      				<p><?php echo $service_1 ?></p>
					<?php echo wp_get_attachment_image( $image_1, $size ); ?>
				</li>
				<li class="single-service">	
					<?php echo wp_get_attachment_image( $image_2, $size ); ?>
					<p><?php echo $service_2 ?></p>
				</li>
				<li class="single-service">
					<p><?php echo $service_3 ?></p>
					<?php echo wp_get_attachment_image( $image_3, $size ); ?>
				</li>	
				<li class="single-service">
					<?php echo wp_get_attachment_image( $image_4, $size ); ?>
					<p><?php echo $service_4 ?></p>
				</li>
			<?php endwhile; // end of the loop. ?>
		</ul>
	</div>
</section>

	</div><!-- .main-content -->
</div><!-- #primary -->

<?php get_footer(); ?>