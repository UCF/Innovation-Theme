<?php $frontpage_id = get_option( 'page_on_front' ); ?>

<header id="banner" class="navbar" role="banner">

    <nav id="nav">

      <div class="container">

        <a class="brand" href="<?php echo home_url(); ?>">
          <img src="<?php the_field('header_logo', $frontpage_id); ?>" alt="<?php echo $blogname; ?>" title="<?php echo $blogname; ?>" />
        </a>

          <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header-mobile">

              <p>Navigation</p>

              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-nav-mobile">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <div class="clear"></div>

              <?php wp_nav_menu(array('menu' => 'primary-navigation', 'menu_class' => 'nav navbar-nav-mobile collapse' )); ?> 
            </div>


        <?php wp_nav_menu(array('menu' => 'primary-navigation', 'menu_class' => 'nav navbar-nav' )); ?> 

      </div>
              
    </nav>

</header>