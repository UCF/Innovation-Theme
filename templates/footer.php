<?php $frontpage_id = get_option( 'page_on_front' ); ?>

<footer id="content-info">

	<div id="footer">
		
		<div class="container">

			<h5><a href="<?php the_field('footer_header_link', $frontpage_id); ?>" target="_blank"><?php the_field('footer_header', $frontpage_id); ?></a></h5>

			<?php if( have_rows('footer_social_media', $frontpage_id) ): ?>

				<ul class="social-media">
			
					<?php while ( have_rows('footer_social_media', $frontpage_id) ) : the_row(); ?>

						<li>

							<a href="<?php the_sub_field('footer_social_media_link', $frontpage_id); ?>" target="_blank">
								<img src="<?php the_sub_field('footer_social_media_icon', $frontpage_id); ?>" alt="<?php the_sub_field('footer_social_media_name', $frontpage_id); ?>" />
							</a>

						</li>

					<?php endwhile; ?>

				</ul>
			
			<?php else: endif; ?>

			<div class="footer-nav">
				
				<?php wp_nav_menu(array('menu' => 'footer-navigation', 'menu_class' => 'nav navbar-nav', 'after' => '<span>|</span>' )); ?> 

			</div>

			<div class="footer-contact">
				
				<p><?php the_field('footer_address', $frontpage_id); ?> | <a href="tel:+1-<?php the_field('footer_phone_number_link', $frontpage_id); ?>"><?php the_field('footer_phone_number', $frontpage_id); ?></a></p>

			</div>

			<div class="footer-copyright">
				
				<p>&copy; <?php the_field('footer_copyright', $frontpage_id); ?></p>

			</div>

		</div>

	</div>

</footer>

<!-- Include plugins.js - Bootstrap and Modernizr -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins.js"></script>

<script type='text/javascript' src='//universityheader.ucf.edu/bar/js/university-header.js' id='ucfhb-script'></script>

<?php wp_footer(); ?>