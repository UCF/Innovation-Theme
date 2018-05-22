<?php
/*
Template Name: Projects & Programs Landing
*/

global $post;

?>

<?php $frontpage_id = get_option( 'page_on_front' ); ?>

<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

<?php if( $src[0] != null ):?>

  <div class="hero flex-container" style="background: url('<?php echo $src[0]; ?>') center top; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">

<?php else: ?>

  <div class="hero flex-container" style="background: url('<?php the_field('home_hero_background_image', $frontpage_id); ?>') center top; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">

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

<div class="flex-container">
		
		<?php 
			$args = array(
				'post_parent' => $post->ID,
				'post_type'   => 'page',
				'orderby'     => 'menu_order',
				'order'       => 'ASC',
				'post_status' => 'publish'
			); 
		?>
		
		<?php $children = get_children( $args ); ?>

		<?php wp_reset_query(); ?>

		<?php if ( $children ) { ?>

			<?php $i = 1; ?>

			<?php foreach ( $children as $project_post ) { setup_postdata( $project_post ); ?>

				<?php $project_src = wp_get_attachment_image_src( get_post_thumbnail_id($project_post->ID), 'full' ); ?>

				<div class="project-landing-single">

					<div class="container">

						<div class="info">

							<?php if ( $i < 2 ) { ?>

								<h1><?php the_field('project_info_headline', $project_post->ID); ?></h1>

							<?php } else { ?>
						
								<h2><?php the_field('project_info_headline', $project_post->ID); ?></h2>

							<?php } ?>

							<div class="content"><?php the_field('project_info_excerpt', $project_post->ID); ?></div>

							<a href="<?php echo get_permalink($project_post->ID); ?>" class="learn-more">Learn More<img src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow-white.svg" alt="<?php the_field('project_info_headline'); ?>" /></a>

						</div>

						<div class="clear"></div>

					</div>

					<!-- <a href="<?php echo get_permalink($project_post->ID); ?>" class="project-landing-single-link"></a> -->

					<!-- <div class="gold-bck"></div> -->

					<div class="blk-bck"></div>

					<div class="blk-bck stay"></div>

					<div class="project-landing-single-img grayscale" style="background: url('<?php echo $project_src[0]; ?>') center top; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;"></div>

				</div>

				<?php $i++; ?>

			<?php } ?>

		<?php } ?>

	<?php wp_reset_query(); ?>

</div>



