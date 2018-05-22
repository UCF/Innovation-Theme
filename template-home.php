<?php
/*
Template Name: Home
*/
?>

<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

<?php if( $src[0] != null ):?>

  <div id="home-hero" class="hero flex-container" style="background: url('<?php echo $src[0]; ?>') center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">

<?php else: ?>

  <div id="home-hero" class="hero flex-container" style="background: url('<?php the_field('home_hero_background_image'); ?>') center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">

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

<div id="home-about" style="background: url('<?php the_field('home_about_background_image'); ?>') center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">

	<div class="container">

		<div class="info">
		
			<h2><?php the_field('home_about_header'); ?></h2>

			<div class="content"><?php the_field('home_about_content'); ?></div>

			<a href="<?php the_field('home_about_learn_more_link'); ?>" class="learn-more">Learn More</a>

		</div>

		<div class="clear"></div>

	</div>

	<div class="blk-bck mobile"></div>

</div>

<div id="home-projects">

	<div class="flex-container">

		<div class="info">

			<h2><?php the_field('home_projects_section_header'); ?></h2>

			<div class="content"><?php the_field('home_projects_section_content'); ?></div>

			<a href="<?php the_field('home_projects_section_all_projects_link'); ?>" class="learn-more"><?php the_field('home_projects_section_all_projects_button_text'); ?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow-black.svg" alt="<?php the_field('home_projects_section_all_projects_button_text'); ?>" /></a>

		</div>

		<?php if( have_rows('home_projects_section_featured_projects_&_programs') ): ?>

			<div class="projects">

				<div class="flex-container">

					<?php while ( have_rows('home_projects_section_featured_projects_&_programs') ) : the_row(); ?>

						<?php $project_post = get_sub_field('featured_project'); ?>

						<div class="project-squares">

							<h3><?php echo get_the_title($project_post); ?></h3>
							
							<img src="<?php the_field('project_info_square_image', $project_post); ?>" alt="<?php echo get_the_title($project_post); ?>" class="project-landing-single-img grayscale" />

							<a href="<?php echo get_permalink($project_post); ?>"></a>

							<!-- <div class="gold-bck"></div> -->

							<div class="blk-bck"></div>

							<div class="blk-bck stay"></div>

						</div>

					<?php endwhile; ?>

				</div>

				<div class="clear"></div>

			</div>

		<?php else: endif; ?>

	</div>

	<div class="clear"></div>

</div>

<?php if( have_rows('home_partners') ): ?>

	<div id="partnerships">

		<div class="container">

			<h2><?php the_field('home_partnerships_section_header'); ?></h2>

			<ul class="flex-container">
				
				<?php while ( have_rows('home_partners') ) : the_row(); ?>

					<li class="partner">

						<a href="<?php the_sub_field('partner_link'); ?>" target="_blank"><img src="<?php the_sub_field('partner_logo'); ?>" alt="<?php the_sub_field('partner_name'); ?>" /></a>

					</li>

				<?php endwhile; ?>

			</ul>

		</div>

	</div>
			
<?php else: endif; ?>

<div id="newsletter-signup-banner">
	
	<div class="container">

		<div class="flex-container">
		
			<div class="header">
				
				<h2><?php the_field('newsletter_signup_banner_header'); ?></h2>

			</div>

			<div class="form">
				
				<?php $formid = get_field('newsletter_signup_form_id'); ?>

				<?php echo do_shortcode('[gravityform id='.$formid.' title=false description=false ajax=true tabindex=49]'); ?>

			</div>

		</div>

	</div>

</div>



