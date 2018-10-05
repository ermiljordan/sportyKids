<?php
/**
 * Template for Home
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sportyKids
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="hero-banner">
				<div class="titles">
					<div class="left-title">
						<h2 class="hero-title">Fundamental</h2>
						<h2 class="hero-title">Fitness</h2>
					</div>
						<div class="right-title">
							<h2 class="hero-title">Leadership</h2>
							<?php echo CFS()->get( 'hero_parag' ); ?>
						</div>
				</div>
			</section> <!-- end of hero banner -->
		<section>
			<div>
			<h2>Who we are</h2>
			<?php echo CFS()->get( 'sk_parag' ); ?>
			<img class="tent" src="<?php echo get_template_directory_uri(); ?>/assets/skCourts/courts-01.svg">
			</div>
		</section>
		<section class="green-background">
			<div class="green-bcgnd-content">
			<h2>What we can do</h2>
			<img class="court volleyball" src="<?php echo get_template_directory_uri(); ?>/assets/skCourts/courts-02.svg">
			<?php echo CFS()->get( 'sk_ability_parag' ); ?>
			<img class="court soccer" src="<?php echo get_template_directory_uri(); ?>/assets/skCourts/courts-03.svg">
			<?php echo CFS()->get( 'sk_ability_parag_2' ); ?>
			<img class="court football" src="<?php echo get_template_directory_uri(); ?>/assets/skCourts/courts-04.svg">
			</div>
		</section>
		<section>
			<div class="container">
			<h2>The coaches</h2>
			<div class="coaches">
				<div class="sk-coach-ermil">
					<h4>Coach</h4>
					<h2>Ermil J.</h2>
					<div class="profile"><img class="tent" src="<?php echo get_template_directory_uri(); ?>/assets/images/test.jpg"></div>
					<div class="profile-background"><?php echo CFS()->get('sk_ermil'); ?></div>
				</div>
				<div class="sk-coach-chinny">
					<h4>Coach</h4>
					<h2>Chinatsu K.</h2>
					<div class="profile"><img class="tent" src="<?php echo get_template_directory_uri(); ?>/assets/images/test.jpg"></div>

				<div class="profile-background"><?php echo CFS()->get('sk_chinny'); ?></div>
				</div>
			</div>
		</section>
		<section>
			<h2>Why us?</h2>
			<?php echo CFS()->get('sk_reason'); ?>
			<div>
			<img class="tent" src="<?php echo get_template_directory_uri(); ?>/assets/skCourts/courts-05.svg">
			<img class="tent" src="<?php echo get_template_directory_uri(); ?>/assets/skCourts/courts-07.svg">
			</div>
		</section>
		<section>
		<img class="tent" src="<?php echo get_template_directory_uri(); ?>/assets/skCourts/courts-06.svg">
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
