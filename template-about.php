<?php
/*
Template Name: About
*/
?>

<?php $frontpage_id = get_option( 'page_on_front' ); ?>

<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

<?php if( $src[0] != null ):?>

  <div class="hero flex-container" style="background: url('<?php echo $src[0]; ?>') center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">

<?php else: ?>

  <div class="hero flex-container" style="background: url('<?php the_field('home_hero_background_image', $frontpage_id); ?>') center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">

<?php endif; ?>
	
	<div class="container">

		<?php if( get_field('hero_header') ): ?>
			<h1><?php the_field('hero_header'); ?></h1>
		<?php else: ?>
		 	<h1><?php the_title(); ?></h1>
		<?php endif; ?>

		<?php if( get_field('hero_content') ):?>
			<br>
			<p class="content"><?php the_field('hero_content'); ?></p>
		<?php endif; ?>

	</div>

</div>

<?php if( have_rows('mission_content_columns') ): ?>

	<div class="our-mission">

		<div class="container">

			<h2><?php the_field('our_mission_header'); ?></h2>

			<div class="flex-container">

				<?php while ( have_rows('mission_content_columns') ) : the_row(); ?>

					<div class="mission-column">

						<div class="inner">

							<h3><?php the_sub_field('mission_content_columns_header'); ?></h3>

							<div class="content"><?php the_sub_field('mission_content_columns_content'); ?></div>

						</div>

					</div>

				<?php endwhile; ?>

			</div>

			<div class="clear"></div>

		</div>

	</div>

<?php else: endif; ?>

<?php if( have_rows('team') ): ?>

	<div class="team-container">

		<div class="container">

			<h2><?php the_field('meet_the_team_header'); ?></h2>

			<?php while ( have_rows('team') ) : the_row(); ?>

				<div class="team-single">

					<div class="flex-container">

						<div class="team-image">
							
							<img src="<?php the_sub_field('team_headshot'); ?>" alt="<?php the_sub_field('team_name'); ?>" />

						</div>

						<div class="team-content">

							<h3><?php the_sub_field('team_name'); ?></h3>

							<p class="title"><?php the_sub_field('team_title'); ?></p>

							<div class="content"><?php the_sub_field('team_bio'); ?></div>

						</div>

					</div>

					<div class="clear"></div>

				</div>

			<?php endwhile; ?>

			<div class="clear"></div>

		</div>

	</div>

<?php else: endif; ?>

<div id="newsletter-signup-banner">
	
	<div class="container">

		<div class="flex-container">
		
			<div class="header">
				
				<h2><?php the_field('newsletter_signup_banner_header', $frontpage_id); ?></h2>

			</div>

			<div class="form">
				
				<?php $formid = get_field('newsletter_signup_form_id', $frontpage_id); ?>

				<?php echo do_shortcode('[gravityform id='.$formid.' title=false description=false ajax=true tabindex=49]'); ?>

			</div>

		</div>

	</div>

</div>



