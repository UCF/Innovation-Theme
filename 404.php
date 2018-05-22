<?php $frontpage_id = get_option( 'page_on_front' ); ?>

<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($frontpage_id), 'full' ); ?>

<div class="hero flex-container" style="background: url('<?php echo $src[0]; ?>') center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
	
	<div class="container">

		<h1>Page Not Found</h1>

	</div>

</div>

<div id="default-page-content">

	<div class="container">

		<div id="copy">

			<h2><?php _e('The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'roots'); ?></h2>

			<!-- <hr> -->

			<h3><?php _e('Please try the following:', 'roots'); ?></h3>
			<ul>
			  <li><?php _e('Check your spelling', 'roots'); ?></li>
			  <li><?php printf(__('Return to the <a href="%s">home page</a>', 'roots'), home_url()); ?></li>
			  <li><?php _e('Click the <a href="javascript:history.back()">Back</a> button', 'roots'); ?></li>
			</ul>

		</div>

	</div>

</div>