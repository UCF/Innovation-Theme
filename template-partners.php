<?php
/*
Template Name: Partners
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

		<?php if( get_field('hero_header') ):?>
		
			<h1><?php the_field('hero_header'); ?></h1>

		<?php else: ?>

		 	<h1><?php the_title(); ?></h1>

		<?php endif; ?>

		<?php if( get_field('hero_description') ):?>

			<br>

			<p class="content"><?php the_field('hero_description'); ?></p>

		<?php endif; ?>

	</div>

</div>

<div id="page-content">
	
	<div class="container">
		
		<?php if( have_rows('partners') ): ?>

			<div class="partners-page-content">

				<!-- <div class="flex-container"> -->

					<?php while ( have_rows('partners') ) : the_row(); ?>

						<div class="single-partner">

							<div class="flex-container">

								<div class="logo-partner-logo">
									
									<a href="<?php the_sub_field('partner_link'); ?>" target="_blank"><img src="<?php the_sub_field('partner_logo'); ?>" alt="<?php the_sub_field('project_info_square_image'); ?>" /></a>

								</div>

								<div class="content">

									<h2><a href="<?php the_sub_field('partner_link'); ?>" target="_blank"><?php the_sub_field('partner_header'); ?></a></h2>

									<?php the_sub_field('partner_description'); ?>
										
								</div>

							</div>

							<hr>

						</div>

					<?php endwhile; ?>

				<!-- </div> -->

				<!-- <div class="clear"></div> -->

			</div>

		<?php else: endif; ?>

	</div>

</div>

