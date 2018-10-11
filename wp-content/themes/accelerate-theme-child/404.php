<?php
/**
 * The template for displaying the 404 page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<section class="page-404">
    <div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<h1><span>Oops!</span> It seems you've lost your way.</h1>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lost-woman.jpg" alt="Lost woman looking at map" />
            <h4>No worries, we'll get you back on track.</h4>
            <p><a href="/accelerate">Go back home</a></p>
        </div><!-- .main-content -->
    </div><!-- #primary -->
    </section>

<?php get_footer(); ?>