<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>
  <?php
  wp_head();
  ?>
</head>
<body>
  
</body>
</html>

<header class="header">
  <div class="container">
    <div class="header-top">
      <div class="burger">
        <button class="burger__button">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <span class="burger__title">Sections</span>
      </div>
      <form action="#" class="search header-top__search">
        <button type="submit" class="search__button"><img class="fit-img" src="<?php echo bloginfo('template_url');?>/assets/img/icons/search.svg"
            alt="Search"></button>
        <input class="search__input" type="search" placeholder="Search">
      </form>
      <a href="#" class="initial-subscription header__subscription">
        <img class="initial-subscription__image" src="<?php echo bloginfo('template_url');?>/assets/img/subscription-img.jpg" alt="img">
        <div class="initial-subscription__text">
          <strong class="initial-subscription__title">Subscribe Now</strong>
          <span class="initial-subscription__price"><?php the_field("subscription_payment", 11); ?></span>
        </div>
      </a>
      <a href="#" class="person-room header-top__person-room">
        <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/person.svg" alt="User" class="fit-img person-room__image">
        <span class="person-room__text">Sign In</span>
      </a>
      <img src="<?php echo bloginfo('template_url');?>/assets/img/header-logo.jpg" alt="Logo" class="fit-img header-top__image logo-image">
    </div>
    <!-- /.header-top -->
    <div class="header-middle">
      <div class="header-middle__logo-block">
        <img src="<?php echo bloginfo('template_url');?>/assets/img/header-logo.jpg" alt="Logo" class="header-middle__image logo-image">
        <span class="header-middle__text"><?php the_field("header_middle_text", 11); ?></span>
      </div>
      <!-- /.header-middle__logo-block -->
      <a href="index.html" class="logo header-middle__logo">
        <img src="
        <?php
        $logo = wp_get_attachment_image_src(get_theme_mod('custom_logo'), full);

        echo $logo[0];
        ?>
        " alt="Universal" class="fit-img">
      </a>
      <!-- /.logo -->
      <div class="header-middle__information-block">
        <span class="date"><?php echo current_time( 'l, F jS, Y', 1 ); ?></span>
        <div class="temperature header-middle__temperature">
          <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/sun.svg" alt="Sun-icon" class="fit-img temperature__icon">
          <span class="temperature__num">- 23 °C</span>
        </div>
        <!-- /.temperature-block -->
      </div>
      <!-- /.header-middle__information-block -->
    </div>
    <!-- /.header-middle -->
  </div>
  <!-- /.container -->
  <div class="header-bottom">
    <div class="container">
      <nav class="header__nav">
      <?php wp_nav_menu( [
              'menu'            => 'Main', 
              'container'       => false, 
              'menu_class'      => 'header__nav-menu', 
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'items_wrap'      => '<ul class="header__nav-menu">%3$s</ul>',
              'depth'           => 1,
            ] ); ?>
      </nav>
      <!-- /.nav -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.header-bottom -->
  <div class="dropdown-menu">
    <div class="container">
      <div class="dropdown-menu__wrapper">
        <a href="#" class="person-room dropdown-menu__person-room">
          <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/person.svg" alt="User" class="fit-img person-room__image">
          <span class="person-room__text dropdown-menu__person-room-text">Sign In</span>
        </a>
        <!-- /.dropdown-menu__person-room -->
        <form action="#" class="search dropdown-menu__search">
          <button type="submit" class="search__button"><img class="fit-img" src="<?php echo bloginfo('template_url');?>/assets/img/icons/search.svg"
              alt="Search"></button>
          <input class="search__input" type="search" placeholder="Search">
        </form>
        <!-- /.dropdown-menu__search -->
        <div class="menu header__menu">
          <div class="menu__list header__list">
            <h3 class="menu__title header__title">News</h3>

            <?php wp_nav_menu( [
              'theme_location'  => 'header',
              'menu'            => 'News', 
              'container'       => false, 
              'menu_class'      => 'menu__ul', 
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'items_wrap'      => '<ul class="menu__ul">%3$s</ul>',
              'depth'           => 1,
            ] ); ?>

          </div>
          <!-- /.menu__list header__list -->
          <div class="menu__list header__list">
            <h3 class="menu__title header__title">Arts</h3>
            
            <?php wp_nav_menu( [
              'theme_location'  => 'header',
              'menu'            => 'Arts', 
              'container'       => false, 
              'menu_class'      => 'menu__ul', 
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'items_wrap'      => '<ul class="menu__ul">%3$s</ul>',
              'depth'           => 1,
            ] ); ?>

          </div>
          <!-- /.menu__list header__list -->
          <div class="menu__list header__list">
            <h3 class="menu__title header__title">Travel</h3>
            
            <?php wp_nav_menu( [
              'theme_location'  => 'header',
              'menu'            => 'Travel', 
              'container'       => false, 
              'menu_class'      => 'menu__ul', 
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'items_wrap'      => '<ul class="menu__ul">%3$s</ul>',
              'depth'           => 1,
            ] ); ?>

          </div>
          <!-- /.menu__list header__list -->
          <div class="menu__list header__list">
            <h3 class="menu__title header__title">Sports</h3>
            
            <?php wp_nav_menu( [
              'theme_location'  => 'header',
              'menu'            => 'Sports', 
              'container'       => false, 
              'menu_class'      => 'menu__ul', 
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'items_wrap'      => '<ul class="menu__ul">%3$s</ul>',
              'depth'           => 1,
            ] ); ?>

          </div>
          <!-- /.menu__list header__list -->
          <div class="menu__list header__list">
            <h3 class="menu__title header__title">Tech</h3>
            
            <?php wp_nav_menu( [
              'theme_location'  => 'header',
              'menu'            => 'Tech', 
              'container'       => false, 
              'menu_class'      => 'menu__ul', 
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'items_wrap'      => '<ul class="menu__ul">%3$s</ul>',
              'depth'           => 1,
            ] ); ?>

          </div>
          <!-- /.menu__list header__list -->
          <div class="menu__list header__list">
            <h3 class="menu__title header__title">Moneys</h3>
            <?php wp_nav_menu( [
              'theme_location'  => 'header',
              'menu'            => 'Moneys', 
              'container'       => false, 
              'menu_class'      => 'menu__ul', 
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'items_wrap'      => '<ul class="menu__ul">%3$s</ul>',
              'depth'           => 1,
            ] ); ?>

          </div>
          <!-- /.menu__list header__list -->
        </div>
        <!-- /.header__menu -->
      </div>
      <!-- /.dropdown-menu__wrapper -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.dropdown-menu -->

  <!--  -->
</header>
<!-- /.header -->