<?php
/*
Template Name: Form
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

<div id="default-page-content">

	<div class="container">

		<div id="copy" class="form-content">

			<div class="flex-container">

				<div class="content">

					<div class="inner">
											
						<h2>
							<?php the_field('form_content_header'); ?>
						</h2>
											
						<?php the_field('form_content'); ?>

					</div>
								
				</div>

				<div class="form">

					<div class="inner">

						<h2>
							<?php the_field('gravity_form_header'); ?>
						</h2>

						<?php $formid = get_field('gravity_form_id'); ?>

						<?php echo do_shortcode('[gravityform id='.$formid.' title=false description=false ajax=true tabindex=49]'); ?>

					</div>

				</div>

			</div>

			<div class="clear"></div>

		</div>

	</div>

</div>