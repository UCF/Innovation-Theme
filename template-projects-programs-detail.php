<?php
/*
Template Name: Projects & Programs Detail
*/

global $post;

?>

<?php $frontpage_id = get_option( 'page_on_front' ); ?>

<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

<?php if( $src[0] != null ):?>

  <div class="hero" style="background: url('<?php echo $src[0]; ?>') center top; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;"></div>

<?php else: ?>

  <div class="hero" style="background: url('<?php the_field('home_hero_background_image', $frontpage_id); ?>') center top; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;"></div>

<?php endif; ?>

<!-- <?php if( get_field('project_details_hero_image') ): ?>

	<div class="hero" style="background: url('<?php the_field('project_details_hero_image'); ?>') center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;"></div>

<?php else: ?>

  <div class="hero" style="background: url('<?php the_field('home_hero_background_image', $frontpage_id); ?>') center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;"></div>

<?php endif; ?> -->

<div id="default-page-content">

	<div class="container">

		<div id="copy">

			<h1><?php the_field('project_details_display_title'); ?></h1>

			<p class="project-meta-data">
				<?php if( get_field('project_details_author') ): ?>
					Written By: <?php the_field('project_details_author'); ?> 
					<span>|</span> 
				<?php endif; ?>
				<?php // echo get_the_date( 'F j, Y', $post->ID ); ?>
			</p>

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

						<hr>

					</div>

				<?php endwhile; ?>
			
			<?php else: endif; ?>

			<?php if( have_rows('project_&_program_team') ): ?>

				<div class="team">

					<h2><?php the_field('project_&_program_team_header'); ?></h2>
					
					<div class="flex-container">
			
						<?php while ( have_rows('project_&_program_team') ) : the_row(); ?>

							<div class="team-member">

								<div class="flex-container">
									
									<?php if( get_sub_field('project_&_program_team_member_headshot') ): ?>

										<div class="team-img">
											
											<img src="<?php the_sub_field('project_&_program_team_member_headshot'); ?>" alt="<?php the_sub_field('_program_team_member_name'); ?>" />

										</div>

									<?php endif; ?>

									<div class="content">

										<h3><?php the_sub_field('project_&_program_team_member_name'); ?></h3>
										<p class="team-member-title"><?php the_sub_field('project_&_program_team_member_title'); ?></p>

										<p><?php the_sub_field('project_&_program_team_member_bio'); ?></p>

									</div>

								</div>

							</div>

						<?php endwhile; ?>

					</div>

					<div class="clear"></div>

				</div>
			
			<?php else: endif; ?>

			<?php if( have_rows('learn_more_resource_links') ): ?>

				<hr>

				<div class="resources">
					
					<div class="flex-container">

						<?php if( get_field('learn_more_resource_cta') ): ?>

							<h4><?php the_field('learn_more_resource_cta'); ?></h4>

						<?php else: ?>

							<h4>To learn more:</h4>

						<?php endif; ?>

						<div class="resource-list flex-container">
			
							<?php while ( have_rows('learn_more_resource_links') ) : the_row(); ?>

								<a href="<?php the_sub_field('resource_link'); ?>" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow-black.svg" alt="<?php the_sub_field('resource_link_text'); ?>" />
									<span><?php the_sub_field('resource_link_text'); ?></span>
								</a>

							<?php endwhile; ?>

						</div>

					</div>

					<div class="clear"></div>

				</div>
			
			<?php else: endif; ?>

		</div>

	</div>

</div>