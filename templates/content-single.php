<?php while (have_posts()) : the_post(); ?>

<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

<?php if( $src[0] != null ):?>

  <div class="blog-hero flex-container" style="background: url('<?php echo $src[0]; ?>') center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
  
    <div class="container">

      <h1><?php the_title(); ?></h1>
      <br>
      <div class="date-content">
        <?php echo get_the_date('F j, Y', $post->ID); ?>
      </div>

    </div>

  </div>

<?php else: ?>

  <div class="no-img-hero">

    <div class="container">

      <h1><?php the_title(); ?></h1>
      <br>
      <div class="date-content">
        <?php echo get_the_date('F j, Y', $post->ID); ?>
      </div>

    </div>

  </div>

<?php endif; ?>

<div id="copy" class="post-content">

  <div class="container">

    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

      <div class="entry-content column-content">
        <?php the_content(); ?>
      </div>
      <footer>
        <?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
        <?php the_tags('<ul class="entry-tags"><li>','</li><li>','</li></ul>'); ?>
      </footer>
      <?php // comments_template('/templates/comments.php'); ?>
    </article>

  </div>

</div>

<?php endwhile; ?>
