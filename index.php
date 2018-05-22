<div id="news-landing">

	<div id="page-content">

		<div id="blogroll-content">

			<?php if ( have_posts() ): ?>

				<div class="flex-container">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 1248,834 ), false, ''  ); ?>

						<div class="project-landing-single">

							<?php if( $src[0] != null ): ?>
								<div class="info">
							<?php else: ?>
								<div class="info no-img">
							<?php endif; ?>

								<p class="post-date"><?php echo get_the_date('F j, Y', $post->ID); ?></p>
								<h2><?php the_title(); ?></h2>

								<div class="content"><?php excerpt(40); ?></div>

								<a href="<?php the_permalink(); ?>" class="learn-more">Read More<img src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow-white.svg" alt="<?php the_title(); ?>" />
								</a>

							</div>

							<?php if( $src[0] != null ): ?>

								<!-- <div class="gold-bck"></div> -->

								<div class="blk-bck"></div>

								<div class="blk-bck stay"></div>

								<div class="project-landing-single-img grayscale" style="background: url('<?php echo $src[0]; ?>') center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;"></div>

							<?php endif; ?>

						</div>

					<?php endwhile; wp_reset_postdata(); ?>

				</div>

				<div class="flex-container">

					<div class="nav-previous pagination-nav"><?php next_posts_link( 'Older posts' ); ?></div>
					<div class="nav-next pagination-nav"><?php previous_posts_link( 'Newer posts' ); ?></div>

				</div>

			<?php endif; ?>

		</div>

		<div class="clear"></div>

	</div>

</div>
