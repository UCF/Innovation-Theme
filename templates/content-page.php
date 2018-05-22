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

		<div id="copy">

			<?php if( have_rows('content_section') ): ?>
			
				<?php while ( have_rows('content_section') ) : the_row(); ?>

					<div class="content-section">

						<?php if( get_sub_field('content_section_header') ): ?>

							<?php if( get_sub_field('content_section_header_link') ): ?>

								<h2><a href="<?php the_sub_field('content_section_header_link'); ?>" <?php if ( get_sub_field('content_section_header_link_tab') == 'yes' ) { echo "target='_blank'"; } ?>><?php the_sub_field('content_section_header'); ?></a></h2>

							<?php else: ?>

								<h2><?php the_sub_field('content_section_header'); ?></h2>

							<?php endif; ?>

						<?php endif; ?>

						<?php if( get_sub_field('content_section_subheader') ): ?>

							<?php if( get_sub_field('content_section_subheader_link') ): ?>

								<h3><a href="<?php the_sub_field('content_section_subheader_link'); ?>" <?php if ( get_sub_field('content_section_subheader_link_tab') == 'yes' ) { echo "target='_blank'"; } ?>><?php the_sub_field('content_section_subheader'); ?></a></h3>

							<?php else: ?>

								<h3><?php the_sub_field('content_section_subheader'); ?></h3>

							<?php endif; ?>

						<?php endif; ?>

						<?php $cdisplay = get_sub_field('column_display'); ?>

						<?php if( have_rows('content_section_columns') ): ?>

							<?php $i = 1; ?>
					
							<?php while ( have_rows('content_section_columns') ) : the_row(); ?>

								<?php if( $cdisplay === 'single' ): ?>
									<div class="column-content single col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<?php endif; ?>

								<?php if( $cdisplay === 'double' ): ?>
									<div class="column-content double col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<?php endif; ?>

								<?php if( $cdisplay === 'triple' ): ?>
									<div class="column-content triple col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<?php endif; ?>

									<div class="inner">

										<?php the_sub_field('content_section_column_content'); ?>

									</div>

								</div>

								<?php if( $cdisplay === 'double' ): ?>
									<?php if (($i % 2) == 0) { ?>
										<div class="clear"></div>
									<?php } ?>
								<?php endif; ?>

								<?php if( $cdisplay === 'triple' ): ?>
									<?php if (($i % 3) == 0) { ?>
										<div class="clear triple-clear"></div>
									<?php } ?>
								<?php endif; ?>

								<?php $i++; ?>

							<?php endwhile; ?>
					
						<?php else: endif; ?>

						<div class="clear"></div>

					</div>

				<?php endwhile; ?>
			
			<?php else: endif; ?>

		</div>

	</div>

</div>