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
          <span class="initial-subscription__price">3 month for $19</span>
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
        <span class="header-middle__text">Boston and New York Bear Brunt</span>
      </div>
      <!-- /.header-middle__logo-block -->
      <a href="index.html" class="logo header-middle__logo">
        <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/logo.svg" alt="Universal" class="fit-img">
      </a>
      <!-- /.logo -->
      <div class="header-middle__information-block">
        <span class="date">Monday, January 1, 2018</span>
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
        <a href="#" class="btnhover header__link">News</a>
        <a href="#" class="btnhover header__link">Opinion</a>
        <a href="#" class="btnhover header__link">Science</a>
        <a href="#" class="btnhover header__link">Life</a>
        <a href="#" class="btnhover header__link">Travel</a>
        <a href="#" class="btnhover header__link">Moneys</a>
        <a href="#" class="btnhover header__link">Art & Design</a>
        <a href="#" class="btnhover header__link">Sports</a>
        <a href="#" class="btnhover header__link">People</a>
        <a href="#" class="btnhover header__link">Health</a>
        <a href="#" class="btnhover header__link">Education</a>
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
            <ul class="menu__ul">
              <li class="menu__item header__item"><a href="#">Nation</a></li>
              <li class="menu__item header__item"><a href="#">World</a></li>
              <li class="menu__item header__item"><a href="#">Politics</a></li>
              <li class="menu__item header__item"><a href="#">Solar Eclipse</a></li>
            </ul>
          </div>
          <!-- /.menu__list header__list -->
          <div class="menu__list header__list">
            <h3 class="menu__title header__title">Arts</h3>
            <ul class="menu__ul">
              <li class="menu__item header__item"><a href="#">Art & Design</a></li>
              <li class="menu__item header__item"><a href="#">Movies</a></li>
              <li class="menu__item header__item"><a href="#">People</a></li>
              <li class="menu__item header__item"><a href="#">Video: Arts</a></li>
              <li class="menu__item header__item"><a href="#">Theater</a></li>
            </ul>
          </div>
          <!-- /.menu__list header__list -->
          <div class="menu__list header__list">
            <h3 class="menu__title header__title">Travel</h3>
            <ul class="menu__ul">
              <li class="menu__item header__item"><a href="#">Destinations</a></li>
              <li class="menu__item header__item"><a href="#">Flights</a></li>
              <li class="menu__item header__item"><a href="#">Business Travel</a></li>
            </ul>
          </div>
          <!-- /.menu__list header__list -->
          <div class="menu__list header__list">
            <h3 class="menu__title header__title">Sports</h3>
            <ul class="menu__ul">
              <li class="menu__item header__item"><a href="#">Olympics</a></li>
              <li class="menu__item header__item"><a href="#">Motor Sports</a></li>
              <li class="menu__item header__item"><a href="#">Volleyball</a></li>
              <li class="menu__item header__item"><a href="#">MMA</a></li>
              <li class="menu__item header__item"><a href="#">Cycling</a></li>
            </ul>
          </div>
          <!-- /.menu__list header__list -->
          <div class="menu__list header__list">
            <h3 class="menu__title header__title">Tech</h3>
            <ul class="menu__ul">
              <li class="menu__item header__item"><a href="#">Tech</a></li>
              <li class="menu__item header__item"><a href="#">Tech Columnists</a></li>
              <li class="menu__item header__item"><a href="#">Tech Reviews</a></li>
              <li class="menu__item header__item"><a href="#">Talking Tech</a></li>
            </ul>
          </div>
          <!-- /.menu__list header__list -->
          <div class="menu__list header__list">
            <h3 class="menu__title header__title">Moneys</h3>
            <ul class="menu__ul">
              <li class="menu__item header__item"><a href="#">Markets</a></li>
              <li class="menu__item header__item"><a href="#">Business</a></li>
              <li class="menu__item header__item"><a href="#">Personal Finance</a></li>
              <li class="menu__item header__item"><a href="#">Retirement</a></li>
              <li class="menu__item header__item"><a href="#">Careers</a></li>
            </ul>
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