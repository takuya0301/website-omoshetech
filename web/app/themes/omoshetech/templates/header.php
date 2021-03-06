<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php if (is_home()): ?>
        <h1 class="navbar-brand"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.png" alt="<?php bloginfo('name'); ?>"></a></h1>
      <?php else: ?>
        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.png" alt="<?php bloginfo('name'); ?>"></a>
      <?php endif; ?>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
      <ul class="nav navbar-nav navbar-right">
        <li><?php get_search_form(); ?></li>
      </ul>
    </nav>
  </div>
</header>
